<?php include("includes/header.php"); ?>
			<html>
            <div class="top_info_right">
				<p align="right">&nbsp;</p>
			  	<p align="right"><span class="style3"><strong>Welcome Guest! </strong></span><span class="login"><a href="login.php"> 	                          login</a> |<a href="signup.php"> Sign Up</a></span></p>
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
				<form name="input" method="post" action="search.php" color="blue">
					<div class="search_form">
				 		<p>Search e-yellow pages   
				 		  <input type="text"  name="search"/> <input type="submit" value="Search" 	                           class="submit" /></p> 
					</div>
		  		</form>
				<p>&nbsp;</p>
	   </div>	
        
      
				
			     			
		
 <?php 
session_start();

$con=mysql_connect("localhost","root","") or die ('error :' .mysql_error());
mysql_select_db("yellow_pages",$con);

$name=$_POST['cname'];
$result=mysql_query(" select * from reviews where cid = (select cid from company where name='$name') "); 
 
if($result)
{?>
	 <div class="left">
	 	<?php echo "<h3>".$name."</h3>" ?>
			<div class="left_box">
            <?php

$i=1;
    while($row = mysql_fetch_array($result))
	{
	echo $i .". ".$description= $row['description'];
	$i=$i+1;
	?>
	<p>&nbsp;</p>
	 <?php
    }
}
  

else {
 
 
echo"SORRY!!!Some technical problem...:(";
 
}


?>
			 
			 
			</div>
			 

				

		</div> 
          
              </html>
<?php include("includes/footer.php"); ?>
