<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Book MOT or Service Online | Auto Safety Centre</title>
    <meta name="description" content="Book your MOT or car service online with Auto Safety Centre. Choose your nearest depot and get an instant price through our Book My Garage online booking widget.">
    <link rel="canonical" href="https://autosafetycentre.com/booking.php">

    <meta property="og:title" content="Book MOT or Service Online | Auto Safety Centre">
    <meta property="og:description" content="Book your MOT or car service online with Auto Safety Centre. Choose your depot and get an instant price.">
    <meta property="og:url" content="https://autosafetycentre.com/booking.php">
    <meta property="og:type" content="website">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/widget.css" rel="stylesheet">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "AutoRepair",
      "name": "Auto Safety Centre Online Booking",
      "url": "https://autosafetycentre.com/booking.php",
      "areaServed": [
        "St Helens",
        "Haydock",
        "Widnes",
        "Prescot",
        "Ormskirk"
      ],
      "serviceType": [
        "MOT testing",
        "Car servicing",
        "Vehicle repairs",
        "Tyres"
      ]
    }
    </script>
</head>

<body>
<!-- Added booking.php as a dedicated Book My Garage widget page for all booking calls to action. -->

<!-- FLOATING BRANCHES BLOCK -->
<div class="position-fixed branch-column" style="top:140px; left:10px; z-index:1000;">
    <div class="bg-light p-3 shadow rounded text-center">
        <strong>Branches</strong><br><br>
        <a href="tel:01744300104" class="text-dark d-block">St Helens: 01744 300104</a>
        <a href="tel:01744300103" class="text-dark d-block">Haydock: 01744 300103</a>
        <a href="tel:01515320201" class="text-dark d-block">Widnes: 0151 532 0201</a>
        <a href="tel:01515320532" class="text-dark d-block">Prescot: 0151 532 0532</a>
        <a href="tel:01695310106" class="text-dark d-block">Ormskirk: 01695 310106</a>
    </div>
</div>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">Auto Safety Centre</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="mot.php">MOT</a></li>
                <li class="nav-item"><a class="nav-link" href="tyres.php">Tyres</a></li>
                <li class="nav-item"><a class="nav-link" href="servicing.php">Servicing</a></li>
                <li class="nav-item"><a class="nav-link" href="repairs.php">Repairs</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="depotsDropdown" role="button" data-bs-toggle="dropdown">
                        Depots
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="haydock.php">Haydock</a></li>
                        <li><a class="dropdown-item" href="ormskirk.php">Ormskirk</a></li>
                        <li><a class="dropdown-item" href="prescot.php">Prescot</a></li>
                        <li><a class="dropdown-item" href="sthelens.php">St Helens</a></li>
                        <li><a class="dropdown-item" href="widnes.php">Widnes</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- HERO -->
<section class="hero text-center" style="background-image:
        linear-gradient(rgba(0,0,0,0.58), rgba(0,0,0,0.58)),
        url('images/mechanic1.webp');">
    <div class="container">
        <h1 class="display-4 fw-bold">Book Your MOT or Service Online</h1>
        <p class="lead mt-3">Choose your nearest Auto Safety Centre depot and get an instant price 24/7.</p>
    </div>
</section>

<!-- BOOKING WIDGET SECTION -->
<section class="pt-5 pb-5 booking-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-10 text-center">

                <!-- Added clear page heading above the Book My Garage widget. -->
                <h2 class="fw-bold mb-3">Book Online 24/7</h2>
                <p class="lead mb-4">
                    Enter your registration, choose your preferred depot and book your MOT or service online.
                </p>

                <!-- Reused the existing Book My Garage widget from mot.php. -->
                <div id="tag" class="booking-widget-wrapper">
                    <iframe
                        src="https://api.bookmygarage.com/widget/multi/9/?a=transparent&b=%230f61ab&c=%23fff&f=%233d79af&d=%233d79af&e=%233d79af"
                        class="booking-widget-iframe"
                        title="Auto Safety Centre online booking widget">
                    </iframe>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SUPPORTING CONTENT -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="service-card">
                    <h4 class="fw-bold">Choose Your Depot</h4>
                    <p>Select St Helens, Haydock, Widnes, Prescot or Ormskirk directly inside the booking widget.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card">
                    <h4 class="fw-bold">Instant Pricing</h4>
                    <p>Get a clear price before booking, with options for MOT testing and servicing.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card">
                    <h4 class="fw-bold">Book Any Time</h4>
                    <p>The online booking system is available 24/7, so you can book when it suits you.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="text-white py-4">
    <div class="container text-center">
        <p class="mb-1">© Auto Safety Centre 2025</p>
        <p class="small">MOT | Tyres | Servicing | Repairs</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
