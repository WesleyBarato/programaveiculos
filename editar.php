<?php
session_start();
include_once 'includes/header.inc.php';
include_once 'includes/menu.inc.php';
?>

<div class="row container">
	<p>&nbsp;</p>
	<div class="col s12">
		<h5 class="light">Edição de Registros</h5><hr>		
	</div>
</div>

<?php
	include_once 'banco_de_dados/conexao.php';
	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	$_SESSION['id'] = $id;
	$querySelect = $link-> query("select * from tb_veiculos where id='$id'");

	while ($registros = $querySelect->fetch_assoc()):
		$placa  = $registros['placa'];
		$estado = $registros['estado'];
		$cidade = $registros['cidade'];
		$km     = $registros['km'];
		$email  = $registros['email'];
	endwhile;	
?>

		<div class="row container">
            <p>&nbsp;</p>
            <form action="banco_de_dados/update.php" method="post" class="col s12">
                
                <fieldset class="formulario" style="padding: 15px">
                    <legend><img src="imagens/cadastro_carro.png" width="100"></legend>
                    <h5 class="light center">Editar Registro de Veículos</h5>

                    <div class="input-field col s12">
                        <input type="text" name="placa" id="placa" value="<?php echo $placa ?>" maxlength="40" required autofocus>
                        <label for="placa">Placa do Veículo</label>
                    </div>

                    <div class="input-field col s12">
                         <select class="browser-default" name="estado" id="estado" required>
                            <option value="" disabled selected>Estado</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AM">Amazonas</option>
                            <option value="AP">Amapá</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espirito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PB">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                    </div>
                    <!--<div class="input-field col s12">
                        <input type="text" name="estado" id="estado" maxlength="40" required autofocus>
                        <label for="estado">Estado</label>
                    </div>
                    -->
                    <div class="input-field col s12">
                        <input type="text" name="cidade" id="cidade" value="<?php echo $cidade ?>" maxlength="40" required>
                        <label for="cidade">Cidade</label>
                    </div>

                    <div class="input-field col s12">
                        <input type="text" name="km" id="km" value="<?php echo $km ?>" maxlength="40" required>
                        <label for="km">KM Total</label>
                    </div>

                    <div class="input-field col s12">
                        <input type="email" name="email" id="email" value="<?php echo $email ?>" maxlength="40" required>
                        <label for="email">Email</label>
                    </div>

                    <div class="input-field col s12">
                        <input type="submit" value="Alterar" class="btn blue">
                        <a href="consultas.php" class="btn red">Cancelar</a>
                    </div>
                </fieldset>

            </form>

        </div>

<?php include_once 'includes/footer.inc.php'; ?>	