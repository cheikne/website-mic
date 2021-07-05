<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$id = $_REQUEST['id_partners'];
	try{
	  $conn = new PDO("mysql:host=$servername;dbname=projet-fin-etudes", $username, $password);
	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  $sql = "SELECT * FROM partenaires WHERE id='".$id."'";
	  $result = $conn->query($sql);
	  // if($result->num_rows>0){
	  	$row = $result->fetch();
	  	echo " 
	  		<p>".$row['description']."</p>
	  		<h2 style='text-align: center;' id='role'></h2>
	  		<p>".$row['role']."</p><br>";
	  // }
	} catch(PDOException $e) {
	  echo "Un probleme a ete survenu pendant la connexion: " . $e->getMessage();
	}
?>