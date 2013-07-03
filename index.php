<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link type="text/css"  rel="stylesheet" href="css.css"/>
</head>

<body>

<form action="index.php" method="get" class="frm">
<table border="0">
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
?>
</body>
</html>