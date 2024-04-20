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
    
    $Ppaid=$_POST['paid'];
    $Pnm=$_POST['nm'];
    $Page=$_POST['age'];
    $Pgndr=$_POST['gndr'];
    $Pdcode=$_POST['dcode'];
    $Pill=$_POST['ill'];
    $Preffby=$_POST['reffby'];
    
    
    echo $Ppaid,$Pgndr,$Preffby;
    $sql="insert into patients values('$Ppaid','$Pnm',$Page,'$Pgndr','$Pdcode','$Pill','$Preffby')";
     if(mysql_query($sql,$conn))
    {
        echo "<script>alert('Patient's Booking successful');</script>";
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