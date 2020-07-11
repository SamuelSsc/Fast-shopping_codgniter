<div class="container-fluid" style="margin:0px; padding: 0px; color: #FFFFFF">
	<nav class="navbar navbar-default" role="navigation" style="background-color: #A2BFF4">
		<div class="container-fluid">
			<h4 class="text-right" style="font-family: monospace;">Usuário Logado -> <?php echo strtoupper($this->session->userdata('usuario'));?> </h4>
		</div>
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<img class="remove_margen" src="<?php echo base_url('assets/img/etec.png');?>" height="50" style="margin-top: 0px; margin-right: 30px; margin-left: 10px; margin-bottom: 10px">
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="dropdown"><a href="<?php base_url('home')?>">HOME</a></li>
					<li class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">CADASTRO<b class="caret"></b></a>
						<ul role="menu" class="dropdown-menu">
							<li><a onclick="produtos();">PRODUTOS</a></li>
							<li><a onclick="usuarios();">USUÁRIOS</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">CONSULTAS<b class="caret"></b></a>
						<ul role="menu" class="dropdown-menu">
							<li><a onclick="pedidos();">PEDIDOS DE COMPRAS</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">SOLICITAÇÕES<b class="caret"></b></a>
						<ul role="menu" class="dropdown-menu">
							<li><a onclick="realizar();">REALIZAR PEDIDOS</a></li>
							<li><a onclick="administrar();">ADMINISTRAR PEDIDOS</a></li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="caixa_alta navbar-right"><a href="<?php echo base_url('login/logout');?>"><strong>SAIR</strong></a></li>
				</ul>
			</div>
		</div>
	</nav>
</div>
<script type="text/javascript">
	var base_url = "<?= base_url()?>"

	// manter produtos
	function produtos() {
		swal("Atenção!", "Módulo ainda não construído!", "info");
	}

	// manter usuarios
	function usuarios() {
		window.location.href = base_url + "usuario";
	}

	// manter pedidos
	function pedidos() {
		swal("Atenção!", "Módulo ainda não construído!", "info");
	}

	// manter realização de pedidos
	function realizar() {
		swal("Atenção!", "Módulo ainda não construído!", "info");
	}

	// manter administrar pedidos
	function administrar() {
		swal("Atenção!", "Módulo ainda não construído!", "info");
	}
</script>