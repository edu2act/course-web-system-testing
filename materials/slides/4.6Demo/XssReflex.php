<html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>XSS</title> 
</head> 
<body> 
<form action="" method="get"> 
<input type="text" name="input">     
<input type="submit"> 
</form> 
<br> 
<?php 
$XssReflex = $_GET['input'];
echo 'output:<br>'.$XssReflex;
?> 
</body> 
</html> 