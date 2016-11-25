<?php

	require_once("constant.php");

	function getData($query)
	{
		$conn = mysqli_connect(SERVER, USER, PASSWORD, DBNAME);
		
		if ($conn->connect_error) {
  		  die("Connection failed: " . $conn->connect_error);
		}

		$result = $conn -> query($query);
		$conn -> close();
		return $result;

	}