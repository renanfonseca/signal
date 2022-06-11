<?php
require(__DIR__ . './dbConfig.php');
try {
    $conn = new PDO(
        'mysql:
        host=localhost;
        dbname=signal',
        USER_NAME,
        PASS
    );
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
