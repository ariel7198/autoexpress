<?php
    if (isset($_SESSION)){ 
        session_start();
    }

    require_once("seguranca.php");
    
?>
<!DOCTYPE html>
<html>

<head>
    <title> Auto Express Logística </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" type="image/png" href="https://static.tumblr.com/jjqbi6t/eKvpdlxph/apple-icon-precomposed.png">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <script>
        $(document).ready(function () {
            // Add smooth scrolling to all links in navbar + footer link
            $(".navbar a, footer a[href='#myPage']").on('click', function (event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {

                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 600, function () {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        })
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

    <script type="text/javascript">
        jQuery(function () {
            jQuery(window).scroll(function () {
                if (jQuery(this).scrollTop() > 690) {
                    if (window.innerWidth > 768)
                        $(".aex-logo").addClass("logo-diferente");
                    //$(".aex-logo").removeClass("img-circle")
                } else {
                    $(".aex-logo").removeClass("logo-diferente");
                    $(".aex-logo").addClass("img-circle")
                }
            });
        });
    </script>
    <script>
        $(window).scroll(function () {
            $(".slideanim").each(function () {
                var pos = $(this).offset().top;

                var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                    $(this).addClass("slide");
                }
            });
        });


    </script>
    

    <!--
    <script>
         $(document).ready(function(e) {
        var width = $(document).width();

        function goRight() {
            $("#animate").animate({
            left: width
          }, 5000, function() {
             setTimeout(goLeft, 50);
          });
        }

        setTimeout(goRight, 50);
    });
    </script>
-->


</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <!-- esse era do plugin do facebook, mas tem que ver ainda -->
    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
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
                    <li> <a href="#sobre"> SOBRE </a></li>
                    <!--<li> <a href="https://autoexpresslogistica.tumblr.com/colaboradores"> COLABORADORES </a></li> -->
                    <li> <a href="#contato"> CONTATO </a></li>
                    <li> <a href="recrutamento.html"> RECRUTAMENTO </a></li>
                    <li> <?php 
                            if (!isset($_SESSION['usuarioID'])) { 
                                echo "<button type='button' class='btn btn-info btn-login'  data-toggle='modal'
                                                        data-target='#modalLogin'>LOGIN</button>'}";
                                
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
    <script type="text/javascript">
        jQuery(function () {
            $(".navbar-toggle").click(function () {
                $(".aex-logo").addClass("logo-diferente");
            });
        }

    </script>
        
    
         <?php 
                            if (isset($_GET['errorn']) && (isset($_SESSION))) {
                                {
                                    $erro = $_GET['errorn'];
                                    //echo $erro;
                                    if ($erro == 1){ 
                                        echo "
                                        <div class='row'>
                                            <div class='col-sm-12 login-error'>
                                            <center> <p id='login-error-text'> Usuario ou senha incorretos </center>
                                        </div>
                                        </div> ";
                                    }
                                    else if ($erro ==299){ 
                                        echo "
                                        <div class='row'>
                                            <div class='col-sm-12 login-error'>
                                            <center> <p id='login-error-text'> Você não tem autorização para acessar essa página.
                                            <br> Contate um administrador </center>
                                        </div>
                                        </div> ";
                                    } 
                                    else if ($erro ==500){ 
                                        echo "
                                        <div class='row'>
                                            <div class='col-sm-12 login-error'>
                                            <center> <p id='login-error-text'> Por favor, faça login novamente. </center>
                                        </div>
                                        </div> ";
                                    }
                                } 
                            }  ?>

    <div id="jumbo" class="jumbotron text-center" cla>
        <h1>Auto Express</h1>
        <p>Qualidade e rapidez</p>
        

    </div>


    <div id="sobre" class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <h2> Sobre a empresa </h2>
                <h4> Oferece aos jogadores que querem uma nova experiência em comboios dando liberdade de ideias e
                    sugestões aumentando a realidade. Somos novos no seguimento porém com respeito ao nosso colaborador
                    logo seremos pioneiros.
                </h4>
                <blockquote class="blockquote"> "Não faça no TruckersMP o que você não faria na vida real"
                </blockquote>
                <h4> AutoExpress Logística - 100% Simulação </h4> <br>
                Trabalhe conosco.

            </div>
            <div class="col-sm-4">
                <!--                    <span class="glyphicon glyphicon-road logo"></span> -->
                <img src="https://static.tumblr.com/jjqbi6t/YWnpe5fxy/logo.png" height="300px" width="300px">
            </div>
        </div>
    </div>

    <div id="servicos" class="container-fluid text-center slideanim">
        <h2> Benefícios </h2>
        <hr>
        <h4> O que oferecemos </h4>
        <br>

        <div class="row slideanim">
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-user logo-small"></span>
                <h4> Companheiros para jogar </h4>
                <p>Nunca mais jogue sozinho</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-gift logo-small"></span>
                <h4>Promoções mensais</h4>
                <p>Ganhe cupons e DLCs de Euro Truck Simulator</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-road logo-small"></span>
                <h4>Comboios semanais</h4>
                <p>Comboios semanais com todos os membros da empresa</p>
            </div>
        </div>

    </div>
    <div class="container-fluid text-center slideanim">
        <h2> Frota </h2>
        <hr>
        <h4> Nossos colaboradores tem total liberdade em escolher quais caminhões irão utilizar em suas jogatinas. Todos
            os meses é realizada uma votação interna para escolher o caminhão que será utilizado nos comboios daquele
            mês. </h4>
        <div class="row text-center">
            <div class="col-sm-6">

                <div class="panel panel-default panel-frota">
                    <div class="panel-title panel-frota-title"> Fornecemos o MOD de adesivagem dos caminhões com a arte
                        da empresa </div>
                    <div class="panel-body">
                        <div class="tumbnail slideanim">
                            <img src="https://i.imgur.com/M9jXBXh.jpg" class="img-responsive" alt="Funcionários">
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-6">

                <div class="panel panel-default panel-frota">
                    <div class="panel-title panel-frota-title"> Pintura da empresa </div>
                    <div class="panel-body">
                        <div class="tumbnail slideanim">
                            <img src="https://static.tumblr.com/jjqbi6t/qijpdh2vd/truck2.jpeg" class="img-responsive"
                                alt="Funcionarios">

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


    <div id="comboios" class="container-fluid text-center">
        <h2> Comboios </h2>
        <hr>
        <h4> Participe dos comboios entrando em nosso Discord </h4> <br>
        <div id="myCarousel" class="carousel slide slideanim" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="https://i.imgur.com/wFutzle.png" class="img-responsive" alt="Funcionario">
                </div>

                <div class="item">
                    <img src="https://i.imgur.com/5C0xWDV.png" class="img-responsive" alt="Funcionario">
                </div>

                <div class="item">
                    <img src="https://i.imgur.com/OZMt6Z1.jpg" class="img-responsive" alt="Funcionario">
                </div>

                <div class="item">
                    <img src="https://i.imgur.com/Zf1QaEk.png" class="img-responsive" alt="Funcionario">
                </div>



            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    <div id="contato" class="container-fluid">
        <h2 class="text-center"> Contato </h2>
        <hr>
        <br>
        <div class="row">
            <div class="col-sm-4 slideanim text-center">
                <p> Curta nossa página no Facebook </p>
                <div class="fb-page" data-href="https://www.facebook.com/autoexpresstransporte/" data-tabs="timeline"
                    data-small-header="false" data-adapt-container-width="100%" data-hide-cover="false"
                    data-show-facepile="false">
                    <blockquote cite="https://www.facebook.com/autoexpresstransporte/" class="fb-xfbml-parse-ignore"><a
                            href="https://www.facebook.com/autoexpresstransporte/">AutoExpress Virtual</a></blockquote>
                </div>


            </div>
            <div id="tb-bt-hide" class="col-sm-4 slideanim text-center">
                <p> Faça parte do nosso Trucksbook </p>
                <img src="https://static.tumblr.com/jjqbi6t/5RBpdh3o8/trucksboook.png" height="70px">
                <a href="https://trucksbook.eu/company/13803" target=“_blank”><button class="btn btn-primary"> Solicitar
                    </button> </a>

            </div>
            <div class="col-sm-4 slideanim text-center">
                <p> Participe do nosso Discord </p>
                <iframe src="https://discordapp.com/widget?id=398934623956107264&theme=dark" width="350" height="500"
                    allowtransparency="true" frameborder="0"></iframe>
            </div>
        </div>
        <div id="tb-bt" class="row tb slideanim text-center">
            <div class="col-sm-12">
                <p> Faça parte do nosso Trucksbook </p>
                <img src="https://static.tumblr.com/jjqbi6t/5RBpdh3o8/trucksboook.png" height="70px">
                <a href="https://trucksbook.eu/company/13803" target=“_blank”><button class="btn btn-primary"> Solicitar
                    </button> </a>
            </div>
        </div>
    </div>

    <hr>
    <footer id="rodape" class="container-fluid text-center">
        <div class="row">
            <div class="col-md-4 col-12">
                <img class="img-circle" src="https://static.tumblr.com/jjqbi6t/YWnpe5fxy/logo.png" height="150px">
            </div>
            <div class="col-md-4 col-12">

                Auto Express Logistica™ <br> 2018 <br>
                trucksbook.eu/company/13803
            </div>

            <div class="col-md-4 col-12">
                <div class="row">
                    <h4> Contato </h4>
                </div>
                <div class="row">

                    <div class="col-md-3 col-sm-12 social-footer">
                        <a href="https://www.facebook.com/autoexpresstransporte/" target="_blank"> <img
                                src="https://static.tumblr.com/jjqbi6t/kb5pdmleg/facebook.png" class="social-facebook"
                                height="36px"> </a>

                    </div>
                    <div class="col-md-3 col-sm-12 social-footer">
                        <a href="https://trucksbook.eu/company/13803" target="_blank"> <img
                                src="https://static.tumblr.com/jjqbi6t/OpNpdlwj7/trucksbook-icon.png"
                                class="social-trucksbook" height="36px"> </a>


                    </div>
                    <div class="col-md-3 col-sm-12 social-footer">
                        <a href="https://www.youtube.com/channel/UCqQ-tw6MbfDd0LAKlBiCDjw" target="_blank"> <img
                                src="https://imagepng.org/wp-content/uploads/2017/09/youtube-play-icone.png"
                                height="36px"> </a>
                    </div>
                    <div class="col-md-3 col-sm-12 social-footer">
                        <a href="https://www.youtube.com/channel/UCqQ-tw6MbfDd0LAKlBiCDjw" target="_blank"> <img
                                src="https://discordapp.com/assets/f8389ca1a741a115313bede9ac02e2c0.svg" height="45px">
                        </a>
                    </div>
                </div>

            </div>


        </div>
    </footer>

</body>

</html>