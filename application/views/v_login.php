<html>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Fast/Login</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--<link rel="stylesheet" href="../bootstrap/4.1.3/css/bootstrap.min.css">-->
		<link rel="sortcut icon" href="../img/favicon.png" type="image/png" />

		<script type="text/javascript" src="../jQuery/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="../JS/menu.js"></script>
		<script src="../bootstrap/4.1.3/js/bootstrap.bundle.js"></script>
	</head>

	<body>
		<div id="Corpo-form-cad">
			<a href="../index.php">
				<img src="../img/S2.png" alt="logo" class="img-fluid mx-auto">
			</a>
			<h1>Entrar</h1>
			<form method="POST">
				<input class="form-control mr-sm-2 mt-3" type="email" name="email" placeholder="Usuário">
				<input class="form-control mr-sm-2 mt-3" type="password" name="senha" placeholder="Senha">
				<input type="submit" placeholder="Acessar">
				<a href="cadastro.php">Ainda não é inscrito! <strong>Cadastre-se</strong></a>
			</form>
		</div>
		<?php
			if (isset($_POST['email']))
			{
				$email =  addslashes($_POST['email']);
				$senha =  addslashes($_POST['senha']);

				//verificar se mcrypt_enc_self_test(td)ão todos preenchidos
				if (!empty($email) && !empty($senha)) 
				{	
					$u->conectar("fast_shopping","localhost","root","");
					if($u->msgErro == "")
					{	
						if($u->logar($email, $senha))
						{
							$_SESSION ['id_usuario'] = true;
							header("location: ../index.php");
							$estado = $email;
						}
						else
						{
							?>
							<div class="msg-erro">	
								 "Email e/ou senha estão incorretos";
							</div>
							<?php
						}
					}
					else
					{
						?>
						<div class="msg-erro">	
		                	<?php 
		                		echo "Erro com o banco: ".$u->msgErro; 
		                	?>
						</div>
						<?php
					}
				}
				else
				{
					?>
					<div class="msg-erro">	
		                "Preencha todos os campos!"
					</div>
					<?php
					
				}
			}
		?>
	</body>

</html>


