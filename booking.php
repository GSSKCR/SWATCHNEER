<html>
<head>
<title>booking</title>
<style type="text/css">
h3{
color:blue;
</style>
<script type="text/javascript">

function cost()
{
	var a=f2.cans.value;
	//alert(a);
	var cost=parseInt(50*a);
	document.getElementById("demo").innerHTML ="total cost is" + " " +cost;
}
function book()
{
	var a=f2.t1.value;
var b=$uid;
if(a>20){
alert("value should be lessthan 20");
f2.t1.focus();
return false;
}
else{
return true;
}
}
</script>
</head>
<body bgcolor=#99d6ff><center>
<h1>BOOK WATER CANS</h1><br><br></center>
<form name="f2" method="POST" action="insertbook.php">
<center>
<?php
$d=$_SESSION['sid'];
echo $d;
?>
<table cellspacing="40">
<tr>
<td>enter no. of cans:<br>
<input type="text" name="cans" size="40" onkeyup="cost()" required><br><br></td>
<td>along with can:<br>
<input type="radio" value="yes" name="along with can:">yes
<input type="radio" value="no" name="along with can:">no<br></td></tr>
<tr><td><h3><u>delivery address:</u></h3></td></tr>
<tr>
<td>
dno:<br>
<input type="text"name="dno" size="40" required><br></td>
<td>street:<br>
<input type="text"name="street" size="40" required><br></td></tr>
<tr><td>area:<br>
<input type="text"name="area" size="40" required><br></td>
<td>city:<br>
<input type="text"name="city" size="40" required><br></td></tr>
<tr><td>pincode:<br>
<input type="text"name="pincode" size="40" required><br><br></td></tr>
</table>
<p id="demo"></p>
<button onclick="return book();">book</button>
</center>
</form>
</body>
</html>


