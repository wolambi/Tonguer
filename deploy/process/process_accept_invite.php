<?php
	header('Content-type: text/html; charset=UTF-8');
	include("connect.php");
	extract($_POST);
	$sql_update = $connect->prepare ( "UPDATE `tonguer`.`project_col` SET `accept` =  1  WHERE  `id_invitation` = :id_invitation" );
	$check_update = $sql_update->execute(array(
		":id_invitation"	=> $id_invitation
	));
?>