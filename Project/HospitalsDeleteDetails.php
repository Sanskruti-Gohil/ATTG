<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>HOSPITALS</title>
     <link rel="stylesheet" type="text/css" href="css.css" />
    <style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 28px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>



  <style>
  body {
    background-image: url('bg1.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed; 
    background-size: 100% 100%;
  }
  </style>
  

</head>


<body>
    <body bgcolor="">
<center>

<marquee><h1 class="impact"style="color:black;"><b><i>MEDTOUR</i></b></h1></marquee>

<h1 class="impact" style="color:black;"><b>HOSPITALS INFORMATION</b></h1>
<h1 class="impact" style="color:black;"><b>Show Data</b></h1>

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">
<tr> 
<td><a href='index.html'></a></td>
</tr>

        
            <?php

            $hname = $_REQUEST['HName'];
            $con = mysql_connect("localhost", "root", "");
            // if($con)
            // {
            //     echo "Connected to MySQL"."<br/>";
            // }
            mysql_selectdb("medtour");

            $sql = "select * from `hospitals` where HName='$hname'";

            $result = mysql_query($sql, $con);


            while ($row = mysql_fetch_array($result)) {
                $hcode = $row['HCode'];
                $hname = $row['HName'];
                $haddr = $row['HAddr'];
                $country = $row['HCountry'];
                $hcont = $row['HCont'];
                $fac = $row['HFac'];
                $hfacs = explode(", ", $fac);
                $hcontnm = $row['HContPName'];
                $hcontper = $row['HContPer'];
            }

            ?>



            <tr>
                <td>Hospital Code :</td>
                <td><input type="text" name="hcode" value="<?php echo $hcode; ?>" /></td>
            </tr>

            <tr>
                <td>Hospital Name :</td>
                <td><input type="text" name="hname" value="<?php echo $hname; ?>" /></td>
            </tr>

            <tr>
                <td>Hospital Address :</td>
                <td><input type="type" name="haddr" value="<?php echo $haddr; ?>" /></td>
            </tr>

            <tr>
                <td>Country:</td>
                <td><input type="text" name="hcountry" value="<?php echo $country; ?>" /></td>
            </tr>

            <tr>
                <td>Contact no. :</td>
                <td><input type="number" name="hcont" value="<?php echo $hcont; ?>" /></td>
            </tr>

            <tr>
                <td>Facilities :</td>
                <td><input type="checkbox" name="fac[]" value="Private Rooms" <?php
                                                                                if (in_array("Private Rooms", $hfacs)) {
                                                                                    echo "checked";
                                                                                }
                                                                                ?>>Private Rooms</td>
                <td><input type="checkbox" name="fac[]" value="Cafeteria/Restaurant" <?php
                                                                                        if (in_array("Cafeteria/Restaurant", $hfacs)) {
                                                                                            echo "checked";
                                                                                        }
                                                                                        ?>>Cafeteria/Restaurant</td>
                <td><input type="checkbox" name="fac[]" value="Pharmacy" <?php
                                                                            if (in_array("Pharmacy", $hfacs)) {
                                                                                echo "checked";
                                                                            }
                                                                            ?>>Pharmacy</td>
                <td><input type="checkbox" name="fac[]" value="Ambulance Facility" <?php
                                                                                    if (in_array("Ambulance Facility", $hfacs)) {
                                                                                        echo "checked";
                                                                                    }
                                                                                    ?>>Ambulance Facility</td>
                <td><input type="checkbox" name="fac[]" value="Internet Connection" <?php
                                                                                    if (in_array("Internet Connection", $hfacs)) {
                                                                                        echo "checked";
                                                                                    }
                                                                                    ?>>Internet Connection</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="checkbox" name="fac[]" value="Money Exchange" <?php
                                                                                if (in_array("Money Exchange", $hfacs)) {
                                                                                    echo "checked";
                                                                                }
                                                                                ?>>Money Exchange</td>
                <td><input type="checkbox" name="fac[]" value="Transportation service" <?php
                                                                                        if (in_array("Transportation service", $hfacs)) {
                                                                                            echo "checked";
                                                                                        };
                                                                                        ?> />Transportation services</td>
                <td><input type="checkbox" name="fac[]" value="Flight arrangement" <?php
                                                                                    if (in_array("Flight arrangement", $hfacs)) {
                                                                                        echo "checked";
                                                                                    };
                                                                                    ?>>Flight arrangement</td>
                <td><input type="checkbox" name="fac[]" value="Visa arrangement" <?php
                                                                                    if (in_array("Visa arrangement", $hfacs)) {
                                                                                        echo "checked";
                                                                                    };
                                                                                    ?> />Visa arrangement</td>
            </tr>

            <tr>
                <td>Contact Person Name:</td>
                <td><input type="text" name="hcontnm" value="<?php echo $hcontnm; ?>" /></td>
            </tr>

            <tr>
            <tr>
                <td>Contact Person:</td>
                <td><input type="number" name="hcontper" value="<?php echo $hcont; ?>" /></td>
            </tr>

            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="delete" value="Delete" />
                </td>
            </tr>

        </table>
    </form>

    <?php
    mysql_close($con);
    ?>
</body>

</html>