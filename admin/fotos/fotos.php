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
                <a href="#" class="brand-logo tituloCentro">Fotos</a>
            </div>
                <div class="nav-content">
                <ul class="tabs tabs-transparent">
                    <li class="tab"><a class="active" href="#1">Enviar fotos</a></li>
                    <!--<li class="tab"><a onclick="fotosModal()" href="#test2">Fotos</a></li>-->
                    <li class="tab"><a href="#2">Opções</a></li>
                    <li class="tab"><a onclick="sair()">Voltar</a></li>
                </ul>
            </div>
    <!--footer class="footer">
        <a href="../adm.php"><i class="small material-icons ">arrow_back</i></a>
    </footer-->
        </nav>

        <div id="1">
            <div class="row">
                <form  method="POST" action="../php/fotos/uploadFotos.php" enctype="multipart/form-data">
                    <div class="div1 col l12 s12 ">
                        <!--input required class="file" type="file" name="file" multiple=""><br-->
                        <div class="file-field input-field">
                            <span class="span3">Procurar arquivo</span><br><br>
                            <span class="numeroMaximo1">20</span>/<span id="numeroTitulo">20</span>
                            <input  required class="file" type="file" name="file" multiple="">
                        </div>    
                        <input required class="" maxlength="20" name="tituloFoto" id="tituloImagem"  placeholder="Digite o titulo da imagem" ><br>
                        <span class="numeroMaximo">500</span>/<span id="numeroTexto">500</span> 
                        <textarea required class="textArea" maxlength="500" id="textoImagem" name="textoFoto" placeholder="Digite aqui"></textarea>
                        <br><br>
                        <input class="inputSubmit" type="submit" name="enviar" value="Enviar">
                    </div>
                </form>
            </div>
        </div>

        <nav id="2" class="nav3">
            <form method="GET" action="../php/apagar-fotos.php">
                <div id="test3" class="">
                    <table class="striped">
                        <thead>
                            <tr class="corTr">
                                <th>Imagem</th>
                                <th>Titulo</th>
                                <th>Comentário</th>
                                <th>Apagar</th>
                            </tr>
                        </thead>
                        <tbody class="tbodyF">
                            <?php 
                                include("../php/fotos/opcoesFotos.php");
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
                        <textarea required class="textArea" name="textoFotos" placeholder="Digite "></textarea>
                        <hr>
                        <input class="inputSubmit" type="submit" name="enviar" value="Enviar">
                    </div>
                </form>
            </div>
            div class="sair">
                <a href="../adm.php"><i class="material-icons">arrow_back</i></a>
            </div-->
        </div>
          

    <script src="../frameWorks/Materialize/js/jquery-3.2.1.js" ></script>
    <script src="../js/functions.js"></script>
    <script src="../frameWorks/Materialize/js/materialize.js"></script>
    <!--script>
        $('#modalenviarFotos').modal('open');
    </script-->
    </body>
</html>