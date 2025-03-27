<?php


    $nickname = null;
    $realName = 'John';

    $displayName = $nickname ?? $realName;

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
        <h1 class="text-6xl font-medium">PHP Null Coalescing</h1>

        <h3 class="text-4xl font-bold">
            Display Name: <?= $displayName ?>
        </h3>
    </div>
</body>
</html>