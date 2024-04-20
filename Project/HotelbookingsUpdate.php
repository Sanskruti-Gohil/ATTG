<?php

/**
 * @author lolkittens
 * @copyright 2023
 */

if(isset ($_POST['Submit']))
{
     
    
    $Hpcode=$_POST['D1'];
    $Hpaid=$_POST['D2'];
    $Hhcode=$_POST['D3'];
    $Hbkfrom=$_POST['D4'];
    $Hbkto=$_POST['D5'];
    
    
   echo $Hpcode,$Hhcode,$Hbkto;  
$con=mysql_connect("localhost","root","");  
if($con)
{
    echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("medtour");
$sql="update hotelbookings set pcode='$Hpcode',paid=$Hpaid,hcode='$Hhcode',bkfrom='$Hbkfrom',bkto='$Hbkto' where paid='$Hpaid'"; 

if(mysql_query($sql,$con))

{

echo "Record Updated Successfully";
}
else
{
    echo"Record Not Updated";
    
}
}
mysql_close($con);
//header("location:HotelbookingsEdit.php");


?>