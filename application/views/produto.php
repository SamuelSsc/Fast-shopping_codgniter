<body>				
		<?php foreach($produto as $p){?>
			<div class="mt-4 text-center">
				<img src="<?php echo $p->img ?>" alt="logo" class="img-fluid" style="max-height: 300px;">
			</div>

			<div class="row mb-5 mt-4">
				<div class="col-lg-8 col-md-10 col-sm-12 mb-12 mx-auto"> 
					<div class="card ">
						<div class="card-body">
							<h5 class="card-title"><?php echo $p->nome ?></h5>
							<ul class="list-group list-group-flush">
								<li class="list-group-item" style="font-weight: bold; font-size: 13pt;">Marca: <?php echo $p->marca?></li>
								<li class="list-group-item" style="font-weight: bold; font-size: 13pt;">RAM: <?php echo $p->Ram?> GB</li>
								<li class="list-group-item" style="font-weight: bold; font-size: 13pt;">ROM: <?php echo $p->rom?></li>
								<li class="list-group-item" style="font-weight: bold; font-size: 13pt;">Processador: <?php echo $p->processador?></li>
								<li class="list-group-item" style="font-weight: bold; font-size: 13pt;"> <?php 
											if($p->tipo == 'C'){  
												echo "S.O: ", $p->gpu; 
											}else{
												echo "GPU: ", $p->gpu;
											}
											?></li>
								<li class="list-group-item" >
								<p style="font-weight: bold; font-size: 13pt;">Mais Detalhes:</p>
								 <?php echo $p->descricao?></li>			
							</ul>
							<?php// print_r($preco) ; onclick="comprar()" ?> 
							<button type="button" class="btn btn-primary mt-5" onclick="carrinho(<?= $p->id_produto?>)">
								Adicionar ao Carrinho
							</button>
						</div>
					</div>
				</div>
			</div>
		<?php }?>
</body>
<script>

	function carrinho(id) {
		const base_url = "<?= base_url()?>";
		window.location.href = base_url + `produtos/addCarrinho/?id=${id}`;
	}

</script>
