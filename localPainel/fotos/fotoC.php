<?php 
    session_start();
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>   
        <title>Fotos</title>
        <link rel="shortcut icon" href="../imagens/logo.png" type="image/x-icon" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans|Ubuntu" rel="stylesheet">
        <link href="../css/styleFotos.css" rel="stylesheet">
        <link href="../frameWorks/Materialize/css/materialize.css" rel="stylesheet" />
        <!-- <link href="../frameWorks/font-awesome/css/font-awesome.css" rel="stylesheet" /> -->
    </head>
    <body>
        <nav class="nav1 nav-extended">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo tituloCentro">Fotos Slide</a>
            </div>
                <div class="nav-content">
                <ul class="tabs tabs-transparent">
                    <li class="tab"><a class="active" href="#1">Enviar fotos</a></li>
                    <!--<li class="tab"><a onclick="fotosModal()" href="#test2">Fotos</a></li>-->
                    <li class="tab"><a href="#2">Opções</a></li>
                    <li class="tab"><a onclick="sair()">Voltar</a></li>
                </ul>
            </div>
        </nav>

        <div id="1" class="row">
                <form  method="POST" action="../php/fotos/uploadFotosC.php" enctype="multipart/form-data">
                    <div class="div1 col l12 s12 ">
                        <!--input required class="file" type="file" name="file" multiple=""><br-->
                        <div class="file-field input-field">
                            <span class="span3">Procurar arquivo</span>
                            <span class="numeroMaximo1">20</span>/<span id="numeroTitulo">20</span>
                            <input  required class="file" type="file" name="file" multiple="">
                        </div>    
                        <input required class="" maxlength="20" name="tituloFoto" id="tituloImagem"  placeholder="Digite o titulo da imagem" ><br>
                        <input class="inputSubmit" type="submit" name="enviar" value="Enviar">
                    </div>
                </form>
        </div>

        <nav id="2" class="nav3 row">
            <form method="GET" action="../php/apagarFotosC.php">
                <div id="test3" class="">
                    <table class="striped">
                        <thead>
                            <tr class="corTr">
                                <th>Imagem</th>
                                <th>Apagar</th>
                            </tr>
                        </thead>
                        <tbody class="tbodyF">
                            <?php 
                                include("../php/fotos/opcoesFotosC.php");
                            ?>  
                        </tbody>
                    </table>
                </div>
            </form>
        </nav> 



        <!-- ALTERAR FOTOS 
        <div id="modalalterarfoto" class="modal">
            <div class="modal-content">
                <h4>Selecione a foto</h4>
                <form  method="POST" action="../php/fotos/editarFotos.php" enctype="multipart/form-data">
                    <div  class="div1 col l4 ">
                        input required class="file" type="file" name="file" multiple=""><br
                        <input required class="" name="tituloFotos"  placeholder="Digite o titulo da imagem" ><br>
                        <input class="inputSubmit" type="submit" name="enviar" value="Enviar">
                    </div>
                </form>
            </div>
            div class="sair">
                <a href="../adm.php"><i class="material-icons">arrow_back</i></a>
            </div-->
        
          

 <script src="../frameWorks/Materialize/js/jquery-3.2.1.js">
   $(".button-collapse").sideNav();
 </script>
 <script src="../frameWorks/Materialize/js/materialize.js"></script>
 <script src="../js/functions.js"></script>  
    
    </body>
</html>