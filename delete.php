<?php require_once('./config/operation.php');
 $obj= new operation();
 $id= $_GET['id'];
if($obj->delete_record($id)){
$this->set_message("<div class='alert alert-danger'>your record has been deleted</div>");
header('location:view.php');
} 

?>