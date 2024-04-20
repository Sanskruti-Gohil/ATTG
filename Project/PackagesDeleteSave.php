<?php

/**
 * @author lolkittens
 * @copyright 2023
 */

if(isset ($_POST['Delete']))
{
     
   
    $Pcode=$_POST['D1'];
    $Hcode=$_POST['D2'];
    $Dcode=$_POST['D3'];
    $Preferences=$_POST['D4'];
    $Pkgdays=$_POST['D5'];
    $Charges=$_POST['D6'];
    $Accomodation=$_POST['D7'];
    
    
$con=mysql_connect("localhost","root","");  
if($con)
{
    echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("medtour");
$sql="delete from packages where pcode='$Pcode'"; 
if(mysql_query($sql,$con))

{

echo "Record Deleted Successfully";
}
else
{
    echo"Record Not Deleted";
    
}
}
mysql_close($con);
header("location:PackagesDelete.php");




?>