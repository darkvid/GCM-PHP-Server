<?php 

/*
*	Método para obtener los id de registro
*/
$app->post('/idreceiver', function() use ($app){

	header("Content-Type: application/json");
	$json = json_decode($app->getInstance()->request()->getBody());

	$idEnvio = $json->{'idEnvio'};
	$telefono = $json->{'telefono'};
	
	//si todo ok
	$result = 1;

	echo json_encode($result);
});

?>