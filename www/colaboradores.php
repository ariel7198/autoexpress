<!DOCTYPE html>
<html lang="en">
<head>
  <title> Auto Express Logística | Colaboradores</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/general.css">
  <link rel="stylesheet" href="css/colaboradores.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="shortcut icon" href="images/logo.ico">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    
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
   

</head>
<!--    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">-->
    
    <body>
        
        <script> 
        $(function (){
            $("#header").load("header.php");
            $("#footer").load("footer.html");
        });
    </script>
    <div id="header"> </div>
        
        <div class="jumbotron text-center">
            <p>Auto Express</p>
            <br>
            <h1>Colaboradores</h1>
        </div>
        
        <div class="container text-center">

            <h2> Conheça nossa equipe </h2>
            <hr>

            <div class="container-equipe">
                <h4 class="title-cargo"> Diretoria e Gerência </h4>
                
                <div class="container-diretoria grid-item">
                    <div class="card-cargo">
<!--
                        <div class="title-colaborador">
                            Luiz Fernando Sena <br> <div class="badge badge-diretoria"> Diretoria </div> 
                        </div>
                        <div class="colaborador-foto">
                            <img src="images/colaboradores/nandinho2.png" class="colaborador-img">
                        </div>
-->
                        <img src="images/colaboradores/nandinho_cracha.png" class="cracha_img"> 
                    
                    </div>
                    <div class="card-cargo">
<!--
                        <div class="title-colaborador">
                            Rinaldo Silva <br> <div class="badge badge-diretoria"> Diretoria </div> 
                        </div>
                        <div class="colaborador-foto">
                            <img src="images/colaboradores/rinaldo.jpeg" class="colaborador-img">
                        </div>
-->
                        <img src="images/colaboradores/rinaldo_cracha.png" class="cracha_img">
                    
                    </div>
                    <div class="card-cargo">
<!--
                        <div class="title-colaborador">
                            Ariel Campos <br> <div class="badge badge-gerencia-geral"> Gerente Geral </div> 
                        </div>
                        <div class="colaborador-foto">
                            <img src="images/colaboradores/ariel.PNG" class="colaborador-img">
                        </div>
-->
                        <img src="images/colaboradores/ariel_cracha.png" class="cracha_img">
                    </div>
                </div>
                
                
                
                <h4 class="title-cargo"> Gerência de comboio </h4>
                
                <div class="container-gerencia grid-item">
                    <div class="card-cargo">
<!--
                        <div class="title-colaborador">
                            Gaguzão <br> 
                            <div class="badge badge-comboio"> Gerente de Comboio </div> 
                        </div>
                        <div class="colaborador-foto">
                            <img src="images/colaboradores/gaguzao.PNG" class="colaborador-img">
                        </div>
-->
                         <img src="images/colaboradores/gaguzao_cracha.png" class="cracha_img">
                    </div>
                    <div class="card-cargo">
<!--
                        <div class="title-colaborador">
                            MathBru <br> 
                            <div class="badge badge-comboio"> Gerente de Comboio </div> 
                        </div>
                        <div class="colaborador-foto">
                            <img src="images/colaboradores/mathbru.PNG" class="colaborador-img">
                        </div>
-->
                        <img src="images/colaboradores/mathbru_cracha.png" class="cracha_img">
                    
                    </div>
                </div>
                
                
                <h4 class="title-cargo"> Recursos Humanos e Recrutamento </h4>
                <div class="container-rh grid-item">
                    <div class="card-cargo">
<!--
                        <div class="title-colaborador">
                            Netolee <br> <div class="badge badge-rh"> Recursos Humanos </div> 
                        </div>
                        <div class="colaborador-foto">
                            <img src="images/colaboradores/netolee.PNG" class="colaborador-img">
                        </div>
-->
                         <img src="images/colaboradores/netolee_cracha.png" class="cracha_img">
                    
                    </div>
<!--
                    <div class="card-cargo">
                        <div class="title-colaborador">
                            Leuzinho <br> <div class="badge badge-rh"> Recursos Humanos </div> 
                        </div>
                        <div class="colaborador-foto">
                            <img src="images/colaboradores/default.png" class="colaborador-img">
                        </div>
                    
                    </div>
-->
                    <div class="card-cargo">
<!--
                        <div class="title-colaborador">
                            Irineu <br> 
                            <div class="badge badge-recrutamento"> Recrutamento </div> 
                        </div>
                        <div class="colaborador-foto">
                            <img src="images/colaboradores/default.png" class="colaborador-img">
                        </div>
-->
                        <img src="images/colaboradores/irineu_cracha.png" class="cracha_img">
                    </div>
                </div>
            </div>
            

        </div>
        

        
        
    <hr>
        
        <div id="footer"></div>

    </body>
</html>
