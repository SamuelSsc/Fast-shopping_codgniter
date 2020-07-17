<body>
		<!--CARDS DOS PRODUTOS-->
		<div class="row mb-5 mt-4">
			<?php foreach($produtos as $produto){?>
				<div class="col-lg-3 col-md-3 col-sm-6 mb-3"> 
					<div class="card">
						<div class="card-header">	
							<img src="<?php echo $produto->img?>" alt="logo" class="img-fluid" style="height: 220px; width:100%">
						</div>
						<div class="card-body">
							<h5 class="card-title" style="white-space: nowrap; font-size: 11pt;"><?php echo $produto->nome?></h5>
							<ul class="list-group list-group-flush">
								<li class="list-group-item" style="white-space: nowrap; font-size: 10pt;"><?php echo $produto->Ram?> GB</li>
								<li class="list-group-item"	style="white-space: nowrap; font-size: 10pt;"><?php echo $produto->gpu?></li>
								<li class="list-group-item"	style="white-space: nowrap; font-size: 10pt;"><?php echo $produto->processador?></li>
								<li class="list-group-item"	style="white-space: nowrap; font-size: 10pt;">R$ <?php echo $produto->preco?></li>
							</ul>
							<button type="button" class="btn btn-outline-info btn-block my-3" onclick="produto(<?php $produto->id_produto ?>)">
								Saiba Mais
							</button>
						</div>
					</div>
				</div>
			<?php }?>
		</div>
</body>
<script>

	function produto(id) {
		$.ajax({
			type: "POST",
			url: "produtos/mostraProdutoId",
			data: {'id' : id},
			success: function() {
				const base_url = "<?= base_url(); ?>";
				window.location.href = base_url + 'produtos/mostraProdutoId';
			},
			beforeSend: function() {
				swal({
						title: "Aguarde!",
						text: "Carregando...",
						imageUrl: "assets/img/gifs/preloader.gif",
						showConfirmButton: false
				});
			},
		})
	}

</script>

