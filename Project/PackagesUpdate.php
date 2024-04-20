<?php

/**
 * @author lolkittens
 * @copyright 2023
 */

if(isset ($_POST['Submit']))
{
     
    $Pcode=$_POST['D1'];
    $Hcode=$_POST['D2'];
    $Dcode=$_POST['D3'];
    $Preferences=$_POST['D4'];
    $Pkgdays=$_POST['D5'];
    $Charges=$_POST['D6'];
    $Accomodation=$_POST['D7'];
    
   echo $Pcode,$Preferences,$Accomodation;  
$con=mysql_connect("localhost","root","");  
if($con)
{
    echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("medtour");
$sql="update packages set preferences='$Preferences',pkgdays=$Pkgdays,charges=$Charges,accomodation='$Accomodation' where pcode='$Pcode'"; 

if(mysql_query($sql,$con))

{

echo "Record Updated Successfully";
}
else
{
    echo"Record Not Updated Successfully";
    
}
}
mysql_close($con);
//header("location:PackagesEdit.php");


?>