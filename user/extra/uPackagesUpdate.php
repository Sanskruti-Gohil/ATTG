<?php

if(isset ($_POST['Submit']))
{
     
    $Pcode=$_POST['D1'];
    $Hcode=$_POST['D2'];
    $Dcode=$_POST['D3'];
    $Preferences=$_POST['D4'];
    $Pkgdays=$_POST['D5'];
    $Charges=$_POST['D6'];
    $Accomodation=$_POST['D7'];
    
//    echo $Pcode,$Preferences,$Accomodation;  
$con=mysql_connect("localhost","root","");  
if($con)
{
    // echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("medtour");
$sql="update `packages` set `preferences`='$Preferences',`pkgdays`=$Pkgdays,`charges`=$Charges,`accomodation`='$Accomodation' where `pcode`='$Pcode'"; 

if(mysql_query($sql,$con))
{
// echo "Record Updated Successfully";
    echo "<script>alert('Record Updated');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='uPackagesEdit.php';</script>");  
}
else
{
    // echo"Record Not Updated Successfully";
    echo "<script>alert('Record not Updated');</script>";
  echo ("<script LANGUAGE='JavaScript'>window. location. href='index1.html';</script>");    
}
}
mysql_close($con);
//header("location:PackagesEdit.php");


?>