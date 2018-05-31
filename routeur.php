<?php
	function isConnected() {
		// Retourne vrai si l'utilisateur est connecté au faux sinon
		return isset($_COOKIE['user']);
	}
?>
