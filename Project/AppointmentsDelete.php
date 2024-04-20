<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>APPOINTMENTS</title>
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

<h1 class="impact" style="color:black;"><b>APPOINTMENTS INFORMATION</b></h1>
<h1 class="impact" style="color:black;"><b>Show Data</b></h1>

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">
<tr> 
<td><a href='index.html'><h1>Home</h1></a></td>
</tr>
<tr>

<th>Patient Id</th>
<th>First Name</th>
<th>Last Name</th>
<th>Address 1</th>
<th>Address 2</th>
<th>City</th>
<th>Contact No.</th>
<th>Appointment Date </th>
<th>Appointment Time</th>
<th>Appointment Status</th>
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
$sql="select * from appointments";
$result=mysql_query($sql,$con);

while($row=mysql_fetch_array($result))
{
    $DB_PatientId=$row['paid'];
    $DB_FirstName=$row['finm'];
    $DB_LastName=$row['lnm'];
    $DB_Address1=$row['addr1'];
    $DB_Address2=$row['addr2'];
    $DB_City=$row['city'];
    $DB_ContactNo=$row['contactno'];
    $DB_AppointmentDate=$row['appdt'];
    $DB_AppointmentTime=$row['apptm'];
    $DB_AppointmentStatus=$row['appstus'];

?>

<tr>

<tr>
<tr>
<td><?php echo $DB_PatientId;?></td>
<td><?php echo $DB_FirstName;?></td>
<td><?php echo $DB_LastName;?></td>
<td><?php echo $DB_Address1;?></td>
<td><?php echo $DB_Address2;?></td>
<td><?php echo $DB_City;?></td>
<td><?php echo $DB_ContactNo;?></td>
<td><?php echo $DB_AppointmentDate;?></td>
<td><?php echo $DB_AppointmentTime;?></td>
<td><?php echo $DB_AppointmentStatus;?></td>
<td><a href="AppointmentsDeleteDetails.php?paid=<?php echo $DB_PatientId;?>">Delete</a></td>
</tr>

<?php
}
mysql_close($con);
?>

</table>
</center>
</body>
</html>
