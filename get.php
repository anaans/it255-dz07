<?php
		header("Content-type: application/json");
		$json_array = array (
		'Ime' => 'Ana',
		'Prezime' => 'Sajic',
		'Indeks' => '2773',
		);
		echo json_encode($json_array);
	
?>