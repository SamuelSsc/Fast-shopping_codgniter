<div class="container">
    <div class="card mt-5">
        <div class="card-header">
                <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
                <li class="nav-item ml-5">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Produto</a>
                </li>
                <li class="nav-item ml-auto">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Quantidade</a>
                </li>
                <li class="nav-item mr-5">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Preço</a>
                </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
            </div>
        </div>
        <div class="card-body ml-5">
			<?php foreach($produtosCarrinho as $produto) {?>
				<h5><?php if($produto->tipo) echo $produto->tipo?></h5>
			<?php } ?>
        </div>
        <div class="card-footer ml-auto">
            <button type="button" class="btn btn-success ml-auto">Adicionar ao carrinho</button>
            <button class="btn btn-primary ml-auto" onclick="comprar()">Finalizar compra</button>        
        </div>
</div>
<script>

	function comprar() {
		const base_url = "<?= base_url()?>";
		window.location.href = base_url + "produtos/comprar";
	}

</script>
