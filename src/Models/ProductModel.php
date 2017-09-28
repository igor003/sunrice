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
    public function get_title(){
        return $this->connection->query_all("SELECT title FROM `product`");
    }
    public function set(){

    }
    public function delete(){

    }
    public function update(){

}
}