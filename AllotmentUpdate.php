<?php

if(isset ($_POST['Submit']))
{
     
    
    $Theory=$_POST['D1'];
    $Classroom=$_POST['D3'];
    
    
//    echo $Apcode,$Aschdt,$Aautphno;  
$con=mysql_connect("localhost","root","");  
if($con)
{
    // echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("attg");
$sql="update `allotment` set `th`='$Theory',`cr`='$Classroom' where `cr`='$Classroom'"; 

if(mysql_query($sql,$con))

{

// echo "Record Updated Successfully";
echo "<script>alert('Record Updated');</script>";
echo ("<script LANGUAGE='JavaScript'>window. location. href='AllotmentView.php';</script>");
}
else
{
    // echo"Record Not Updated";
    echo "<script>alert('Record not Updated');</script>";
    echo ("<script LANGUAGE='JavaScript'>window. location. href='index2.html';</script>");
    
}
}
mysql_close($con);
//header("location:AirbookingsEdit.php");


?>