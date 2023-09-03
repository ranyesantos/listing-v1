<?php  

if (isset($_POST['user'], $_POST['password'])) {
        
if ($_POST['user']= 'admin' && $_POST['password']= 'admin') {
    header('Location:logedin.php');
}    

}
?>