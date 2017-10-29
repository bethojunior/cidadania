 <div class="carousel-inner" role="listbox">
<?php
    require_once("conexao.php");

    $caminho = "img/";
    $busca = mysqli_query($conexao , "SELECT * FROM imagemC order by id desc limit 3 ");
    $i = 1;
    while ($imagem = mysqli_fetch_array($busca) ){
        if($i == 1){
            echo "<div class='item active'>";
        }else{
            echo "<div class='item'>";
        }
        echo "<img class='imgC' src='../localPainel/uploadsC/".$imagem['imagem']."' >";
?>    
            <div class="carousel-caption tituloImagem">
                <!--?php echo "<h3 class=''>".$imagem['titulo']."</h3><hr>"; ?-->
            </div>
        </div>
  <?php
$i++;
    }
?>  
</div>