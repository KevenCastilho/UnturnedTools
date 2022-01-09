<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Fom</title>
</head>
<body>

<form action="hidden.php" method="POST">
<label for="tipo">Tipo: </label>
	<select name="tipo" type="text" id="tipo">
		<option name="tipo" value="/">/</option>
		<option value="@">@</option>
	</select></br>
</label>
<label for="comando">Comando: </label>
	<select type="text" name="comando" id="comando">
		<option value="Command1">Comando 1</option>
		<option value="Command2">Comando 2</option>
	</select>
</label></br>
<label for="nick">Nick
<input type="text" name="nick" id="nick"></input> 
</label></br>
<input type="submit" value="Criar Comando" id="enviar">
</form>
<?php

echo $_POST['tipo']; $_POST['comando']; $_POST['nick'];

?>
</body>
</html>