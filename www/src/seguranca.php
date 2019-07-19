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
  
  $sql = "SELECT * FROM `".$_SG['tabela']."` WHERE ".$cS." `login` = '".$nusuario."' AND ".$cS." `password` = '".$nsenha."'";
  echo "Consulta efetuada: ", $sql;
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
      echo "<br> nome na sessão:", $_SESSION['usuarioNome'];
    $_SESSION['usuarioAcesso'] = $resultado['posts_id']; //Pega o nível de acesso do usário
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
function registerConvoy($pretime, $time, $start_city, $end_city, $date, $save_link, $px_channel, $server_number, $instructions){
  $SQL = "INSERT INTO convoy (pretime, time, start_city, end_city, date, save_link, px_channel, server_number, instructions, user_id, user_posts_id)
  VALUES ('')";
  echo "<br> Comando executado: ",$sql;

  if ($_SG['link'] -> multi_query($SQL) === true {
    echo "inserido dados. "
  }
if ($_SG['link']->multi_query($sql) === TRUE) { 
  header("Location: sucess.php?id=1");
} 




}
/**
* Função que protege uma página
*/
function protegePagina() {
  global $_SG;
  if (!isset($_SESSION['usuarioID']) OR !isset($_SESSION['usuarioNome'])) {
    // Não há usuário logado, manda pra página de login
    expulsaVisitante();
  } else {
    // Há usuário logado, verifica se precisa validar o login novamente
    if ($_SG['validaSempre'] == true) {
      // Verifica se os dados salvos na sessão batem com os dados do banco de dados
      if (!validaUsuario($_SESSION['usuarioLogin'], $_SESSION['usuarioSenha'])) {
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
  // Remove as variáveis da sessão (caso elas existam)
  unset($_SESSION['usuarioID'], $_SESSION['usuarioNome'], $_SESSION['usuarioLogin'], $_SESSION['usuarioSenha']);
  // Manda pra tela de login
    
    /* 1 para usuario invalido e 2 para problemas de autorizacao */
  $error = $motivo;
  header("Location: login.php?erro=$error");
}

?>