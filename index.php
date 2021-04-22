<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>TELA LOGIN</title>
		<meta charset="utf-8">
		<style type="text/css">
			body {
				background: url(assets/img/fundo.png);
				background-size: cover;
			}
			.login {
				font-family: courier;
				background: rgba(255, 255, 255, 0.7);
				padding: 1em;
				font-size: 1.5em;
			}
			.login:first-child {
				border-top-left-radius: 1em;
				border-top-right-radius: 1em;
			}
			.login:last-child {
				border-bottom-left-radius: 1em;
				border-bottom-right-radius: 1em;
			}
			button {
				width: 100%;
				padding: 1em;
				background: #fff;
				border-radius: 1em;
				cursor: pointer;
				outline-offset: 0px;
   				outline: none;
			}
			input {
				float: right;
				margin-left: 1em;
				padding: 0.3em;
				border-radius: 1em;
				outline-offset: 0px;
   				outline: none;
			}
			form {
				position: absolute;
				left: 50%;
				top: 50%;
				transform: translate(-50%, -50%);
			}
		</style>
	</head>
	<body>
		<form method="post" action="validacoes.php">
			<div class="login">
				<label for="txtUser">Usuário: </label>
				<input type="text" name="txtUser" id="txtUser">
			</div>
			<div class="login">
				<label for="txtSenha">Senha: </label>
				<input type="password" name="txtSenha" id="txtSenha">
			</div>
			<div class="login">
				<button name="btnEnviar" id="btnEnviar">Enviar</button>
			</div>
		</form>

	</body>
</html>
