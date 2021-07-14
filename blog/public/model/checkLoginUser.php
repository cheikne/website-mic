<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website-mic";
$email=$_REQUEST['email'];
$pwd=$_REQUEST['pwd'];

  echo "Mot de passe Correcte";
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connexion echouer avec la base de donnees: " . $conn->connect_error);
  }
  $sql="select id_user from user_partenaires where email='".$email."' and password='".$pwd."'";
  $result=$conn->query($sql);
  if($result->num_rows>0){
    echo "<h3>Mot de passe Correcte</h3>";
  }else{
    echo "<h3 style='color:red;'>Mot de passe Incorrecte</h3>";
  }

  $conn->close();
?>