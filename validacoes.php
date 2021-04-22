<?php  
	$usuario = isset($_POST['txtUser']) ? $_POST['txtUser'] : '';
	$senha = isset($_POST['txtSenha']) ? $_POST['txtSenha'] : '';

	if(empty($usuario) || empty($senha)) {
		echo "<script>alert('Preencha todos os campos!')</script>";
		echo "<script>window.location.href = 'login.php';</script>";
	}
	if ($usuario == 'Admin' && $senha == '123456') {
		echo "<script>alert('Cadastro efetuado com sucesso!'</script>";
		echo "<script>window.location.href = 'entrou.php'</script>";
	} else {
		echo "<script>window.location.href = 'login.php'</script>";
	}

?>