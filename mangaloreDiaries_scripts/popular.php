 <?php 
//session_start();

$con=mysql_connect("localhost","root","") or die ('error :' .mysql_error());
mysql_select_db("yellow_pages",$con);

$result=mysql_query(" select * from company order by lyk desc limit 1 "); 
 
while($row=mysql_fetch_array($result)){

$var=$row['image'];
$path = 'images/';
    
	echo "<h4>".$row['name']."</h4>";
	?>
    <html> <img src ="<?php echo $path . $var ?>" height=50 width=50 /></html>
	  
	<html>
	<div class="right_articles">
	<?php  
    echo "<td>" . $row['description']. "</td>";
	echo "</br>";
	echo "Location:<td id:center>" . $row['location']. "</td>";
	echo "</br>";
	echo "Contact:<td>" . $row['phone'] . "</td>";
	echo "</br>";
	echo "Email Id:<td>" . $row['email'] . "</td>";
	echo "</br>";
	echo "</tr>";
	?>
    </div>
    </html>
    <?php
}
  

?>