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
        $titles = $product->get_all();
        $view = new View(['result'=>$titles]);
        $view->render('Product_list');
    }
    public function add_view(){
        $product = new ProductCategoryModel();
        $categories =  $product->get_categories();
        $view = new View(['categories'=>$categories]);
        $view->render('Product_add_form');
    }
    public function add(){
        $product = new ProductModel();
        $product->add($_POST['title'],$_POST['price'],$_POST['quantity'],$_POST['note'],$_POST['id_category']);
        header('Location:/product/index');
    }
    public function details(){
        $product = new ProductModel;
        $all_products = $product->get_by_id(Route::getInstance()->get_first_param());
        $view = new View(['products'=>$all_products]);
        $view->render('Product_details');
    }
    public function delete(){
        $product = new ProductModel;
        $product->delete(Route::getInstance()->get_first_param());
        header('Location:'.$_SERVER['HTTP_REFERER']);
    }
    public function update_view(){
        $product = new ProductModel;
        $details = $product->get_by_id(Route::getInstance()->get_first_param());
        $product = new ProductCategoryModel();
        $categories =  $product->get_categories();
        $view = new View(['details'=> $details, 'categories'=> $categories]);
        $view->render('Product_update_form');
    }
}