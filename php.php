<?php 
// Create connection
$con=mysqli_connect("localhost","root","","product");
// Check connection
if (mysqli_connect_errno($con))
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
} 
$names=$_GET["name"];
$selects=$_GET["select"];
$prices=$_GET["price"];
$descs=$_GET["desc"];
if (isset($_GET['subadd']))
{
	$result =mysqli_query($con,"SELECT $names FROM pro WHERE name=$names");
	$row = mysqli_fetch_array($result);
	if (!$row)
	{
		mysqli_query($con,"INSERT INTO  pro(name,cdordvd,price,descrip)VALUES ('$names','$selects','$prices','$descs')");
	}
}
if (isset($_GET['Print']))
{
	$result =mysqli_query($con,"SELECT * FROM pro WHERE name=$names");	echo "<table style='color:#FFF' border='1' align='center' width='600px' bgcolor='#0000FF' dir='rtl' bordercolordark='#FF3300'  style='margin-top:50px';>
		<tr>
			<td>Product Name</td> 
			<td>CD or DVD</td> 
			<td>Price</td> 
			<td>Description</td> 
		</tr>";
echo    "<tr>";
while($row = mysqli_fetch_array($result))
{
	echo"<td>".$row['name']."</td>"; 
	echo"<td>".$row['cdordvd']."</td>"; 
	echo"<td>".$row['price']."</td>"; 
	echo"<td>".$row['descrip']."</td>"; 	
}
echo   "</tr>";
echo "</table>";
}
mysqli_close($con);
?>
