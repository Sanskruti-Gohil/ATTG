<?php

/**
 * @author lolkittens
 * @copyright 2023
 */

if(isset ($_POST['Delete']))
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
   
    
    
$con=mysql_connect("localhost","root","");  
if($con)
{
    echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("medtour");
$sql="delete from airbookings where paid='$Apaid'"; 
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
//header("location:AirbookingsDelete.php");


?>