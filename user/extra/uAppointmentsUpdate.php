<?php

if(isset ($_POST['Submit']))
{
     
    $Apaid=$_POST['D1'];
    $Afinm=$_POST['D2'];
    $Alnm=$_POST['D3'];
    $Aaddr1=$_POST['D4'];
    $Aaddr2=$_POST['D5'];
    $Acity=$_POST['D6'];
    $Acontactno=$_POST['D7'];
    $Aappdt=$_POST['D8'];
    $Aapptm=$_POST['D9'];
    $Aappstus=$_POST['D10'];
    
//    echo $Apaid,$Aaddr2,$Aappstus;  
$con=mysql_connect("localhost","root","");  
if($con)
{
    // echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("medtour");
$sql="update `appointments` set `finm`='$Afinm',`lnm`='$Alnm',`addr1`='$Aaddr1',`addr2`='$Aaddr2',`city`='$Acity',`contactno`='$Acontactno',`appdt`='$Aappdt',`apptm`='$Aapptm',`appstus`='$Aappstus' where `aid`='$Apaid'"; 

if(mysql_query($sql,$con))

{

// echo "Record Updated Successfully";
echo "<script>alert('Record Updated');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='uAppointmentsEdit.php';</script>"); 

}
else
{
    // echo"Record Not Updated";
    echo "<script>alert('Record not Updated');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='index1.html';</script>"); 
}
}
mysql_close($con);
//header("location:AppointmentsEdit.php");


?>