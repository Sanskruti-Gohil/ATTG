<?php

/**
 * @author lolkittens
 * @copyright 2023
 */

if(isset($_POST['insert']))
{
    $conn=mysql_connect("localhost","root","");
    mysql_select_db("medtour");
    echo "Connected"."</br>";
    
    $Hhtcode=$_POST['htcode'];
    $Hnm=$_POST['nm'];
    $Haddr=$_POST['addr'];
    $Hrtype=$_POST['rtype'];
    $Hchrgs=$_POST['chrgs'];
    $Hpcode=$_POST['pcode'];
    $Hchkout=$_POST['chkout'];
    
    
    
    echo $Hhtcode,$Hrtype,$Hchkout;
    $sql="insert into hotels values('$Hhtcode','$Hnm','$Haddr','$Hrtype',$Hchrgs,'$Hpcode','$Hchkout')";
    if(mysql_query($sql,$conn))
    {
        echo "<script>alert('Booking successful');</script>";
        //echo ("<script LANGUAGE='JavaScript'>window. location. href='index2.htm';</script>");
    }
    else
    {
        echo "<script>alert('Something is wrong please book the again');</script>";
        //echo ("<script LANGUAGE='JavaScript'>window. location. href='index2.htm';</script>");
    }
}
mysql_close($conn);




?>