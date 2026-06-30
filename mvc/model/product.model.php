<?php
    include_once('./bdd.php');

    class ProductModel{
        static function getAll(){
            $bdd = getConnexion();
            $req = $bdd->prepare("SELECT * FROM product");
            $req->execute();
            return $req->fetchAll(PDO::FETCH_OBJ);
        }

        static function getById(){

        }

        static function create($product){
             $bdd = getConnexion();
             $req = $bdd->prepare("INSERT INTO product(name,description,price,stock) VALUE(?,?,?,?)");
             $req->execute(array($product->name, $product->description, $product->price, $product->stock));
             return $req->fetch();
        }

        static function update(){

        }

        static function delete(){

        }
    }