<?php

$cart = [
    "Laptop" => "In Stock",
    "Mouse" => "Out of Stock",
    "Keyboard" => "In Stock",
    "Monitor" => "Out of Stock",
    "Phone" => "In Stock"
];

$result = "<ul class='list-disc list-inside text-lg'>";
foreach ($cart as $item => $status) {
    if ($status === "Out of Stock") {
        continue; // Skip out-of-stock items
    }
    $result .= "<li>✅ Adding <strong>$item</strong> to your order.</li>";
}
$result .= "</ul>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Filter In-Stock Items</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="flex flex-col justify-center items-center gap-10 bg-blue-300 h-screen w-screen">
        <h1 class="text-5xl font-medium">PHP Filter In-Stock Items</h1>

        <div class="bg-white p-6 rounded border border-black shadow-lg">
            <h2 class="text-2xl font-bold mb-4">Items in Your Cart:</h2>
            <?= $result ?>
        </div>
    </div>
</body>
</html>
