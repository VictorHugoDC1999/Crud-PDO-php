<?php

namespace App\Model;

class ProductDao {
     
    public function create(Product $product) {//recebendo como parametro uma instancia da class product

        $sql = 'INSERT INTO products (name, description) VALUES (?,?)';

        $insert = Connection::getConn() -> prepare($sql);
        $insert -> bindValue(1, $product -> getName());
        $insert -> bindValue(2, $product -> getDescription());
        $insert -> execute();

    }

    public function read() {}

    public function update(Product $product) {}

    public function delete($id) {}
}