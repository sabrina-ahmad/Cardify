<?php
// session_start();
// Check if user is admin or authorized to manage doctors
// if (!isset($_SESSION['admin_id'])) {
//     header('Location: login.php');
//     exit();
// }

// Example static data for demo - replace with database fetch!
$doctors = [
    [
        'id' => 1,
        'name' => 'Dr. Sarah Johnson',
        'specialty' => 'Cardiology',
        'email' => 'sarah.johnson@example.com',
        'phone' => '123-456-7890'
    ],
    [
        'id' => 2,
        'name' => 'Dr. Mike Brown',
        'specialty' => 'Dermatology',
        'email' => 'mike.brown@example.com',
        'phone' => '987-654-3210'
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Manage Doctors - Cardify Health</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/colors.css" />
</head>

<body>
    <?php include("../includes/header.php") ?>

    <section class="container my-5">
        <h2 class="mb-4">Manage Doctors</h2>

        <div class="mb-3 text-end">
            <a href="add_doctor.php" class="btn btn-success">Add New Doctor</a>
        </div>

        <table class="table table-striped table-hover align-middle">
            <thead class="table-primary">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Specialty</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($doctors as $doc): ?>
                    <tr>
                        <td><?= htmlspecialchars($doc['id']) ?></td>
                        <td><?= htmlspecialchars($doc['name']) ?></td>
                        <td><?= htmlspecialchars($doc['specialty']) ?></td>
                        <td><?= htmlspecialchars($doc['email']) ?></td>
                        <td><?= htmlspecialchars($doc['phone']) ?></td>
                        <td>
                            <a href="edit_doctor.php?id=<?= $doc['id'] ?>" class="btn btn-sm btn-outline-primary">Edit</a>
                            <a href="delete_doctor.php?id=<?= $doc['id'] ?>" class="btn btn-sm btn-outline-danger"
                                onclick="return confirm('Are you sure you want to delete this doctor?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>

                <?php if (empty($doctors)): ?>
                    <tr>
                        <td colspan="6" class="text-center">No doctors found.</td>
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