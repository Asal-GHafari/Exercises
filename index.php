<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link type="text/css"  rel="stylesheet" href="css.css"/>
</head>

<body>

<form action="index.php" method="get" class="frm">
<table border="1">
	<Tr>
    	<td><label for="text">Product Name:</label></td>
    	<td><input type="text" name="name" /></td>
    </Tr>
    <Tr>
    	<td><label for="text">CD or DVD</label></td>
    	<td>
        	<select name="select">
       			<option>-</option>
                <option>CD</option> 
                <option>DVD</option>
        	</select>
       </td>
    </Tr>
    <Tr>
    	<td><label for="text">Price</label></td>
    	<td><input type="text" name="price" /></td>
    </Tr>
    <Tr>
    	<td><label for="text">Description</label></td>
    	<td><input type="text" name="desc" /></td>
    </Tr>
    <Tr>
    	<td><input type="submit"  name="subadd" value="Add"/></td>
    	<td><input type="submit" name="Print"   value="Print"/></td>
    </Tr>
</table>
</form>
<?php 
include("php.php");
//// Create connection
//$con=mysqli_connect("localhost","root","","product");
//// Check connection
//if (mysqli_connect_errno($con))
//{
//	echo "Failed to connect to MySQL: " . mysqli_connect_error();
//} 
//$names=$_GET["name"];
//$selects=$_GET["select"];
//$prices=$_GET["price"];
//$descs=$_GET["desc"];
//if (isset($_GET['subadd']))
//{
//	$result =mysqli_query($con,"SELECT $names FROM pro WHERE name=$names");
//	$row = mysqli_fetch_array($result);
//	if (!$row)
//	{
//		mysqli_query($con,"INSERT INTO  pro(name,cdordvd,price,descrip)VALUES ('$names','$selects','$prices','$descs')");
//	}
//}
//if (isset($_GET['Print']))
//{
//	$result =mysqli_query($con,"SELECT * FROM pro WHERE name=$names");
//	echo "<table border='1' align='center' width='600px' bgcolor='#99CC00' dir='rtl' bordercolordark='#FF3300' style='text-align:center'>
//		<tr>
//			<td>Product Name</td> 
//			<td>CD or DVD</td> 
//			<td>Price</td> 
//			<td>Description</td> 
//		</tr>";
//echo    "<tr>";
//while($row = mysqli_fetch_array($result))
//{
//	echo"<td>".$row['name']."</td>"; 
//	echo"<td>".$row['cdordvd']."</td>"; 
//	echo"<td>".$row['price']."</td>"; 
//	echo"<td>".$row['descrip']."</td>"; 	
//}
//echo   "</tr>";
//echo "</table>";
//}
//mysqli_close($con);
?>

</body>
</html>