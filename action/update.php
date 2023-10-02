<?php 
session_start();
require_once 'db_connect.php';

if(isset($_POST['edit-button'])){
    $prod = mysqli_escape_string($connect, $_POST['prod']);
    $desc = mysqli_escape_string($connect, $_POST['desc']);
    $val = mysqli_escape_string($connect, $_POST['val']);
    $sell = mysqli_escape_string($connect, $_POST['sell']);
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE products SET item = '$prod', descrição = '$desc', valor = '$val', venda = '$sell' WHERE id = '$id'";

    if(mysqli_query($connect, $sql)){
        $_SESSION['msg'] = "Produto Atualizado";
        header('location: ../index.php');
    }
     else{
        $_SESSION['msg'] = "Falha na Atualização";
        header('location: ../index.php');
    }

}

?>