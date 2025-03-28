<?php
$books = [
    "El Filibusterismo", 
    "Noli Me Tangere", 
    "Ibong Adarna", 
    "Florante at Laura", 
    "How My Brother Leon Brought Home a Wife",
    "The First Voyage Around the World"
];

$search = $_POST['book'] ?? '';
$found = false;
$result = "";

if (!empty($search)) {
    $index = 0;
    
    while ($index < count($books)) {

        if (strcasecmp($books[$index], $search) === 0) {

            $result = "✅ Book found: " . $books[$index];
            $found = true;
            break;
        }
        
        $index++;
    }

    if (!$found) {
        $result = "❌ Book not found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP While Loop</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="flex flex-col justify-center items-center gap-10 bg-blue-300 h-screen w-screen">
        <h1 class="text-6xl font-medium">PHP While Loop</h1>
        
        <form method="post" class="grid gap-2 w-72 p-10 border border-black rounded shadow-lg bg-white">
            <input 
                type="text"
                class="w-full p-3 border rounded"
                name="book" 
                placeholder="Book Title"
                required
            />
            <input 
                type="submit"
                class="p-3 mt-3 font-medium border-none rounded bg-gray-500 text-gray-100 hover:cursor-pointer hover:bg-gray-600 transition-all" 
                value="Search"
            />
        </form>

        <?php if (!empty($search)): ?>
            <p class="text-xl font-medium bg-white p-3 rounded border border-black shadow">
                <?= $result ?>
            </p>
        <?php endif; ?>
    </div>
</body>
</html>
