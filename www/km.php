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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/km.css">
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

    <script type="text/javascript">
        jQuery(function () {
            jQuery(window).scroll(function () {
                if (jQuery(this).scrollTop() > 690) {
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
            <h3>Gerenciamento de KM </h3>
        </div>

        <ul class="list-unstyled components">
            <p>MENU</p>
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#">Home 1</a>
                    </li>
                    <li>
                        <a href="#">Home 2</a>
                    </li>
                    <li>
                        <a href="#">Home 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">Pages</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Page 1</a>
                    </li>
                    <li>
                        <a href="#">Page 2</a>
                    </li>
                    <li>
                        <a href="#">Page 3</a>
                    </li>
                </ul>
            </li>
            
        </ul>
    </nav>
            <div class="container-fluid container-km-table">
        
            <div class="km-menu-header">
            
                <div class="row justify-content-between">
                
                    <div class="col-sm-6">
                       <h1> Tabela de KM </h1>
                    
                    </div>
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-warning float-right">Algum uso para o botão</button>
                    
                    </div>
                </div>
            
            </div>
            <div class="col-sm-12">
                <table id="editableTable" class="table table-striped">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">NOME</th>
                      <th scope="col">META</th>
                      <th scope="col">FEITO</th>
                      <th scope="col">DE</th>
                      <th scope="col">ATE</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php   
                        global $_SG;
                        $sql = "SELECT us.name as us_name, km.id as km_id, km.goal, km.done, km.begin_date, km.end_date, km.user_id_km, us.id as us_id FROM km as km INNER JOIN user as us WHERE km.user_id_km = us.id AND begin_date BETWEEN '2019-08-26' AND '2019-08-31'";
                        $query = mysqli_query($_SG['link'],$sql);
                        while ($tabela = mysqli_fetch_assoc($query)){  ?>
                      <tr id="<?php echo $tabela ['km.id']; ?>">
                        <th scope="row"></th>
                          <td><?php echo $tabela['us_name']; ?></td>
                          <td><?php echo $tabela['goal']; ?></td>
                          <td><?php echo $tabela['done']; ?></td>
                          <td><?php echo $tabela['begin_date']; ?></td>
                          <td><?php echo $tabela['end_date']; ?></td>
                      </tr>
                      <?php } ?>
                    
                  </tbody>
                </table>


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

