<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>REGISTRATION</title>
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

<h1 class="impact" style="color:black;"><b>REGISTRATION</b></h1>
<h1 class="impact" style="color:black;"><b>Show Data</b></h1>

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">
<tr> 
<td><a href='index.html'><h1>Home</h1></a></td>
</tr>
<tr>

<th>Category</th>
<th>UserName</th>
<th>Password</th>
<th>FullName</th>
<th>Address</th>
<th>Email</th>
<th>Phone</th>
<th>Sec.Question</th>
<th>Answer</th>
<th>Action</th>
</tr>

<?php
$con=mysql_connect("localhost","root","");
if($con)
{
   // echo "Connected to MySQL"."<br/>";
}
mysql_selectdb("medtour");
$sql="select * from registration";
$result=mysql_query($sql,$con);

while($row=mysql_fetch_array($result))
{
    
    
    
    $DB_Usercat=$row['UType'];
    $DB_Username=$row['UName'];
    $DB_Password=$row['UPass'];
    $DB_FullName=$row['Ufname'];
    $DB_Address=$row['UAddr'];
    $DB_Emailid=$row['UEmail'];
    $DB_Phone=$row['UPhone'];
    $DB_Secques=$row['USecQue'];
    $DB_Secans=$row['USecAns'];


?>

<tr>

<td><?php echo $DB_Usercat;?></td>
<td><?php echo $DB_Username;?></td>
<td><?php echo $DB_Password;?></td>
<td><?php echo $DB_FullName;?></td>
<td><?php echo $DB_Address;?></td>
<td><?php echo $DB_Emailid;?></td>
<td><?php echo $DB_Phone;?></td>
<td><?php echo $DB_Secques;?></td>
<td><?php echo $DB_Secans;?></td>
<td><a href="RegistrationDeleteDetails.php?UName=<?php echo $DB_Username;?>">Delete</a></td>
</tr>

<?php
}
mysql_close($con);
?>

</table>
</center>
</body>
</html>
