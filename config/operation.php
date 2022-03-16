<?php
session_start();
require_once("./config/dbconfig.php");
$db=new dbconfig(); 

class operation {
    public function store_record()
    {
    
        if(isset($_POST['btn_save']))
        {
            global $db;
            $firstName=$db->check($_POST['first']);  
            $lastName=$db->check($_POST['last']);  
            $username=$db->check($_POST['username']);  
            $useremail=$db->check($_POST['email']);     
     
               $sql= "insert into student (first,last,username,useremail) values('$firstName','$lastName','$username','$useremail')";
               $result=mysqli_query($db->connection,$sql);
               if($result)
               {
                   echo "<div class='alert alert-success'>record has been saved</div>";
                

               }
               else{
                   echo "<div class='alert alert-danger'>error</div>";
               }
            
        
            }
    }


    public function view_record()
    {
   
        $sql= "select * from student";
        global $db;
        $result=mysqli_query($db->connection,$sql);
        return $result;
    }
   
    public function single_data($id)
    {
       global $db;
       $sql="select * from student where id='$id'";
       $result= mysqli_query($db->connection,$sql);
       return $result;

    }

    public function update()
    {
        global $db;
       if(isset($_POST['btn_update'])){
           $id=$_GET['id'];
           $name=$_POST['first'];
           $last=$_POST['last'];
           $username=$_POST['username'];
           $email=$_POST['email'];

         $sql="update student set first='$name',last='$last',username='$username',useremail='$email' where id='$id'";
         $result=mysqli_query($db->connection,$sql);
         if($result)
         {
             $this->set_message("<div class='alert alert-success'>your record has been updated</div>");
         }
         else
         {
            $this->set_message("<div class='alert alert-danger'>something wrong</div>");
         }
         header('location: view.php');
         return $result;
       
         

       }
    }


    // delete records
    public function delete_record($id){
        $sql = "delete from student where id = '$id'";
        $result= mysqli_query($db->connection,$sql);
        return $result;
    }



    // session message
    public function set_message($msg)
    {
        if(!empty($msg))
        {
            $_SESSION['message']=$msg;
        }
        else
        {
            $msg= "";
        }
    }
    public function display_message()
    {
        if(isset($_SESSION['message']))
        {
            echo $_SESSION['message'];

            unset( $_SESSION['message']);
        }
    }

}


?>