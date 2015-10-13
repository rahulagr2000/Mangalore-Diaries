<?php
session_start();
/* This code will make a connection with database */
$con=mysql_connect("localhost","root","");
 
/* Now, we select the database */
mysql_select_db("yellow_pages");
 
/* Now we will store the values submitted by form in variable */
$username=$_POST['username'];
$pass=$_POST['password'];
$uname=$_POST['uname'];
/* we are now encrypting password while using md5() function */
$password=($pass);
$confirm_password=$_POST['repeatpassword'];
 
/* Now we will check if username is already in use or not */
$queryuser=mysql_query("SELECT * FROM user WHERE uid='$username' ");
$checkuser=mysql_num_rows($queryuser);
if($checkuser != 0)
{ header('Location:errorsignup1.php'); 
}
else {
 
/* now we will check if password and confirm password matched */
if($pass != $confirm_password)
{ 
 header('Location:errorsignup2.php'); 
}
else {
 
/* Now we will write a query to insert user details into database */
$insert_user=mysql_query("INSERT INTO user (uid, password,uname) VALUES ('$username', '$password', '$uname')");
 
if($insert_user)
 {
	 header('Location:login.php');
 }
else
{  header('Location:signup.php');
}
 
/* closing the if else statements */
}}
 
mysql_close($con);
?>