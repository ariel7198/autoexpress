<?php
    require_once (seguranca.php)

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo "recebeu o form";
        $date = ($_POST['date'])
        echo "<br>data recebida: ", $date;
        $pretime = ($_POST['pretime']);
        echo "<br> horario de concentracao: ", $pretime;
        $time = ($_POST['time']);
        echo "<br> horario de inicio: ", $time;
        $originCity = ($_POST['originCity']);
        echo "<br> cidade origem: ", $originCity;
        $destinationCity = ($_POST['destinationCity']);
        echo "<br> cidade destino: ", $destinationCity;
        $saveLink = ($_POST['saveLink']);
        echo "<br> link do save: ", $saveLink;
        $px = ($_POST['px']);
        echo "<br> px: ", $px;
        $server = ($_POST['server']);
        echo "<br> server: ", $server;

        if (registerConvoy($user, $password) == true){
            header ("Location: ../templates/colaborador.php");
            echo "deu certo";
            echo "sessao vale: ", $_SESSION['usuarioNome'];
        } else {
            echo "nao deu certo";
        }
    }


?>