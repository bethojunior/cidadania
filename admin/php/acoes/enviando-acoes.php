
<meta charset="utf-8" />
<script src="../../js/functions.js"></script>
<link href="../../css/loader.css" rel="stylesheet"/>

<?php
	require_once("../conexao.php");
	$conexao = mysqli_connect($host , $user , $pass, $banco ) or die (mysqli_error());


//NOTICIA 1

	if (isset($_POST['nomeAcao']) || isset($_POST['acoes']) || isset($_POST['file'])){
		$nome = $_POST['nomeAcao'];
		$acoes = $_POST['acoes'];
		$imgExt = strtolower(pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION));
		$imagem =$nome.".".$imgExt;
	}

	// if (isset($_POST['nome']) || isset($_POST['noticia'])){
	if ($nome == "" || $acoes == ""){
		// var_dump($_POST['nome']);
		echo "<strong><h1>Você precisa preencher todos os campos. Por favor tentar novamente.</h1></strong>";
		echo "<script>FailedAcoes()</script>";
	} else {
		$sql = "INSERT INTO acoes (nome , acoes , imagem ) values ('$nome' , '$acoes' , '$imagem')";

		$exc = mysqli_query($conexao , $sql) or die (mysqli_error());

		//echo "<strong><h1><center>Postado com sucesso! Por favor aguarde uns segundos.</center></h1></strong>";
		echo "<script>SucessAcoes()</script>";
		echo "<div class='loader'></div>";

	}

	// UPLOAD IMAGENS //////////////////////
	uploadImage($_FILES['file'],$nome);
	function uploadImage($file, $nome){
		$imgFile = $file['name'];
		$tmp_dir = $file['tmp_name'];
		$imgSize = $file['size'];
		if(!empty($imgFile)){
		   $upload_dir = '../uploads_fotos_acoes/'; // upload directory
		 
		   $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		  
		   // valid image extensions
		   $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		  
		   // RENOMEAR IMAGEM
		$userpic = $nome.".".$imgExt;
		    
		   // allow valid image file formats
		   if(in_array($imgExt, $valid_extensions)){   
		    // Check file size '5MB'
		    if($imgSize < 5000000)    {
		     	move_uploaded_file($tmp_dir,$upload_dir.$userpic);
		     	//echo '<div class="loader"></div>';
                //echo '<script>SucessFotos()</script>';
                //echo '<h1><center><strong>Upload feito com Sucesso!!</strong></center></h1>';
		    }
		    else{
		     	$errMSG = "<h1><strong><center>Desculpe, sua imagem é muito grande.</center></strong></h1>";
		    }
		   }
		   else{
		    	$errMSG = "<h1><strong><center>Desculpe, apenas JPG, JPEG, PNG & GIF.</center></strong></h1>";  
		   }
		}
        
        else{
           // echo '<h1><center><strong>Desculpe, algo deu errado, favor tente novamente...</strong></center></h1>';
			//echo '<script>FailedFotos()</script>';
		}
	}


?>