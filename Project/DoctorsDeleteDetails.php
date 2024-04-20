<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>REGISTRATION</title>
    
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

<h1 class="impact" style="color:black;"><b>REGISTRATION</b></h1>
<h1 class="impact" style="color:black;"><b>DELETE DETAILS</b></h1>

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">




<?php

/**
 * @author lolkittens
 * @copyright 2023
 */

$Dcode=$_REQUEST['dcode'];
$con=mysql_connect("localhost","root","");
if($con)
{
    //echo "Connected to MySQL"."<br/>";
}
mysql_selectdb("medtour");

$sql="select * from doctors where dcode='$Dcode'";

$result=mysql_query($sql,$con);

while($row=mysql_fetch_array($result))
{
    $D1=$row['dcode'];
    $D2=$row['dname'];
    $D3=$row['dgndr'];
    $D4=$row['dspec'];
    $D5=$row['dqua'];
    $D6=$row['dexpr'];
    $D7=$row['drate'];
    $D8=$row['dphone'];
    $D9=$row['dmail'];
    $D10=$row['daddr'];
    $D11=$row['dcfs'];
    $D12=$row['dabd'];
    $D13=$row['dcst'];
   

}


?>


<form method="Post" action="DoctorsDeleteSave.php">

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">

<tr>
<td>Doctor Code :</td>
<td><input type="text" name="D1" value="<?php echo $D1;?>"/></td>
</tr>


<tr>
<td>Name :</td>
<td><input type="text" name="D2" value="<?php echo $D2;?>"/></td>
</tr>


<tr>
<td>Gender :</td>
<td><input type="text" name="D3" value="<?php echo $D3;?>"/></td>
</tr>



<tr>
<td>Specialities :</td>
<td><input type="text" name="D4" value="<?php echo $D4;?>"/></td>
</tr>

<tr>
<td>Qualification :</td>
<td><input type="text" name="D5" value="<?php echo $D5;?>"/></td>
</tr>


<tr>
<td>Experience :</td>
<td><input type="text" name="D6" value="<?php echo $D6;?>"/></td>
</tr>


<tr>
<td>Ratings :</td>
<td><input type="text" name="D7" value="<?php echo $D7;?>"/></td>
</tr>

<tr>
<td>Phone No :</td>
<td><input type="text" name="D8" value="<?php echo $D8;?>"/></td>
</tr>

<tr>
<td>Email Id :</td>
<td><input type="text" name="D9" value="<?php echo $D9;?>"/></td>
</tr>



<tr>
<td>Address :</td>
<td><input type="text" name="D10" value="<?php echo $D10;?>"/></td>
</tr>

<tr>
<td>Consultation Fees :</td>
<td><input type="text" name="D11" value="<?php echo $D11;?>"/></td>
</tr>

<tr>
<td>About Doctors :</td>
<td><input type="text" name="D12" value="<?php echo $D12;?>"/></td>
</tr>

<tr>
<td>Consultation Time :</td>
<td><input type="text" name="D13" value="<?php echo $D13;?>"/></td>
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