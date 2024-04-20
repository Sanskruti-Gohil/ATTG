<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>Subject Update Details</title>
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
        <b>Faculty Information</b>
      </h1>
      <form method="Post" action="SubjectUpdate.php" name="Subject" onsubmit="">
      <table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">
      
      <?php

$Scode=$_REQUEST['subject_id'];
//echo $Fno;
$con=mysql_connect("localhost","root","");
mysql_select_db("attg");

$sql="SELECT * FROM `subject` WHERE `subject_id` = '$Scode'";

$result=mysql_query($sql,$con);

while($row=mysql_fetch_assoc($result))
{
    $D1=$row['sname'];
    $D2=$row['subject_id'];
    $D3=$row['ctype'];
    $D4=$row['sem'];
    $D5=$row['dept'];
}

?>

<tr>
<td>Subject Name :</td>
<td><input type="text" name="D1" value="<?php echo $D1;?>"/></td>
</tr>


<tr>
<td>Subject Code :</td>
<td><input type="text" name="D2" value="<?php echo $D2;?>"/></td>
</tr>


<tr>
<td>Course Type :</td>
<td><input type="text" name="D3" value="<?php echo $D3;?>"/></td>
</tr>


<tr>
<td>Semester :</td>
<td><input type="text" name="D4" value="<?php echo $D4;?>"/></td>
</tr>



<tr>
<td>Department :</td>
<td><input type="text" name="D5" value="<?php echo $D5;?>"/></td>
</tr>


<tr>
<td>
                    <a href="SubjectEdit.php" class="back">Back</a>
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
