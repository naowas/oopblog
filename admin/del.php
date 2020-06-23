<?php 
include '../class/post.class.php';

$model = new PostQuery;
$id = $_REQUEST['id'];
$delete = $model->delete($id);
?>