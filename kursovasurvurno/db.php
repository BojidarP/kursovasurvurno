<?php

try {
   
    $host = '127.0.0.1';
    $db   = 'car_rental'; 
    $user = 'car_rental_user'; 
    $password = '123456'; 
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, 
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
        PDO::ATTR_EMULATE_PREPARES   => false, 
    ];
    $pdo = new PDO($dsn, $user, $password, $options);

} catch (PDOException $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
    exit;
}

?>
