<?php
    require_once ("./environment.php");
    $config = array();

    if(ENVIRONMENT == 'development') {
        define("BASE_URL", "http://localhost/b7-chat/");
        $config['db_name'] = "db_chat";
        $config['db_host'] = "127.0.0.1";
        $config['db_user'] = "root";
        $config['db_pass'] = "";
    } else {
        define("BASE_URL", "http://www.meusite.com.br/b7-chat/");
        $config['db_name'] = "db_chat";
        $config['db_host'] = "127.0.0.1";
        $config['db_user'] = "root";
        $config['db_pass'] = "";
    }

    global $db;

    try {
        $db = new PDO("mysql:dbname=" . $config['db_name'] . ";host=" . $config['db_host'], $config['db_user'], $config['db_pass']);
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "ERRO: " . $e -> getMessage();
        exit;
    }

?>