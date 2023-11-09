<?php 

require 'db.php';

try {
  
  $db = DB::connectDB();

$query = $db->prepare("SELECT * FROM mytabelle");

$query->execute();

$res = $query->fetchAll();

} catch (PDOException $e) {

  error_log("Error Index.php". $e->getMessage());
  echo $e;
}



