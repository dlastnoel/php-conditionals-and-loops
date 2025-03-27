<?php

    $age = 5;

    $output;

    if ($age >= 0 && $age <= 12) {
        $output = "Category: Child";
    } 
    
    else if ($age >= 13 && $age <= 17) {
        $output = "Category: Teen";
    } 
    
    else if ($age >= 18 && $age <= 59) {
        $output = "Category: Adult";
    } 
    
    else if ($age >= 60) {
        $output = "Category: Senior";
    } 
    
    else {
        $output = "Invalid age input.";
    }
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
        <h1 class="text-6xl font-medium">PHP If Else If</h1>

        <h3 class="text-4xl font-bold">
            <?= $output ; ?>
        </h3>
    </div>
</body>
</html>