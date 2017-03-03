<?php
session_start();
require_once 'database.php';

if (isset($_SESSION['admin'])AND !empty($_SESSION['admin'])){
    if(isset($_SESSION['id'])){
        $req = $db->query('SELECT * FROM article WHERE id ='.$_GET['id']);
        $article = $req->fetch();
        if($article){
            $req = $db->query('DELET FROM article WHERE id ='.$_GET['id']);
            header('location:index.php');
        }
        else{
            header('location:index.php');
        }
        
    }
}else{
header('location:index.php');
}