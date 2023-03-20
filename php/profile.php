<?php

$dbHost = 'localhost';
$dbName = 'project';
$dbUser = 'root';
$dbPass = '';
$mysqli = new mysqli($dbHost, $dbName, $dbUser, $dbPass);
if($mysqli->connect_error) {
  exit('Could not connect');
}
$sql="SELECT * from register where name=?";
$stmt = $mysqli->prepare($sql);

$stmt->bind_param("s",$_POST["name"]);
$stmt->execute();

$result = $stmt->get_result();

while($row = $result->fetch_assoc()) {
    echo " <b> Hello </b> ". $row["name"]."<br>";
    echo " <b> Mail Id  </b> ".$row["mail"]. " <br>";
   }
?>
            
            