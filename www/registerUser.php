<?php
    require_once ('seguranca.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo "recebeu o form";
        $name = ($_POST['name']);
        echo "<br>nome recebida: ", $name;
        $surname = ($_POST['surname']);
        echo "<br> sobrenome: ", $surname;
        $password = ($_POST['password']);
        echo "<br> Senha: ", $password;
        $userName = ($_POST['userName']);
        echo "<br> Usuario: ", $userName;
        $trucksbook = ($_POST['trucksbook']);
        echo "<br> Trucksbook: ", $trucksbook;
        $post = ($_POST['post']);
        echo "<br> cargo: ", $post;
        


        if (registerUser($name, $surname, $trucksbook, $password, $userName, $post) == true){
            header ("Location: colaborador.php?alert=1");
            echo "deu certo";
            echo "sessao vale: ", $_SESSION['usuarioNome'];
        } else {
            echo "nao deu certo";
            header ("Location: colaborador.php?alert=1062");
        }
    }


?>