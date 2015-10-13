<?php
session_start();
/* This code will make a connection with database */
$con=mysql_connect("localhost","root","");
 
/* Now, we select the database */
mysql_select_db("yellow_pages");
 
/* Now we will store the values submitted by form in variable */
$username=$_POST['username'];
$password=$_POST['password'];
echo "$username $password";
$result=mysql_query("select cid from user natural join company where uid='$username' and password='$password' "); 

$row = mysql_fetch_assoc($result); 
echo $row['cid']; 


if($row['cid'])
{ 

 /* Now we will write a query to insert user details into database */
 ////////////////////////////////
 if ((($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/gif"))
&& ($_FILES["file"]["size"] < 20000))
  {
	   
  if ($_FILES["file"]["error"] > 0)
    {
   echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    //echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    //echo "Type: " . $_FILES["file"]["type"] . "<br />";
    //echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    //echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists("poster/" . $_FILES["file"]["name"]))
      {
      //echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],"poster/" . $_FILES["file"]["name"]);
	  $poster=$_FILES["file"]["name"];
      //echo "Stored in: " . "images/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }
 ////////////////////////////////
$cid=$row['cid'];
$insert_user=mysql_query("INSERT INTO advertisement (cid,poster) VALUES ('$cid','$poster')");
 
if($insert_user)
 {
	 header('Location:successadd.php');
 }
else
{  echo'Some technical problem!!!';
}
 
/* closing the if else statements */
}

else
{
	echo "Username & password were not matched!!!"; 
}

 
mysql_close($con);
?>