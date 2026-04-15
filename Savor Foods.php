     <!DOCTYPE html>
<html lang="en">
<head>
    <title>Savor Foods Daily Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Savor Foods - Daily Sales Report</h2>

    <table class="table table-dark">
        <thead>
            <tr>
                <th>Food Item</th>
                <th>Quantity Sold</th>
            </tr>
        </thead>
        <tbody>

        <?php
        // Associative Array
        $dailySales = [
            "Chicken Pulao" => 450,
            "Zinger Burger" => 200,
            "Fries" => 150
        ];

        // foreach loop
        foreach ($dailySales as $food => $quantity) {
            echo "<tr>";
            echo "<td>$food</td>";
            echo "<td>$quantity</td>";
            echo "</tr>";
        }
        ?>

        </tbody>
    </table>
</div>

</body>
</html>