<?php
    session_start();

    // Assuming we have a live database running behind the scenes.
    $maxAttempts = 3;
    $attempts = $_SESSION['attempts'] ?? 0; 
    $credentials = false;
    $username = 'johndoe';
    $password = 'password';
    $error = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && $attempts < $maxAttempts) {
        $inputUser = $_POST['username'] ?? '';
        $inputPass = $_POST['password'] ?? '';
        
        while ($credentials === false && $attempts < $maxAttempts) {
            if ($inputUser === $username && $inputPass === $password) {
                $credentials = true;
                $_SESSION['attempts'] = 0;

                break;
            } else {
                $attempts++;
                $_SESSION['attempts'] = $attempts;
                $error = "Invalid credentials. Attempts left: " . ($maxAttempts - $attempts);
                break;
            }
        }
    }

    if ($attempts >= $maxAttempts) {
        $error = "Too many failed attempts. Try again later.";
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
        <h1 class="text-6xl font-medium">PHP While Loop</h1>
        
        <form method="post" class="grid gap-2 w-72 p-10 border border-black rounded shadow-1g">
            <? if ($error): ?>
                <p class="text-red-600 text-center"> <?= htmlspecialchars($error) ?> </p>
            <? endif; ?>
            <? if (!$error && $credentials): ?>
                <p class="text-red-600 text-center"> Welcome! </p>
            <? endif; ?>
            <input 
                type="text"
                class="w-full p-3 border rounded"
                name="username" 
                placeholder="Username"
                required
            />
            <input 
                type="password"
                class="w-full p-3 border border-black rounded"
                name="password" 
                placeholder="Password"
                required
            />
            <input 
                type="submit"
                class="p-3 mt-3 font-medium border-none rounded bg-gray-500 text-gray-100 hover:cursor-pointer hover:bg-gray-600 transition-all duration-none" 
                value="Login"
                <?= $attempts >= $maxAttempts ? 'disabled' : '' ?>
            />
        </form>
    </div>
</body>
</html>