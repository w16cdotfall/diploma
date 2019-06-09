<?php
include_once("db.php");
$label = 'id';
$id = false;
if (  !empty( $_GET[ $label ] )  )
{
  $id = $_GET[ $label ];
}
$sql = "DELETE FROM `req` WHERE `id` = $id";
$query = mysqli_query($db, $sql);
require "index.php";
?>

