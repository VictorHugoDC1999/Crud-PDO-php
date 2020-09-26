<?php

class Connect {

    private static $instance;

    public static function getConn() {//este metodo vai verificar se ja existe uma instancia da nossa conexão, se existir ele retorna a instancia e se não existir ele ira criar uma
        if(!isset(self::$instance)) {//se não existir a instancia
            self::$instance = new PDO('mysqli:host=localhost;dbname=pdo;charset=utf8', 'root', '');
        } else {
            return self::$instance;
        }
    }
    
}