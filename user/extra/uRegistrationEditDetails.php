<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>MedTour-Registration Update Details</title>
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
      var uphone=document.registration.phone.value;
      var pswd=document.registration.pswd.value;
      var uname=/^[a-zA-Z ]*$/;
     
      var unm=document.registration.nm.value.match(nm);
      var fnm=document.registration.fname.value.match(nm);
      if(phone.length<10 || phone.length>10)
      {
          alert("Please Enter Mobile Number in at least 10 digits");
          document.registration.phone.focus();
          return false;
          
      }
      if(pswd.length<6)
      {
          alert("Length of password is atleast 6 characters!");
          document.registration.pswd.focus();
          return false;
      }
      if(nm==null)
      {
          alert("Please enter valid user name!");
          document.registration.nm.focus();
          return false;
      }
      
      if(fname==null)
      {
          alert("Please enter valid full name!");
          document.registration.fName.focus();
          return false;
      }
      return (true);
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
        <b>Registration Update Information</b>
      </h1>

      <form method="Post" action="uRegistrationUpdate.php" name="registration" onsubmit="return validate();">

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">

<?php

$Username=$_REQUEST['UName'];
$con=mysql_connect("localhost","root","");
if($con)
{
    //echo "Connected to MySQL"."<br/>";
}
mysql_selectdb("medtour");

$sql="select * from `registration` where `UName`='$Username'";

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
<td><input type="email" name="D6" value="<?php echo $D6;?>"/></td>
</tr>

<tr>
<td>Mobile No:</td>
<td><input type="number" name="D7" value="<?php echo $D7;?>"/></td>
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
<td>
  <a href="uRegistrationEdit.php" class="back">Back</a>
</td>
<td>
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