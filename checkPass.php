<?php 
$myusername=$_POST['myusername']; 
$mypassword = hash("sha512", $_POST['mypassword']); 

print($myusername.' --> '.$mypassword);
?>