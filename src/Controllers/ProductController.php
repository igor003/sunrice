<?php
/**
 * Created by PhpStorm.
 * User: home
 * Date: 28.09.2017
 * Time: 20:05
 */
use Models\ProductModel;
use Models\ProductCategoryModel;
use Models\HistoryModel;
class ProductController{
    private $prise_range_for_similar_products = 50;

    public function index(){
        $product = new ProductModel;
        $products = $product->get_all();
        $total_sum = $product->get_total_sum();

        foreach($products as &$product){
               $product[percents] += round((int)$product['total_price'] /((int)$total_sum[0]['total_sum'] / 100 ),2);
        }
         $view = new View(['result'=>$products,'total_sum'=>$total_sum[0]['total_sum']]);
         $view->render('Product_list');
    }
    public function add_view(){
        $product = new ProductCategoryModel();
        $categories =  $product->get_categories();
        $view = new View(['categories'=>$categories]);
        $view->render('Product_add_form');
    }
    public function add(){
        $form_data = $_POST;
        $product = new ProductModel();
        $product->add($form_data);
        header('Location:/product/index');
    }
    public function details(){
        $product = new ProductModel;
        $id =(int)Route::getInstance()->get_first_param();
        $all_products = $product->get_by_id_with_category($id);
        $similar_products = $product->get_similar($all_products['id_category'],$all_products['price'],$this->prise_range_for_similar_products,$id);
        $view = new View(['products'=>$all_products, 'id' => $id,'similar_products' => $similar_products]);
        $view->render('Product_details');
    }
    public function delete(){
        $product = new ProductModel;
        $id =(int)Route::getInstance()->get_first_param();
        $deleted = $product->delete($id);
        if($deleted){
            $history = new HistoryModel;
            $history->delete_by_id_product($id);
        }
        header('Location:'.$_SERVER['HTTP_REFERER']);
    }
    public function update_view(){
        $product = new ProductModel;
        $id =(int)Route::getInstance()->get_first_param();
        $details = $product->get_by_id($id);
        $product = new ProductCategoryModel();
        $categories =  $product->get_categories();
        $view = new View(['details'=> $details, 'categories'=> $categories]);
        $view->render('Product_update_form');
    }
    public function update(){
        if(isset($_POST['submit'])){
            $form_data = $_POST;
            $id =(int)Route::getInstance()->get_first_param();
            $product = new ProductModel;
            $current_product = $product->get_by_id( $id);
            $history = new HistoryModel;
            $history->insert(date("Y-m-d"), $current_product);
            $product->update($id,$form_data);
        }

        header('Location:/product/index');
    }
    public function history_view(){
        $history = new HistoryModel;
        $id =(int)Route::getInstance()->get_first_param();
        $product_history = $history->get_all_by_id($id);
        $view = new View(['product_history' => $product_history]);
        $view->render('Product_history');

    }
}