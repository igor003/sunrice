<?php
/**
 * Created by PhpStorm.
 * User: home
 * Date: 28.09.2017
 * Time: 20:07
 */
namespace Models;

class ProductCategoryModel{
    private $connection;

    public function __construct(){
        $this->connection = \Database::getInstance();
    }
    public function get_categories(){
       return $this->connection->query_all("SELECT * FROM `product_category`");
    }


}