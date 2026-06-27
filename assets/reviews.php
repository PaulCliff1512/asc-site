<?php
/**
 * reviews.php
 * Renders Google reviews for a given depot.
 */

require_once __DIR__ . '/get-reviews.php';

function asc_render_reviews_block($depotKey)
{
    $reviews = asc_get_google_reviews($depotKey, 5);

    if (!$reviews || !is_array($reviews)) {
        echo '<p class="text-center">Reviews are temporarily unavailable.</p>';
        return;
    }

    echo '<div class="row justify-content-center g-4">';

    foreach ($reviews as $review) {
        $author = htmlspecialchars($review['author_name'] ?? 'Customer');
        $rating = intval($review['rating'] ?? 5);
        $text   = htmlspecialchars($review['text'] ?? '');
        $time   = htmlspecialchars($review['relative_time_description'] ?? '');

        echo '<div class="col-md-4">
                <div class="review-card p-3 shadow-sm h-100">
                    <h5 class="fw-bold">' . $author . '</h5>
                    <p class="text-warning mb-1">';

        for ($i = 0; $i < $rating; $i++) {
            echo '★';
        }

        echo    '</p>
                    <p>' . $text . '</p>
                    <small class="text-muted">' . $time . '</small>
                </div>
              </div>';
    }

    echo '</div>';
}