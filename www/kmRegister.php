<?php
    require_once ("conexao.php");
    include ("seguranca.php");
    protegePagina();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Auto Express Logística | Colaboradores</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/kmRegister.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="shortcut icon" href="images/logo.ico">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    
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

    <script> 
    $(window).scroll(function() {
        $(".slideanim").each(function(){
            var pos = $(this).offset().top;

            var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
                $(this).addClass("slide");
            }
        });
    });
    
    
    </script>
    <script>
    $(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

});
    
    </script>
   

</head>
<!--    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">-->
    
    <body>
        
<!--
        <nav class="navbar navbar-default fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" id="sidebarCollapse"> 
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li> <a href="index.html"> INÍCIO </a></li>
                    
                    </ul>
                </div>
                
            </div>
        </nav>
-->
        <nav class="navbar navbar-expand-sm bg-dark">
            <a class="navbar-brand" href="#">
                <img src="images/logo.png" alt="logo" style="width: 60px;">
            </a>
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collabpsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                      <button type="button sucess" id="homeButton" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Inicio</span>
                        </button>
                    </li>
                    
                </ul>
            </div>
            <button type="button" id="sidebarCollapse" class="btn btn-info">
                <i class="fas fa-align-left"></i>
                <span>Menu</span>
            </button>

        </nav>
        
        


        
        <div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h4>Gerenciamento de KM </h4>
        </div>

        <ul class="list-unstyled components">
            <p>MENU</p>
            <li>
               <a href="addkm.php"> Lançamento de KM</a>
            </li>
            <li>
                <a href="km.php">Resumo de KM</a>
            </li>
                
            
        </ul>
    </nav>
            
            
            
            
            
            <div class="container-fluid container-km">
        
            <div class="km-menu-header">
            
                <div class="row justify-content-between">
                
                    <div class="col-sm-8">
                       <center><h3> Lançamento de KM <p> <?php $date = date("d/m", strtotime("-1 week"));
                        echo $date ," até ", date("d/m"); ?> </p>  </h3> </center>
                        <hr>
                    
                    </div>
                </div>
            
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <form action="registerKM.php" method="POST">
                                    <div class="form-row">
                                        <div class="form-group col-sm-12">
                                            <label for='inputUserName'> Selecione o colaborador </label>
                                            <select class="form-control form-control-lg" name="user" id="user" required>
                                                <?php 
                                                    global $_SG;
                                                    $date = date("Y-m-d", strtotime("-1 week"));
                                                    $sql = "SELECT id, name, trucksbook_nick FROM user WHERE active = 1 AND id NOT IN (SELECT user_id_km FROM km WHERE begin_date = '".$date."')";
                                                    $query = mysqli_query($_SG['link'],$sql);
                                                    while ($resultado = $query->fetch_assoc()){

                                                ?>
                                                <option value="<?php echo $resultado['id']; ?>"> <?php echo $resultado['name'] , " | ",$resultado['trucksbook_nick']; ?> </option>

                                                <?php 
                                                    }
                                                ?>

                                            </select>
                                        </div>

                                    </div>
                                  <div class="form-row">
                                      <div class="form-group col-sm-12">
                                            <label for="inputPassword">KM feitos na semana: </label>
                                            <input type="number" class="form-control" id="km" name="km" required>
                                      </div>
                                  </div>

                                  <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
                                </form>


                </div>
                <div class="col-sm-4">
                    <div class="card">
                      <div class="card-body">
                        <h4> Usuarios sem lançamento no período </h4>
                          <?php 
                            global $_SG;
                            $date = date("Y-m-d", strtotime("-1 week"));
                            $sql = "SELECT name, trucksbook_nick FROM user WHERE id NOT IN (SELECT user_id_km FROM km WHERE begin_date = '".$date."')";
                            $query = mysqli_query($_SG['link'],$sql);
                            while ($resultado = $query->fetch_assoc()){
                          ?>
                          <ul> 
                        <li><?php echo $resultado['name'], " | ", $resultado['trucksbook_nick']; ?> </li>
                           </ul>     
                        <?php 
                            }
                        ?>
                      </div>
</div>  
                
                </div>
                </div>
        
        
        </div>

</div> 
        
    <hr>
        
        <footer class="container-fluid text-center">
            <div class="row align-items-start">
                <div class="col-sm-6">
                Auto Express Logistica™ <br> 2018 <br>
                    trucksbook.eu/company/13803
                    
                </div>
                <div class="col-sm-6">
                <img src="images/logo.png" height="80px">
                </div>
                
            
            </div>
        </footer>

    </body>
</html>

