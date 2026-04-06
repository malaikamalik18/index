<?php
function checkVotingAge() {

    $name = $_POST["full_name"] ?? "";
    $birthYear = $_POST["birth_year"] ?? "";

    $currentYear = date("Y");

    if ($name && $birthYear) {

        $age = $currentYear - $birthYear;

        if ($age >= 18) {
            echo "<h2 style='color: green; text-align: center;'>Verification Successful, $name</h2>";
            echo "<p style='text-align: center;'>Your Age: $age</p>";
        } else {
            echo "<h2 style='color: red; text-align: center;'>Access Denied: Under 18</h2>";
            echo "<p style='text-align: center;'>Your Age: $age</p>";
        }

    } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h3 style='color: orange; text-align: center;'>Please fill all fields!</h3>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>NADRA Age Verification</title>
</head>
<body style="text-align:center; font-family: Arial;">

    <h1>NADRA Verification System</h1>

    <form method="POST">
        <input type="text" name="full_name" placeholder="Enter Full Name" required><br><br>
        <input type="number" name="birth_year" placeholder="Enter Birth Year" required><br><br>
        <button type="submit">Check Eligibility</button>
    </form>

    <br>

    <?php checkVotingAge(); ?>

</body>
</html>