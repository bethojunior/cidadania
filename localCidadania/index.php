
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <title>Cidadania e amor</title>
        <link rel="icon" href="imagens/logo.png" type="image/x-icon" />
        <link href="https://fonts.googleapis.com/css?family=Muli|Open+Sans|PT+Sans|Poppins|Roboto|Titillium+Web" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded" rel="stylesheet">
        <link href="css/Bootstrap/css/bootstrap.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>
    <body>
<!--        <a href="../localPainel/index.php">Painel</a>-->
        <div class="div-1 col-lg-12 col-md-12 col-sm-12 ">
            <div class="col-lg-4 col-md-12 col-sm-12 divLogo ">
                <img class="logo" src="imagens/logo.png" >
            </div>
            
            <div class="row div-1 col-lg-8 col-md-12 col-sm-12">
                <a href="#">
                    <button class="btn1 btn btn-primary btn-lg " type="button">
<!--                        <span class="glyphicon glyphicon-tag"></span>-->
                        <i class="tiny material-icons">add</i><br>
                        <span class="span1">Nossas ações</span>
                    </button>
                </a>
                
                <a href="#">
                    <button class="btn2 btn btn-primary btn-lg " type="button">
<!--                        <span class="glyphicon glyphicon-tag"></span><br>-->
                       	<i class="tiny material-icons">format_align_left</i><br>
                        <span class="span1">Noticias</span>
                    </button>
                </a>   
                                 
                <a href="#">
                    <button class="btn3 btn btn-primary btn-lg " type="button">
<!--                    	<span class="glyphicon glyphicon-tag"></span><br>-->
                   		<i class="tiny material-icons">camera</i><br>
                    	<span class="span1">Fotos</span>
                    </button>
                </a>
            </div>
        </div>
    <!-- CAROUSEL -->
        <br> 
          <div class="col-lg-12 col-md-12 col-sm-12 divC">
              <section class="col-lg-12 col-sm-12 carousel1">
                    <div id="slide" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="slide" data-slide-to="0" class="active"></li>
                            <li data-target="slide" data-slide-to="1"></li>
                            <li data-target="slide" data-slide-to="2"></li>
                          </ol>
                        <?php
                            include("php/slide.php");
                        ?>
                        <a class="left carousel-control" href="#slide" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        </a>
                        <a class="right carousel-control" href="#slide" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        </a>

                  </div>
              </section> 
          </div> 
          
        <!-- fim do carousel -->               
        <div class="row">
            <div class="col-lg-3 col-md-11 div-2">
                <h1 class="h11">Nossas ações</h1>
                <section class="section-1"><br>
                    <?php
                        require_once("php/acoes.php");
                    ?>
                    <br>                        
                </section><br><br>
            </div> 
            
                <?php require_once("php/imagens.php"); ?>
                
                
            <div class="col-lg-8 col-md-12 divNoticia">
                <span class="tituloDivNoticias">
                    Últimas noticias
                </span>
                <div class="divNoticia2">
                    <span>
                        <?php 
                            require_once("php/noticias.php");
                        ?>
                    </span>
                </div>
            </div>  
        </div>

        <!-- FOOTER -->
        
        <div class="divFooter">

            <div class="footer1 col-lg-2 divTextoFooter1">
                <span class="spanFooter">Desenvolvido por Fábria 704.<br>Todos os diretos reservados.</span><br>
                <span class="spanFooter">&copy;2017</span>  
            </div>
            <div class="col-lg-2 divTextoFooter1 hid">
                <span class="textoFooter">lorem lisum On the other hand, we denounce with righteous indignation and dislike men</span>
            </div>

            <div class="col-lg-4 contato hid">
                <img class="iconFooter" src="imagens/tel.png">
                <span class="textoFooter"><a class="mail" href="telto:(88)35122814">(85)3511-9111</span>
                    
                <img class="iconFooter" src="imagens/mail.png">
                <span class="textoFooter"><a class="mail" href="mailto:fabrica704.gmail.com">fabrica704@gmail.com</a></span>
            </div>
            
            <div class="col-lg-2 hid">
                <span class="textoFooter">
                    <span>Nossas redes sociais</span><br>
                    <a href="https://www.facebook.com/"  target="_blank"><img class="iconFace" src="imagens/face.png"></a>
                    <a href="https://www.instagram.com/" target="_black"><img class="iconInsta" src="imagens/insta.png"></a>
                </span>
            </div>
            <div class="col-lg-2  divTextoFooter hid">
                <span class="textoFooter">On the other hand, we denounce with righteous indignation and dislike men w</span>
            </div>

        </div>
        

        
       <!-- script carrosel -->
        <script src="css/Bootstrap/js/jquery.js"></script>
        <script src="css/Bootstrap/js/bootstrap.js"></script>

        <script>
           $(function () {

              $('.carousel') .carousel();

           });
        </script>       
    </body>
</html>