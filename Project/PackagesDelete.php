<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>PACKAGES</title>
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

<h1 class="impact" style="color:black;"><b>PACKAGES</b></h1>
<h1 class="impact" style="color:black;"><b>Show Data</b></h1>

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">
<tr> 
<td><a href='index.html'><h1>Home</h1></a></td>
</tr>
<tr>

<th>Package Code</th>
<th>Hospital Code</th>
<th>Doctor Code</th>
<th>Preferences</th>
<th>Package Days</th>
<th>Charges</th>
<th>Accomodation</th>
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
$sql="select * from packages";
$result=mysql_query($sql,$con);

while($row=mysql_fetch_array($result))
{
    
    
    
     
    $DB_Packagecode=$row['pcode'];
    $DB_Hospitalcode=$row['hcode'];
    $DB_Doctorcode=$row['dcode'];
    $DB_Preferences=$row['preferences'];
    $DB_Packagedays=$row['pkgdays'];
    $DB_Charges=$row['charges'];
    $DB_Accomodation=$row['accomodation'];
    

?>


<tr>

<td><?php echo $DB_Packagecode;?></td>
<td><?php echo $DB_Hospitalcode;?></td>
<td><?php echo $DB_Doctorcode;?></td>
<td><?php echo $DB_Preferences;?></td>
<td><?php echo $DB_Packagedays;?></td>
<td><?php echo $DB_Charges;?></td>
<td><?php echo $DB_Accomodation;?></td>
<td><a href="PackagesDeleteDetails.php?pcode=<?php echo $DB_Packagecode;?>">Delete</a></td>
</tr>

<?php
}
mysql_close($con);
?>

</table>
</center>
</body>
</html>
