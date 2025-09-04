<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us - Cardify Health</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/colors.css" />

    <style>
        .contact-hero {
            background-color: #f5f9ff;
            padding: 60px 0;
        }

        .section {
            padding: 60px 0;
        }

        .form-control {
            border-radius: 0.375rem;
        }
    </style>
</head>

<body>

    <?php include("../includes/header.php") ?>

    <!-- Hero -->
    <section class="contact-hero text-center">
        <div class="container">
            <h1 class="display-4">Get in Touch</h1>
            <p class="lead mt-3">
                Have questions or need help? Our team is here to support you.
            </p>
        </div>
    </section>

    <!-- Contact Form + Info -->
    <section class="section bg-white">
        <div class="container">
            <div class="row g-5">
                <!-- Contact Form -->
                <div class="col-md-6">
                    <h3>Send Us a Message</h3>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Full Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="email" class="form-control" id="email" placeholder="email@example.com"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" placeholder="Subject">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="How can we help you?"
                                required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary px-4">Submit</button>
                    </form>
                </div>

                <!-- Contact Info -->
                <div class="col-md-6">
                    <h3>Contact Information</h3>
                    <p class="mb-2"><strong>Customer Support:</strong> support@cardifyhealth.com</p>
                    <p class="mb-2"><strong>Phone:</strong> +1 (800) 123-4567</p>
                    <p class="mb-4"><strong>Address:</strong><br>
                        Cardify Health HQ<br>
                        123 Health Street,<br>
                        New York, NY 10001
                    </p>

                    <h5>Working Hours</h5>
                    <p>
                        Monday – Friday: 9:00 AM – 6:00 PM<br>
                        Saturday: 10:00 AM – 4:00 PM<br>
                        Sunday: Closed
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional Map -->
    <section class="pb-5">
        <div class="container">
            <div class="ratio ratio-16x9 rounded overflow-hidden shadow-sm">
                <iframe src="https://www.google.com/maps?q=New+York,+NY,+USA&output=embed" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

    <?php include("../includes/footer.php") ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
        </script>
</body>

</html>