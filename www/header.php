
    <link rel="stylesheet" href="css/general.css">
<link rel="stylesheet" href="css/header.css">
<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container container-header">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"> <img src="https://static.tumblr.com/jjqbi6t/YWnpe5fxy/logo.png"
                        class="aex-logo img-circle"> </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li> <a href="index.php"> INÍCIO </a></li>
                    <li> <a href="index.php#sobre"> SOBRE </a></li>
                    <!--<li> <a href="https://autoexpresslogistica.tumblr.com/colaboradores"> COLABORADORES </a></li> -->
                    <li> <a href="index.php#contato"> CONTATO </a></li>
                    <li> <a href="recrutamento.html"> RECRUTAMENTO </a></li>
                    <li> <a href="colaboradores.php"> EQUIPE </a></li>
                    <li> <?php 
                            if (!isset($_SESSION['usuarioID'])) { 
                                echo "<button type='button' class='btn btn-info btn-login'  data-toggle='modal'
                                                        data-target='#modalLogin'>LOGIN</button>";
                                
                            } 
                                else { 
                                    echo "<a href='colaborador.php'> COLABORADOR </a> ";
                                   }
                        ?>                
                    <li>
                    

                </ul>
            </div>
            <div class="modal fade " tabindex="-1" role="dialog" id="modalLogin">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header header-promocao">
                            <h5 class="modal-title-center">LOGIN</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="login.php" id="loginForm" method="POST" autocomplete="on">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">USUÁRIO</label>
                                    <input type="text" class="form-control" id="user" name="user" aria-describedby="emailHelp" placeholder="Usuário" required>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">SENHA</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Senha" required>
                                </div>
                                    <button type="submit" class="btn btn-primary btn-block">ENTRAR</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <div class="text-center">
                                <p> Caso não saiba seus dados, fale com um administrador </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </nav>