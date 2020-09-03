<?php
        class dbClass
        {
          function __construct()
          {
          	   $this->conn=new mysqli("localhost", "root","","aquarium")or die("connection error");
            

          }
        }
 ?>

