<?php
    try {
        $mysqlClient = new PDO(
        'mysql:host=localhost;dbname=nom_de_la_base_de_donnee;charset=utf8',
        'root',
        ''
        );
        $con -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "connected successfully";
    } catch (PDOException $Error) {
        echo "Ereur : ",$Error->get_Message();
    }

?>