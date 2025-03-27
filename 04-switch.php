<?php

    

    $membership = "gold";
    $totalAmount = 200;
    $discount = 0;

    switch ($membership) {

        case "silver":
            $discount = 0.05 * $totalAmount;
            break;

        case "gold":
            $discount = 0.10 * $totalAmount;
            break;
        case "platinum":

            $discount = 0.15 * $totalAmount;
            break;

            default:
            $discount = 0;
    }

    $finalAmount = $totalAmount - $discount;


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Conditionals</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="flex flex-col justify-center items-center gap-10 bg-blue-300 h-screen w-screen">
        <h1 class="text-6xl font-medium">PHP Switch</h1>

        <h3 class="text-4xl font-bold">
            Membership: <?= $membership ?>
        </h3>
        <h3 class="text-4xl font-bold">
            Total Amount: <?= $totalAmount ?>
        </h3>
        <h3 class="text-4xl font-bold">
            Discount Applied: <?= $discount ?>
        </h3>
        <h3 class="text-4xl font-bold">
            Final Price to Pay: <?= $finalAmount ?>
        </h3>
    </div>
</body>
</html>