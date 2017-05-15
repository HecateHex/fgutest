<?php
  if(!isset($_SESSION["account"] || isset($_SESSION["password"]))
  {
  	header("Location: index.php");
  }
?>