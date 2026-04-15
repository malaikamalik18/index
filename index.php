<<<<<<< HEAD
=======
<?php
// Step 1: Create variables
$phoneModel = "iPhone 13";
$isImported = true;

// Step 2: Apply PTA Tax using if...else
if ($isImported == true) {
    $tax = $basePrice * 0.20; // 20% tax
    $finalPrice = $basePrice + $tax;
} else {
    $finalPrice = $basePrice;
}

// Step 3: Print output with styling
echo "<h1>The final price for the $phoneModel is Rs. $finalPrice</h1>";
?>
>>>>>>> c314e1f35baba29bafa8e2979f9e727cb1e2ab23
