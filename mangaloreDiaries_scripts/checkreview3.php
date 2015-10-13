 <?php 
session_start();

$con=mysql_connect("localhost","root","") or die ('error :' .mysql_error());
mysql_select_db("yellow_pages",$con);

$name=$_POST['cname'];
$result=mysql_query(" select cid from company where name='$name' "); 
 
// Check username and password match
 $row = mysql_fetch_array($result);
 $cid= $row['cid'];
 
 
// Set username session variable
if($result)
{
	//$rahul="update company set lyk=lyk+1 where cid='$cid'";
	//$query=mysql_query(" $rahul ","$con");
 	$sql_query = mysql_query("SELECT * FROM company WHERE cid='$cid' "); 
	$rs = mysql_fetch_array($sql_query); 
	 
    $num = $rs['lyk'] + 1 ;
	 
					 	
	$sql_query = mysql_query("UPDATE company SET lyk = '$num' WHERE cid = '$cid' "); 
 
 	 ?>
	 <p><a href="home.php">Return to home page!!!</a></p>
    <?php
 }
 	

else {
// Jump to login page
 
echo"Some technical problem";
//header('Location: login.php');

}

  

?>