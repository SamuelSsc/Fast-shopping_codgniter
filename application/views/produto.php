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
							<?php// print_r($preco) ; onclick="comprar()" ?> 

							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#MyModal">
								Comprar
							</button>
						</div>
					</div>
				</div>
			</div>



			

			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					...
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
				</div>
			</div>
			</div>
			
		<!--JANELA DE LOGIN-->
			<div class="modal fade" id="MyModal" tabindex="-1" role="dialog" aria-labelledby="ModCenter" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="ModCenter">Entrar</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form>
								<div class="form-group">
									<label>Endereço de email</label>
									<input type="email" name="email" class="form-control" placeholder="Seu email">
								</div>
								<div class="form-group">
									<label>Senha</label>
									<input type="password" name="senha" class="form-control" placeholder="Senha">
								</div>
							</form>
						</div>
						<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
								<button type="submit" class="btn btn-primary">Confirmar</button>
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
