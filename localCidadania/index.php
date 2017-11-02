<!--
    DESENVOLVIDO POR FÁBRICA 704
    2017
    FORTALEZA - CE
    VERSÃO 1.0
-->

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
        <div class="row div-1 col-lg-12 col-md-12 col-sm-12 ">
            <div class="col-lg-4 col-md-12 col-sm-12 divLogo ">
                <img class="logo" src="imagens/logo.png" >
            </div>
            
            <div class="div-1 col-lg-8 col-sm-12">
                <img src="imagens/violao.png" class="imagemHead hid">
                <img src="imagens/pap.png" class="imagemHead1">
                <img src="imagens/planta.png" class="imagemHead1">
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
                
                
            <div class="col-lg-8 col-md-12 row divNoticia">
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
        <br class="hid">

        <!-- FOOTER -->
        
        <div class="divFooter row">

            <div class="col-lg-2 divTextoFooter1">
                <span class="spanFooter1">Desenvolvido por Fábria 704.<br>Todos os diretos reservados.</span><br>
                <span class="spanFooter1">&copy;2017</span>  
            </div>

            <div class="col-lg-1 hid"></div>
            <!--div class="col-lg-2 divTextoFooter1 hid">
                span class="textoFooter">lorem lisum On the other hand, we denounce with righteous indignation and dislike men</span
                <p></p>
            </div-->

            <div class="col-lg-4 contato ">
                <img class="iconFooter hid" src="imagens/tel.png">
                <span class="textoFooter hid"><a class="mail hid" href="telto:0800 275 6565">0800 275 6565</a></span>

                <img class="iconFooterTel" src="imagens/tel.png">
                <span class="textoFooter hid "><a class="mail hid" href="telto:(88)35119-9111">(88)3511-9111</a></span>

                <img class="iconFooterTel hid" src="imagens/tel.png">
                <span class="textoFooter hid"><a class="mail hid " href="telto:(88)988279642">(88)8827-9642</a></span>
                <hr>    
                <img class="iconFooter hid" src="imagens/mail.png">
                <span class="textoFooter hid"><a class="mail hid"  href="mailto:onelinamota@hotmail.com">onelinamota@hotmail.com</a></span>
                
                <span class="textoFooter1">
                    <a href="https://www.facebook.com/cidadaniaeamor"  target="_blank"><img class="iconFace" src="imagens/face.png"></a>
                    <a href="https://www.instagram.com/cidadaniaeamor/" target="_black"><img class="iconInsta" src="imagens/insta.png"></a>
                </span>
            </div>
            <div class="col-lg-1 hid divSpam2">
                <span class="spanFooter">
                    
                </span>
            </div>
            <div class="col-lg-2 mapa hid">   
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.3498526448675!2d-39.27977228522564!3d-7.200865994801341!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7a17ed7b447c941%3A0xd20ed80ff7db0ddf!2sR.+Sebasti%C3%A3o+R%C3%A9gis%2C+792+-+Aeroporto%2C+Juazeiro+do+Norte+-+CE!5e0!3m2!1spt-BR!2sbr!4v1509391777205"  width="280" height="120" frameborder="0" style="border:0" allowfullscreen></iframe>
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