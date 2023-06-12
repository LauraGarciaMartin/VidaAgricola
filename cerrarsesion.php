<?php
session_start();
require("header.php");
if(isset($_SESSION['usu'])){
    session_destroy();
    echo "<span style='fotn-size:10px; color:black;'>Sesion cerrada</span>";
} 

?>
