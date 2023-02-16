<?php 
$title="Exercise 3";
include "layout/header.php";

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$bdate=$_POST['bdate'];
$fcolor=$_POST['fcolor'];


echo "<h3> Hello, $fname $lname. <br>
           Your birthday is $bdate. <br>
           Your favorite color is $fcolor. <br>
           You are welcome to my site. 
       </h3>"; 


?>

<?php include "layout/footer.php" ?>