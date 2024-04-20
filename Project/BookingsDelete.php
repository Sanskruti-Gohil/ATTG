<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>DOCTORS</title>
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

<body bgcolor="">
<center>

<marquee><h1 class="impact"style="color:black;"><b><i>MEDTOUR</i></b></h1></marquee>

<h1 class="impact" style="color:black;"><b>DOCTORS INFORMATION</b></h1>
<h1 class="impact" style="color:black;"><b>Show Data</b></h1>

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">
<tr> 
<td><a href='index.html'><h1>Home</h1></a></td>
</tr>
<tr>

<th>Date</th>
<th>Full Name</th>
<th>Phone Number</th>
<th>Alternate Number</th>
<th>Email</th>
<th>Relationship with patient</th>
<th>ID Proof</th>
<th>Number of people travelling </th>
<th>Package Code</th>
<th>Gender</th>
<th>Staying Time Period</th>
<th>Check-in Date</th>
<th>Check-out Date</th>
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
}
mysql_selectdb("medtour");
$sql="select * from bookings";
$result=mysql_query($sql,$con);

while($row=mysql_fetch_array($result))
{
    $DB_Date=$row['date'];
    $DB_Bookingcode=$row['bcode'];
    $DB_FullName=$row['fnm'];
    $DB_PhoneNumber=$row['phno'];
    $DB_AlternateNumber=$row['altno'];
    $DB_Email=$row['email'];
    $DB_Relationwithpatient=$row['relation'];
    $DB_IDProof=$row['id'];
    $DB_Numberofpeopletravelling=$row['ppltravel'];
    $DB_PackageCode=$row['pcode'];
    $DB_Gender=$row['gndr'];
    $DB_StayingTimePeriod=$row['tmperiod'];
    $DB_CheckinDate=$row['chindate'];
    $DB_CheckoutDate=$row['choutdate'];

?>

<tr>

<tr>
<td><?php echo $DB_Date;?></td>
<td><?php echo $DB_Bookingcode;?></td>
<td><?php echo $DB_FullName;?></td>
<td><?php echo $DB_PhoneNumber;?></td>
<td><?php echo $DB_AlternateNumber;?></td>
<td><?php echo $DB_Email;?></td>
<td><?php echo $DB_Relationwithpatient;?></td>
<td><?php echo $DB_IDProof;?></td>
<td><?php echo $DB_Numberofpeopletravelling;?></td>
<td><?php echo $DB_PackageCode;?></td>
<td><?php echo $DB_Gender;?></td>
<td><?php echo $DB_StayingTimePeriod;?></td>
<td><?php echo $DB_CheckinDate;?></td>
<td><?php echo $DB_CheckoutDate;?></td>
<td><a href="BookingsDeleteDetails.php?bcode=<?php echo $DB_Bookingcode;?>">Delete</a></td>
</tr>

<?php
}
mysql_close($con);
?>

</table>
</center>
</body>
</html>
