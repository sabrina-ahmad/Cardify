<?php
// Optional: Start session and check if user is logged in
// session_start();
// if (!isset($_SESSION['user_id'])) {
//     header('Location: login.php');
//     exit();
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - Cardify Health</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/colors.css" />

    <style>
        .dashboard-section {
            padding: 60px 0;
        }

        .card {
            border-radius: 0.5rem;
        }
    </style>
</head>

<body>

    <?php include("../includes/header.php") ?>

    <section class="dashboard-section bg-light">
        <div class="container">
            <h2 class="mb-4 text-center">Welcome to Your Dashboard</h2>

            <div class="row g-4">
                <!-- Card: Book Appointment -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">Book New Appointment</h5>
                            <p class="card-text">Find the right doctor and book your next visit.</p>
                            <a href="appointment.php" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>

                <!-- Card: My Appointments -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">My Appointments</h5>
                            <p class="card-text">View your upcoming and past appointments.</p>
                            <a href="appointments.php" class="btn btn-outline-primary">View Appointments</a>
                        </div>
                    </div>
                </div>

                <!-- Card: Profile -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">My Profile</h5>
                            <p class="card-text">Update your personal information and preferences.</p>
                            <a href="profile.php" class="btn btn-outline-secondary">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Optional: Quick Summary -->
            <div class="mt-5">
                <h4 class="mb-3">Upcoming Appointment</h4>
                <div class="card shadow-sm">
                    <div class="card-body">
                        <p><strong>Date:</strong> Sept 10, 2025</p>
                        <p><strong>Time:</strong> 11:00 AM</p>
                        <p><strong>Doctor:</strong> Dr. Sarah Johnson</p>
                        <p><strong>Department:</strong> Cardiology</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php include("../includes/footer.php") ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
        </script>
</body>

</html>