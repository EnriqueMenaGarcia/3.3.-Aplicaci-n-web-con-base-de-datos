<?php 

class Conexion{

	static public function conectar(){

			$link = new PDO("mysql:host=localhost;dbname=ajax", 
			            "root", 
			            "Menas.10");

		$link->exec("set names utf8");

		return $link;

	}

}
