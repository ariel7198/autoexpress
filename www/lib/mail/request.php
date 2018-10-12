<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */


//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
function enviaEmail($name,$email){
	
    $emailUsuario=addslashes($email);
    $userName=addslashes($name);
    echo $emailUsuario;
	//$nomeUsuario=addslashes($nome);

date_default_timezone_set('Etc/UTC');

require 'PHPMailer-master/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
//$mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 465;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'ssl';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "recrutamento.autoexpress@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "autoexpress1804";

//Set who the message is to be sent from
$mail->setFrom('contato.plamona@gmail.com','AutoExpress - Recrutamento');

//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');
//
    
    
    //daqui pra baixo
//$mail->addAddress($emailUsuario,$userName);
//
////Set the subject line
//
//
//
//
////Read an HTML message body from an external file, convert referenced images to embedded,
////convert HTML into a basic plain-text alternative body
////enviar email de recebimendo de curriculo
//        
//        
//        $mail->Subject = 'Recebemos seu currículo :)';
//        
//        $mail->msgHTML("
//        
//    
//    style>
//    
//    body {
//        background-color: #F9FBFC;
//        margin: 0;
//        max-width: 600px;
//    }
//    
//    table#header {
//        background-color: #134568;
//        width: 100%;
//        height: 100px;
//    }
//    #logo {
///*        background-color: red;*/
//        
//        
//    }
//    table#content{
//        margin-top: 10%;
//        background-color: white;
//        height: 300px;
//        width: 80%;
//        margin-bottom: 10%;
//    }
//    #blank{
//        background-color: #F9FBFC;
//        width: 25%;
//    }
//    #texto {
//        border-width: thin;
//        border-style: solid;
//        border-color: #f0f0f4;
//        border-radius: 3px;
//        padding-left: 10%;
//        padding-right: 10%;
//        font-family: sans-serif;
//        text-align: justify;
//        line-height: 1.6;
//        
//    }
//    #botao a{
//        height: 25px;
//        display: block; 
//        background: #134568;
//        color: #FFFFFF; 
//        text-shadow: 0px 1px 0px #111111;
//        text-align: center;  
//        box-shadow: #b5b5b9 4px 4px 4px;
//        padding: 5px 5px 5px 5px; 
//        margin: 0px 0px 0px 0px; 
//        text-decoration: none; 
//        border-left: 0px solid transparent;
//        -webkit-transition: all 0.2s ease-out;
//        border-radius: 4px;
//        width: 50%;
//    }
//    #botao2 a{
//        height: 23px;
//        display: block; 
//        background-color: #134568;
//        font-family: sans-serif;
//        color: white;  
//        text-align: center;  
//        padding: 5px 5px 5px 5px; 
//        margin: 0px 0px 0px 0px; 
//        text-decoration: none; 
//        border-left: 0px solid transparent;
//        -webkit-transition: all 0.2s ease-out;
//        border-radius: 0px;
//        width: 50%;
//    }
//    table#footer{
//        
//        background-color: #134568;
//        width: 100%;
//        height: 100px;
//        border-width: thin;
//        border-style: solid;
//        border-color: #f0f0f4;
//        border-radius: 3px;
//        padding-left: 10%;
//        padding-right: 10%;
//        color: white;
//    }
//    
//
//</style>
//<!DOCTYPE html>
//<html>
//    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
//    <meta name='viewport' content='width=device-width, initial-scale=1'>
//<head>
//	<title></title>
//    
//</head>
//<body>
//    <table id='header' border='0'>
//    <tr> <td id='logo' width=30px>
//        <!-- <img src='https://static.tumblr.com/jjqbi6t/YWnpe5fxy/logo.png' width=160px class='logo'> -->
//        </td>
//        <td>
//        </td>
//    </tr>
//    </table>
//    
//    <center>
//    <table id='content'> 
//    
//        <tr>
//            <td id='texto'> <center> <h2> <font face='sans-serif' color='#0d2c58'> <b>  Na espectativa </b> </font> </h2> </center>
//                    <p>Olá, ficamos muito felizes com seu contato. </p> <p> Você está a poucos passos de fazer parte da empresa AutoExpress. </p> Enquanto você aguarda o contato de um de nossos administradores participe do nosso Discord e comece a rodar conosco agora mesmo . <br> <br> 
//                    <center>
//
//
//                       <div id='botao'> <a href='https://discord.gg/TfW3TR'> Discord </a>  </div>   
//                    </center> 
//            </td>W
//        </tr>
//    
//    </table>
//    </center>
//    <table id='footer'> 
//        <tr>
//            <td> <center> <div id='botao2'> <a href='https://discord.gg/TfW3TR'> AutoExpress Logística, 2018 </a>  </div> </center>  </td>
//        </tr>
//
//    </table>
//    
//WW
//</body>
//</html>");
        //Set who the message is to be sent to
        $mail->addAddress('ariel.7198@hotmail.com', 'Ariel');
        $mail->addAddress('nandinhobrets2@gmail.com', 'Luis Fernando');
        $mail->addAddress('joaovittor020317@gmail.com','João');
        $mail->addAddress('legendary0135@gmail.com','Ariel2');
        // $mail->addBcc('ariel.7198@hotmail.com', 'Ariel');
        
        $mail->Subject = 'Recrutador, recebemos um novo currículo :)';
        
        $mail->msgHTML("
    
    <style>
    
    body {
        background-color: #F9FBFC;
        margin: 0;
        max-width: 600px;
    }
    
    table#header {
        background-color: #134568;
        width: 100%;
        height: 100px;
    }
    #logo {
/*        background-color: red;*/
        
        
    }
    table#content{
        margin-top: 10%;
        background-color: white;
        height: 300px;
        width: 80%;
        margin-bottom: 10%;
    }
    #blank{
        background-color: #F9FBFC;
        width: 25%;
    }
    #texto {
        border-width: thin;
        border-style: solid;
        border-color: #f0f0f4;
        border-radius: 3px;
        padding-left: 10%;
        padding-right: 10%;
        font-family: sans-serif;
        text-align: justify;
        line-height: 1.6;
        
    }
    #botao a{
        height: 25px;
        display: block; 
        background: #134568;
        color: #FFFFFF; 
        text-shadow: 0px 1px 0px #111111;
        text-align: center;  
        box-shadow: #b5b5b9 4px 4px 4px;
        padding: 5px 5px 5px 5px; 
        margin: 0px 0px 0px 0px; 
        text-decoration: none; 
        border-left: 0px solid transparent;
        -webkit-transition: all 0.2s ease-out;
        border-radius: 4px;
        width: 50%;
    }
    #botao2 a{
        height: 23px;
        display: block; 
        background-color: #134568;
        font-family: sans-serif;
        color: white;  
        text-align: center;  
        padding: 5px 5px 5px 5px; 
        margin: 0px 0px 0px 0px; 
        text-decoration: none; 
        border-left: 0px solid transparent;
        -webkit-transition: all 0.2s ease-out;
        border-radius: 0px;
        width: 50%;
    }
    table#footer{
        
        background-color: #134568;
        width: 100%;
        height: 100px;
        border-width: thin;
        border-style: solid;
        border-color: #f0f0f4;
        border-radius: 3px;
        padding-left: 10%;
        padding-right: 10%;
        color: white;
    }
    

</style>
<!DOCTYPE html>
<html>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
<head>
	<title></title>
    
</head>
<body>
    <table id='header' border='0'>
    <tr> <td id='logo' width=30px>
        
        </td>
        <td>
        </td>
    </tr>
    </table>
    
    <center>
    <table id='content'> 
    
        <tr>
            <td id='texto'> <center> <h2> <font face='sans-serif' color='#0d2c58'> <b>  Recebemos um novo currículo </b> </font> </h2> </center>
                <p>Olá, recrutador, recebemos um novo currículo de '$userName'. </p> <p> Acesse o portal de administração para ver as novas solicitações </p>
                    <center>


                       <div id='botao'> <a href='https://autoexpresslogistica.tumblr.com/adm'> Acessar </a>  </div>   
                    </center> 
            </td>
        </tr>
    
    </table>
    </center>
    <table id='footer'> 
        <tr>
            <td> <center> <div id='botao2'> <a href='https://autoexpresslogistica.tumblr.com/'> AutoExpress Logística, 2018 </a>  </div> </center>  </td>
        </tr>

    </table>
    

</body>
</html>");
    
	

//Replace the plain text body with one created manually
$mail->AltBody = 'Atenção!';

//Attach an image file
//$mail->addAttachment('logo.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Deu certo";
}
}
?>