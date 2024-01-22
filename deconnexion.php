<?php
session_start();
session_destroy();
session_start();
$_SESSION["error"] = "Vous êtes déconnecté avec succés .";
header("location:login.php");
