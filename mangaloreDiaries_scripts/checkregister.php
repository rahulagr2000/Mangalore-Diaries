<?php
session_start();
/* This code will make a connection with database */
$con=mysql_connect("localhost","root","");
 
/* Now, we select the database */
mysql_select_db("yellow_pages");
 
/* Now we will store the values submitted by form in variable */
$username=$_POST['username'];
$password=$_POST['password'];
$name=$_POST['name'];
$category=$_POST['category'];
$location=$_POST['location'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$description=$_POST['description'];

if(($username == $_SESSION['username']) && ($password == $_SESSION['password']))
{
		$checkuser=0;
}
else
$checkuser=1;
if($checkuser != 0)
{ header('Location:register.php'); 
}
else {
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

    if (file_exists("images/" . $_FILES["file"]["name"]))
      {
      //echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],"images/" . $_FILES["file"]["name"]);
	  $image=$_FILES["file"]["name"];
      //echo "Stored in: " . "images/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }
  ?>
  <html>
 <head>
<script src="javascript/mandatory1.js">
</script>
</head>
<body>
 <?php
 
$insert_user=mysql_query("INSERT INTO company (name,category,location,phone,email,description,image,uid) VALUES ('$name', '$category', '$location','$phone','$email','$description','$image','$username')");
 
if($insert_user)
 {
	 header('Location:successregister.php');
 }
else
{  echo'The company informaton is already taken';
}
 
/* closing the if else statements */
}
 
mysql_close($con);
?>