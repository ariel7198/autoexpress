<?php
    require_once ("../src/conexao.php");
    include ("../src/seguranca.php");
    protegePagina();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Auto Express Logística |</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
  <link rel="stylesheet" href="css/colaborador.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">

      <link rel="icon" type="image/png" href="https://static.tumblr.com/jjqbi6t/eKvpdlxph/apple-icon-precomposed.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <script>
    $(document).ready(function(){
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

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
            }, 600, function(){

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
                if (jQuery(this).scrollTop() > 130) {
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
    $(function() {
    var img = $("#animate"),
        width = img.get(0).width,
        screenWidth = $(window).width(),
        duration = 5000;

    function animatePlane() {
        img.css("left", -width)
           .animate({
                "left": screenWidth
            }, duration, animatePlane);
    }

    animatePlane();
    }); </script>
    <script>
    // Select all elements with data-toggle="popover" in the document
$('[data-toggle="popover"]').popover(); 

// Select a specified element
$('#myPopover').popover();
    </script>
    <script>
        function charCount(str) {
            var lng = str.length;
            document.getElementById("charcount").innerHTML = lng + "/600";
        }
    
    </script>
    <script>
        function userCreator(){
            var name = document.getElementById("name");
            var surname = document.getElementById("surname");
            var input = document.getElementById("userName");
            input.value = name.value + "."+ surname.value;
        }
        
    </script>

</head>
<!--    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">-->
    
    <body>
        
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                
                    <a class="navbar-brand" href="https://autoexpresslogistica.tumblr.com/"> <img src="https://static.tumblr.com/jjqbi6t/YWnpe5fxy/logo.png" class="aex-logo img-circle"> </a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li> <a href="index.php"> INÍCIO </a></li>
                        <li> 
                            <button type="button" class="btn btn-link btn-logout">
                                <a href="../src/logout.php"><span class="glyphicon glyphicon-log-out"></span> </a>
                            </button> 
                        </li>
                        
                    
                    </ul>
                </div>
            </div>
        <div id="modalTrucksbook" class="modal fade" role="dialog">
            <div class="modal-dialog">

            <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Configuração do Trucksbook </h4>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/JOOLns7o7e4" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">Concluído</button>
                        </div>
                </div>

            </div>
            </div> <!-- fim modal trucksbook -->
            <div id="modalCargas" class="modal fade" role="dialog">
                <div class="modal-dialog">

                <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Criador de Cargas </h4>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PNGeZHoTAx4?rel=0" allowfullscreen></iframe>
</div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>

                </div>
            </div> <!-- fim modal trucksbook -->
            <div id="modalPintura" class="modal fade" role="dialog">
                <div class="modal-dialog">

                <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Pintura da empresa </h4>
                        </div>
                        <div class="modal-body">
                         <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zLHGbllokmM?rel=0" allowfullscreen></iframe>
</div>   
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>

                </div>
            </div> <!-- fim modal trucksbook -->
            <div id="modalTruckersMP" class="modal fade" role="dialog">
                <div class="modal-dialog">

                <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Nome no TruckersMP </h4>
                        </div>
                        <div class="modal-body">
                         <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/yUNKgka1_bY?rel=0" allowfullscreen></iframe>
</div>   
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>

                </div>
            </div> <!-- fim modal trucksbook -->
            <div id="modalComboios" class="modal fade" role="dialog">
                <div class="modal-dialog">

                <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Novo comboio </h4>
                        </div>
                        <div class="modal-body">
                            <p align="center"> Forneça as informações para o próximo comboio </p>
                            <form action="../src/registerConvoy.php" method="POST">
                                <div class="form-row">
                                    <div class="form-group col-sm-12">
                                        <label for="inputDate"> Data: </label>
                                        <input type="date" class="form-control" id="date" name="date" >
                                    </div>
                                </div>
                              <div class="form-row">
                                <div class="form-group col-sm-6">
                                  <label for="inputPretime">Horário de concentração</label>
                                  <input type="time" class="form-control" id="pretime" name="pretime">
                                </div>
                                <div class="form-group col-sm-6">
                                  <label for="inputTime">Horário de início</label>
                                  <input type="time" class="form-control" id="time" name="time">
                                </div>
                              </div>
                                <div class="form-row">
                                      <div class="form-group col-sm-6">
                                        <label for="inputStartCity">Origem:</label>
                                        <input type="text" class="form-control" id="originCity" maxlength="40" placeholder="Ex: Calais" name="originCity">
                                      </div>
                                        <div class="form-group col-sm-6">
                                        <label for="inputEndCity">Destino:</label>
                                        <input type="text" class="form-control" id="destinationCity" maxlength="40" placeholder="Ex: Duisburg" name="destinationCity">
                                      </div>
                                </div>
                              <div class="form-row">
                                <div class="form-group col-sm-6">
                                  <label for="inputSaveLink">Link do save:</label>
                                  <input type="url" class="form-control" id="saveLink" name="saveLink">
                                </div>
                                <div class="form-group col-sm-4">
                                  <label for="inputState">Canal PX </label>
                                  <input type="number" class="form-control" id="px" min="1" max="22" name="px">
                                </div>
                                <div class="form-group col-sm-2">
                                  <label for="inputZip">Servidor</label>
                                   <input type="number" class="form-control" id="server" min="1" max="3" name="server">
                                  </div>
                              </div>
                                
                                <div class="form-row">
                                    <div class="form-group col-sm-12">
                                        <label for="inputInstructions"> Instruções para o comboio: </label>
                                        <textarea type="textarea" class="form-control" id="convoyInstructions" maxlength="600" name="instructions" onkeypress="charCount(this.value)"> </textarea>
                                        <span class='pull-right' id="charcount"></span>
                                    </div>
                                
                                </div>
                              
                              <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            
                        </div>
                    </div>

                </div>
            </div> <!-- fim modal comboio -->
            <div id="modalColaborador" class="modal fade" role="dialog">
                <div class="modal-dialog">

                <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Cadastro de Colaborador </h4>
                        </div>
                        <div class="modal-body">
                            <form action="../src/registerUser.php" method="POST">
                                <div class="form-row">
                                    <div class="form-group col-sm-6">
                                        <label for="inputName"> Nome: </label>
                                        <input type="text" class="form-control" id="name" oninput="userCreator()" name="name" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="inputSurname">Sobrenome</label>
                                        <input type="text" class="form-control" id="surname" onkeypress="userCreator()" name="surname" id="surname" required>
                                    </div>
                                </div>
                              <div class="form-row">
                                  <div class="form-group col-sm-6">
                                        <label for="inputPassword">Senha para primeiro acesso: </label>
                                        <input type="text" class="form-control" oninput="userCreator()" id="password" name="password">
                                  </div>
                                  <div class="form-group col-sm-6">
                                        <label for="inputUsername"> Usuário: </label>
                                        <input type="text" class="form-control" id="userName" name="userName" readonly required>
                                    </div>
                              </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-12">
                                        <label for="inputPassword">Cargo </label>
                                        <select class="form-control" name="post" id="post">
                                            <?php 
                                                global $_SG;
                                                $sql = "SELECT * FROM posts";
                                                $query = mysqli_query($_SG['link'],$sql);
                                                while ($resultado = $query->fetch_assoc()){
                                                    
                                            ?>
                                            <option value="<?php echo $resultado['id']; ?>"> <?php echo $resultado['name']; ?> </option>
                                                
                                            <?php 
                                                }
                                            ?>
                                            
                                        </select>
                                    </div>
                                </div>
                              <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            
                        </div>
                    </div>

                </div>
            </div> <!-- fim modal comboio -->
            

        </nav>
        
        <div id="bem-vindo" class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                <h4 class="text-center"> Seja bem vindo, <?php echo ucfirst($_SESSION['usuarioNome']); ?> 
                    <?php
                    switch($_SESSION['usuarioAcesso']){
                        case 1:
                            echo "<span class='badge badge-success'>",$_SESSION['usuarioCargo']," </span>  ";
                        break;
                        case 2:
                            echo "<span class='badge badge-danger'>",$_SESSION['usuarioCargo']," </span>  ";
                        break;
                        case 3:
                            echo "<span class='badge badge-warning'>",$_SESSION['usuarioCargo']," </span>  ";
                        break;
                        case 4:
                            echo "<span class='badge badge-info'>",$_SESSION['usuarioCargo']," </span>  ";
                        break;
                    } 
                    
                    
                    ?>
                  </h4> 
                    
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h5 class="text-center"> Se você é novo na empresa, acesse nosso tutorial para configuração dos <br> programas que utilizamos </h5>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalTrucksbook">Trucksbook</button>
                        <!-- Modal -->
                            
                </div>
                <div class="col-sm-3">
                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalCargas">Criador de cargas</button>
                            
                </div>
                <div class="col-sm-3">
                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalPintura">Pintura do caminhão</button>
                </div>
                
                <div class="col-sm-3">
                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalTruckersMP">Nome no TruckersMP</button>
                </div>
                
            </div>
        </div>
        
        
        
       <div id="informacoes" class="container-fluid text-center">
            <div class="row">
                <div class="col-sm-8">
                    <h3 class="text-center"> Pŕoximos comboios </h3>
                    <?php
                                
                                global $_SG;
                                $sql = "SELECT * FROM convoy ORDER BY date DESC LIMIT 1";
                                $query = mysqli_query($_SG['link'],$sql);
                                $resultado = mysqli_fetch_assoc($query);
                                
                            ?>
                <hr>
                    <!-- informacoes do proximo comboio -->
                    <div class="row">
                        <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="text-center"> 
                                    <?php 
                                    echo date("d/m/Y", strtotime($resultado['date']));
                                    ?> 
                                </h4>
                            </div>
                            
                            <div class="panel-body">
                                <dl class="dl-horizontal">
                                    <dt>Data: </dt>
                                    <dd><?php echo $resultado['date']; ?> </dd>
                                    <dt>Concentração:</dt>
                                    <dd><?php echo $resultado['pretime']; ?></dd>
                                    <dt>Saída:</dt>
                                    <dd><?php echo $resultado['time']; ?></dd>
                                    <dt>Local:</dt>
                                    <dd><?php echo $resultado['start_city']; ?></dd>
                                    <dt>Destino: </dt>
                                    <dd><?php echo $resultado['final_city']; ?></dd>
                                    <dt>Servidor:</dt>
                                    <dd><?php echo $resultado['server_number']; ?></dd>
                                    <dt>Discord:</dt>
                                    <dd>https://discord.gg/U5N9gtk</dd>
                                    <dt>Canal PX:</dt>
                                    <dd><?php echo $resultado['px_channel']; ?></dd>
                                    
                                    
                                </dl>
                                
                            </div>
                            <div class="panel-footer">
                                <dt>Informações adicionais:</dt>
                                    <dd> <?php echo $resultado['instructions']; ?> </dd>
                                <h4> Rota do comboio: </h4>
                                <img src="https://media.discordapp.net/attachments/583884470986473472/596851905049919488/ets2_20190705_160605_00.png?width=832&height=468" class="img-responsive"> 
                            </div>

                        </div>

                        </div>
                    </div>
                    
                    
                    
                </div>
                
                <div class="col-sm-4">
                  
                  <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="text-center"> Administração </h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12 ">
                                    <button type="button" class="btn btn-primary btn-adm" data-toggle="modal" data-target="#modalComboios"> Gravar próximo Comboio </button> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="button" class="btn btn-primary btn-adm " data-toggle="modal" data-target="#modalColaborador"> Novo colaborador </button> 
                                </div>
                            </div>
                            
                        </div>
                        <div class="panel-footer">
                            
                        </div>
                    
                    </div>
                </div>
           </div>
            </div>
        </div>
        
        <hr>
        <footer id="rodape" class="container-fluid text-center">
            <div class="row align-items-center">
                <div class="col-sm-6">
                Auto Express Logistica™ <br> 2018 <br>
                    trucksbook.eu/company/13803
                    
                </div>
                <div class="col-sm-6">
                <img class="img-circle" src="https://static.tumblr.com/jjqbi6t/YWnpe5fxy/logo.png" height="120px">
                </div>
                
            
            </div>
        </footer>

    </body>
</html>
