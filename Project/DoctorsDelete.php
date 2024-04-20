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

<th>Doctor Code</th>
<th>Name</th>
<th>Gender</th>
<th>Specialities</th>
<th>Qualifications</th>
<th>Experience</th>
<th>Ratings</th>
<th>Phone Number</th>
<th>Email</th>
<th>Address</th>
<th>Consultation Fees</th>
<th>About Doctors</th>
<th>Consultation Time</th>
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
$sql="select * from doctors";
$result=mysql_query($sql,$con);

while($row=mysql_fetch_array($result))
{
    
    
    
    $DB_Doctorcode=$row['dcode'];
    $DB_Name=$row['dname'];
    $DB_Gender=$row['dgndr'];
    $DB_Specialities=$row['dspec'];
    $DB_Qualifications=$row['dqua'];
    $DB_Experience=$row['dexpr'];
    $DB_Ratings=$row['drate'];
    $DB_Phone=$row['dphone'];
    $DB_Email=$row['dmail'];
    $DB_Address=$row['daddr'];
    $DB_Consultationfees=$row['dcfs'];
    $DB_Aboutdoctors=$row['dabd'];
    $DB_Consultationtime=$row['dcst'];


?>

<tr>

<tr>
<td><?php echo $DB_Doctorcode;?></td>
<td><?php echo $DB_Name;?></td>
<td><?php echo $DB_Gender;?></td>
<td><?php echo $DB_Specialities;?></td>
<td><?php echo $DB_Qualifications;?></td>
<td><?php echo $DB_Experience;?></td>
<td><?php echo $DB_Ratings;?></td>
<td><?php echo $DB_Phone;?></td>
<td><?php echo $DB_Email;?></td>
<td><?php echo $DB_Address;?></td>
<td><?php echo $DB_Consultationfees;?></td>
<td><?php echo $DB_Aboutdoctors;?></td>
<td><?php echo $DB_Consultationtime;?></td>
<td><a href="DoctorsDeleteDetails.php?dcode=<?php echo $DB_Doctorcode;?>">Delete</a></td>
</tr>

<?php
}
mysql_close($con);
?>

</table>
</center>
</body>
</html>
