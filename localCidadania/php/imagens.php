<head>
    <link href="css/font.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
</head>
<?php
    include("conexao.php");
    
    $caminho = "img/";
    $busca = mysqli_query($conexao , "SELECT * FROM imagem order by id desc limit 2 ");
    
    $i = 1;
    while ($imagem = mysqli_fetch_array($busca) ){
     ?>
	<div class="col-lg-4 divImagem col-md-12 col-sm-12" data-toggle="modal" data-target="#modalFoto<?php echo $i; ?>">
        <div class="tituloImagem1" >
           <?php 
               echo "<img class='imgAcao' src='../localPainel/uploads/".$imagem['imagem']."' >";  
            ?>
            <h3>
                <?php 
                   echo "<h3 class='nomeImagem'>".$imagem['titulo']."</h3>";
                ?>
                <i class="material-icons" class="span1">drag_handle</i>
                <!--span class="span1">Leia mais</span -->
                
            </h3>
        </div>
    </div>          
   <!-- Modal FOTO 1-->
    <div id="modalFoto<?php echo $i; ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
        <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <?php echo  "<h2 class='tituloModal'>".$imagem['titulo']."<h2>";
                    ?>
                </div>
                <div class="modal-body">
                    <?php 
                        echo "<img class='imgAcao' src='../localPainel/uploads/".$imagem['imagem']."' >";  
                        echo "<h3 class='textoModal'>".$imagem['texto']."</h3>";
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
 	
<?php
$i++;
    }
?>