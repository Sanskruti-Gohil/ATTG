<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>MedTour-Appointment Update Details</title>
     <!-- <link rel="stylesheet" type="text/css" href="css.css" /> -->
     <style>
        .button {
          background-color: green;
          color: white;
          padding: 10px 20px;
          text-align: center;
          border: solid;
          border-color: black;
          border-radius: 6px;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          font-weight: bold;
          margin: 4px 2px;
          cursor: pointer;
        }  

        input {
          padding-left: 30px;
          padding-right: 20px;
          padding-top: 8px;
          padding-bottom: 8px;
          border-radius: 10px;
          border: solid;
        }
        
        select {
          padding-left: 30px;
          padding-right: 20px;
          padding-top: 8px;
          padding-bottom: 8px;
          border-radius: 10px;
          border: solid;
        }
  
        td{
          font-weight: bold;
          color: black;
          font-size: 20px;
        }

        .back{
            color: white;
            background-color: black;
            font-size: 16px;
            font-weight: bold;
            padding: 10px 20px;
            border: solid;
            border-color: black;
            border-radius: 6px;
            margin: 4px 2px;
            cursor: pointer;
            text-decoration: none;
        }

  </style>
  
  <script type="text/javascript">
        function preventBack() 
   {
   window.history.forward();

   }
setTimeout("preventBack()", 0);
window.onunload = function () { null };
</script>

</head>

<body>
<center>

<!-- <marquee><h1 class="impact"style="color:black;"><b><i>MEDTOUR</i></b></h1></marquee>

<h1 class="impact" style="color:black;"><b>HOSPITALS INFORMATION</b></h1>
<h1 class="impact" style="color:black;"><b>Show Data</b></h1> -->
<h1 class="impact" style="color: black; text-align: center; margin: 10px">
        <b>Appointment Information</b>
      </h1>
      <form method="Post" action="uAppointmentsUpdate.php" name="appointments" onsubmit="return validate();">
<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">
<!-- <table align="center" cellpadding="6" border="2"> -->



<?php

$PatientId=$_REQUEST['pid'];
$con=mysql_connect("localhost","root","");
if($con)
{
    // echo "Connected to MySQL"."<br/>";
}
else
{
    // echo "not connected";
}
mysql_select_db("medtour");

$sql="SELECT * FROM `appointments` WHERE `aid` = '$PatientId'";

$result=mysql_query($sql,$con);

while($row=mysql_fetch_assoc($result))
{
    $D1=$row['aid'];
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

<tr>
<td>Appointment Id :</td>
<td><input type="text" name="D1" value="<?php echo $D1;?>" readonly /></td>
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
<td><input type="number" name="D7" value="<?php echo $D7;?>"/></td>
</tr>


<tr>
<td>Appointment Date :</td>
<td><input type="date" name="D8" value="<?php echo $D8;?>"/></td>
</tr>

<tr>
<td>Appointment Time :</td>
<td><input type="time" name="D9" value="<?php echo $D9;?>"/></td>
</tr>

<tr>
<td>Appointment Status :</td>
<!--<td><input type="text" name="D10" value="<?php echo $D10;?>"/></td>-->
<td><select name="D10">
    <option selected>Pending</option>
    <option>Confirm</option>
</select>
</td>
</tr>

<tr>
<td>
                    <a href="uAppointmentsEdit.php" class="back">Back</a>
                </td>
<td>
<input class="button" type="submit" name="Submit" value="Submit"/></td>
</tr>
	
	
</table>
</form>
</center>

<?php
    
    mysql_close($con);
?>

</body>
</html>