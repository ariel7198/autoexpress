<?php
//  Configurações do Script
// ==============================
include ("conexao.php");
session_start();

$_SG['conectaServidor'] = true;    // Abre uma conexão com o servidor MySQL?
$_SG['caseSensitive'] = false;     // Usar case-sensitive? Onde 'thiago' é diferente de 'THIAGO'
$_SG['validaSempre'] = true;       // Deseja validar o usuário e a senha a cada carregamento de página?
// Evita que, ao mudar os dados do usuário no banco de dado o mesmo contiue logado.

$_SG['paginaLogin'] = 'login.php'; // Página de login
$_SG['tabela'] = 'user';       // Nome da tabela onde os usuários são salvos
// ==============================
// ======================================
// ======================================
// Verifica se precisa iniciar a sessão

/**
* Função que valida um usuário e senha
*
* @param string $usuario - O usuário a ser validado
* @param string $senha - A senha a ser validada
*
* @return bool - Se o usuário foi validado ou não (true/false)
*/
function userLogin($usuario, $senha) {
    
  global $_SG;
  $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';
 
  $nusuario = addslashes($usuario);
  $nsenha = addslashes($senha);
  
  $sql = "SELECT us.id, us.name, us.login, us.password, pt.name AS cargo, pt.id AS posts_id FROM `".$_SG['tabela']."` AS us INNER JOIN posts as pt WHERE us.".$cS." login = '".$nusuario."' AND us.".$cS." password = '".$nsenha."' AND us.posts_id = pt.id";
  //echo "Consulta efetuada: ", $sql;
  $query = mysqli_query($_SG['link'], $sql);
  $resultado = mysqli_fetch_assoc($query);
  // Verifica se encontrou algum registro
  if (empty($resultado)) {
    // Nenhum registro foi encontrado => o usuário é inválido
    echo "nada encontrado";
     return false;
    
  } else {
    // Definimos dois valores na sessão com os dados do usuário
    $_SESSION['usuarioID'] = $resultado['id']; // Pega o valor da coluna 'id do registro encontrado no MySQL
    $_SESSION['usuarioNome'] = $resultado['name'];

    $_SESSION['usuarioAcesso'] = $resultado['posts_id']; //Pega o nível de acesso do usário
    $_SESSION['usuarioCargo'] = $resultado['cargo'];
    // Pega o valor da coluna 'nome' do registro encontrado no MySQL
    // Verifica a opção se sempre validar o login
        if ($_SG['validaSempre'] == true) {
            // Definimos dois valores na sessão com os dados do login
            $_SESSION['usuarioLogin'] = $usuario;
            $_SESSION['usuarioSenha'] = $senha;
        }
     return true;
  }
}/**

* Função que registra os comboios
*/
 function registerConvoy($pretime, $time, $start_city, $final_city, $date, $save_link, $px_channel, $server_number, $instructions){
     include ("conexao.php");
     $userid = $_SESSION['usuarioID'];
     $userPost = $_SESSION['usuarioAcesso'];

     $SQL = "INSERT INTO convoy (pretime, time, start_city, final_city, date, save_link, px_channel, server_number, instructions, user_id, user_posts_id)
     VALUES ('$pretime','$time','$start_city','$final_city','$date','$save_link','$px_channel','$server_number','$instructions',$userid,$userPost)";
     echo "<br> Comando executado: ", $SQL;

     if ($_SG['link'] -> multi_query($SQL) === true) {
         echo "inserido dados. ";
         return true;
     } else {
         echo "erro na query";
     }
 }
function registerUser($name, $surname, $trucksbook, $password, $userName, $post){
     include ("conexao.php");
     
     $SQL = "INSERT INTO user (name, surname, trucksbook_nick, login, first_access, password, active, posts_id)
     VALUES ('$name','$surname','$trucksbook','$userName','1','$password','1','$post')";
     echo "<br> Comando executado: ", $SQL;

     if ($_SG['link'] -> multi_query($SQL) === true) {
         echo "inserido dados. ";
         return true;
     } else {
         echo "erro na query";
         return false;
     }
 }
function registerKM($user, $km, $periodo){
    include ("conexao.php");
    
}





/**
* Função que protege uma página
*/
function protegePagina() {
  global $_SG;
  if (!isset($_SESSION['usuarioID']) OR !isset($_SESSION['usuarioNome'])) {
    // Não há usuário logado, manda pra página de login
      echo "Nao ha usuario logado";
      
    expulsaVisitante(1);
  } else {
    // Há usuário logado, verifica se precisa validar o login novamente
    if ($_SG['validaSempre'] == true) {
      // Verifica se os dados salvos na sessão batem com os dados do banco de dados
      if (!userLogin($_SESSION['usuarioLogin'], $_SESSION['usuarioSenha'])) {
        // Os dados não batem, manda pra tela de login
        expulsaVisitante();
      }
    }
  }
}

function restringeAcesso($required_post) { // Restringe o acesso para páginas onde o usuário não tem autorização
    global $_SG;
    if ($_SESSION['usuarioAcesso'] != $required_post){ //verifica o nível de acesso da conta logada
        expulsaVisitante(2); //espulsa o visitante e envia o parametro para ser utilziado no get
    }
    
    
}
/**
* Função para expulsar um visitante
*/
function expulsaVisitante($motivo) {
  global $_SG;
  echo "chamou a funcao de expulsar";
  // Remove as variáveis da sessão (caso elas existam)
  unset($_SESSION['usuarioID'], $_SESSION['usuarioNome'], $_SESSION['usuarioLogin'], $_SESSION['usuarioSenha']);
  // Manda pra tela de login
    
    /* 1 para usuario invalido e 2 para problemas de autorizacao */
  $error = $motivo;
  header("Location: index.php?errorn=500");
}

?>