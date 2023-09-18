<?php
session_start();
if(!isset($_SESSION["id"])){
header("Location: registration.php");
exit(); }
?>