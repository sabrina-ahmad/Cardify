<?php
// session_start();
// Check if user is logged in and has permission to manage appointments
// if (!isset($_SESSION['user_id'])) {
//     header('Location: login.php');
//     exit();
// }

// For demo, static example data — replace with DB queries!
$appointments = [
    [
        'id' => 1,
        'patient_name' => 'John Doe',
        'doctor_name' => 'Dr. Sarah Johnson',
        'department' => 'Cardiology',
        'date' => '2025-09-10',
        'time' => '11:00 AM',
        'status' => 'Confirmed',
    ],
    [
        'id' => 2,
        'patient_name' => 'Jane Smith',
        'doctor_name' => 'Dr. Mike Brown',
        'department' => 'Dermatology',
        'date' => '2025-09-12',
        'time' => '2:00 PM',
        'status' => 'Pending',
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Manage Appointments - Cardify Health</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/colors.css" />
</head>

<body>

    <?php include("../includes/header.php") ?>

    <section class="container my-5 ">
        <h2 class="mb-5 mb-5 mt-5">Manage Appointments</h2>

        <table class="table table-striped table-hover align-middle">
            <thead class="table-primary">
                <tr>
                    <th>#</th>
                    <th>Patient</th>
                    <th>Doctor</th>
                    <th>Department</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($appointments as $appt): ?>
                    <tr>
                        <td><?= htmlspecialchars($appt['id']) ?></td>
                        <td><?= htmlspecialchars($appt['patient_name']) ?></td>
                        <td><?= htmlspecialchars($appt['doctor_name']) ?></td>
                        <td><?= htmlspecialchars($appt['department']) ?></td>
                        <td><?= htmlspecialchars($appt['date']) ?></td>
                        <td><?= htmlspecialchars($appt['time']) ?></td>
                        <td>
                            <?php if ($appt['status'] === 'Confirmed'): ?>
                                <span class="badge bg-success"><?= $appt['status'] ?></span>
                            <?php elseif ($appt['status'] === 'Pending'): ?>
                                <span class="badge bg-warning text-dark"><?= $appt['status'] ?></span>
                            <?php else: ?>
                                <span class="badge bg-secondary"><?= $appt['status'] ?></span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="edit_appointment.php?id=<?= $appt['id'] ?>"
                                class="btn btn-sm btn-outline-primary">Edit</a>
                            <a href="delete_appointment.php?id=<?= $appt['id'] ?>" class="btn btn-sm btn-outline-danger"
                                onclick="return confirm('Are you sure you want to delete this appointment?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>

                <?php if (empty($appointments)): ?>
                    <tr>
                        <td colspan="8" class="text-center">No appointments found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </section>

    <?php include("../includes/footer.php") ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>