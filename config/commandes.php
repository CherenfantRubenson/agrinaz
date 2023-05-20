<?php

function add_product($image,$name,$price,$desc){
    if(require('connexion.php')){
        $get= $access -> $request("INSERT INTO produit (image,nom,prix,description) VALUES($image,$name,$price,$desc) ");
        $get -> execute(array($image,$name,$price,$desc));
        $get -> closeCursor();
    }
}


function dispay_data(){
    if(require('connexion.php')){
        $req -> request("SELECT FROM produit ORDER BY  id DESC");
        $req -> execute();
        $data = $req -> fetchAll(PDO::FETCH_OBJ);
        return $data;

        $req-> closeCursor();
    }
}

function delete_data($id){
    if(require('connexion.php')){
        $req ->request("DELETE FROM produit WHERE id =?");
        $req->execute(array($id));
    }
}

?>