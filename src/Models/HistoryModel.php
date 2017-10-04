<?php
/**
 * Created by PhpStorm.
 * User: home
 * Date: 28.09.2017
 * Time: 20:08
 */

namespace Models;


class HistoryModel
{
    private $connection;

    public function __construct(){
        $this->connection = \Database::getInstance();
    }
    public function insert($date,$current_product){
        $this->connection->query("
           INSERT INTO `product_history` (date, id_product, title, quantity, price, note, id_category) 
           VALUES ('".$date."',
                   '".$current_product['id']."',
                   '".$current_product['title']."',
                   '".$current_product['quantity']."',
                   '".$current_product['price']."',
                   '".$current_product['note']."',
                   '".$current_product['id_category']."')
        ");
    }
    public function get_all_by_id($id){
        return $this->connection->query_all("
            SELECT * FROM `product_history` AS ph 
            INNER JOIN product_category AS pc ON 
            ph.id_category = pc.id WHERE ph.id_product = $id ORDER BY ph.date ASC
        ");
    }
}