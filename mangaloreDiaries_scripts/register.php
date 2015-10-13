<?php include("includes/header.php"); ?>

<html>
   
    <p>&nbsp;</p>
   
    <i><head><title><strong><center>Register company on e-yellow pages<center><strong></title></i>
    <link href="css/dropdown/themes/vimeo.com/helper.css" media="screen" rel="stylesheet" type="text/css" />

 <h1 align='center' >Register company on e-yellow pages</h1>
   
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

<div class="left_side" align="left">
<table width="387" border="1" align="left" cellpadding="5" cellspacing="10" >

<tr>
<form name="form2" method="post" action="checkregister.php" enctype="multipart/form-data" onSubmit="return formCheck(this);">
<td width="353">
<table width="100%" border="0" cellpadding="4" cellspacing="10" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>Enter Your Company Details: </strong></td>
</tr>
<tr>
<td width="78">Name</td>
<td width="6"> :</td>
<td width="294">  <input name="name" type="text" id="myname">  </td>
</tr>
<tr>
<td>User id</td>
<td>:</td>
<td><input name="username" type="text" id="myusername"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="password" type="password" id="mypassword"></td>
</tr>
<tr>
<td>Category</td>
<td>:</td>
<td><select name="category" size="1">
		<option value="select" selected="selected">select</option>
  		         			<option value="Cinemas">Cinemas</option>
  		         			<option value="Restaurant">Restaurant</option>
  		         			<option value="Garments">Garments</option>
  		         			<option value="Institute">Institute</option>
		</select>
</td>
</tr>
<tr>
<td>Location</td>
<td>:</td>
<td><select name="location" size="1">
		<option value="select" selected="selected">select</option>
					  		<option value="Balmatta">Balmatta</option>
					  		<option value="Kadri">Kadri</option>
					  		<option value="Lalbagh">Lalbagh</option>
					  		<option value="Jyoti">Jyoti</option>
					  		<option value="Surathkal">Surathkal</option>
		</select>
</td> 
</tr>
<tr>
<td>Phone</td>
<td>:</td>
<td><input name="phone" type="text" id="myphone"></td>
</tr>
<tr>
<td>E-mail</td>
<td>:</td>
<td><input name="email" type="email" id="myemail"></td>
</tr>
<td>Description:</td><td>:</td>
<td><textarea name="description" id="description" cols="20" rows="5"></textarea></td>
</tr>
<tr>
<td>Company Logo</td><td>:</td>
<td><input type="file" name="file" id="file" /> </td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Submit"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
</div>
 <p>&nbsp;</p>  
</body>
</html>

<?php include("includes/footer.php"); ?>