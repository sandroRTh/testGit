<?php
    $dsn = 'mysql:dbname=id8740000_database;host=databases-auth.000webhost.com';
    $dbuser = 'id8740000_sandroadm';
    $dbpasswd = 'qwe123!@#.X';

    try {
        $db = new PDO ($dsn, $dbuser, $dbpasswd);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Conexão estabelecida com sucesso.';
    } catch (PDOException $e){
        echo "Falha ao conectar".$e->getMessage();
    }
?>