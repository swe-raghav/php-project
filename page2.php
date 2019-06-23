<!doctype html>
<html>
<head>
<title> welcome</title></head>
<body background="logo1.jpg">
<form name="fname" action="ip1.php" method="post">
<center>
<h1><center><font face="monotype corsiva" color="#00bfff" size="12">INSTRUCTIONS</center></font></h1> 
<font face="calibri" color="#b0e0e6" size="5"><p><b>1.PLEASE ATTEND ALL THE QUESTIONS <br>
2.EACH QUESTION CARRIES SEPARATE MARK<br>
3.DONT CLICK FOR MULTIPLE OPTION<br></font>
<center><font color="#00bfff" size="5"> <h1> ALL THE BEST!!!! </h1></center></p></font>
<input type="submit" value="START NOW">
<?php
session_start();
$_SESSION["reg_no"]=$_POST["reg"];
$_SESSION["name"]=$_POST["name"];
?>
</center>
</form>
</body>
</html>