<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Comentarios</title>
</head>
<body>
<div class="top_header">
	<div class="center" class="title">
	<h3>Comentarios</h3>
	</div>
</div>
<div class="content_c">
	<form action="guarda_comentario.php" method="post" id="form_comment">
		Nombre: <input type="text" name="nombre"><br><br>
		Apellido paterno: <input type="text" name="apaterno"><br><br>
		Apellido materno: <input type="text" name="amaterno"><br><br>
		Correo electronico: <input type="mail" name="mail"><br><br>
		<p>Comentarios</p>
		<textarea rows="4" cols="50" name="comment" form="form_comment">Introduzca sus comentarios aqui...</textarea>
		<br><br>
		<input type="submit" value="Enviar">
	</form>
	<form>
	<br>
	<input type="button" value="Regresar" onclick="window.location.href='index.php'" />
	</form> 
</div>

<div class="center">
<div class="bottom">
<a href="index.php">Inicio</a>
<a href="http://www.unam.mx">UNAM</a>
<a href="http://www.fca.unam.mx">FCA</a>
<a href="creditos.html">Creditos</a>
</div>
</div>
</body>
</html>
