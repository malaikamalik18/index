<?php
// Step 1: Create variables
$phoneModel = "iPhone 13";
$basePrice = 150000;
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