<?php include("includes/header.php"); ?>
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
        
       <div class="left">
			<h3>SUCCESS</h3>
			<div class="left_box"
				
			
			<p>Your Advertisement registration for your company has been successfully uploaded. Please keep us constantly updated about the various developments in your advertisement requirements. We thank you for your initiative. We strive hard to make this web site a profitable venture for our registered user. For any queries, feel free to contact us or mail us at webmaster@eyellowpages.com...
                
				</p>
			 
			</div>
			<p><a href="index1.php">Return to Home Page</a>	</p>

				

		</div> 
          
               
<?php include("includes/footer.php"); ?>     			
		