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
        <?php 
            include ("view/header/header.php");
    
            include ("view/carousel/carousel.php");
 
            include ("view/body/body.php");

            include ("view/footer/footer.php");
        ?>
        
        <script src="css/Bootstrap/js/jquery.js"></script>
        <script src="css/Bootstrap/js/bootstrap.js"></script>
        <script>
           $(function () {

              $('.carousel') .carousel();

           });
        </script>       
    </body>
</html>