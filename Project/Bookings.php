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
    
    $Bdate=$_POST['date'];
    $Bcode=$_POST['bcode'];
    $Bfnm=$_POST['fnm'];
    $Bphno=$_POST['phno'];
    $Baltno=$_POST['altno'];
    $Bmail=$_POST['email'];
    $Brelation=$_POST['relation'];
    $Bid=$_POST['id'];
    $Bppltravel=$_POST['ppltravel'];
    $Bpcode=$_POST['pcode'];
    $Bgndr=$_POST['gndr'];
    $Btmperiod=$_POST['tmperiod'];
    $Bchindate=$_POST['chindate'];
    $Bchoutdate=$_POST['choutdate'];
    
    echo $Bdate,$Bid,$Bchoutdate;
    $sql="insert into bookings values('$Bdate','$Bcode','$Bfnm','$Bphno','$Baltno','$Bmail','$Brelation','$Bid',$Bppltravel,'$Bpcode','$Bgndr',$Btmperiod,'$Bchindate','$Bchoutdate')";
     if(mysql_query($sql,$conn))
    {
        echo "<script>alert('Booking successful');</script>";
        //echo ("<script LANGUAGE='JavaScript'>window. location. href='index2.htm';</script>");
    }
    else
    {
        echo "<script>alert('Something is wrong please book again');</script>";
        //echo ("<script LANGUAGE='JavaScript'>window. location. href='index2.htm';</script>");
    }
}
mysql_close($conn);




?>