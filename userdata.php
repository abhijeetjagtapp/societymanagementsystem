<?php

include_once 'connection.php';


if(isset($_POST['submit'])){

    $name = $_POST['txtName'];
    $mobile = $_POST['txtNo'];
    $message = $_POST['text'];

    $insertquery = "INSERT INTO complaint(name,mobile,message) VALUES ('$name','$mobile','$message') ";



   $res = mysqli_query($con,$insertquery);
   if($res){
       ?>
       <script>
       alert('data inserted properly')
       </script>
       <?php
   }else{
       ?>
       <script>
       alert('data not inserted')
       </script>
       <?php
   }
}



?>