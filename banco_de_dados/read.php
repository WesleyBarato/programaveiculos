<?php

include_once 'conexao.php';

$querySelect = $link->query ("select * from tb_veiculos");
while ($registros = $querySelect->fetch_assoc()):
	$id     = $registros['id'];
	$placa  = $registros['placa'];
	$estado = $registros['estado'];
	$cidade = $registros['cidade'];
	$km     = $registros['km'];
	$email  = $registros['email'];

	echo "<tr>";
	echo "<td>$placa</td><td>$estado</td><td>$cidade</td><td>$km</td><td>$email</td>";
	echo "<td><a href='editar.php?id=$id'><i>Editar</i></a></td>";
	echo "<td><a href='banco_de_dados/delete.php?id=$id'><i>Deletar</i></a></td>";
	echo "</tr>";
endwhile	
?>