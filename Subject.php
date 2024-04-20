<?php

if(isset($_POST['insert']))
{
    $conn=mysql_connect("localhost","root","");
    mysql_select_db("attg");
    //echo "Connected"."</br>";
    
    $Sname=$_POST['sname'];
    $Scode=$_POST['subject_id'];
    $Ctype=$_POST['ctype'];
    $Sem=$_POST['sem'];
    $Dept=$_POST['dept'];
    
    //echo $Fname,$Fdesg,$Fmail;
    $sql="insert into subject values('$Sname','$Scode','$Ctype','$Sem','$Dept')";
    if(mysql_query($sql,$conn))
    {
        echo "<script>alert('Subject added successfully');</script>";
        echo ("<script LANGUAGE='JavaScript'>window. location. href='SubjectView.php';</script>");
    }
    else
    {
        echo "<script>alert('Something is wrong please add again');</script>";
        echo ("<script LANGUAGE='JavaScript'>window. location. href='Subject.html';</script>");
    }
}
mysql_close($conn);

?>