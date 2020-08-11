<?php
	$server   ="localhost";
	$username ="root";
	$password ="";
	$database ="marketplace"

	$connectionPDO = new PDO("mysql:host=$server;dbname=$database",$username, $password);