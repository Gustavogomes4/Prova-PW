<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> cadastro de imagens </title>
</head>
<body>
	<form action="upload.php" enctype="multipart/form-data"method="post">
		<p>nome do diretorio: <input type="text" name="diretorio"></p>
		<p> enviar arquivo: <input name= "userFile" type="File"> </p>
	    <p> <button> enviar </button> </p>

	</form>
</body>
</html>