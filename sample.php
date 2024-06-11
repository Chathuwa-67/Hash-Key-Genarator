<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Hashing</title>
</head>
<body>
    <h1>Password Hashing Interface</h1>
    <form method="POST" action="">
        <label for="password">Enter Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Hash Password</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $password = $_POST['password'];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        echo '<h2>Hashed Password:</h2>';
        echo '<p>' . htmlspecialchars($hashed_password) . '</p>';
    }
    ?>
</body>
</html>
