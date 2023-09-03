<?php  
if (isset($_POST['user'], $_POST['password'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];
}  
     
if ($user != 'admin' or $password != 'admin'){
    header ('Location:error.html');
}
else {
    header('Location:logedin.html');
}

?>
