
<body>

<div class="container-fluid">
            <!--PRODUTOS-->
        <div class="row mb-5 mt-4">
			<?php foreach($acessorios as $acessorio){?>
				<div class="col-lg-3 col-md-3 col-sm-6 mb-3"> 
					<div class="card">
						<div class="card-header">	
							<img src="<?php echo $acessorio->img?>" alt="logo" class="img-fluid" style="height: 220px; width:100%">
						</div>
						<div class="card-body">
							<h5 class="card-title" style="white-space: nowrap; font-size: 11pt;"><?php echo $acessorio->nome?></h5>
							<ul class="list-group list-group-flush">
								<li class="list-group-item" style="white-space: nowrap; font-size: 10pt;"><?php echo $acessorio->Ram?> GB</li>
								<li class="list-group-item"	style="white-space: nowrap; font-size: 10pt;"><?php echo $acessorio->gpu?></li>
								<li class="list-group-item"	style="white-space: nowrap; font-size: 10pt;"><?php echo $acessorio->processador?></li>
								<li class="list-group-item"	style="white-space: nowrap; font-size: 10pt;">R$ <?php echo $acessorio->preco?></li>
							</ul>
							<button type="button" class="btn btn-outline-info btn-block my-3"  onclick="chamaAcessorio(<?= $acessorio->id_produto?>)">
								Saiba Mais
							</button>
						</div>
					</div>
				</div>
			<?php }?>
		</div>

        </div>
        </body>
        <script>
function chamaAcessorio(id) {
		$.ajax({
			type: "GET",
			url: `mostraProdutoId/?id=${id}`,
			success: function() {
				const base_url = "<?= base_url(); ?>";
				window.location.href = base_url + `produtos/mostraProdutoId/?id=${id}`;
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
