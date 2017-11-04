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