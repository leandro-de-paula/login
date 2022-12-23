<?php
session_start();
$email = isset($_POST['email'])? $_POST['email']: null;
$password = isset($_POST['password'])? $_POST['password']: null;

if (isset($_POST['email'])){
    $users = [
        
        [
            "name" => "Leandro de Paula",
            "email" => "leandro@gmail.com.br",
            "password" => "123456"
        ],
        [
            "name" => "Evellyn Fontenele",
            "email" => "evellyn@gmail.com.br",
            "password" => "123456",
        ]
    ];

    foreach ($users as $user) {
        $emailValidated = $email === $user['email'];
        $passwordValidated = $password === $user['password'];

        if ($emailValidated && $passwordValidated) {
            $_SESSION['errors'] = null;
            $_SESSION['user'] = $user['name'];
            header('Location: index.php');
        }
        
    }

    if(!isset($_SESSION['user'])){
        $_SESSION['errors'] = ['Invalid Users/Password!'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>login</title>
</head>
<body>
  <header>
    <h1>login</h1>
  </header>
  <main>
    <?php if (isset($_SESSION['errors'])): ?>
            <div class="errors">
                <?php foreach ($_SESSION['errors'] as $error):?>
                    <p><?= $error ?></p>
                <?php endforeach ?>
            </div>
    <?php endif ?>
    <form action="#" method="post">
        <div>
            <!-- <label for="email">E-mail</label> -->
            <input type="email" name="email" id="email" placeholder="E-mail">
        </div>
        <div>
            <!-- <label for="password">Password</label> -->
            <input type="password" name="password" id="password" placeholder="Password">
        </div>
        <button class="btn">go</button>
    </form>
  </main>
  <footer>
        version 0.0 <?= date('Y'); ?>
  </footer>
</body>
</html>