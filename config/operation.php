<?php
require_once("./config/dbconfig.php");
$db=new dbconfig();

class operation {
    public function store_record()
    {
        global $db;
        if(isset($_POST['btn_save']))
        {
            $firstName=$db->check($_POST['first']);  
            $lastName=$db->check($_POST['last']);  
            $username=$db->check($_POST['username']);  
            $useremail=$db->check($_POST['email']);     

            if($this->insert_record($firstName,$lastName,$username,$useremail))
            {
                     echo "<div class='alert alert-success'>your record has been recorded.</div>";
            }
            else{
                echo "<div class='alert alert-danger'>Error</div>";
            }

            function insert_record($f,$l,$un,$ue){ 
                     global $db;
               $sql= "insert into crud (first, last,username,useremail)values('$f','$l','$un','$ue')";
               $result=mysqli_query($db->connection,$sql);
               if($result)
               {
                   return true;

               }else{
                   return false;
               }
            }
        
        }
    }
}


?>