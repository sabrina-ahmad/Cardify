<?php
// session_start();
// Check if user is authorized to manage patients
// if (!isset($_SESSION['admin_id'])) {
//     header('Location: login.php');
//     exit();
// }

// Example static patient data - replace with your DB query
$patients = [
    [
        'id' => 1,
        'name' => 'John Doe',
        'email' => 'john.doe@example.com',
        'phone' => '555-1234',
        'dob' => '1990-01-15',
        'gender' => 'Male'
    ],
    [
        'id' => 2,
        'name' => 'Jane Smith',
        'email' => 'jane.smith@example.com',
        'phone' => '555-5678',
        'dob' => '1985-05-23',
        'gender' => 'Female'
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Manage Patients - Cardify Health</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/colors.css" />
</head>

<body>
    <?php include("../includes/header.php") ?>

    <section class="container my-5">
        <h2 class="mb-4">Manage Patients</h2>

        <div class="mb-3 text-end">
            <a href="add_patient.php" class="btn btn-success">Add New Patient</a>
        </div>

        <table class="table table-striped table-hover align-middle">
            <thead class="table-primary">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($patients as $patient): ?>
                    <tr>
                        <td><?= htmlspecialchars($patient['id']) ?></td>
                        <td><?= htmlspecialchars($patient['name']) ?></td>
                        <td><?= htmlspecialchars($patient['email']) ?></td>
                        <td><?= htmlspecialchars($patient['phone']) ?></td>
                        <td><?= htmlspecialchars($patient['dob']) ?></td>
                        <td><?= htmlspecialchars($patient['gender']) ?></td>
                        <td>
                            <a href="edit_patient.php?id=<?= $patient['id'] ?>"
                                class="btn btn-sm btn-outline-primary">Edit</a>
                            <a href="delete_patient.php?id=<?= $patient['id'] ?>" class="btn btn-sm btn-outline-danger"
                                onclick="return confirm('Are you sure you want to delete this patient?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>

                <?php if (empty($patients)): ?>
                    <tr>
                        <td colspan="7" class="text-center">No patients found.</td>
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