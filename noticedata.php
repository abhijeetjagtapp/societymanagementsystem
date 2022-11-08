<?php

include_once 'connection.php';


if(isset($_POST['submit'])){

    $title = $_POST['noticetitle'];
    $description = $_POST['noticedesc'];
    $date = $_POST['noticedate'];

    $insertquery1 = "INSERT INTO notice(title,description,date) VALUES ('$title','$description','$date') ";



   $result = mysqli_query($con,$insertquery1);
   if($result){
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