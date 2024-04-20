<?php

if(isset($_POST['insert']))
{
    $conn=mysql_connect("localhost","root","");
    mysql_select_db("attg");
    //echo "Connected"."</br>";
    
    $Fname=$_POST['fn'];
    $Fno=$_POST['fno'];
    $Fdesg=$_POST['fdg'];
    $Fcontact=$_POST['fcno'];
    $Fmail=$_POST['fmail'];
    
    //echo $Fname,$Fdesg,$Fmail;
    $sql="insert into faculty values('$Fname','$Fno','$Fdesg','$Fcontact','$Fmail')";
    if(mysql_query($sql,$conn))
    {
        echo "<script>alert('Faculty added successfully');</script>";
        echo ("<script LANGUAGE='JavaScript'>window. location. href='FacultyView.php';</script>");
    }
    else
    {
        echo "<script>alert('Something is wrong please add again');</script>";
        echo ("<script LANGUAGE='JavaScript'>window. location. href='Faculty.html';</script>");
    }
}
mysql_close($conn);

?>