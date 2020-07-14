<?php include_once 'includes/header.inc.php' ?>
<?php include_once 'includes/menu.inc.php' ?>
	<p>&nbsp;</p>
	<div class="row container">
		<div class="col s12">
			<h5 class="light">Consultas</h5><hr>

			<table class="striped">
				<thead>
					<tr>
						<th>Placa</th>
						<th>Estado</th>
						<th>Cidade</th>
						<th>Km</th>
						<th>Email</th>
					</tr>
				</thead>
				<tbody>
					<?php
						include_once 'banco_de_dados/read.php';
					 ?>
				</tbody>	
			</table>			
		</div>
	</div>

<?php include_once 'includes/footer.inc.php' ?>