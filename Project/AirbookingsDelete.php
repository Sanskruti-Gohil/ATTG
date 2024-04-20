<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>AIRBOOKINGS</title>
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

<h1 class="impact" style="color:black;"><b>AIRBOOKINGS INFORMATION</b></h1>
<h1 class="impact" style="color:black;"><b>Show Data</b></h1>

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">
<tr> 
<td><a href='index.html'><h1>Home</h1></a></td>
</tr>
<tr>

<th>Package Code</th>
<th>Patient Id</th>
<th>Flight Code</th>
<th>Ticket No.</th>
<th>Seat No.</th>
<th>Scheduled Date</th>
<th>Scheduled Time</th>
<th>Source</th>
<th>Destination</th>
<th>Fare Details</th>
<th>Authorized Phone No.</th>
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
$sql="select * from airbookings";
$result=mysql_query($sql,$con);

while($row=mysql_fetch_array($result))
{
   
    $DB_PackageCode=$row['pcode'];
    $DB_PatientId=$row['paid'];
    $DB_FlightCode=$row['fcode'];
    $DB_TicketNo=$row['tno'];
    $DB_SeatNo=$row['sno'];
    $DB_ScheduledDate=$row['schdt'];
    $DB_ScheduledTime=$row['schtm'];
    $DB_Source=$row['src'];
    $DB_Destination=$row['dest'];
    $DB_FareDetails=$row['faredt'];
    $DB_AuthorizedPhoneNo=$row['autphno'];
?>

<tr>

<tr>
<tr>
<tr>
<td><?php echo $DB_PackageCode;?></td>
<td><?php echo $DB_PatientId;?></td>
<td><?php echo $DB_FlightCode;?></td>
<td><?php echo $DB_TicketNo;?></td>
<td><?php echo $DB_SeatNo;?></td>
<td><?php echo $DB_ScheduledDate;?></td>
<td><?php echo $DB_ScheduledTime;?></td>
<td><?php echo $DB_Source;?></td>
<td><?php echo $DB_Destination;?></td>
<td><?php echo $DB_FareDetails;?></td>
<td><?php echo $DB_AuthorizedPhoneNo;?></td>
<td><a href="AirbookingsDeleteDetails.php?pid=<?php echo $DB_PatientId;?>">Delete</a></td>
</tr>

<?php
}
mysql_close($con);
?>

</table>
</center>
</body>
</html>
