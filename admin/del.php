<?php 
include '../class/functions.php';

$model = new NaowasQuery;
$id = $_REQUEST['id'];
$delete = $model->delete($id);
?>