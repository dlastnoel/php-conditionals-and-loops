<?php
$numbers = [7, 15, 23, 42, 56, 78, 91, 105]; 

$guess = $_POST['number'] ?? '';
$found = false;
$result = "";

if (!empty($guess) && is_numeric($guess)) {
    $index = 0;

    do {
        if ($numbers[$index] == $guess) {
            $result = "✅ Number found: " . $numbers[$index];
            $found = true;
            break;
        }
        $index++;
    } while ($index < count($numbers));

    if (!$found) {
        $result = "❌ Number not found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Do While Loop</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="flex flex-col justify-center items-center gap-10 bg-blue-300 h-screen w-screen">
        <h1 class="text-6xl font-medium">PHP Do While Loop</h1>
        
        <form method="post" class="grid gap-2 w-72 p-10 border border-black rounded shadow-lg bg-white">
            <input 
                type="number"
                class="w-full p-3 border rounded"
                name="number" 
                placeholder="Guess a number"
                required
            />
            <input 
                type="submit"
                class="p-3 mt-3 font-medium border-none rounded bg-gray-500 text-gray-100 hover:cursor-pointer hover:bg-gray-600 transition-all" 
                value="Search"
            />
        </form>

        <?php if (!empty($guess)): ?>
            <p class="text-xl font-medium bg-white p-3 rounded border border-black shadow">
                <?= $result ?>
            </p>
        <?php endif; ?>
    </div>
</body>
</html>
