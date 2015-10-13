<?php include("includes/header.php"); ?>

<html>
   
    <p>&nbsp;</p>
   
    <i><head><title><strong><center>Register company on e-yellow pages<center><strong></title></i>
    <link href="css/dropdown/themes/vimeo.com/helper.css" media="screen" rel="stylesheet" type="text/css" />
   
 <h1 align='center' >Feedback or Complaint</h1>
   
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





<div class="left_articles" align="left">
<table width="387" border="1" align="left" cellpadding="5" cellspacing="10" >

<tr>
<form name="form2" method="post" action="checkfeedback.php" onSubmit="return formCheck(this);" >
<td width="353">
<table width="100%" border="0" cellpadding="4" cellspacing="10" bgcolor="#FFFFFF">
<tr>
<td colspan="3"></td>
</tr>
<tr>
<td width="78">Name</td>
<td width="6"> :</td>
<td width="294">  <input name="name" type="text" id="myname">  </td>
</tr>
<tr>
<td>E-mail</td>
<td>:</td>
<td><input name="emailid" type="email" id="myemailid"></td>
</tr>
<tr>
<td>Subject</td>
<td>:</td>
<td><input name="subject" type="text" id="msubject"></td>
</tr>
<tr>
<td>Category</td>
<td>:</td>
<td><select name="category" size="1">
		 
        <option value="feedback" selected="selected">Feedback</option>
		<option value="complaint">Complaint</option>
        </select>
</td>
</tr>
<td>Message:</td>
<td>:</td>
<td><textarea name="message" id="message" cols="35" rows="5"></textarea></td>
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
 
</body>
</html>

<?php include("includes/footer.php"); ?>