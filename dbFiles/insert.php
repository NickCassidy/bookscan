<?php 


$link = mysqli_connect("localhost", "fruit", "vegetables", "api_test");

$isTitle=$_POST['title'];
$isSummary=$_POST['summary'];

 $sql = "INSERT INTO books(title, summary) VALUES('$isTitle', '$isSummary')";
 
 if(mysqli_query($link, $sql))  
 {  
      echo 'Data Inserted';  
 }  
 ?> 