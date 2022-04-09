<html>
<head>
<meta charset="utf-8" />
<title>Less gooo </title>
</head>
<body>

<form action="index.php" method="post">
Roses Color:<input type="text" name="rosesColor" /><br/>
Ocean Color:<input type="text" name="oceanColor" /><br/>
Love Name:<input type="text" name="loveName" /><br/>
<input type="submit" />
</form>

<?php 
$rosesColor=$_POST["rosesColor"];
$oceanColor=$_POST["oceanColor"];
$loveName=$_POST["loveName"];
echo "Roses Are $rosesColor and <br/>";
echo "ocean Is $oceanColor<br/>";
echo "i Love you $loveName. <3"
?>


</body>
</html>