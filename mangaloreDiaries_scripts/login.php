<?php include("includes/header.php"); ?>

<html>
   
	<p>&nbsp;</p>
    <p>&nbsp;</p>
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
				 			<p>&nbsp;</p>
                        <p>Search e-yellow pages <input type="text"  name="search" /> <input type="submit" value="Search" 	                           class="submit" /></p> 
					</div>
		  		</form>
				<p>&nbsp;</p>
	   </div>	 
    <i><head><title><strong><center>Login <center><strong></title></i>
    <link href="css/dropdown/themes/vimeo.com/helper.css" media="screen" rel="stylesheet" type="text/css" />
   
 <h1 align='left' >Login</h1>
   
<style>
body {
  background-image: url("7.jpg");
  background-position:center 10%,10%;
  background-repeat: no-repeat;
}
</style>
<link rel="shortcut icon" type="image/x-icon" href="css/dropdown/themes/vimeo.com/images/icon.gif" /></head>
<body>
        
  
</br>
</br>


		 
		
        
<table width="350" border="1" align="left" cellpadding="5" cellspacing="10" >

<tr>
<form name="form1" method="post" action="checklogin.php">
<td>
<table width="100%" border="0" cellpadding="4" cellspacing="10" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>Member Login </strong></td>
</tr>
<tr>
<td width="78">Username</td>
<td width="6">:</td>
<td width="294"><input name="username" type="email" id="myusername"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="password" type="password" id="mypassword"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Login"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
     
 
</body>
</html>

<?php include("includes/footer.php"); ?>