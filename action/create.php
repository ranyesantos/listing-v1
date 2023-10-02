<?php 
session_start();
require_once 'db_connect.php';

if(isset($_POST['sub-button'])){
    $prod = mysqli_escape_string($connect, $_POST['prod']);
    $desc = mysqli_escape_string($connect, $_POST['desc']);
    $val = mysqli_escape_string($connect, $_POST['val']);
    $sell = mysqli_escape_string($connect, $_POST['sell']);
    $sql = "INSERT INTO products (item, descrição, valor, venda) VALUES ('$prod', '$desc', '$val', '$sell')";

    if(mysqli_query($connect, $sql)){
        $_SESSION['msg'] = "Produto Cadastrado";
        header('location: ../index.php');
    }
     else{
        $_SESSION['msg'] = "Falha no Cadastro";
        header('location: ../index.php');
    }

}

?>