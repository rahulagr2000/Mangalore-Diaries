 <?php 
session_start();

$con=mysql_connect("localhost","root","") or die ('error :' .mysql_error());
mysql_select_db("yellow_pages",$con);

$name=$_POST['cname'];
$description=$_POST['description'];
$result=mysql_query("select cid from company where name='$name' "); 
//echo $result;
//echo $name;
// Check username and password match
 $row = mysql_fetch_array($result);
 $cid= $row['cid'];
 $username=$_SESSION['username'];
 
 
 if($row['cid']){
	$query=mysql_query("insert into reviews(uid,cid,description) values('$username','$cid','$description')");
 
	if($query)  
	{ 
	?>
	 <p><a href="home.php">Return to home page!!!</a></p>
    <?php
    }
  
else
{
  
echo"SORRY!!!Technical Problem...:(";
 

}
 }
 ?>
 