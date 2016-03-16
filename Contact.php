<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
<title>About me</title>
<link href="main.css" rel="stylesheet" type="text/css">
</head> 
<body> 
<?php
	$c_file= fopen("contact.txt",'a') ;//or die("Unable to open file!");
	$txt= $_POST["name"].';'.$_POST["email"].';'.$_POST["comment"];
	fwrite($c_file,$_POST['name']);
	fclose($c_file);
?>
<script>
window.alert("Hi <?php echo htmlspecialchars($_POST["name"]); ?>, Contact Information received I will contact you shortly");
history.back();
</script>
 
</body>
</html>
