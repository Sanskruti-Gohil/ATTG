<?php

if(isset($_POST['insert']))
{
    $conn=mysql_connect("localhost","root","");
    mysql_select_db("attg");
    //echo "Connected"."</br>";
    
    $Cname=$_POST['cname'];
    $Bname=$_POST['bname'];
    
    
    //echo $Fname,$Fdesg,$Fmail;
    $sql="insert into classroom values('$Cname','$Bname')";
    if(mysql_query($sql,$conn))
    {
        echo "<script>alert('Classrom Added successfully');</script>";
        echo ("<script LANGUAGE='JavaScript'>window. location. href='ClassroomView.php';</script>");
    }
    else
    {
        echo "<script>alert('Something is wrong please add again');</script>";
        echo ("<script LANGUAGE='JavaScript'>window. location. href='Classroom.html';</script>");
    }
}
mysql_close($conn);

?>