<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NADRA e-Portal Verification</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="card p-4 shadow">
        <h2 class="text-center mb-4">NADRA e-Portal</h2>

        <!-- FORM -->
        <form action="verify.php" method="POST">

            <!-- Full Name -->
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="full_name" class="form-control" required>
            </div>

            <!-- Birth Year -->
            <div class="mb-3">
                <label class="form-label">Birth Year</label>
                <input type="number" name="birth_year" class="form-control" required>
            </div>

            <!-- Submit -->
            <button type="submit" class="btn btn-success w-100">Verify</button>

        </form>
    </div>
</div>

</body>
</html>
<?php

function checkVotingAge() {

    // Catch data from form
    $name = $_POST['full_name'];
    $birthYear = $_POST['birth_year'];

    // Current year
    $currentYear = 2026;

    // Calculate age
    $age = $currentYear - $birthYear;

    // Check age condition
    if ($age >= 18) {
        echo "<h2 style='color: green; text-align: center;'>Verification Successful, $name</h2>";
    } else {
        echo "<h2 style='color: red; text-align: center;'>Access Denied: Under 18</h2>";
    }
}

// Call function
checkVotingAge();

?>