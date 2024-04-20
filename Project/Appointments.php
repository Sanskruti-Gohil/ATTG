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
    
    $Apaid=$_POST['paid'];
    $Afinm=$_POST['finm'];
    $Alnm=$_POST['lnm'];
    $Aaddr1=$_POST['addr1'];
    $Aaddr2=$_POST['addr2'];
    $Acity=$_POST['city'];
    $Acontactno=$_POST['contactno'];
    $Aappdt=$_POST['appdt'];
    $Aapptm=$_POST['apptm'];
    $Aappstus=$_POST['appstus'];
    
    echo $Apaid,$Acity,$Aappstus;
    $sql="insert into appointments values('$Apaid','$Afinm','$Alnm','$Aaddr1','$Aaddr2','$Acity',$Acontactno,'$Aappdt','$Aapptm','$Aappstus')";
     if(mysql_query($sql,$conn))
    {
        echo "<script>alert('Appointment Booking successful');</script>";
        //echo ("<script LANGUAGE='JavaScript'>window. location. href='index2.htm';</script>");
    }
    else
    {
        echo "<script>alert('Something is wrong please book the appointment again');</script>";
        //echo ("<script LANGUAGE='JavaScript'>window. location. href='index2.htm';</script>");
    }
}
mysql_close($conn);


?>