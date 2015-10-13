 <?php
//include 'conn.php';
$con = mysql_connect("localhost","root","") or die("UNABLE TO CONNECT");

mysql_select_db("yellow_pages",$con);
$query="select * from company natural join advertisement";
$result = mysql_query($query,$con);
?>
<html><marquee behavior="scroll" direction="up"></html>
<?php
while($row=mysql_fetch_array($result)){

$var=$row['poster'];
$path = 'poster/';

    echo "<tr>";
    echo "<center><h4>".$row['name']."</h4></center>"; 
	?>
    

 

    <img src ="<?php echo $path . $var ?>" height=200 width=250 />
    <?php 
    echo "<left>Location:<td id:center>" . $row['location']. "</td></left>";
	echo "&nbsp &nbsp";
	echo "<right>Contact # <td id:right>" . $row['phone'] . "</td></right>";
	echo "</br>";
	echo "</tr>";
   }
   ?>
<html></marquee></html>


 
