<?php

if(isset ($_POST['Submit']))
{
     
    $Dcode=$_POST['D1'];
    $Dname=$_POST['D2'];
    $Dgndr=$_POST['D3'];
    $Dspec=$_POST['D4'];
    $Dqua=$_POST['D5'];
    $Dexpr=$_POST['D6'];
    $Drate=$_POST['D7'];
    $Dphone=$_POST['D8'];
    $Dmail=$_POST['D9'];
    $Daddr=$_POST['D10'];
    $Dcfs=$_POST['D11'];
    $Dabd=$_POST['D12'];
    $Dcst=$_POST['D13'];
    
//    echo $Dcode,$Dmail,$Dcst;  
$con=mysql_connect("localhost","root","");  
if($con)
{
    // echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("medtour");
$sql="update `doctors` set `dname`='$Dname',`dgndr`='$Dgndr',`dspec`='$Dspec',`dqua`='$Dqua',`dexpr`='$Dexpr',`drate`='$Drate',`dphone`='$Dphone',`dmail`='$Dmail',`daddr`='$Daddr',`dcfs`='$Dcfs',`dabd`='$Dabd',`dcst`='$Dcst' where `dcode`='$Dcode'"; 

if(mysql_query($sql,$con))

{
    // echo 'Record Updated Successfully';
    echo "<script>alert('Record Updated');</script>";
  echo ("<script LANGUAGE='JavaScript'>window. location. href='uDoctorsEdit.php';</script>");
}
else
{
    // echo"Record Not Updated Successfully";
    echo "<script>alert('Record not Updated');</script>";
  echo ("<script LANGUAGE='JavaScript'>window. location. href='index1.html';</script>");
}
}
mysql_close($con);
// header("location:DoctorsEdit.php");
?>