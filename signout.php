<?php 
session_start();
unset($_SESSION['user']);
session_destroy();
header("location:http://localhost/Reclutare/Log_In.php");

 ?>