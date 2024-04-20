<?php

/**
 * @author lolkittens
 * @copyright 2023
 */

if(isset ($_POST['Delete']))
{
     
    $Hhtcode=$_POST['D1'];
    $Hnm=$_POST['D2'];
    $Haddr=$_POST['D3'];
    $Hrtype=$_POST['D4'];
    $Hchrgs=$_POST['D5'];
    $Hpcode=$_POST['D6'];
    $Hchkout=$_POST['D7'];
   
    
    
$con=mysql_connect("localhost","root","");  
if($con)
{
    echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("medtour");
$sql="delete from hotels where htcode='$Hhtcode'"; 
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
//header("location:HotelsDelete.php");


?>