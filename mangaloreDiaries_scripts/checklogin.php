<?php 

// Inialize session
session_start();

mysql_connect("localhost","root","") or die ('error :' .mysql_error());
mysql_select_db("yellow_pages");

// Inialize session
session_start();

// Include database connection settings


// Retrieve username and password from database according to user's input
$login = mysql_query("SELECT * FROM user WHERE (uid = '" . mysql_real_escape_string($_POST['username']) . "') and (password = '" . mysql_real_escape_string($_POST['password']) . "')");

// Check username and password match
if (mysql_num_rows($login) == 1) {
// Set username session variable
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];
$_SESSION['login']=1;
// Jump to secured page
header('Location: home.php');
}
else {
// Jump to login page
 
echo"wrong userid or password";
header('Location: login.php');

}

include("includes/footer.php"); 

?>