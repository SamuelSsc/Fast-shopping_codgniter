<body>
	<div class="container-fluid">
		<!--CARDS DOS PRODUTOS-->
		<div class="row mb-5 mt-4">
		<?php foreach($produtos as $produto){?>
	<div class="col-lg-3 col-md-4 col-sm-6 mb-3"> 
        <div class="card">
          <div class="card-header">
            <img src="<?php echo $produto->img?>" alt="logo" class="img-fluid">
          </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo $produto->nome?></h5>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><?php echo $produto->Ram?> GB</li>
              <li class="list-group-item"><?php echo $produto->gpu?></li>
			  <li class="list-group-item"><?php echo $produto->processador?></li>
			  <li class="list-group-item">R$ <?php echo $produto->preco?></li>
            </ul>
            <button type="button" class="btn btn-outline-info btn-block my-3" onclick="odyssei()">
            Saiba Mais
            </button>
          </div>
        </div>
      </div>
		</div>
		<?php }
		?>
	</div>

<script>

	function odyssei() {
		const base_url = "<?= base_url()?>";
		window.location.href = base_url + "produtos/odyssei";
	}

</script>

