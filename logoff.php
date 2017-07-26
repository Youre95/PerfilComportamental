<?php 

require_once "smarty.php";

session_start();

session_destroy();

$smarty->display("login.tpl");


?>