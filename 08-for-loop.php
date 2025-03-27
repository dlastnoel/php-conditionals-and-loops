<?php


    $cart = [
        ["name" => "Laptop", "price" => 800, "quantity" => 1],
        ["name" => "Mouse", "price" => 20, "quantity" => 2],
        ["name" => "Keyboard", "price" => 50, "quantity" => 1],
    ];

    $totalPrice = 0;


    for ($i = 0; $i < count($cart); $i++) {

        $itemTotal = $cart[$i]["price"] * $cart[$i]["quantity"];
        $totalPrice += $itemTotal;
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
        <h1 class="text-6xl font-medium">PHP For Loop</h1>

        <h3 class="text-4xl font-bold">Cart Items</h3>
        <ul>
            <?for ($i = 0; $i < count($cart); $i++): ?>
                <li class="text-lg font-medium">
                    <?= $cart[$i]['name'] ?> @ <?= $cart[$i]['price'] ?> x <?=$cart[$i]['quantity'] ?>
                </li>
            <?endfor; ?>
        </ul>

        <h3 class="text-4xl font-bold">
            Total Price: <?= $totalPrice ?>
        </h3>
    </div>
</body>
</html>