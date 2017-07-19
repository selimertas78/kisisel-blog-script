<?php
include "database.php";
function tema_ayar()
{
  global $db;
  $sorgu = $db -> query("SELECT * FROM tema_ayar")->fetch(PDO::FETCH_ASSOC);
  return $sorgu;
}

?>
