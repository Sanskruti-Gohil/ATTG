<?php

if (isset($_POST['submit'])) {
    $hcode = $_POST['hcode'];
    $hname = $_POST['hname'];
    $haddr = $_POST['haddr'];
    $hcountry = $_POST['hcountry'];
    $hcont = $_POST['hcont'];
    $hfac = $_POST['fac'];
    $hfacs = implode(", ", $hfac);
    $hcontnm = $_POST['hcontnm'];
    $hcontper = $_POST['hcontper'];

    // echo $hcode, $hname, $hcont, $hfacs;

    $con = mysql_connect("localhost", "root", "");
    if ($con) {
        // echo "Connected to MySQL" . "<br/>";
    }
    mysql_select_db("medtour");
    $sql = "UPDATE `hospitals` SET `HCode`='$hcode',`HName`='$hname',`HAddr`='$haddr',`HCountry`='$hcountry',`HCont`='$hcont',`HFac`='$hfacs',`HContPName`='$hcontnm',`HContPer`='$hcontper' where HCode='$hcode'";
    if (mysql_query($sql, $con)) {

        // echo 'Record Updated Successfully';
        echo "<script>alert('Record Updated');</script>";
        echo ("<script LANGUAGE='JavaScript'>window. location. href='uHospitalsEdit.php';</script>");
      
    } 
    else {
        // echo 'Record Not Updated Successfully';
        echo "<script>alert('Record not Updated');</script>";
  echo ("<script LANGUAGE='JavaScript'>window. location. href='index1.html';</script>");
    }
}
mysql_close($con);
// header("location:HospitalsEdit.php");
?>