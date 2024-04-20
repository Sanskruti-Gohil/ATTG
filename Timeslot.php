<?php

if(isset($_POST['insert']))
{
    $conn=mysql_connect("localhost","root","");
    mysql_select_db("attg");
    echo "Connected"."</br>";
    
    $Id=$_POST['id'];
    $Stname=$_POST['start_time'];
    $Ndname=$_POST['end_time'];
    

    
    echo $Id,$Ndname;
    $sql = "INSERT INTO timeslots (id, start_time, end_time) VALUES ('$Id', '$Stname', '$Ndname')";;
    if(mysql_query($sql,$conn))
    {
        echo "<script>alert('Insert successful');</script>";
        echo ("<script LANGUAGE='JavaScript'>window. location. href='TimeslotView.php';</script>");
    }
    else
    {
        echo "<script>alert('Something is wrong please retry');</script>";
        echo ("<script LANGUAGE='JavaScript'>window. location. href='Timeslot.html';</script>");
    }
}
mysql_close($conn);

?>