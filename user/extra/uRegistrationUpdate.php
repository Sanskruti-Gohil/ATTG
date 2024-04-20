<?php

if(isset ($_POST['Submit']))
{
     
   
    $usercat=$_POST['D1'];
    $username=$_POST['D2'];
    $password=$_POST['D3'];
    $fullname=$_POST['D4'];
    $address=$_POST['D5'];
    $emailid=$_POST['D6'];
    $mobileno=$_POST['D7'];
   $SecurityQuestion=$_POST['D8'];
    $SecurityAnswer=$_POST['D9'];
//    echo $usercat,$address,$SecurityAnswer;  
$con=mysql_connect("localhost","root","");  
if($con)
{
    // echo "Connected to MySQL"."<br/>";
} 

$password=md5($password);
mysql_select_db("medtour");
$sql="update `registration` set `UType`='$usercat',`UName`='$username',`UPass`='$password',`Ufname`='$fullname',`UAddr`='$address',`UEmail`='$emailid',`UPhone`='$mobileno',`USecQue`='$SecurityQuestion',`USecAns`='$SecurityAnswer' where `UEmail`='$emailid'"; 
if(mysql_query($sql,$con))

{

// echo "Record Updated Successfully";
echo "<script>alert('Record Updated');</script>";
  echo ("<script LANGUAGE='JavaScript'>window. location. href='uRegistrationEdit.php';</script>");
}
else
{
    echo "<script>alert('Record not Updated');</script>";
  echo ("<script LANGUAGE='JavaScript'>window. location. href='index1.html';</script>");
    
}
}
mysql_close($con);
// header("location:RegistrationEdit.php");
?>