<?php
/**
 * get-reviews.php
 * Fetches Google reviews for all depots with caching.
 */

function asc_get_depot_config()
{
    return [
        'sthelens' => [
            'label'    => 'St Helens',
            'place_id' => 'ChIJIQrqo4Mbe0gRu4lkNHqFqzI',
        ],
        'haydock' => [
            'label'    => 'Haydock',
            'place_id' => 'ChIJsS0WnTUbe0gR0Yvdey0JjuE',
        ],
        'widnes' => [
            'label'    => 'Widnes',
            'place_id' => 'ChIJaRe_ivgde0gRJNgsZBB7C60',
        ],
        'prescot' => [
            'label'    => 'Prescot',
            'place_id' => 'ChIJHXCdu6Mee0gRjWsHJZuPXSo',
        ],
        'ormskirk' => [
            'label'    => 'Ormskirk',
            'place_id' => 'ChIJG9Qo4c0Xe0gRIkAHvIlY7Dg',
        ],
    ];
}

function asc_get_google_reviews($depotKey, $limit = 5)
{
    $config = asc_get_depot_config();

    if (!isset($config[$depotKey])) {
        return [];
    }

    $placeId = $config[$depotKey]['place_id'];

    if (!$placeId) {
        return [];
    }

    $cacheFile = __DIR__ . "/cache/reviews_{$depotKey}.json";
    $cacheTime = 60 * 60 * 24; // 24 hours

    // Return cached version if fresh
    if (file_exists($cacheFile) && (time() - filemtime($cacheFile) < $cacheTime)) {
        $cached = json_decode(file_get_contents($cacheFile), true);
        return $cached ?: [];
    }

    // Fetch from Google
    $apiKey = 'AIzaSyAqcIYvtsp7d2QLGrc8DrLOjxmVKZcd1JU';

    $url = "https://maps.googleapis.com/maps/api/place/details/json?place_id={$placeId}&fields=reviews&key={$apiKey}";

    $response = file_get_contents($url);

    if (!$response) {
        return [];
    }

    $data = json_decode($response, true);

    if (!isset($data['result']['reviews'])) {
        return [];
    }

    // Raw reviews from Google
    $reviews = $data['result']['reviews'];

    // ⭐ FILTER: Only keep 4★ and 5★ reviews
    $reviews = array_filter($reviews, function($review) {
        return isset($review['rating']) && $review['rating'] >= 4;
    });

    // ⭐ SORT newest first (Google sometimes returns random order)
    usort($reviews, function($a, $b) {
        return ($b['time'] ?? 0) <=> ($a['time'] ?? 0);
    });

    // ⭐ Re-index and limit to 5 reviews
    $reviews = array_slice(array_values($reviews), 0, $limit);

    // Save filtered reviews to cache
    file_put_contents($cacheFile, json_encode($reviews));

    return $reviews;
}