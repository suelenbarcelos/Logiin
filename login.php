<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="stilo.css">
	<title>login</title>
</head>
<body>
	
	<div class="form-login">

		<form method="post" action="verifica_usuario.php?acao=login">
			
			<input type="text"     name="login" placeholder="Login">
			<br />
			<input type="password" name="senha" placeholder="Senha">
			<br />
			<input type="submit"   name="login_form" value="Acessar">

		</form>

	</div>
	
</body>
</html>