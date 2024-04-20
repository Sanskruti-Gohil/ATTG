<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>PACKAGES</title>
    
    <style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 28px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>



  <style>
  body {
    background-image: url('bg1.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed; 
    background-size: 100% 100%;
  }
  </style>
  

</head>

<body bgcolor="">
<center>

<marquee><h1 class="impact"style="color:black;"><b><i>MEDTOUR</i></b></h1></marquee>

<h1 class="impact" style="color:black;"><b>PACKAGES</b></h1>
<h1 class="impact" style="color:black;"><b>DELETE DETAILS</b></h1>

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">



<?php

/**
 * @author lolkittens
 * @copyright 2023
 */

$Pcode=$_REQUEST['pcode'];
$con=mysql_connect("localhost","root","");
if($con)
{
    //echo "Connected to MySQL"."<br/>";
}
mysql_selectdb("medtour");

$sql="select * from packages where pcode='$Pcode'";

$result=mysql_query($sql,$con);

while($row=mysql_fetch_array($result))
{
   $D1=$row['pcode'];
    $D2=$row['hcode'];
    $D3=$row['dcode'];
    $D4=$row['preferences'];
    $D5=$row['pkgdays'];
    $D6=$row['charges'];
    $D7=$row['accomodation'];
}

?>


<form method="Post" action="PackagesDeleteSave.php">

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">

<tr>
<td>Package Code :</td>
<td><input type="text" name="D1" value="<?php echo $D1;?>"/></td>
</tr>


<tr>
<td>Hospital Code :</td>
<td><input type="text" name="D2" value="<?php echo $D2;?>"/></td>
</tr>


<tr>
<td>Doctor Code :</td>
<td><input type="text" name="D3" value="<?php echo $D3;?>"/></td>
</tr>



<tr>
<td>Preferences :</td>
<td><input type="text" name="D4" value="<?php echo $D4;?>"/></td>
</tr>

<tr>
<td>Package Days :</td>
<td><input type="text" name="D5" value="<?php echo $D5;?>"/></td>
</tr>


<tr>
<td>Charges :</td>
<td><input type="text" name="D6" value="<?php echo $D6;?>"/></td>
</tr>


<tr>
<td>Accomodation :</td>
<td><input type="text" name="D7" value="<?php echo $D7;?>"/></td>
</tr>

<tr>
<td colspan="2"align="center">
<input class="button" type="submit" name="Delete" value="Delete"/></td>
</tr>
	
	
	</table>
</form>

<?php
    
    mysql_close($con);
?>
</center>
</body>
</html>