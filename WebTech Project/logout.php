<?php
session_start();
unset($_SESSION["useremailId"]);
header("Location:login.php");
?>