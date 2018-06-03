<?php
	function isConnected() {
		//return isset($_COOKIE['user']);

		require_once('model/model_users.php');
		// Retourne vrai si l'utilisateur est connecté au faux sinon
		if (isset($_COOKIE['user'])){
				$user = $_COOKIE['user'];
				if (isset($_COOKIE['pw'])){
					$pw = $_COOKIE['pw'];

					$u = Users:: users_password($user);
					$u = $u[0];
					$u = $u[0];
					if (isset($u)){
						if ($u == $pw){
							return true;
						}else {
							return false;
						}
					}else {
						return false;
					}
				}
			}
	}
?>
