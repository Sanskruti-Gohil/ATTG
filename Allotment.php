<?php

if(isset($_POST['insert']))
{
    $conn=mysql_connect("localhost","root","");
    mysql_select_db("attg");
    //echo "Connected"."</br>";
    
    $Theory=$_POST['th'];
    $Classroom=$_POST['cr'];

    
    //echo $Fname,$Fdesg,$Fmail;
    $sql="insert into allotment values('$Theory','$Classroom')";
    if(mysql_query($sql,$conn))
    {
        echo "<script>alert('Allotment successful');</script>";
        echo ("<script LANGUAGE='JavaScript'>window. location. href='AllotmentView.php';</script>");
    }
    else
    {
        echo "<script>alert('Something is wrong please retry');</script>";
        echo ("<script LANGUAGE='JavaScript'>window. location. href='Allotment.html';</script>");
    }
}
mysql_close($conn);

?>