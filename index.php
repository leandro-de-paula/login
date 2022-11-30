<?php 
session_start();

if (!isset($_SESSION['user'])){
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <header>
        <h1>Login</h1>
    </header>
    <main>
        <p>Welcome: <strong><?= $_SESSION['user']; ?></strong></p>
        <div>
            <a href="logout.php" >Go out</a>
        </div>
    </main>
    <footer>
        version 0.0 <?= date('Y'); ?>
    </footer>
</body>
</html>