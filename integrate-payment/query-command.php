<?php
require_once("config/db-command.php");

$db = new Database();
$db->query("SELECT * FROM tbl_oop_test");
var_dump( $db->resultset() );
echo "Rows: " . $db->rowCount();