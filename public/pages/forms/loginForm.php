<?php
session_start();
$nome = $_POST['emailLogin'];
$senha = $_POST['passLogin'];
// echo $nome ." ". $senha;

if(!empty($nome) && !empty($senha)){
    if(($nome == "teste@gmail.com") && ($senha == "123456")) {
        $_SESSION['login'] = 'true';
        header("location: http://localhost/signal/public/pages/home.php");
    } else {
        // header("location: http://localhost/signal/index.php");
        echo "e";
    }
}else {
    // header("location: http://localhost/signal/index.php");
    echo "e";
}

?>