<!doctype html>
<html>
<head><title>welcome</title>
<script>
function validate()
{
var x=document.forms["fname"]["reg"].value;
if(x=="")
{
alert("number must be filled");
return false;
}
var y=document.forms["fname"]["name"].value;
if(y=="")
{
alert("name must be filled");
return false;
}
}
</script>
</head>
<body background="Untitled.png">
<form name="fname" onsubmit="return validate()" action="it11.php" method="post">
<center>
<font color="#663399"><h1>MEENAKSHI SUNDARARAJAN ENGINEERING COLLEGE</h1></font>
<font color="#007899"><h2>DEPARTMENT OF INFORMATION TECHNOLOGY</h2></font>
<font color="#663399"><h2>NATIONAL LEVEL TECHNICAL SYMPOSIUM- ASTHRA 2K18 </h2></font>
<font color="teal"><u><h2>INNO-LOG </h2></u></teal>
<font color="#663399"><h2> ROUND-I </h2></font>
<table>
<tr>
<th>
<font color="#000080" size="5">REGISTER NUMBER:</font>
</th>
<th> <input type="text" name="reg"><br>
</th>
</tr>
<br>
<br>
<tr>
<th>
<font color="#000080" size="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NAME:</font>
</th>
<th>
<input type="text" name="name"><br>
</th>
</tr>
<tr>
<th>
</th>
<th align="center">
<input type="submit" name="submit" value="LOGIN"><br>
</th>
</tr>
</table>
</center> </form></body></html>