<?php

/**
 * @author lolkittens
 * @copyright 2023
 */

if(isset ($_POST['Submit']))
{
     
    
    $Ppaid=$_POST['D1'];
    $Pnm=$_POST['D2'];
    $Page=$_POST['D3'];
    $Pgndr=$_POST['D4'];
    $Pdcode=$_POST['D5'];
    $Pill=$_POST['D6'];
    $Preffby=$_POST['D7'];
    
   echo $Ppaid,$Pgndr,$Preffby;  
$con=mysql_connect("localhost","root","");  
if($con)
{
    echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("medtour");
$sql="update patients set nm='$Pnm',age=$Page,gndr='$Pgndr',dcode='$Pdcode',ill='$Pill',reffby='$Preffby' where paid='$Ppaid'"; 

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
//header("location:PatientsEdit.php");


?>