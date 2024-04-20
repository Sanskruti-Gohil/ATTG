<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>APPOINTMENTS</title>
    
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

<h1 class="impact" style="color:black;"><b>APPOINTMENT INFORMATION</b></h1>
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

$sql="SELECT * FROM appointments WHERE pcode = '$Pcode'";

$result=mysql_query($sql,$con);

while($row=mysql_fetch_assoc($result))
{
    $D1=$row['pid'];
    $D2=$row['finm'];
    $D3=$row['lnm'];
    $D4=$row['addr1'];
    $D5=$row['addr2'];
    $D6=$row['city'];
    $D7=$row['contactno'];
    $D8=$row['appdt'];
    $D9=$row['apptm'];
    $D10=$row['appstus'];
   
}

?>

<form method="Post" action="AppointmentsUpdate.php">
<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">

<tr>
<td>Patient Id :</td>
<td><input type="text" name="D1" value="<?php echo $D1;?>"/></td>
</tr>

<tr>
<td>First Name :</td>
<td><input type="text" name="D2" value="<?php echo $D2;?>"/></td>
</tr>


<tr>
<td>Last Name :</td>
<td><input type="text" name="D3" value="<?php echo $D3;?>"/></td>
</tr>


<tr>
<td>Address 1 :</td>
<td><input type="text" name="D4" value="<?php echo $D4;?>"/></td>
</tr>



<tr>
<td>Address 2 :</td>
<td><input type="text" name="D5" value="<?php echo $D5;?>"/></td>
</tr>

<tr>
<td>City :</td>
<td><input type="text" name="D6" value="<?php echo $D6;?>"/></td>
</tr>


<tr>
<td>Contact No. :</td>
<td><input type="text" name="D7" value="<?php echo $D7;?>"/></td>
</tr>


<tr>
<td>Appointment Date :</td>
<td><input type="text" name="D8" value="<?php echo $D8;?>"/></td>
</tr>

<tr>
<td>Appointment Time :</td>
<td><input type="text" name="D9" value="<?php echo $D9;?>"/></td>
</tr>

<tr>
<td>Appointment Status :</td>
<td><input type="text" name="D10" value="<?php echo $D10;?>"/></td>
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
