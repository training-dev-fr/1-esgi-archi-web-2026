<?php
include_once('./model/product.model.php');

class ProductController{

    function getAll(){
        $products = ProductModel::getAll();
        include('./view/productList.json.php');
    }

    function getById($id){
        echo $id;
    }
        
    function create(){
        $data = file_get_contents("php://input");
        $product = json_decode($data);

        ProductModel::create($product);
        include('./view/createProduct.json.php');
    }

    function update(){
        echo 'Mise à jour';
    }
}