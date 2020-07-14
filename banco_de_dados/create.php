<?php
session_start();
include_once 'conexao.php';

$placa  = filter_input(INPUT_POST, 'placa', FILTER_SANITIZE_SPECIAL_CHARS);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_SPECIAL_CHARS);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
$km     = filter_input(INPUT_POST, 'km', FILTER_SANITIZE_NUMBER_INT);
$email  = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

$querySelect = $link->query("select email from tb_veiculos");
$array_emails = [];

while($emails = $querySelect->fetch_assoc()):
	$emails_existentes = $emails['email'];
	array_push($array_emails, $emails_existentes);
endwhile;

if(in_array($email, $array_emails)):
	$_SESSION['msg'] = "<p class='center red-text'>".'Já existe um veiculo cadastrado com esse email'."</p>";
	header("Location:../");
else:
	$queryInsert = $link->query("insert into tb_veiculos values(default, '$placa', '$estado', '$cidade', '$km', '$email')");
	$affected_rows = mysqli_affected_rows($link);
	if($affected_rows > 0):
		$_SESSION['msg'] = "<p class='center green-text'>".'Cadastro efetuado com sucesso!'."</p>";
	header("Location:../");
	endif;	
endif;	