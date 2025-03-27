<?php

    $x = 10;
    $output;

    if($x % 2 === 0) {

        $output = "$x is divisible by 2.";
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
        <h1 class="text-6xl font-medium">PHP If</h1>

        <h3 class="text-4xl font-bold">
            <?= $output ; ?>
        </h3>
    </div>
</body>
</html>