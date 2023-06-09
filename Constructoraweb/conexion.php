<?php

	/**
	 * Clase Conexion
	 * 
	 * Esta clase representa una conexión a la base de datos MySQL.
	 */
	class Conexion {
		/**
		 * @var string El nombre del host de la base de datos.
		 */
		private $host;

		/**
		 * @var string El nombre de la base de datos.
		 */
		private $dataName;

		/**
		 * @var string El nombre de usuario para la conexión a la base de datos.
		 */
		private $username;

		/**
		 * @var string La contraseña para la conexión a la base de datos.
		 */
		private $password;

		/**
		 * Constructor de la clase.
		 * Establece los valores iniciales para el host, el nombre de la base de datos, el nombre de usuario y la contraseña.
		 */
		public function __construct() {
			$this->host = "localhost";
			$this->dataName = "constructoradb";
			$this->username = "root";
			$this->password = "";
		}

		/**
		 * Método mágico __toString.
		 * Retorna una representación en forma de cadena de la conexión.
		 *
		 * @return string Representación en cadena de la conexión.
		 */
		public function __toString() {
			return "host: " . $this->host . "\n" .
				   "dataName: " . $this->dataName . "\n" .
				   "username: " . $this->username . "\n" .
				   "password: " . $this->password;
		}

		/**
		 * Método para obtener información de error.
		 * 
		 * @return string Información de error.
		 */
		public function error() {
			return "";
		}

		/**
		 * Método para obtener la conexión a la base de datos.
		 * 
		 * @return PDO|null Objeto PDO para la conexión a la base de datos o null si hay un error.
		 */
		public function getConexion() {
			try {
				$link = "mysql:host=" . $this->host . ";dbname=" . $this->dataName . ";charset=utf8";
				$conexion = new PDO($link, $this->username, $this->password);
				$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $conexion;
			} catch (PDOException $error) {
				echo "Error en la conexion: " . $error->getMessage();
				return null;
			}
		}
	}

?>