<link rel="stylesheet" type="text/css" href="<?= base_url("assets/css/home.css")?>">

<div class="container-fluid" style="background-color: #46b7bf">
	<a class="navbar-brand" onclick="inicio()">
		<img src="<?= base_url("assets/img/S.png")?>" alt="logo" class="img-fluid">
		<h5 class="nomo_loja mt-1 mb-0">Fast Shopping</h5>
	</a>

	<!--botao de Sair -->
	<button type="button" class="btnLog btn-link mt-3 mr-2" style="border: 0; color: #fff;">
			Sair
	</button>

		<!--botao de Login-->
		<button onclick="chamaLogin();" id="acessa_login" type="button" class="btnLog btn-link mt-3 mr-2" style="border: 0; color: #fff;">
			Login
		</button>


	<nav class="navbar-expand-lg navbar-dark" style="background-color: #46b7bf">

		<form class="form-inline">
			<input class="form-control mr-sm-2" type="search" placeholder="Pesquisar produto" aria-label="Pesquisar">
			<button class="btn btn-btn-light my-2 my-sm-0" type="submit">Pesquisar</button>
		</form>

		
		

		<!-- mensagem com o email-->
		<div class="Msgemail">	
		</div>


		<!--botao de pesquisar
	<nav class="navbar navbar-dark" style="background-color: #46b7bf">
		<form class="form-inline mx-auto">
			<input class="form-control mr-sm-2" type="search" placeholder="Pesquisar produto" aria-label="Pesquisar">
			<button class="btn btn-btn-light my-2 my-sm-0" type="submit">Pesquisar</button>
		</form>
	</nav>-->

		<!--botao dos menu-->
		<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSite">
			<span class="navbar-toggler-icon"></span>
		</button>


		<div class="collapse navbar-collapse" id="navbarSite" style="background-color: #46b7bf">

			<ul class="navbar-nav ml-auto ">
				<li class="nav-item">
					<a class="nav-link" href="#">Meus pedidos</a>
				</li>

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">
						Produtos
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<button class="dropdown-item" onclick="chamacelular()" >Celulares</button>
						<a class="dropdown-item" onclick="chamanoot()">Nootebooks</a>
						<a class="dropdown-item" onclick="chamaacessorios()" >Acessorios</a>
					</div>
				</li>

				<li class="nav-item">
					<a class="nav-link" onclick="sobre()"> Sobre a loja</a>
				</li>
			</ul>
		</div>
	</nav>
</div>
<div>
<script>
	function chamaLogin() {
		const base_url = "<?= base_url()?>";
		window.location.href = base_url + "Login";
	}
	function chamacelular(){
		const base_url = "<?= base_url()?>";
		window.location.href = base_url + "produtos/mostrarcelular";
	}
	function chamanoot(){
		const base_url = "<?= base_url()?>";
		window.location.href = base_url + "produtos/mostrarnoot";
	}
	function chamaacessorios(){
		const base_url = "<?= base_url()?>";
		window.location.href = base_url + "produtos/mostraracessorios";
	}
	function sobre(){
		const base_url = "<?= base_url()?>";
		window.location.href = base_url + "produtos/sobre";
	}
	function inicio(){
		const base_url = "<?= base_url()?>";
		window.location.href = base_url + "home";
	}
</script>
