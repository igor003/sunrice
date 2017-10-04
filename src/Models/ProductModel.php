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
    public function get_all(){
        //return $this->connection->query_all("SELECT id, title FROM `product`");
        return $this->connection->query_all("SELECT id, title, quantity * price as total_price FROM `product`");
    }
    public function get_total_sum(){
        return $this->connection->query_all("SELECT SUM(quantity * price) as total_sum FROM `product`");
    }
    public function get_by_id_with_category($id){
        return $this->connection->query_one("
            SELECT *  FROM `product` AS p  INNER JOIN `product_category` AS pc 
            ON p.id_category = pc.id WHERE p.id = '".$id."'
        ");
    }
    public function get_by_id($id){
        return $this->connection->query_one("SELECT * FROM `product` WHERE id = '".$id."'");
    }
    public function delete($id){
        return $this->connection->query("DELETE FROM `product` WHERE id = '".$id."'");
    }
    public function update($id,$product){
        return $this->connection->query("UPDATE `product` SET title='".$product['updated_title']."', 
                                                              price='".$product['updated_price']."', 
                                                              quantity = '".$product['updated_quantity']."',
                                                              note = '".$product['updated_note']."',
                                                              id_category = '".$product['updated_category']."'
                                                              WHERE id = ".$id."
        ");
    }
    public function add($new_product){
        return $this->connection->query("
            INSERT INTO `product`(title,price,quantity,note,id_category) 
            VALUES ('".$new_product['title']."',
                    '".$new_product['price']."',
                    '".$new_product['quantity']."',
                    '".$new_product['note']."',
                    '".$new_product['id_category']."')
        ");
    }
    public function get_similar($id_category,$price,$price_range){
        return $this->connection->query_all("
            SELECT* FROM `product` WHERE id_category = '".$id_category."' 
            AND price BETWEEN ($price - $price_range) AND ( $price + $price_range) LIMIT 5
        ");
    }
}





