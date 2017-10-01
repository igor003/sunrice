<?php
/**
 * Created by PhpStorm.
 * User: home
 * Date: 28.09.2017
 * Time: 20:06
 */
namespace Models;

class ProductModel{
    private $connection;

    public function __construct(){
        $this->connection = \Database::getInstance();
    }
    public function get_products(){
        return $this->connection->query_all("SELECT id, title FROM `product`");
    }
    public function get_products_by_id($id){
        return $this->connection->query_one("SELECT *  FROM `product`  INNER JOIN `product_category` ON product.id_category = product_category.id WHERE product.id = '".$id."'");
    }
    public function delete($id){
        return $this->connection->query("DELETE FROM `product` WHERE id = '".$id."'");
    }
    public function update(){
        return $this->connection->query("UPDATE");
    }
}