<?php
$students = [
    ['name' => 'Alice', 'score' => '82'],
    ['name' => 'Bob', 'score' => '80'],
    ['name' => 'Jack', 'score' => '92'],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Foreach Loop</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="flex flex-col justify-center items-center gap-10 bg-blue-300 h-screen w-screen">
        <h1 class="text-6xl font-medium">PHP Foreach Loop</h1>

        <div class="bg-white p-6 rounded-lg shadow-lg border border-black">
            <h2 class="text-2xl font-semibold mb-4">Student Scores</h2>
            <ul class="list-disc list-inside">
                <?php foreach ($students as $student): ?>
                    <li class="text-lg"><?= $student['name'] ?> scored <?= $student['score'] ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</body>
</html>
