<?php include("../yellow_pages1/includes/header.php"); ?>
			<div class="top_info_right">
				<p align="right">&nbsp;</p>
			  	<p align="right"><span class="style3"><strong>Welcome Guest! </strong></span><span class="login"><a href="../yellow_pages/login.php"> 	                          login</a> |<a href="../yellow_pages/signup.php"> Sign Up</a></span></p>
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
				<form name="input" method="post" action="../yellow_pages1/category.php">
					<div class="search_form">
				 		<p>Search the Sites: <input type="text"  name="search"/> <input type="submit" value="Search" 	                           class="submit" /></p> 
					</div>
		  		</form>
				<p>&nbsp;</p>
	   </div>	
        
       <div class="left">
			<h3>Contacts:</h3>
			<div class="left_box"
				
			<p><b>	Rahul Agrawal</b>, Database Administrator</p>
			<p>email- rahulagr2000@gmail.com</br>
	     </p>
<p># +91-8088-059-851</br></p>
		 		<p>Address: A 506,MT-3, NITK Surathkal, Mangalore 575025 </p>
                <p>&nbsp;	</p>
                
                <p><b>Rahul Kumar</b>, Web Developer</p>
                <p>email- rahul.cse13@gmail.com</br>
                </p>
<p># +91-9590-433-101</br></p>
                <p>Address: B 018,MT-3, NITK Surathkal, Mangalore 575025 </p>
        		<p>&nbsp;	</p>
                
                <p><b>Sahil Singh</b>, Web Developer</p>
                <p>email- sahil1308@gmail.com</br>
                </p>
<p># +91-8105-941-328 </br></p>
                <p>Address: D 012,MT-3, NITK Surathkal, Mangalore 575025 </p>
                <p>&nbsp;</p>
                <p>Please fix appointment prior to meeting in person. Phone contacts availab;e 24x7... :)</p>
			</div>
		<p>&nbsp;</p>
<p>&nbsp;</p> 		
		</div> 
         <div class="right">
	 			<h3>Most popular HIT:</h3>
				<div class="right_articles">
					<p><img src="../yellow_pages/images/dominos.gif" alt="Image" title="Image" class="image" width=50 height=50 /><b>To be the leader 		                        in delivering off-premise pizza convenience to consumers around the world.</br>For more information goto <b>                        http://www.dominos.co.in</b>
                    </p>
				</div>
				<div class="right_articles">
					<p><img src="../yellow_pages/images/bigcinemas.gif" alt="Image" title="Image" class="image" width=50 height=50/><b>Buy movie 				                        tickets online, check showtimes, theater information, read synopsis and reviews, access offers, promotions &                        more at http://BigCinemas.com.</b>
                    </p>
				</div>
          </div>
              
<?php include("../yellow_pages1/includes/footer.php"); ?>     			
