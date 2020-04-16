<?php
require_once "config.php";

$id = $_POST['id'];
$sqlDelete = "DELETE from tbl_events WHERE id=".$id;

mysqli_query($link, $sqlDelete);
echo mysqli_affected_rows($link);

mysqli_close($link);
?>