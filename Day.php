<?php

if(isset($_POST['insert']))
{
    $conn=mysql_connect("localhost","root","");
    mysql_select_db("attg");
    echo "Connected"."</br>";
    
    $Id=$_POST['id'];
    $Name=$_POST['name'];
    

    
    echo $Id,$Name;
    $sql="insert into days values('$Id','$Name')";
    if(mysql_query($sql,$conn))
    {
        echo "<script>alert('Insert successful');</script>";
        echo ("<script LANGUAGE='JavaScript'>window. location. href='DayView.php';</script>");
    }
    else
    {
        echo "<script>alert('Something is wrong please retry');</script>";
        echo ("<script LANGUAGE='JavaScript'>window. location. href='Day.html';</script>");
    }
}
mysql_close($conn);

?>