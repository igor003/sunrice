<?php
/**
 * Created by PhpStorm.
 * User: home
 * Date: 28.09.2017
 * Time: 20:05
 */
use Models\ProductModel;
use Models\ProductCategoryModel;
class ProductController{

    public function index(){
        $product = new ProductModel;
        $titles = $product->get_products();
        $view = new View(['result'=>$titles]);
        $view->render('Product_list');
    }
    public function add_view(){
        $product = new ProductCategoryModel();
        $categories =  $product->get_categories();
        //var_dump($categories);
        $view = new View(['categories'=>$categories]);
        $view->render('Product_add_form');

    }
    public function get_details(){
        $product = new ProductModel;
        $all_products = $product->get_products_by_id(Route::getInstance()->get_first_param());
       // var_dump( $all_products);
        $view = new View(['products'=>$all_products]);
        $view->render('Product_details');
    }
    public function delete(){
        $product = new ProductModel;
        $product->delete(Route::getInstance()->get_first_param());
        header('Location:'.$_SERVER['HTTP_REFERER']);
    }
}