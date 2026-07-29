<?php
$totalBudget = 1000.00;

$groceries     = 350.00;
$transport     = 200.00;
$entertainment = 100.00;

$totalExpenses = $groceries + $transport + $entertainment;
$remainingBalance = $totalBudget - $totalExpenses;

echo "Total Budget:     $" . number_format($totalBudget, 2) . "<br>";
echo "Total Expenses:   $" . number_format($totalExpenses, 2) . "<br>";
echo "Remaining:        $" . number_format($remainingBalance, 2) . "<br><br>";
?>

<?php 
    $age = 12;

if ($age <= 12) {
    echo "Child";
} elseif ($age >= 13 && $age <= 17) {
    echo "Teen";
} elseif ($age >= 18 && $age <= 64) {
    echo "Adult";
} else {
    echo "Senior";
}
?>

<br><br>

<?php
$principal = 10000.00;
$rate      = 5;
$time      = 3;

$interest    = ($principal * $rate * $time) / 100;
$totalAmount = $principal + $interest;

echo "Interest Earned: R" . number_format($interest, 2) . "<br>";
echo "Total Amount:    R" . number_format($totalAmount, 2) . "<br><br>";

?>

<?php

$age          = 24;
$isRegistered = true;

if ($age >= 18 && $age <= 35 && $isRegistered) {
    echo "Eligible to vote.";
} else {
    echo "Not eligible to vote.";
}

?> 

<br><br> 

<?php

$amount = 856.00;

if ($amount > 1000) {
    $discountRate = 0.10;
} elseif ($amount >= 500 && $amount <= 999) {
    $discountRate = 0.05;
} elseif ($amount >= 250 && $amount <= 499) {
    $discountRate = 0.02;
} else {
    $discountRate = 0.00;
}

$discountAmount = $amount * $discountRate;
$finalTotal     = $amount - $discountAmount;

echo "Original Amount: R" . number_format($amount, 2) . "<br>";
echo "Discount (" . ($discountRate * 100) . "%): R" . number_format($discountAmount, 2) . "<br>";
echo "Final Total: R" . number_format($finalTotal, 2) . "<br><br>";

?>