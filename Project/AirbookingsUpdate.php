<?php

/**
 * @author lolkittens
 * @copyright 2023
 */

if(isset ($_POST['Submit']))
{
     
    
    $Apcode=$_POST['D1'];
    $Apaid=$_POST['D2'];
    $Afcode=$_POST['D3'];
    $Atno=$_POST['D4'];
    $Asno=$_POST['D5'];
    $Aschdt=$_POST['D6'];
    $Aschtm=$_POST['D7'];
    $Asrc=$_POST['D8'];
    $Adest=$_POST['D9'];
    $Afaredt=$_POST['D10'];
    $Aautphno=$_POST['D11'];
    
   echo $Apcode,$Aschdt,$Aautphno;  
$con=mysql_connect("localhost","root","");  
if($con)
{
    echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("medtour");
$sql="update airbookings set pcode='$Apcode',paid=$Apaid,fcode='$Afcode',tno='$Atno',sno='$Asno',schdt='$Aschdt',schtm='$Aschtm',src='$Asrc',dest='$Adest',faredt='$Afaredt',autphno='$Aautphno' where paid='$Apaid'"; 

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
//header("location:AirbookingsEdit.php");


?>