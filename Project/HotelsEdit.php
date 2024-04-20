<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>HOTELS</title>
     <link rel="stylesheet" type="text/css" href="css.css" />
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

<body border="1" bgcolor="">
<center>

<marquee><h1 class="impact"style="color:black;"><b><i>MEDTOUR</i></b></h1></marquee>

<h1 class="impact" style="color:black;"><b>HOTELS INFORMATION</b></h1>

<form >
<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">
<tr> 
<td><a href='index.html'></a></td>
</tr>
<tr>

<th>Hotel Code</th>
<th>Name</th>
<th>Address</th>
<th>Room Type</th>
<th>Charges</th>
<th>Package Code</th>
<th>Checkout Time</th>
<th>Actions</th>
</tr>


<?php

/**
 * @author lolkittens
 * @copyright 2023
 */

$con=mysql_connect("localhost","root","");
if($con)
{
   // echo "Connected to MySQL"."<br/>";

mysql_selectdb("medtour");
$sql="select * from hotels";
$result=mysql_query($sql,$con);

while($row=mysql_fetch_array($result))
{
    
    
    $DB_HotelCode=$row['htcode'];
    $DB_Name=$row['nm'];
    $DB_Address=$row['addr'];
    $DB_RoomType=$row['rtype'];
    $DB_Charges=$row['chrgs'];
    $DB_PackageCode=$row['pcode'];
    $DB_CheckoutTime=$row['chkout'];
    
    
   }
    
?>

<tr>
<td><?php echo $DB_HotelCode;?></td>
<td><?php echo $DB_Name;?></td>
<td><?php echo $DB_Address;?></td>
<td><?php echo $DB_RoomType;?></td>
<td><?php echo $DB_Charges;?></td>
<td><?php echo $DB_PackageCode;?></td>
<td><?php echo $DB_CheckoutTime;?></td>
<td><a href="HotelsEditDetails.php?htcode=<?php echo $DB_HotelCode;?>">Edit</a></td>
</tr>

<?php
}
mysql_close($con);
?>

</table>
</form>
</center>
</body>
</html>
