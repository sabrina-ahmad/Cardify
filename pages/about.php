<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us - Cardify Health</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/colors.css" />

    <style>
        .about-hero {
            background-color: #f5f9ff;
            padding: 80px 0;
        }

        .about-hero h1 {
            font-weight: 700;
        }

        .section {
            padding: 60px 0;
        }

        .section-title {
            font-weight: 600;
            margin-bottom: 30px;
        }
    </style>
</head>

<body>

    <?php include("../includes/header.php") ?>

    <!-- Hero Section -->
    <section class="about-hero text-center">
        <div class="container">
            <h1 class="display-4">About Cardify Health</h1>
            <p class="lead mt-3">
                Simplifying healthcare access by helping you find the right doctors, clinics, and hospitals — anytime,
                anywhere.
            </p>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="section bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="../assets/images/hospital-team.jpg" alt="Our Team" class="img-fluid rounded shadow-sm">
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title">Our Mission</h2>
                    <p>
                        At <strong>Cardify Health</strong>, our mission is to make healthcare accessible and
                        stress-free. We
                        understand how challenging it can be to find the right doctor or hospital, especially in urgent
                        situations.
                    </p>
                    <p>
                        Our platform connects patients with qualified medical professionals in just a few clicks —
                        enabling faster
                        appointments, trusted care, and better outcomes.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- What We Offer Section -->
    <section class="section bg-light">
        <div class="container">
            <h2 class="section-title text-center">What We Offer</h2>
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <div class="p-4 border rounded shadow-sm h-100">
                        <h5>Doctor Appointments</h5>
                        <p>Book appointments with general physicians and specialists near you — instantly and securely.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="p-4 border rounded shadow-sm h-100">
                        <h5>Hospital Finder</h5>
                        <p>Search by location, specialty, or rating to find the right hospital or clinic that fits your
                            needs.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="p-4 border rounded shadow-sm h-100">
                        <h5>Trusted Reviews</h5>
                        <p>Read verified reviews from real patients to make informed decisions about your healthcare
                            provider.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Trust Us Section -->
    <section class="section bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
                    <img src="../assets/images/trust.jpg" alt="Trust and Safety" class="img-fluid rounded shadow-sm">
                </div>
                <div class="col-lg-6 order-lg-1">
                    <h2 class="section-title">Why Trust Cardify Health?</h2>
                    <ul class="list-unstyled">
                        <li class="mb-2">✅ Verified doctors and clinics</li>
                        <li class="mb-2">✅ Transparent booking process</li>
                        <li class="mb-2">✅ Real-time availability and updates</li>
                        <li class="mb-2">✅ Privacy-focused and secure</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include("../includes/footer.php") ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
        </script>
</body>

</html>