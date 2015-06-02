<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Operadores Logicos</title>
</head>
<body>
	<?php
	$var1 = "Inter1234";
	$var2 = "Inter1234";
	$var3 = "jose";
	$var4 = "jose";
	
	if (is_string($var1)){
		break;
	} 
	
	elseif ( ($var1 == $var2) && ($var3 == $var4) ) 
	{
	   	echo "$var4 a iniciado session". "<br/>";
	}

	?>
</body>
</html>