<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>MedTour-Doctor Update Details</title>
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
      function validate()
      {
        var code=document.doctors.dcode.value;
        var phone=document.doctors.phone.value;
        //document.print(dcode);
        //var upswd=document.doctors.pswd.value;
        //var uname=/^[a-zA-Z ]*$/;
       
        //var unm=document.registration.nm.value.match(nm);
        //var fnm=document.registration.fname.value.match(fname);
        
        
        if(code.length<6 || code.length>8)
        {
            alert("Length of Doctor Code should be 6 characters!");
            document.doctors.code.focus();
            return false;
        }
        
          
        else if(phone.length<10 || phone.length > 10)
        {
            alert("Please Enter Mobile Number of at least 10 digits");
            document.doctors.phone.focus();
            return false;
            
        }
        // else
        // {
        //     alert("Registration Scucees doc swam!!");
        //     return false;
        // }               
      }
    </script>
  
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
        <b>Doctor Update Information</b>
      </h1>

      <form method="Post" action="uDoctorsUpdate.php" onsubmit="return validate();">

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">

<?php

$Dcode=$_REQUEST['dcode'];
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

$sql="SELECT * FROM `doctors` WHERE `dcode` = '$Dcode'";

$result=mysql_query($sql,$con);

while($row=mysql_fetch_assoc($result))
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
<td><input type="number" name="D8" value="<?php echo $D8;?>"/></td>
</tr>

<tr>
<td>Email Id :</td>
<td><input type="email" name="D9" value="<?php echo $D9;?>"/></td>
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
<td><input type="time" name="D13" value="<?php echo $D13;?>"/></td>
</tr>


<tr>
<td>
  <a href="uDoctorsEdit.php" class="back">Back</a>
</td>
<td>
<input class="button" type="submit" name="Submit" value="Update"/>
</td>
</tr>
	
	
	</table>
</form>
</center>

<?php
    
    mysql_close($con);
?>

</body>
</html>
