<?php

namespace App\Model;

class ProductDao {
     
    public function create(Product $product) {//recebendo como parametro uma instancia da class product

        $sql = 'INSERT INTO products (name, description) VALUES (?,?)';

        $register = Connection::getConn() -> prepare($sql);
        $register -> bindValue(1, $product -> getName());//este valor é equivalente a primeira interrogação do VALUES da linha 9, assim por diante
        $register -> bindValue(2, $product -> getDescription());
        $register -> execute();

    }

    public function read() {

        $sql = 'SELECT * FROM products';

        $register = Connection::getConn() -> prepare($sql);
        $register -> execute();

        if ($register -> rowCount() > 0){//se houver pelo menos um registro no banco de dados
            $result = $register -> fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } else {
            return [];
        }

    }

    public function update(Product $product) {

        $sql = 'UPDATE products SET name = ?, description = ? WHERE id = ?';

        $register = Connection::getConn() -> prepare($sql);
        $register -> bindValue(1, $product -> getName());//associando nossos bindValues as nossas ? da linha 36
        $register -> bindValue(2, $product -> getDescription());
        $register -> bindValue(3, $product -> getId());

        $register -> execute();
    }

    public function delete($id) {

        $sql = 'DELETE FROM products WHERE id = ?';

        $register = Connection::getConn() -> prepare($sql);
        $register -> bindValue(1, $id);
        $register -> execute();
    }
}