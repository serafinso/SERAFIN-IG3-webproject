<?php
	function isConnected() {
		//return isset($_COOKIE['user']);

		require_once('model/model_users.php');
		// Retourne vrai si l'utilisateur est connecté au faux sinon
		if (isset($_COOKIE['user'])){
			$user = unserialize($_COOKIE['user']);
			$id = $user[0];
			$pw = $user[1];

			$u = Users:: users_password($id);
			$t = $u[0];
			$v = $t[0];
			if (isset($u)){
				if ($v == $pw){
					return true;
				}else {
					return false;
				}
			}else {
				return false;
			}
		}
	}
?>
