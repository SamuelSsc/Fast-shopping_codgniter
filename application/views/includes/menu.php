<div class="container-fluid">

<nav class="navbar-expand-lg navbar-dark" style="background-color: #46b7bf">

<a class="navbar-brand" href="#">
	<img src="<?= base_url("assets/img/S.png")?>" alt="logo" class="img-fluid">
	<h5 class="nomo_loja ml-3 mb-0">Fast Shopping</h5>					
</a>



<!--botao de Sair -->
<button type="button" class="btnLog btn-light mt-3 mr-2">
	<?php
		//$_SESSION ['id_usuario'] = false;
	?>
	<style type="text/css">
		a:link{
			text-decoration: none;
		}
	</style>
	<a href="index.php">Sair</a>
</button>

<!--botao de Login-->
<button type="button" class="btnLog btn-light mt-3 mr-2" >
	<a href="<? base_url("application/views/v_login.php")?>"> 
		<?php
			echo "Login";
		?>
	</a>
</button>

<!-- mensagem com o email-->
<div class="Msgemail">
</div>

<form class="form-inline ">
		<input class="form-control mr-sm-2" type="search" placeholder="Pesquisar produto" aria-label="Pesquisar">
		 <button class="btn btn-btn-light my-2 my-sm-0" type="submit">Pesquisar</button>
	</form>

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
					<a class="nav-link dropdown-toggle" cid="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Produtos
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="html/celulares.html">Celulares</a>
							<a class="dropdown-item" href="html/Notebooks.html">Nootebooks</a>
							<a class="dropdown-item" href="html/Acessorios.html">Acessorios</a>
					</div>
				</li>

		<li class="nav-item">
			<a class="nav-link" href="html/sobre.html"> Sobre a loja</a>
		</li>
	</ul>
</div>
</nav>

