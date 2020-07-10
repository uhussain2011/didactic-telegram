<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

try {
  $db = new mysqli("localhost", "root", "", "testdb", 3306);
  if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $mysqli->connect_error;
    die();
  }else{
    echo "<!-- Connection Made Successfully -->";
  }
} catch(PDOException $e) {
  $db = NULL;
  echo "Connection failed: " . $e->getMessage();
}