<?php
//$conn = new mysqli("localhost", "root", "", "computationalthinkingscore");
$conn = new mysqli("db", "labstekn_ctst_user", "labstekn_ctst_user", "labstekn_ctst");
$conn -> set_charset("utf8");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
