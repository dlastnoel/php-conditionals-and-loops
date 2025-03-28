<?php

$endNumber = $_POST['endNumber'] ?? 10;
$result = "";

if (!empty($endNumber) && is_numeric($endNumber)) {
    $result .= "<ul class='list-disc list-inside text-lg'>";
    for ($i = 1; $i <= 100; $i++) {
        $result .= "<li>Number: $i</li>";
        if ($i == $endNumber) {
            $result .= "<li class='text-red-600 font-bold'>Loop stopped at $i</li>";
            break;
        }
    }
    $result .= "</ul>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loop with Break</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="flex flex-col justify-center items-center gap-10 bg-blue-300 h-screen w-screen">
        <h1 class="text-5xl font-medium">PHP Break</h1>
        
        <form method="post" class="grid gap-2 w-72 p-6 border border-black rounded shadow-lg bg-white">
            <input 
                type="number"
                class="w-full p-3 border rounded"
                name="endNumber" 
                placeholder="Enter end number"
                required
            />
            <input 
                type="submit"
                class="p-3 mt-3 font-medium border-none rounded bg-gray-500 text-gray-100 hover:cursor-pointer hover:bg-gray-600 transition-all" 
                value="Run Loop"
            />
        </form>

        <div class="bg-white p-4 rounded border border-black shadow">
            <?= $result ?>
        </div>
    </div>
</body>
</html>
