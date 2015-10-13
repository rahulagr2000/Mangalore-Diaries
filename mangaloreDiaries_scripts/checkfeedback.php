<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("yellow_pages");

$username=$_POST['name'];
$email=$_POST['emailid'];
$subject=$_POST['subject'];
$category=$_POST['category'];
$message=$_POST['message'];

$queryuser=mysql_query("SELECT * FROM user WHERE uid='$username' ");
$checkuser=mysql_num_rows($queryuser);
?>
<html>
 <head>
   
 <script type="text/javascript">
function formCheck(formobj){
	// Enter name of mandatory fields
	var fieldRequired = Array("name","email","subject","category","message");
	// Enter field description to appear in the dialog box
	var fieldDescription = Array("Your name","Your e-mail address","Subject","Category","Message");
	// dialog message
	var alertMsg = "Please complete the following fields:\n";
	
	var l_Msg = alertMsg.length;
	
	for (var i = 0; i < fieldRequired.length; i++){
		var obj = formobj.elements[fieldRequired[i]];
		if (obj){
			switch(obj.type){
			case "select-one":
				if (obj.selectedIndex == -1 || obj.options[obj.selectedIndex].text == ""){
					alertMsg += " - " + fieldDescription[i] + "\n";
				}
				break;
			case "select-multiple":
				if (obj.selectedIndex == -1){
					alertMsg += " - " + fieldDescription[i] + "\n";
				}
				break;
			case "text":
			case "textarea":
				if (obj.value == "" || obj.value == null){
					alertMsg += " - " + fieldDescription[i] + "\n";
				}
				break;
			default:
			}
			if (obj.type == undefined){
				var blnchecked = false;
				for (var j = 0; j < obj.length; j++){
					if (obj[j].checked){
						blnchecked = true;
					}
				}
				if (!blnchecked){
					alertMsg += " - " + fieldDescription[i] + "\n";
				}
			}
		}
	}

	if (alertMsg.length == l_Msg){
		return true;
	}else{
		alert(alertMsg);
		return false;
	}
}

 
</script>
</head>
<body>
<?php
$insert_user=mysql_query("INSERT INTO feedback(name,email,subject,category,message) VALUES ('$username', '$email', '$subject', '$category', '$message')");
 
if($insert_user)
 {	echo "DONE!!";
	 header('Location:successfeedback.php');
 }
else

{ echo " Some technical problem !!";
 //header('Location:signup.php');
}
 
 
mysql_close($con);
?>