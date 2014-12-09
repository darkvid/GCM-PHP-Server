<?php

	/*Envio de comunicaciones por GCM*/

	//incluyo fichero con la función
	require('constants.php');
	require('functions.php');

	//mensaje
	$data = array('message' => $_POST['message']);

	//ids, en mi DB
	$ids = array('1');

	//llamamos a la función
	sendGoogleCloudMessage($data, $ids);

?>