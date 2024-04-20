<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>DOCTORS</title>
    
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

<h1 class="impact" style="color:black;"><b>BOOKINGS INFORMATION</b></h1>
<h1 class="impact" style="color:black;"><b>EDIT DETAILS</b></h1>



<?php

/**
 * @author lolkittens
 * @copyright 2023
 */

$Bcode=$_REQUEST['bcode'];
$con=mysql_connect("localhost","root","");
if($con)
{
    echo "Connected to MySQL"."<br/>";
}
else
{
    echo "not connected";
}
mysql_select_db("medtour");

$sql="SELECT * FROM bookings WHERE bcode = '$Bcode'";

$result=mysql_query($sql,$con);

while($row=mysql_fetch_assoc($result))
{
    $D1=$row['date'];
    $D2=$row['bcode'];
    $D3=$row['fnm'];
    $D4=$row['phno'];
    $D5=$row['altno'];
    $D6=$row['email'];
    $D7=$row['relation'];
    $D8=$row['id'];
    $D9=$row['ppltravel'];
    $D10=$row['pcode'];
    $D11=$row['gndr'];
    $D12=$row['tmperiod'];
    $D13=$row['chindate'];
    $D14=$row['choutdate'];
    
}


?>

<form method="Post" action="BookingsUpdate.php">
<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">

<tr>
<td>Date :</td>
<td><input type="text" name="D1" value="<?php echo $D1;?>"/></td>
</tr>

<tr>
<td>Booking Code :</td>
<td><input type="text" name="D2" value="<?php echo $D2;?>"/></td>
</tr>


<tr>
<td>Full Name :</td>
<td><input type="text" name="D3" value="<?php echo $D3;?>"/></td>
</tr>


<tr>
<td>Phone Number :</td>
<td><input type="text" name="D4" value="<?php echo $D4;?>"/></td>
</tr>



<tr>
<td>Alternate Number :</td>
<td><input type="text" name="D5" value="<?php echo $D5;?>"/></td>
</tr>

<tr>
<td>Email :</td>
<td><input type="text" name="D6" value="<?php echo $D6;?>"/></td>
</tr>


<tr>
<td>Relationship with patient :</td>
<td><input type="text" name="D7" value="<?php echo $D7;?>"/></td>
</tr>


<tr>
<td>ID Proof :</td>
<td><input type="text" name="D8" value="<?php echo $D8;?>"/></td>
</tr>

<tr>
<td>Number of people travelling :</td>
<td><input type="text" name="D9" value="<?php echo $D9;?>"/></td>
</tr>

<tr>
<td>Package Code :</td>
<td><input type="text" name="D10" value="<?php echo $D10;?>"/></td>
</tr>



<tr>
<td>Gender :</td>
<td><input type="text" name="D11" value="<?php echo $D11;?>"/></td>
</tr>

<tr>
<td>Staying Time Period :</td>
<td><input type="text" name="D12" value="<?php echo $D12;?>"/></td>
</tr>

<tr>
<td>Check-in Date :</td>
<td><input type="text" name="D13" value="<?php echo $D13;?>"/></td>
</tr>

<tr>
<td>Check-out Date :</td>
<td><input type="text" name="D14" value="<?php echo $D14;?>"/></td>
</tr>


<tr>
<td colspan="2"align="center">
<input class="button" type="submit" name="Submit" value="Submit"/></td>
</tr>
	
	
	</table>
</form>

<?php
    
    mysql_close($con);
?>
</center>
</body>
</html>
