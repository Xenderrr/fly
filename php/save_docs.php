<?php

require_once __DIR__ . '/boot.php';

if (check_auth()) {
    // Получим данные пользователя по сохранённому идентификатору
    $stmt = pdo()->prepare("SELECT * FROM users WHERE `id` = :id"); //SELECT * FROM users FULL JOIN client ON id = client_id FULL JOIN documents ON id = client_id WHERE `id` = :id
    $stmt->execute(['id' => $_SESSION['user_id']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $user_id = $user['id'];
}

try {
    $stmt = pdo()->prepare("SELECT * FROM client WHERE `client_id` = :id");
    $stmt->execute([
        'id' => $user_id,
    ]);

    if ($_SESSION['user_id']) {
        $stmt = pdo()->prepare("INSERT INTO documents (client_id, passport_id, passport_series, visa) VALUES (:id, :passport_id, :passport_series, :visa)");//:id, :passport_id, :passport_series, :visa
        $stmt->execute([
            'id' => $_SESSION['user_id'],
            'passport_id' => $_POST['passport_id'],
            'passport_series' => $_POST['passport_series'],
            'visa' => $_POST['visa'],
        ]);

        flash('Your documents have been saved.');
        header('Location: /signUp.php');
    } else {
        flash('You have to be logged in to save pd.');
        header('Location: /signUp.php');
    }

} catch (Exception $e) {
    echo 'An exception was thrown: ', $e->getMessage(), "\n";
}
