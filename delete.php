<?php require_once('./config/operation.php');
 $obj= new operation();
 $id= $_GET['id'];
 $obj->delete_record($id);

?>