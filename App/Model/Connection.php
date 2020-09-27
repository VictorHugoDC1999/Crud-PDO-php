<?php

namespace App\Model;

class Connection {

    private static $instance;

    public static function getConn() {//este metodo vai verificar se ja existe uma instancia da nossa conexão, se existir ele retorna a instancia e se não existir ele ira criar uma
        if(!isset(self::$instance)) {//se não existir a instancia
            self::$instance = new \PDO('mysql:host=localhost;dbname=pdo;charset=utf8', 'root', '');
        }

        return self::$instance;

    }
    
}