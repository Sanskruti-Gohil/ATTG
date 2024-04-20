<?php

/**
 * @author lolkittens
 * @copyright 2023
 */

if(isset ($_POST['Delete']))
{
     
   
    $Ppaid=$_POST['D1'];
    $Ppicode=$_POST['D8'];
    $Pnm=$_POST['D2'];
    $Page=$_POST['D3'];
    $Pgndr=$_POST['D4'];
    $Pdcode=$_POST['D5'];
    $Pill=$_POST['D6'];
    $Preffby=$_POST['D7'];
   
    
    
$con=mysql_connect("localhost","root","");  
if($con)
{
    echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("medtour");
$sql="delete from patients where paid='$Ppaid'"; 
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
//header("location:PatientsDelete.php");


?>