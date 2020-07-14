
<?php
session_start();
include_once 'conexao.php';

$id = $_SESSION['id'];

$placa  = filter_input(INPUT_POST, 'placa', FILTER_SANITIZE_SPECIAL_CHARS);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_SPECIAL_CHARS);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
$km     = filter_input(INPUT_POST, 'km', FILTER_SANITIZE_NUMBER_INT);
$email  = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

$queryUpdate = $link->query("update tb_veiculos set placa='$placa', estado='$estado', cidade='$cidade', km='$km', email='$email' where id='$id'");
$affected_rows = mysqli_affected_rows($link);
if($affected_rows > 0):
	header("Location:../consultas.php");
endif;

?>