<?php
/**
 * Created by PhpStorm.
 * User: home
 * Date: 28.09.2017
 * Time: 20:05
 */
use Models\ProductModel;
class HomeController{

    public function index(){
        $product = new ProductModel;
        $titles = $product->get_title();
        $view = new View(['result'=>$titles]);
        $view->render('Home');
    }
}