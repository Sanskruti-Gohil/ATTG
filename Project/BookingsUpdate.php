<?php

/**
 * @author lolkittens
 * @copyright 2023
 */

if(isset ($_POST['Submit']))
{
     
    $Bdate=$_POST['D1'];
    $Bcode=$_POST['D2'];
    $Bfnm=$_POST['D3'];
    $Bphno=$_POST['D4'];
    $Baltno=$_POST['D5'];
    $Bmail=$_POST['D6'];
    $Brelation=$_POST['D7'];
    $Bid=$_POST['D8'];
    $Bppltravel=$_POST['D9'];
    $Bpcode=$_POST['D10'];
    $Bgndr=$_POST['D11'];
    $Btmperiod=$_POST['D12'];
    $Bchindate=$_POST['D13'];
    $Bchoutdate=$_POST['D14'];
    
   echo $Bdate,$Brelation,$Bchoutdate;  
$con=mysql_connect("localhost","root","");  
if($con)
{
    echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("medtour");
$sql="update bookings set date='$Bdate',fnm='$Bfnm',phno=$Bphno,altno=$Baltno,email='$Bmail',relation='$Brelation',id='$Bid',ppltravel=$Bppltravel,pcode='$Bpcode',gndr='$Bgndr',tmperiod=$Btmperiod,chindate='$Bchindate',choutdate='$Bchoutdate', where bcode='$Bcode'"; 

if(mysql_query($sql,$con))

{

echo "Record Updated Successfully";
}
else
{
    echo"Record Not Updated";
    
}
}
mysql_close($con);
//header("location:BookingsEdit.php");


?>