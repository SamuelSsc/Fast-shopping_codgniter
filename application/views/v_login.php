<html>
<link rel="stylesheet" type="text/css" href="<?= base_url("assets/css/estilo_login.css")?>">
<body>
	<div id="Corpo-form-cad">
		<a href="<?= base_url("Home")?>">
			<img src="<?= base_url("assets/img/S2.png")?>" alt="logo" class="img-fluid mx-auto">
		</a>
		<h1>Entrar</h1>
		<form id="loginuser">
			<fieldset>
				<div class="form-group">
					<input class="form-control" placeholder="Usuário" name="txtEmail" type="text" autofocus required>
				</div>
				<div class="form-group">
					<input class="form-control" placeholder="Senha" name="txtSenha" type="password" required >
				</div>
				<button type="submit" id="btnEntrar" class="btn btn-block btn-dark">Entrar</button>
			</fieldset>
		</form>
		<a href="<?= base_url("Usuario/cadastrar")?>">Ainda não é inscrito! <strong>Cadastre-se</strong></a>
	</div>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function() {
		$("#loginuser").submit(function(event) {
			$.ajax({
				type: "POST",
				url: "Login/logarAjax",
				data: $("#loginuser").serialize(),
				success: function (data) {
					if ($.trim(data) == "1"){
                        swal({
                            title: "Atenção !",
                            text: "Acesso liberado",
                            type: "success"
                        });
                        
                        window.location.href = "home";
                    }else{
                        swal({
                            title: "Atenção !",
                            text: "Acesso negado, usuário ou senha inválido!",
                            type: "error",
                        });
                        $("#loginuser").trigger('reset');
                    }
                },
                beforeSend: function() {
                    swal({
                        title: "Aguarde!",
                        text: "Carregando...",
                        imageUrl: "assets/img/gifs/preloader.gif",
                        showConfirmButton: false
                    });
                },
                error: function() {
                    alert("Deu Erro.")
                }
            });
            return false;
		})
	})
</script>


