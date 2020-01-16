<?php

function pre($var){
	echo "<pre>";
	var_dump($var);
	echo "</pre>";
}


function validarRegistracion($unArray){
	$error = [];
	//Validamos campo username
	if (isset($unArray["username"])) {
		if (empty($unArray["username"])) {
			$error["username"] = "Este campo no puede estár vacio.";
		}elseif (strlen($unArray["username"]) < 2) {
			$error["username"] = "Tu username debe tener al menos 2 caracteres.";
		}else {
			// Todo bien
		}
	}

	//Validamos campo email
	if (isset($unArray["email"])) {
		if (empty($unArray["email"])) {
			$error["email"] = "Este campo no puede estár vacio.";
		}elseif (!filter_var($unArray["email"],FILTER_VALIDATE_EMAIL)) {
			$error["email"] = "Debes ingresar un email válido.";
		}else {
			// Todo bien
		}
	}

	//Validamos campo password
	if (isset($unArray["pass"])) {
		if (empty($unArray["pass"])) {
			$error["pass"] = "Este campo no puede estár vacio.";
		}elseif (strlen($unArray["pass"]) < 6) {
			$error["username"] = "Tu password debe tener al menos 6 caracteres.";
		}else {
			// Todo bien
		}
	}

	//Validamos campo repass
	if (isset($unArray["repass"])) {
		if (empty($unArray["repass"])) {
			$error["repass"] = "Este campo no puede estár vacio.";
		}elseif (strlen($unArray["repass"]) < 6) {
			$error["repass"] = "Tu password debe tener al menos 6 caracteres.";
		}elseif ($unArray["pass"] != $unArray["repass"]) {
			$error["repass"] = "Las contraseñas no coinciden.";
		}else {
			// Todo bien
		}
	}

	if (count($error) === 0) {
		return true;
	}else {
		return $error;
	}
}





	function armarArrayUsuario(){

	}


?>
