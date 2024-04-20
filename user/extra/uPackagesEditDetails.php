<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>MedTour-Packages Update Details</title>
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
        var code=document.packages.pcode.value;
        var code=document.packages.hcode.value;
        var code=document.packages.dcode.value;
        // var phone=document.packages.phone.value;
        //document.print(dcode);
        //var upswd=document.doctors.pswd.value;
        //var uname=/^[a-zA-Z ]*$/;
       
        //var unm=document.registration.nm.value.match(nm);
        //var fnm=document.registration.fname.value.match(fname);
        
        
        if(code.length < 6 || code.length > 8)
        {
            alert("Length of Code should be 6 characters!");
            document.packages.code.focus();
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
        <b>Packages Edit Details</b>
      </h1>

      <form  name="packages" method="Post" action="uPackagesUpdate.php" onsubmit="return validate();">
<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">


<?php

$Pcode=$_REQUEST['pcode'];
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

$sql="SELECT * FROM `packages` WHERE `pcode` = '$Pcode'";

$result=mysql_query($sql,$con);

while($row=mysql_fetch_assoc($result))
{
    $D1=$row['pcode'];
    $D2=$row['hcode'];
    $D3=$row['dcode'];
    $D4=$row['preferences'];
    $D5=$row['pkgdays'];
    $D6=$row['charges'];
    $D7=$row['accomodation'];
}


?>


<tr>
<td>Package Code :</td>
<td><input type="text" name="D1" value="<?php echo $D1;?>"/></td>
</tr>


<tr>
<td>Hospital Code :</td>
<td><input type="text" name="D2" value="<?php echo $D2;?>"/></td>
</tr>


<tr>
<td>Doctor Code :</td>
<td><input type="text" name="D3" value="<?php echo $D3;?>"/></td>
</tr>



<tr>
<td>Preferences :</td>
<td><input type="text" name="D4" value="<?php echo $D4;?>"/></td>
</tr>

<tr>
<td>Package Days :</td>
<td><input type="number" name="D5" value="<?php echo $D5;?>"/></td>
</tr>


<tr>
<td>Charges :</td>
<td><input type="number" name="D6" value="<?php echo $D6;?>"/></td>
</tr>


<tr>
<td>Accomodation :</td>
<td><input type="text" name="D7" value="<?php echo $D7;?>"/></td>
</tr>

<tr>
<td>
                    <a href="uPackagesEdit.php" class="back">Back</a>
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
