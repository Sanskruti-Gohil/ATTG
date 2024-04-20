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
        <tr>
            <td><a href='admin.html'>
                </a></td>
        </tr>
        <tr></tr>
        <tr>
            <th>Hospital Code</th>
            <th>Hospital Name</th>
            <th>Hospital Address</th>
            <th>Country</th>
            <th>Contact no.</th>
            <th>Facilities</th>
            <th>Contact Person Name</th>
            <th>Contact Person Contact no.</th>
            <th>Actions</th>
        </tr>
        <?php
        $con = mysql_connect("localhost", "root", "");
        if ($con) {
            // echo "Connected to MySQL"."<br/>";
        }
        mysql_selectdb("medtour");
        $sql = "select * from `hospitals`";
        $result = mysql_query($sql, $con);

        while ($row = mysql_fetch_array($result)) {
            $DB_hcode = $row['HCode'];
            $DB_hname = $row['HName'];
            $DB_haddr = $row['HAddr'];
            $DB_country = $row['HCountry'];
            $DB_hcont = $row['HCont'];
            $DB_fac = $row['HFac'];
            $DB_hcontnm = $row['HContPName'];
            $DB_hcontper = $row['HContPer'];
        ?>
            <tr>

                <td><?php echo $DB_hcode; ?></td>
                <td><?php echo $DB_hname; ?></td>
                <td><?php echo $DB_haddr; ?></td>
                <td><?php echo $DB_country; ?></td>
                <td><?php echo $DB_hcont; ?></td>
                <td><?php echo $DB_fac; ?></td>
                <td><?php echo $DB_hcontnm; ?></td>
                <td><?php echo $DB_hcontper; ?></td>
                <td><a href="HospitalsEditDetails.php?HName=<?php echo $DB_hname; ?>">Update</a></td>
            </tr>

        <?php
        }
        mysql_close($con);
        ?>

    </table>
</body>

</html>