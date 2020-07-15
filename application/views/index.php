<body>
	<div class="container-fluid">
		<!--CARDS DOS PRODUTOS-->
		<div class="row mb-5 mt-4">
			<div class="col-lg-3 col-md-4 col-sm-6 mb-3"> 
				<div class="card">
					<div class="card-header">
						<img src="<?= base_url("assets/img/odysei.jpg")?>" alt="logo" class="img-fluid">
					</div>
					<div class="card-body">
						<h5>Notebook Gamer Samsung Odyssey</h5>
						<ul class="list-group list-group-flush">
    					<li class="list-group-item">16 GB(Ram) + 1TB (HD)</li>
    					<li class="list-group-item">GeForce gtx1050</li>
    					<li class="list-group-item">processador intel core i7</li>
  					</ul>
						<button type="button" class="btn btn-outline-info btn-block my-3" onclick="odyssei()">
						Saiba Mais
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>

<script>

	function odyssei() {
		const base_url = "<?= base_url()?>";
		window.location.href = base_url + "produtos/odyssei";
	}

</script>
