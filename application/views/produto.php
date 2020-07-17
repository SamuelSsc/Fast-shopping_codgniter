<body>			
			<div class="mt-4 text-center">
				<img src="<?= base_url("assets/img/odysei.jpg")?>" alt="logo" class="img-fluid">
			</div>

			<div class="row mb-5 mt-4">
				<div class="col-lg-8 col-md-10 col-sm-12 mb-12 mx-auto"> 
					<div class="card ">
						<div class="card-body">
							<h5 class="card-title"><?php echo $produto->nome ?></h5>
							Marca: Samsung<br>
							Memoria RAM: 16 GB(Ram)<br> 
							Memoria Interna: 1TB (HD)<br>
							Placa de Video: GeForce gtx1050 4GB<br>
							Processador: intel core i7<br>
							Velocidade do Processador: até 4,2 GHz ou 4,3 GHz<br>
							Altura: 17.9 mm<br>
							Largura: 375,6 mm<br>
							Profundidade: 255 mm<br>
							Peso: 2,4 kg<br>
							Entradas e saídas: USB-C (1), USB 3.0 (2), USB 2.0 (1), HDMI e Ethernet<br>
							Sensores: Wi-Fi AC e Bluetooth<br>
							<?php// print_r($preco); ?> 

						<button type="button" class="btn btn-outline-info" onclick="comprar()">
							comprar
							</button>
						</div>
					</div>
				</div>
			</div>

	</div>
</body>
<script>

	function comprar() {
		const base_url = "<?= base_url()?>";
		window.location.href = base_url + "produtos/comprar";
	}

</script>
