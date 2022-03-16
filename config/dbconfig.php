<?php

    class dbconfig 
    {
     public $connection;
     public function __construct()
     {
         $this->db_connect();
     }
    public function db_connect()
    {
       $conn= $this->connection=mysqli_connect("localhost","root","","crud");
      
       if(!$conn)
       {
           echo "error";
       }
     
    }

    public function check($a)
    {
        $return=mysqli_real_escape_string($this->connection,$a);

        return $return;
    }

 }
//  $db= new dbconfig();




?>