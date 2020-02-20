<?php
$host = "111.67.192.117";
$dbuser = "sfydb_6277285";
$pwd = "Bestwish1213";
$dbname = "msg";
$db = new mysqli($host, $dbuser, $pwd, $dbname);
if ($db->connect_error <> 0) {
    die();
}
$db->query("SET NAMES UTF8");
