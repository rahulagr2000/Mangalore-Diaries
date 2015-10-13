<?php include("includes/header.php"); ?>
			<div class="top_info_right">
				<p align="right">&nbsp;</p>
			  	 <?php
				session_start();
				
                if(isset($_SESSION['login']))
				{
					 
				?>
			    <p align="right"><span class="style3"><font color="#000000"><strong>Welcome</strong></font>
				<strong><font color="#003399">
				<?php 
				 
				mysql_connect("localhost","root","") or die ('error :' .mysql_error());
				mysql_select_db("yellow_pages");

				
				// Retrieve username and password from database according to user's input
				$result = mysql_query("SELECT uname FROM user WHERE (uid = '" . mysql_real_escape_string($_SESSION['username']) . "')");
 				$row=mysql_fetch_array($result);
				echo $row['uname'];
                
				?>
				<html>
                </font></strong>  
			    </span><span class="logout"><a href="logout.php">logout</a></span></p>
				</html>     
                 <?php
                 }
                else
				{
				?>
                <html><p align="right"><span class="style3"><strong>Welcome Guest! </strong></span><span class="login"><a href="login.php"> 	                          login</a> |<a href="signup.php"> Sign Up</a></span></p>
                </html>
                <?php 
				}
				?>
			</div>
			 
		 
		<div class="bar">
			<ul>
				<li class="search">Search By: </li>
                <form name="categories" method="post" action="category.php">
				<li><label><strong>Categories:</strong></label>  
						<select name="categories" size="1" onChange="this.form.submit()">
  		         			<option value="select" selected="selected">select</option>
  		         			<option value="Cinemas">Cinemas</option>
  		         			<option value="Restaurant">Restaurant</option>
  		         			<option value="Garments">Garments</option>
  		         			<option value="Institute">Institute</option>
                        </select>
				</li>
                </form>
				 
                <form name="location" method="post" action="location.php">
				<li><label><strong>Location:</strong></label> 
                   		<select name="location" size="1" onChange="this.form.submit()">
					  		<option value="select" selected="selected">select</option>
					  		<option value="Balmatta">Balmatta</option>
					  		<option value="Kadri">Kadri</option>
					  		<option value="Lalbagh">Lalbagh</option>
					  		<option value="Jyoti">Jyoti</option>
					  		<option value="Surathkal">Surathkal</option>
                        </select>
              	</li>
                </form>
				
                <form name="alphabetical" method="post" action="alphabetical.php">
				<li><label><strong>Alphabetical:</strong></label> 
                   		<select name="alphabetical" size="1" onChange="this.form.submit()">
							<option value="select" selected="selected">select</option>
							<option value="Adidas">Adidas</option>
							<option value="Big Cinemas">Big Cinemas</option>
							<option value="Chefs">Chefs</option>
							<option value="Dominos">Dominos</option>
							<option value="Hao Ming">Hao Ming</option>
							<option value="Inox">Inox</option>
							<option value="KMC">KMC</option>
							<option value="Levis">Levis</option>
							<option value="NITK">NITK</option>
							<option value="NITTE">NITTE</option>
							<option value="Pabbas">Pabbas</option>
							<option value="Pizza Hut">Pizza Hut</option>
							<option value="Puma">Puma</option>
							<option value="Raymonds">Raymonds</option>
							<option value="Suraj">Suraj</option>
                        </select>
			  	</li>
                </form>
			</ul>
	  	</div>
         
		<div class="search_field">
				<form name="input" method="post" action="search.php">
					<div class="search_form">
				 		<p>Search the Sites: <input type="text"  name="search" class="search" /> <input type="submit" value="Search" 	                           class="submit" /></p> 
					</div>
		  		</form>
				<p>&nbsp;</p>
	   </div>	
        
       <div class="left">
			
			<div class="left_box">
				 
				<?php
//include 'conn.php';
$con = mysql_connect("localhost","root","") or die("UNABLE TO CONNECT");

mysql_select_db("yellow_pages",$con);

$name=mysql_real_escape_string($_POST['location']);
$name="'".$name."'";
$query="select * from company where location = $name";

$result = mysql_query($query,$con);
//echo "<table border='1'><tr><td>NAME</td><td>CATEGORY</td><td>LOCATION</td><td>PHONE</td><td>EMAIL</td>";

while($row=mysql_fetch_array($result)){
$var=$row['image'];
$path = 'images/';
	 
	echo "<tr>";
    	echo "<h3>".$row['name']."</h3>"; 
	//echo "Location:<td>" . $row['location']. "</td>";
	?>
	<html><p>&nbsp;</p><img src ="<?php echo $path . $var ?>" height=50 width=50 /></html>
	<?php 
	echo "<td>" . $row['description']. "</td>";
	echo "</br>";
	echo "Contact:<td>" . $row['phone'] . "</td>";
	echo "</br>";
	echo "Email Id:<td>" . $row['email'] . "</td>";
	echo "</br>";
	echo "</tr>";
	if(isset($_SESSION['login']))
	{
	?>	
	<html>
    <body>
      <form name="form1" method="post" action="checkreview.php">
     <input type="hidden" name="cname" value="<?php echo $row['name']?>" />
     <input type="submit" value="Add Reviews" />
     <textarea name="description" id="description" cols="20" rows="2"></textarea>
     </form>
   
   	 <form name="form2" method="post" action="checkreview2.php">
     <input type="hidden" name="cname" value="<?php echo $row['name']?>" />
     <input type="submit" value="See Reviews" />
     </form>
     
     <form name="form3" method="post" action="checkreview3.php">
     <input type="hidden" name="cname" value="<?php echo $row['name']?>" />
     <input type="submit" value="Like" />
     </form>
    </body>
    </html>
    <?php
	}
	else
	{}


}
 
mysql_free_result($result);

 
?>
			 
 </div>			
				

		</div> 
          
<?php include("includes/footer.php"); ?>     			
		
