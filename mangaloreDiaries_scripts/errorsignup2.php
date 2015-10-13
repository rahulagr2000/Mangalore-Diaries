<?php include("includes/header.php"); ?>

<html>
   
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <i><head><title><strong><center>Signup <center><strong></title></i>
    <link href="css/dropdown/themes/vimeo.com/helper.css" media="screen" rel="stylesheet" type="text/css" />
   
 <h1 align='center' >Signup</h1>
   
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

<p><center><b><font size=2.5 color="#993300">Passwords do not match!</font></b><center></p>
<table width="350" border="1" align="center" cellpadding="5" cellspacing="10" >

<tr>
<form name="form2" method="post" action="checksignup.php">
<td>
<table width="100%" border="0" cellpadding="4" cellspacing="10" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>Enter Your Details: </strong></td>
</tr>
<tr>
<td width="78">Name</td>
<td width="6">:</td>
<td width="294"><input name="uname" type="text" id="myuname"></td>
</tr>
<tr>
<td>Email</td>
<td>:</td>
<td><input name="username" type="text" id="myusername"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="password" type="password" id="mypassword"></td>
</tr>
<tr>
<td>Repeat-Password</td>
<td>:</td>
<td><input name="repeatpassword" type="password" id="myrepeatpassword"></td>
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
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>

<?php include("includes/footer.php"); ?>