<?php 

/*
*	Método para obtener los id de registro
*/
$app->post('/idreceiver', function() use ($app){

	header("Content-Type: application/json");
	$json = json_decode($app->getInstance()->request()->getBody());

	$usuario = $json->{'id'};
	
	echo json_encode(1);
});

?>