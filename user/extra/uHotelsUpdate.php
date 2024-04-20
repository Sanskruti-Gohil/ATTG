<?php

if(isset ($_POST['Submit']))
{
     
    
    $Hhtcode=$_POST['D1'];
    $Hnm=$_POST['D2'];
    $Haddr=$_POST['D3'];
    $Hrtype=$_POST['D4'];
    $Hchrgs=$_POST['D5'];
    $Hpcode=$_POST['D6'];
    $Hchkout=$_POST['D7'];
    
    
//    echo $Hhtcode,$Hrtype,$Hchkout;  
$con=mysql_connect("localhost","root","");  
if($con)
{
    // echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("medtour");
$sql="update `hotels` set `htcode`='$Hhtcode',`nm`='$Hnm',`addr`='$Haddr',`rtype`='$Hrtype',`chrgs`=$Hchrgs,`pcode`='$Hpcode',`chkout`='$Hchkout' where `htcode`='$Hhtcode'"; 

if(mysql_query($sql,$con))

{
    echo "<script>alert('Record Updated');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='uHotelsEdit.php';</script>"); 
}
else
{
    // echo"Record Not Updated";
    echo "<script>alert('Record not Updated');</script>";
  echo ("<script LANGUAGE='JavaScript'>window. location. href='index1.html';</script>");
    
}
}
mysql_close($con);
//header("location:HotelsEdit.php");
?>