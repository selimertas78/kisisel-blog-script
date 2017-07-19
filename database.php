<?php
$dbhost = "localhost";
$dbname = "tema_blog";
$dbuser = "root";
$dbpass = "";
try {
  $db = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
} catch (PDOException $e) {
  echo $e->getMessage();
}
?>
