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
    	<td><input type="submit"  value="Print"/></td>
    </Tr>
</table>
</form>
<?php 


// Create connection
	$con=mysqli_connect("localhost","root","","product");

// Check connection
if (mysqli_connect_errno($con))
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else { echo "Connection was OK!\n";}

$names=$_GET["name"];
$selects=$_GET["select"];
$prices=$_GET["price"];
$descs=$_GET["desc"];

if (isset($_GET['subadd'])){
echo $names;
echo $selects;
echo $prices;
echo $descts;


mysqli_query($con,"INSERT INTO table-product($name, $cdordvd, $price, $descrip)
VALUES ('$names','$selects','$prices','$descs')");



}

mysqli_close($con);
?>
</body>
</html>