<?php
    require_once("seguranca.php");
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo "recebeu o form";
        $user = ($_POST['user']);
        echo "<br> usuario recebido: ", $user;
        $password = ($_POST['password']);
        
        echo "<br> senha recebida: ", $password;

        if (userLogin($user, $password) == true){
            header ("Location: ../templates/colaborador.php");
            echo "deu certo";
            echo "sessao vale: ", $_SESSION['usuarioNome'];
        } else {
            echo "nao deu certo";
        }
    }
?>