    
    //LOGIN

    	function loginSucess(){
    		setTimeout("window.location='../adm.php'", 2000);
    	}

    	function loginFailed(){
    		setTimeout("window.location='../index.php'", 2000);
    	}


    	//NOTICIAS && APAGAR NOTICIAS
        function SucessNoticias(){
            setTimeout("window.location='../../noticias/alterar-noticias.php'",2000);
        }

        function FailedNoticias(){
            setTimeout("window.location='../../noticias/alterar-noticias.php'",2000);
        }


        //UPLOAD FOTOS
        function SucessFotos(){
        	setTimeout("window.location='../../fotos/fotos.php'",2000);
        }

        function FailedFotos(){
        	setTimeout("window.location='../../fotos/fotos.php'",2000);
        }

        // FOTOS CARROCEL   
        function SucessFotosC(){
            setTimeout("window.location='../../fotos/fotoC.php'",2000);
        }

        function FailedFotosC(){
            setTimeout("window.location='../../fotos/fotoC.php'",2000);
        }



        //AÇÕES && APAGAR AÇÕES
        function SucessAcoes(){
        	setTimeout("window.location='../../acoes/alterar-acoes.php'",2000);
        }

        function FailedAcoes(){
            setTimeout("window.location='../../acoes/alterar-acoes.php'",2000);
            
        }

        //ALTERAR NOTICIAS
        function SucessAlterarNoticia(){
            setTimeout("window.location='../../noticias/alterar-noticias.php'",2000);
        }

        function FailedAlterarNoticias(){
            setTimeout("window.location='../../noticias/alterar-noticias.php'",2000);
        }

        ////ALTERAR AÇÕES
        function SucessAlterarAcoes(){
            setTimeout("window.location='../../acoes/alterar-acoes.php'",2000);
        }

        function FailedAlterarAcoes(){
            setTimeout("window.location='../../acoes/alterar-acoes.php'",2000);
        }

        //VOLTAR PARA MENU
        function sair(){
            setTimeout("window.location='../adm.php'",300);
        }


        ////////////////////////////////////// MODAIS //////////////////////////////////////////


        //////////// ABRIR MODAL COM IMAGEM DA NOTICIA
        function imagemNoticia(){
            
            $('#modalNoticia').modal('open');
        }


        ////////MODAL ALTERAR OPÇÕES
        function modalAlterarAcoes(id){
            $.ajax({
                url: "../php/acoes/receber-acoes.php",
                type: "post",
                data: {"id" : id} ,
                success : function(response){
                    console.log(response);
                    var acao = JSON.parse(response);
                    document.getElementById('idModalAcao').value = acao.id;
                    document.getElementById("nomeModalAcao").value = acao.nome;
                    document.getElementById("acaoModalAcao").innerHTML = acao.acoes;
                    $('#modalOpcoes').modal('open');
                }

            });

        }

        ////////MODAL ALTERAR AÇÕES
        function alterarNoticia(id){
            $.ajax({
                url: "../php/noticias/receberNoticia.php",
                type: "post",
                data: {"id" : id} ,
                success : function(response){
                    console.log(response);
                    var noticia = JSON.parse(response);
                    document.getElementById('idModal').value = noticia.id;
                    document.getElementById("nomeModal").value = noticia.nome;
                    document.getElementById("noticiaModal").innerHTML = noticia.noticia;
                    $('#modalalterarNoticia').modal('open');
                }

            });

        }
        function alterarFoto(id){
            $.ajax({
                url: "../php/fotos/receberFoto.php",
                type: "post",
                data: {"id" : id} ,
                success : function(response){
                    console.log(response);
                    var imagem = JSON.parse(response);
                    document.getElementById('idFoto').value = imagem.id;
                    document.getElementById("tituloFotos").value = imagem.titulo;
                    document.getElementById("textoFotos").innerHTML = imagem.texto;
                    $('#modalalterarfoto').modal('open');
                }

            });

        }

        //CONTAGEM DE CARACTERES NOTICIAS
        if( document.getElementById('noticia')!= null){
            document.getElementById('noticia').addEventListener("keydown" , function() {
                var quantidade = 250;
                var contagem = document.getElementById('noticia').value.length;

                document.getElementById('numeros').innerHTML= quantidade - contagem;

        });
        }

        //CONTAGEM DE CARACTERES MODAL 
        //INPUT NOME DA NOTICIA
        if( document.getElementById('nome')!= null){
            document.getElementById('nome').addEventListener("keydown" , function() {
                var quantidade = 20;
                var contagem = document.getElementById('nome').value.length;

                document.getElementById('numerosTitulo').innerHTML= quantidade - contagem;

            });
        }

        if(document.getElementById('nomeModal')!= null){
            document.getElementById('nomeModal').addEventListener("keydown" , function() {
                var quantidade = 20;
                var contagem = document.getElementById('nomeModal').value.length;

                document.getElementById('numerosNomeModal').innerHTML= quantidade - contagem;
            });
        }

        //TEXT AREA

        if( document.getElementById('noticiaModal')!= null){
            document.getElementById('noticiaModal').addEventListener("keydown" , function() {
                var quantidade = 250;
                var contagem = document.getElementById('noticiaModal').value.length;

                document.getElementById('numerosModal').innerHTML= quantidade - contagem;

            });
        }

        //CONTAGEM MODAL FOTOS SLIDE

        if( document.getElementById('tituloFotoC')!= null){
            document.getElementById('tituloFotoC').addEventListener("keydown" , function() {
                var quantidade = 30;
                var contagem = document.getElementById('tituloFotoC').value.length;

                document.getElementById('numerosTituloFotoC').innerHTML= quantidade - contagem;

            });
        }

                //CONTAGEM DE CARACTERES AÇÕES
        if(document.getElementById('acoes')!= null){
            document.getElementById('acoes').addEventListener("keydown" , function(){
                var quantidade = 250;
                var contagem = document.getElementById('acoes').value.length;

                document.getElementById('numeros').innerHTML = quantidade - contagem;
            });

        }
        
        //CONTAGEM DE CARACTERES NOME AÇÃO
        if( document.getElementById('nomeAcao')!= null){
            document.getElementById('nomeAcao').addEventListener("keydown" , function() {
                var quantidade = 20;
                var contagem = document.getElementById('nomeAcao').value.length;

                document.getElementById('contagemAcao').innerHTML= quantidade - contagem;

            });
        }

        //CONTAGEM DE CARACTERES MODIFICAÇ AÇÃO
        if( document.getElementById('nomeModalAcao')!= null){
            document.getElementById('nomeModalAcao').addEventListener("keydown" , function() {
                var quantidade = 20;
                var contagem = document.getElementById('nomeModalAcao').value.length;

                document.getElementById('contagemModalAcao').innerHTML= quantidade - contagem;

            });
        }

        ///////CONTAGEM  FOTO TEXTO
        if( document.getElementById('tituloImagem')!= null){
            document.getElementById('tituloImagem').addEventListener("keydown" , function() {
                var quantidade = 20;
                var contagem = document.getElementById('tituloImagem').value.length;

                document.getElementById('numeroTitulo').innerHTML= quantidade - contagem;

            });
        }

        /////TEXTO

        if( document.getElementById('textoImagem')!= null){
            document.getElementById('textoImagem').addEventListener("keydown" , function() {
                var quantidade = 500;
                var contagem = document.getElementById('textoImagem').value.length;

                document.getElementById('numeroTexto').innerHTML= quantidade - contagem;

            });
        }






        /////////MODAL AÇÕES

        function imagemAcao(){
            $('#modalAcao').modal('open');
        }

        ///////MODAL FOTOS
        function fotosModal(){
            $('#modalFotos').modal('open');
        }

        function modalOpcoes(){
             $('#modalOpcoes').modal('open');
        }

        //ALTERAR FOTOS

        function modalalterarfoto(){
            $('#modalalterarfoto').modal('open');
        }

        /////////MODAL FOTOS DE AÇÃO ////////////////////////////

        function fotosModalAcao(){
             $('#fotosModalAcao').modal('open');
        }      

        ///////// MODAL ENVIAR FOTOS
        //function enviarFotos(){
        //     $('#modalenviarFotos').modal('open');
        //}

        function enviarFotosC(){
             $('#modalenviarFotosC').modal('open');
        }
  



        










