<?php

require_once __DIR__ . '/boot.php';

if (check_auth()) {
    // Получим данные пользователя по сохранённому идентификатору
    $stmt = pdo()->prepare("SELECT * FROM users u JOIN tour t ON u.id = t.id_user WHERE `id` = :id");//SELECT * FROM users FULL JOIN client ON id = client_id FULL JOIN documents ON id = client_id WHERE `id` = :id
    $stmt->execute(['id' => $_SESSION['user_id']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $user_id = $user['id'];
}

try {
    $stmt = pdo()->prepare("SELECT * FROM tour");
    $stmt->execute();

    if ($_SESSION['user_id']) {
        $stmt = pdo()->prepare("INSERT INTO `tour` ( `id_user`, `start`, `end`, `country`, `city`) VALUES (:id_user, :dep_date, :arr_date, :country, :city);");
        $stmt->execute([
            'id_user' => $_SESSION['user_id'],
            'dep_date' => $_POST['dep_date'],
            'arr_date' => $_POST['arr_date'],
            'country' => $_POST['country'],
            'city' => $_POST['city'],
        ]);
        flash('Your tour has been saved.');
        header('Location: /personalTour.php');
    } else {
        flash('You have to be logged in to create tours.');
        header('Location: /personalTour.php');
    }

} catch (Exception $e) {
    echo 'An exception was thrown: ', $e->getMessage(), "\n";
}
