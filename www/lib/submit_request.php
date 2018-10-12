<?php
    include ("db-connect.php");
    include ("../lib/mail/request.php");

    if (!isset($POST['send'])){

        $name = $_POST['name'];

        $age = $_POST['age'];

        $email = $_POST['email'];    

        $wpp = $_POST['wpp'];

        $ets = $_POST['ets'];

        $tb = $_POST['tb'];

        $ds = $_POST['ds'];

        $av = $_POST['av'];
            
        echo "Dados recebidos, procedendo para insert no banco";
        echo "<br>";
        
        $sql = "INSERT INTO requests (name, age, mail, av, whatsapp, ets, trucksbook, status, discord) VALUES ('$name','$age','$email','$av','$wpp','$ets','$tb','0','$ds')";
        
        echo "SQL: ", $sql;
        
        if ($_SG['link'] ->multi_query($sql) === TRUE) {
            enviaEmail($name,$mail);
//            header ("Location: ../templates/index.html");
        } else {
            $error_code = mysqli_errno($_SG['link']);
            echo "erro:", $error_code;
        }
        
    }

?>