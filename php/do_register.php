<?php

require_once __DIR__ . '/boot.php';

$stmt = pdo()->prepare("SELECT * FROM users WHERE username = :username");//FULL JOIN client ON id = client_id 
$stmt->execute(['username' => $_POST['username']]);

if ($stmt->rowCount() > 0) {
    flash('Это имя пользователя уже занято.');
    header('Location: /signUp.php');
    die;
} else {

    $stmt = pdo()->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
    $stmt->execute([
        'username' => $_POST['username'],
        'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
    ]);

    header('Location: /signIn.php');
}