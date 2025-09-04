<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book Appointment - Cardify Health</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/colors.css" />

    <style>
        .appointment-section {
            padding: 80px 0;
        }

        .form-container {
            max-width: 700px;
            margin: 0 auto;
        }
    </style>
</head>

<body>

    <?php include("../includes/header.php") ?>

    <section class="appointment-section bg-light">
        <div class="container">
            <div class="form-container bg-white p-5 rounded shadow-sm">
                <h2 class="mb-4 text-center">Book an Appointment</h2>

                <form action="process-appointment.php" method="POST">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="fullName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="fullName" name="full_name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                        </div>
                        <div class="col-md-6">
                            <label for="department" class="form-label">Department</label>
                            <select class="form-select" id="department" name="department" required>
                                <option value="">Choose...</option>
                                <option>General Medicine</option>
                                <option>Cardiology</option>
                                <option>Dermatology</option>
                                <option>Neurology</option>
                                <option>Orthopedics</option>
                                <option>Pediatrics</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="doctor" class="form-label">Preferred Doctor (optional)</label>
                        <input type="text" class="form-control" id="doctor" name="doctor">
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="date" class="form-label">Preferred Date</label>
                            <input type="date" class="form-control" id="date" name="date" required>
                        </div>
                        <div class="col-md-6">
                            <label for="time" class="form-label">Preferred Time</label>
                            <input type="time" class="form-control" id="time" name="time" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="reason" class="form-label">Reason for Visit</label>
                        <textarea class="form-control" id="reason" name="reason" rows="4"
                            placeholder="Describe your concern..." required></textarea>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Confirm Appointment</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <?php include("../includes/footer.php") ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJr