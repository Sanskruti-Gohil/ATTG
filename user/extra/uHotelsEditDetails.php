<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>MedTour-Hotel Update Details</title>
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
        var code=document.hotels.dcode.value;
        // var phone=document.doctors.phone.value;
        //document.print(dcode);
        //var upswd=document.doctors.pswd.value;
        //var uname=/^[a-zA-Z ]*$/;
       
        //var unm=document.registration.nm.value.match(nm);
        //var fnm=document.registration.fname.value.match(fname);       
        if(code.length<6 || code.length>8)
        {
            alert("Length of Hotel code should be 6 characters!");
            document.doctors.code.focus();
            return false;
        }         
        // else if(phone.length<10 | phone.length > 10)
        // {
        //     alert("Please Enter Mobile Number in at least 10 digits");
        //     document.doctors.phone.focus();
        //     return false;
            
        // }
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
        <b>Hotel Information</b>
      </h1>

      <form method="Post" action="uHotelsUpdate.php" name="hotels" onsubmit="return validate();">
<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">


<?php

$Hhtcode=$_REQUEST['htcode'];
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

$sql="SELECT * FROM `hotels` WHERE `htcode` = '$Hhtcode'";

$result=mysql_query($sql,$con);

while($row=mysql_fetch_assoc($result))
{
    $D1=$row['htcode'];
    $D2=$row['nm'];
    $D3=$row['addr'];
    $D4=$row['rtype'];
    $D5=$row['chrgs'];
    $D6=$row['pcode'];
    $D7=$row['chkout'];
}

?>



<tr>
<td>Hotel Code :</td>
<td><input type="text" name="D1" value="<?php echo $D1;?>"/></td>
</tr>


<tr>
<td>Name :</td>
<td><input type="text" name="D2" value="<?php echo $D2;?>"/></td>
</tr>


<tr>
<td>Address :</td>
<td><input type="text" name="D3" value="<?php echo $D3;?>"/></td>
</tr>


<tr>
<td>Room Tyoe :</td>
<td><input type="text" name="D4" value="<?php echo $D4;?>"/></td>
</tr>



<tr>
<td>Charges :</td>
<td><input type="number" name="D5" value="<?php echo $D5;?>"/></td>
</tr>


<tr>
<td>Package Code :</td>
<td><input type="text" name="D6" value="<?php echo $D6;?>"/></td>
</tr>


<tr>
<td>Checkout Time :</td>
<td><input type="time" name="D7" value="<?php echo $D7;?>"/></td>
</tr>


<tr>
<td>
                    <a href="uHotelsEdit.php" class="back">Back</a>
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
