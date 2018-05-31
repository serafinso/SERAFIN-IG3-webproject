<?php

	class File {

		// Retourne le chemin du fichier index.php par apport au serveur
		public static function serverRoot() {
			return '//' . $_SERVER['SERVER_NAME'] . DIRECTORY_SEPARATOR . 'meme' . DIRECTORY_SEPARATOR;
		}

		// Construit un chemin relatif
		public static function buildPath($arrayPath) {
			$directorySeparator = DIRECTORY_SEPARATOR;
			$rootFolder = __DIR__ . $directorySeparator . "..";

			return $rootFolder . $directorySeparator . join($directorySeparator, $arrayPath);
		}
	}
?>

class File {
	public static function build_path($path_array) {
		// DS contient le slash des chemins de fichiers, c'est-à-dire '/' sur Linux et '\' sur Windows
		// __DIR__ est une constante "magique" de PHP qui contient le chemin du dossier courant
        $d_s = DIRECTORY_SEPARATOR;
        $ROOT_FOLDER = __DIR__ . "/..";
        return $ROOT_FOLDER . $d_s . join($d_s, $path_array);
	}
}
