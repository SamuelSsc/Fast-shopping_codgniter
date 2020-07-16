<link rel="stylesheet" type="text/css" href="<?= base_url("assets/css/estilo.css")?>">
<body>
	<div id="Corpo-form-cad">
		<a href="<?= base_url("Home")?>">
			<img src="<?= base_url("assets/img/S2.png")?>" alt="logo" class="img-fluid mx-auto">
		</a>
		<h1>Cadastrar</h1>
		<form id="cadastroUser">
			<fieldset>
				<div class="form-group">
					<input class="form-control mr-sm-2 mt-3" type="text" name="nome" placeholder="Nome Completo" maxlength="30">
				</div>
				<div class="form-group">
					<input class="form-control mr-sm-2 mt-3" type="email" name="email" placeholder="Email" maxlength="60">
				</div>
				<div class="form-group">
					<input class="form-control mr-sm-2 mt-3" type="password" name="senha" placeholder="Senha" maxlength="15">
				</div>
				<div class="form-group">
					<input class="form-control mr-sm-2 mt-3" type="password" name="confsenha" placeholder="Confirmar Senha" 
					maxlength="15">
				</div>
				<button type="submit" id="btnEntrar" class="btn btn-block" style="margin-left: 10px; background: #000; color: #fff;">Cadastrar</button>
			</fieldset>
		</form>
	</div>
</body>

<script>
	$(document).ready(function(){
    	$("#cadastroUser").submit(function(){
			if($("#senha").val() != $("#confsenha").val()){
				swal({
					title: "Atenção!",
					text: "Senhas incompatíveis",
					type: "error",
				});
				return false;
			}else{
				$.ajax({ //abrindo o ajax onde estamos pegando o método os dados através de post, onde enviamos para a controller usuario na função cadastrar
					type: "POST",
					url: 'cadastrarUser',
					data: $("#cadastroUser").serialize(),
					success: function(data){
						if ($.trim(data) == 1 ) 
						{	
							swal({title:"OK!", text: "Dados salvos com sucesso", type:"success"});
							const base_url = "<?= base_url()?>";
							window.location.href = base_url + "Login";
						}else if($.trim(data) == 2 ){
							swal({title:"Atenção!", text: "Usuario já cadastrado", type:"error"});
						}else{
							swal({title:"Atenção!", text: "Erro ao inserir, verifique os dados", type:"error"});
						}
						$('#cadastroUser').trigger("reset");
					},
					beforeSend: function(){
						swal({title:"Aguarde!", text: "Carregando...", imageUrl: "<?= base_url("assets/img/gifs/preloader.gif")?>", showConfirmButton: false});
					},
					error: function(){
						alert('Erro inesperado.');
					}
				});
				return false;
			}
		});
	});
</script>
