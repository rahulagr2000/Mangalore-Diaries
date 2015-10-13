<?php 
session_start(); 
include("includes/header.php"); 
?>
			
            <div class="top_info_right">
				<p align="right">&nbsp;</p>
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
				</font></strong>  
			    </span><span class="logout"><a href="logout.php">logout</a></span></p>
</div>
          
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
				 		<p>Search e-yellow pages: <input type="text"  name="search" /> <input type="submit" value="Search" 	                           class="submit" /></p> 
					</div>
		  		</form>
				<p>&nbsp;</p>
	   </div>	
        
       <div class="left">
			<h3>About this site</h3>
			<div class="left_box"
				<p>Welcome to e-Yellow Pages !!!.. a state of the art secured site to cater to all your search troubles in your city, Mangaluru... We strive our best to provide you with the most updated details about every place in the city.. So go ahead and try it..We hope you will like it !! :)
                
				</p>
			</div>
			<h3>Mangalore</h3>
	  		<div class="left_box">
				<p>Mangalore Listeni/ˈmæŋɡəlɔr/ (Tulu: ಕುಡ್ಲ, Kuḍla; Kannada: ಮಂಗಳೂರು, Maṅgaḷūru; Konkani: ಕೊಡಿಯಾಲ್, Koḍiyāl; Beary: Maikāla) is the chief port city of the Indian state of Karnataka. It is located about 350 kilometres (220 mi) west of the state capital, Bangalore. Mangalore lies between the Arabian Sea and the Western Ghat mountain ranges, and is the administrative headquarters of the Dakshina Kannada (formerly South Canara) district in south western Karnataka. It is also one of the most developed cities in India with scenic beaches.  </p>
			</div>	
<!-- WEATHER SCRIPT-->           
            <div style='width: 300px; height: 250px;<p>Weather Information</p>;background-repeat: no-repeat; background-color: #;' >			            <div style='height: 38px;' ><script type="text/javascript">
 			AC_FL_RunContent( 'type','application/x-shockwave-flash','data',                        			   		'http://netweather.accuweather.com/adcbin/netweather_v2/netwx-v29.swf','height','338','width','300','align','top','movie',	'http://netweather.accuweather.com/adcbin/netweather_v2/netwx-v29','allowscriptaccess','never','allownetworking','internal','quality',	'high','scale','noscale','salign','lt','wmode','transparent','bgcolor','#ffffff','flashvars',	'partner=netweather&myspace=1&logo=1&tStyle=normal&zipcode=ASI|IN|IN017|MANGALORE|&lang=eng&size=29&theme=1&metric=1' ); //end AC code
	</script><noscript><object type='application/x-shockwave-flash' data=		              'http://netweather.accuweather.com/adcbin/netweather_v2/netwx-v29.swf' height='338' width='300' align='top'>    <param name='movie' value='http://netweather.accuweather.com/adcbin/netweather_v2/netwx-v29.swf' />    <param name='allowScriptAccess' value='never' />    <param name='allowNetworking' value='internal' />    <param name='quality' value='high' />    <param name='scale' value='noscale' />    <param name='salign' value='lt' />    <param name='wmode' value='transparent' />    <param name='bgcolor' value='#ffffff' />    <param name='flashvars' value='partner=netweather&myspace=1&logo=1&tStyle=normal&zipcode=ASI|IN|IN017|MANGALORE|&lang=eng&size=29&theme=1&metric=1' /></object></noscript></div><div style='text-align: center; font-family: arial, helvetica, verdana, sans-serif; font-size: 11px; color: #;' > </div></div>			
				

		</div> 
          
               
<?php include("includes/footer.php"); ?>     		