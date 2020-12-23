<?php
    require_once '../system/env.php';

    function connect()
    {
        //定数から代入
        $host = DB_HOST;
        $db   = DB_NAME;
        $user = DB_USER;
        $pass = DB_PASS;

        $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb";

        try {
            $pdo = nes PDO($dsn, $user, $pass,[
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
            echo '接続成功！';
        } catch(PDOExeption $e) {
            echo '接続失敗！'. $e->getMessage();
            exit();
        }

    }