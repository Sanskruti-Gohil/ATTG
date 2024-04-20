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
<h1 class="impact" style="color:black;"><b>EDIT DETAILS</b></h1>

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">

<?php

$Username=$_REQUEST['UName'];
$con=mysql_connect("localhost","root","");
if($con)
{
    //echo "Connected to MySQL"."<br/>";
}
mysql_selectdb("medtour");

$sql="select * from registration where UName='$Username'";

$result=mysql_query($sql,$con);

while($row=mysql_fetch_array($result))
{
    $D1=$row['UType'];
    $D2=$row['UName'];
    $D3=$row['UPass'];
    $D4=$row['Ufname'];
    $D5=$row['UAddr'];
    $D6=$row['UEmail'];
    $D7=$row['UPhone'];
    $D8=$row['USecQue'];
    $D9=$row['USecAns'];
    

}

?>

<form method="Post" action="RegistrationUpdate.php">

<tr>
<td>UType :</td>
<td><input type="text" name="D1" value="<?php echo $D1;?>"/></td>
</tr>


<tr>
<td>User Name :</td>
<td><input type="text" name="D2" value="<?php echo $D2;?>"/></td>
</tr>



<tr>
<td>Password:</td>
<td><input type="password" name="D3" value="<?php echo $D3;?>"/></td>
</tr>

<tr>
<td>FullName:</td>
<td><input type="text" name="D4" value="<?php echo $D4;?>"/></td>
</tr>


<tr>
<td>Address:</td>
<td><input type="text" name="D5" value="<?php echo $D5;?>"/></td>
</tr>


<tr>
<td>Email id:</td>
<td><input type="Email" name="D6" value="<?php echo $D6;?>"/></td>
</tr>

<tr>
<td>Mobile No:</td>
<td><input type="text" name="D7" value="<?php echo $D7;?>"/></td>
</tr>

<tr>
<td>Security Question:</td>
<td><input type="text" name="D8" value="<?php echo $D8;?>"/></td>
</tr>



<tr>
<td>Security Answer:</td>
<td><input type="text" name="D9" value="<?php echo $D9;?>"/></td>
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