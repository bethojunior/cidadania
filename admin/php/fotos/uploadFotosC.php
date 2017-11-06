
<meta charset="utf-8" />
<script src="../../js/functions.js"></script>
<link href="../../css/loader.css" rel="stylesheet"/>

<?php
	require_once("../conexao.php");
	require '../lib/WideImage.php';
	$conexao = mysqli_connect($host , $user , $pass, $banco ) or die (mysqli_error());


//NOTICIA 1

	if (isset($_POST['tituloFoto']) || isset($_POST['file'])){
		$titulo = $_POST['tituloFoto'];
		$imgExt = strtolower(pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION));
		$imagem =$titulo.".".$imgExt;
	}

	// if (isset($_POST['nome']) || isset($_POST['noticia'])){
	if ($titulo == ""){
		// var_dump($_POST['nome']);
		echo "Houve um erro";
		echo "<script>FailedFotosC()</script>";
	} else {
		$sql = "INSERT INTO imagemc (titulo , imagem ) values ('$titulo', '$imagem')";

		$exc = mysqli_query($conexao , $sql) or die (mysqli_error());

		//echo "<strong><h1><center>Postado com sucesso!</center></h1></strong>";
		echo "<script>SucessFotosC()</script>";
		//echo"ok";
		echo "<div class='loader'></div>";

	}

	// UPLOAD IMAGENS //////////////////////
	uploadImage($_FILES['file'],$titulo);
	function uploadImage($file, $titulo){
		$imgFile = $file['name'];
		$tmp_dir = $file['tmp_name'];
		$imgSize = $file['size'];
		if(!empty($imgFile)){
		   $upload_dir = '../../uploadsC/'; // upload directory
		 
		   $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		  
		   // valid image extensions
		   $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		  
		   // RENOMEAR IMAGEM
		$userpic = $titulo.".".$imgExt;
		    
		   // allow valid image file formats
		   if(in_array($imgExt, $valid_extensions)){   
		    // Check file size '5MB'
		    if($imgSize < 5000000)    {
		     	move_uploaded_file($tmp_dir,$upload_dir.$userpic);

                //IMAGENS SMALL

                $img = WideImage::load($upload_dir.$userpic);
                //REDIMENCIONAR IMAGEM
                $red = $img->resize(200,200);
                //SALVANDO EM QUALQUER FORMATO
                $red->saveToFile('../../wideImagens/small/'.$userpic);


                //IMAGENS MEDIUM

                $img = WideImage::load($upload_dir.$userpic);
                //REDIMENCIONAR IMAGEM
                $red = $img->resize(300,300);
                //SALVANDO EM QUALQUER FORMATO
                $red->saveToFile('../../wideImagens/medium/'.$userpic);
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
            echo '<h1><center><strong>Desculpe, algo deu errado, favor tente novamente...</strong></center></h1>';
			//echo '<script>FailedFotos()</script>';
		}
	}


?>