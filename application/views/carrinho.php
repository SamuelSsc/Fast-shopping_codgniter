<div class="container">
    <div class="card mt-5">
        <div class="card-header">
                <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
                <li class="nav-item ml-auto mr-5 px-5 ">
                    <a class="nav-link " id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Produto</a>
                </li>
                <li class="nav-item ml-auto mr-5 pl-5">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Quantidade</a>
                </li>
                <li class="nav-item ml-auto mr-5 pr-3">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Preço</a>
                </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
            </div>
        </div>
<<<<<<< HEAD
        
=======
        <div class="card-body ml-5">
			<ul class="list-group list-group-flush">	
				<?php foreach($produtosCarrinho as $produto) {?>
				<li class="list-group-item d-flex align-items-center">
					<img src="<?php echo $produto->img?>" class="img-fluid" style="width: 100px;">
					<p class="mx-3 font-weight-bold px-2"><?php echo $produto->nome?></p>
					<p class=" ml-auto mr-5 float-right pl-2 font-weight-bold">1</p>
					<p class=" ml-auto mr-5 float-right pl-3 font-weight-bold">R$ <?php echo $produto->preco ?></p>
				</li>
				<?php } ?>
			</ul>
        </div>
>>>>>>> 5eafee74498a2fad7f43d868c7b13b9b4e269335
        <div class="card-footer ml-auto">
            <button type="button" class="btn btn-success ml-auto">Adicionar ao carrinho</button>
            <button class="btn btn-primary ml-auto" onclick="comprar()">Finalizar compra</button>        
        </div>
</div>
<script>

	function comprar() {
        <div class="card-body ml-5">
			<?php foreach($produtosCarrinho as $produto) {?>
				<h5><?php if($produto->tipo) echo $produto->tipo?></h5>
			<?php } ?>
        </div>
		const base_url = "<?= base_url()?>";
		window.location.href = base_url + "produtos/comprar";
	}

</script>
