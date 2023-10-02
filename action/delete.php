<?php 
session_start();
require_once 'db_connect.php';

if(isset($_POST['del-button'])){
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM products WHERE id ='$id'";

    if(mysqli_query($connect, $sql)){
        $_SESSION['msg'] = "Produto Excluído";
        header('location: ../index.php');
    }
     else{
        $_SESSION['msg'] = "Falha ao Excluir";
        header('location: ../index.php');
    }

}

?>