<?php


class Conexion{


	public static function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=sc2","root","");

		return $link;



	}



}