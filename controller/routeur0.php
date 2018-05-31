<?php
	function isConnected() {
		// Retourne vrai si l'utilisateur est connecté au faux sinon
		return isset($_SESSION['user']);
	}

	function getUserConnected() {
		// Retourne le ModelUser de l'utilisateur connecté et faux sinon
		if (isConnected()) {
			return unserialize(json_decode($_SESSION['user'], true));
		} else {
			return false;
		}
	}

	if (isset($_GET['controller'])) {
		$controller = htmlspecialchars($_GET['controller']);
	} else {
		$controller = Conf::$defaultController;
	}
	$controller = 'controller' . ucfirst($controller);
	$path = File::buildPath(array('controller', $controller . '.php'));
	// On inclus la page seulement si elle existe
	if (file_exists($path)) {
		require_once $path;
	}

	// Vérifie que l'utilisateur est connecté si il essaye d'accèder à un autre controller que celui de connexion
	if ($controller != 'controllerUser' && !isConnected()) {
		require_once File::buildPath(array('controller', 'controllerUser.php'));
		ControllerUser::viewConnect('Vous devez vous connecter pour accèder à cet page');
		return true;
	}

	if (isset($_GET['action'])) {
		$action = $_GET['action'];
	} else {
		$action = Conf::$defaultAction;
	}
	$action = htmlspecialchars($action);

	if (!method_exists($controller, $action)) {
		// La page demander n'existe pas on charge le controller et l'action par défault
		$controller = Conf::$defaultController;
		$controller = 'controller' . ucfirst($controller);
		require_once File::buildPath(array('controller', $controller . '.php'));
		$action = Conf::$defaultAction;;
		$controller::$action("La page demandé n'existe pas");
	}

	$controller::$action();
?>
