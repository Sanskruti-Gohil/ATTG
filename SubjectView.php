<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="content-type" content="text/html" />
    <meta name="author" content="" />

    <title>Subject Details</title>
    <!-- <link rel="stylesheet" type="text/css" href="css.css" /> -->

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        /* .button {
            background-color: green;
            color: white;
            padding: 10px 20px;
            text-align: center;
            border: solid;
            border-color: #051225;
            border-radius: 6px;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            font-weight: bold;
            margin: 4px 2px;
            cursor: pointer;
        }

        input {
            padding-left: 30px;
            padding-right: 20px;
            padding-top: 8px;
            padding-bottom: 8px;
            border-radius: 10px;
            border: solid;
        } */

        td {
            font-weight: bold;
            color: black;
            font-size: 20px;
        }

        th {
            font-weight: bold;
            color: gray;
            font-size: 20px;
        }

        @media (min-width: 900px) {
            .dropdown-menu .dropdown-toggle:after {
                border-top: .3em solid transparent;
                border-right: 0;
                border-bottom: .3em solid transparent;
                border-left: .3em solid;
            }

            .dropdown-menu .dropdown-menu {
                margin-left: 0;
                margin-right: 0;
            }

            .dropdown-menu li {
                position: relative;
            }

            .nav-item .submenu {
                display: none;
                position: absolute;
                left: 100%;
                top: -7px;
            }

            .nav-item .submenu-left {
                right: 100%;
                left: auto;
            }

            .dropdown-menu>li:hover {
                background-color: #f1f1f1
            }

            .dropdown-menu>li:hover>.submenu {
                display: block;
            }
        }
    </style>
</head>
<body>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="index2.html" class="navbar-brand p-0">
            <h1 class="m-0 text-primary">ATTG</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index2.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About us</a>
                <a href="acontact.html" class="nav-item nav-link">Contact us</a>  
                
                <!--<div class="nav-item dropdown">
                    <li class="nav-item dropdown">-->
                <!--        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Masters </a>
                        <div class="dropdown-menu m-0">
                        <ul class="dropdown-menu">
                            
                            <li><a class="dropdown-item" href="#"> Hospitals    &raquo </a>
                                
                         <ul class="submenu dropdown-menu">
                            <li><a class="dropdown-item" href="Hospitals.html"> Insert</a></li>
                            <li><a class="dropdown-item" href="HospitalsEdit.php"> Update</a></li>
                            <li><a class="dropdown-item" href="HospitalsDelete.php"> Delete</a></li>
                            <li><a class="dropdown-item" href="HospitalsView.php"> View</a></li>
                         </ul>
                         
                        </li>
                    
                         <div class="dropdown-menu m-0"> 
                             <ul class="dropdown-menu"> 
                        <li><a class="dropdown-item" href="#"> Doctors  &raquo </a>
                            
                          <ul class="submenu dropdown-menu">
                             <li><a class="dropdown-item" href="Doctors.html"> Insert</a></li>
                             <li><a class="dropdown-item" href="DoctorsEdit.php"> Update</a></li>
                             <li><a class="dropdown-item" href="DoctorsDelete.php"> Delete</a></li>
                             <li><a class="dropdown-item" href="DoctorsView.php"> View</a></li>
                          </ul>
                        
                         </li>
                        

                         <ul class="dropdown-menu"> 
                            <li><a class="dropdown-item" href="#"> Packages &raquo </a>
                                
                              <ul class="submenu dropdown-menu">
                                 <li><a class="dropdown-item" href="Packages.html"> Insert</a></li>
                                 <li><a class="dropdown-item" href="PackagesEdit.php"> Update</a></li>
                                 <li><a class="dropdown-item" href="PackagesDelete.php"> Delete</a></li>
                                 <li><a class="dropdown-item" href="PackagesView.php"> View</a></li>
                              </ul>
                            
                             </li>
                            

                         <ul class="dropdown-menu"> 
                                <li><a class="dropdown-item" href="#"> Hotels   &raquo </a>
                                    
                                  <ul class="submenu dropdown-menu">
                                     <li><a class="dropdown-item" href="Hotels.html"> Insert</a></li>
                                     <li><a class="dropdown-item" href="HotelsEdit.php"> Update</a></li>
                                     <li><a class="dropdown-item" href="HotelsDelete.php"> Delete</a></li>
                                     <li><a class="dropdown-item" href="HotelsView.php"> View</a></li>
                                  </ul>
                                
                                 </li>
                                </ul>
                    </li>
                    
                    </div>
                    <div class="nav-item dropdown">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Services </a>
                            <ul class="dropdown-menu">

                            <li><a class="dropdown-item" href="#"> Package Booking   &raquo </a>
                                    
                                    <ul class="submenu dropdown-menu">
                                        <li><a class="dropdown-item" href="Bookings.html"> Insert</a></li>
                                        <li><a class="dropdown-item" href="BookingsEdit.php"> Update</a></li>
                                        <li><a class="dropdown-item" href="BookingsDelete.php"> Delete</a></li>
                                        <li><a class="dropdown-item" href="BookingsView.php"> View</a></li>
                                    </ul>
                             
                                </li>
                            
                                <li><a class="dropdown-item" href="#"> Air Booking   &raquo </a>
                                    
                                    <ul class="submenu dropdown-menu">
                                        <li><a class="dropdown-item" href="Airbookings.html"> Insert</a></li>
                                        <li><a class="dropdown-item" href="AirbookingsEdit.php"> Update</a></li>
                                        <li><a class="dropdown-item" href="AirbookingsDelete.php"> Delete</a></li>
                                        <li><a class="dropdown-item" href="AirbookingsView.php"> View</a></li>
                                    </ul>
                             
                                </li>

                                <li><a class="dropdown-item" href="#"> Hotel Booking   &raquo </a>
                                    
                                    <ul class="submenu dropdown-menu">
                                        <li><a class="dropdown-item" href="Hotelbookings.html"> Insert</a></li>
                                        <li><a class="dropdown-item" href="HotelbookingsEdit.php"> Update</a></li>
                                        <li><a class="dropdown-item" href="HotelBookingsDelete.php"> Delete</a></li>
                                        <li><a class="dropdown-item" href="HotelbookingsView.php"> View</a></li>
                                    </ul>
                             
                                </li>

                                <li><a class="dropdown-item" href="#"> Payment   &raquo </a>
                                    
                                    <ul class="submenu dropdown-menu">
                                        <li><a class="dropdown-item" href="#"> Insert</a></li>
                                        <li><a class="dropdown-item" href="#"> Update</a></li>
                                        <li><a class="dropdown-item" href="#"> Delete</a></li>
                                        <li><a class="dropdown-item" href="#"> View</a></li>
                                    </ul>
                             
                                </li>

                            </ul>
                        </li>
                    </div>
                    <div class="nav-item dropdown">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Appointment </a>
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="#"> Appointment   &raquo </a>
                                    
                                    <ul class="submenu dropdown-menu">
                                        <li><a class="dropdown-item" href="aAppointments.html"> Insert</a></li>
                                        <li><a class="dropdown-item" href="AppointmentsEdit.php"> Update</a></li>
                                        <li><a class="dropdown-item" href="AppointmentsDelete.php"> Delete</a></li>
                                        <li><a class="dropdown-item" href="AppointmentsView.php"> View</a></li>
                                    </ul>
                             
                                </li>

                                <li><a class="dropdown-item" href="#"> Case File   &raquo </a>
                                    
                                    <ul class="submenu dropdown-menu">
                                        <li><a class="dropdown-item" href="Patients.html"> Insert</a></li>
                                        <li><a class="dropdown-item" href="PatientsEdit.php"> Update</a></li>
                                        <li><a class="dropdown-item" href="PatientsDelete.php"> Delete</a></li>
                                        <li><a class="dropdown-item" href="PatientsView.php"> View</a></li>
                                    </ul>
                             
                                </li>

                            </ul>
                        </li>
                    </div>-->
                   <!-- <a href="aabout.html" class="nav-item nav-link">About us</a>-->
                       <!-- <div class="nav-item dropdown">
                        <a href="acontact.html" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Contact us</a>
                        <div class="dropdown-menu m-0">
                            <a href="acontact.html" class="dropdown-item">Insert</a>
                            <a href="acontactDelete.php" class="dropdown-item">Delete</a>
                            <a href="acontactView.php" class="dropdown-item">View</a>
                        </div>
                    </div>-->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Actions</a>
                        <div class="dropdown-menu m-0">
                            <a href="Subject.html" class="dropdown-item">Insert</a>
                            <a href="SubjectEdit.php" class="dropdown-item">Update</a>
                            <a href="SubjectDelete.php" class="dropdown-item">Delete</a>
                            <a href="SubjectView.php" class="dropdown-item">View</a>
                        </div>
                   </div>
                    
                <!--<a href="#" class="nav-item nav-link">Selected Packages</a> -->
                <a href="index.html" onclick="return confirm('Are you sure you want to Logout ?')" class="nav-item nav-link">Logout</a>
            </div>
            
            <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
            <!--<a href="appointment.html" class="btn btn-primary py-2 px-4 ms-3">Appointment</a> -->
        </div>
    </nav>
    <!-- Navbar End -->

        <!-- <marquee><h1 class="impact"style="color:black;"><b><i>MEDTOUR</i></b></h1></marquee>

<h1 class="impact" style="color:black;"><b>HOSPITALS INFORMATION</b></h1>
<h1 class="impact" style="color:black;"><b>Show Data</b></h1> -->
        <h1 class="impact" style="color: black; text-align: center; margin: 10px">
            <b>Subject Information</b>
        </h1>
<form>
        <!-- <table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01"> -->
        <table align="center" cellpadding="6" border="2">
<tr>

<th>Subject Name</th>
<th>Subject Code</th>
<th>Course Type</th>
<th>Semester</th>
<th>Department</th>

</tr>

<tr>
<?php

$con=mysql_connect("localhost","root","");
if($con)
{
   // echo "Connected to MySQL"."<br/>";

mysql_selectdb("attg");
$sql="select * from `subject`";
$result=mysql_query($sql,$con);

while($row=mysql_fetch_array($result))
{
    
    
    $DB_Sname=$row['sname'];
    $DB_Scode=$row['subject_id'];
    $DB_Ctype=$row['ctype'];
    $DB_Sem=$row['sem'];
    $DB_Dept=$row['dept'];
    
?>


<td><?php echo $DB_Sname;?></td>
<td><?php echo $DB_Scode;?></td>
<td><?php echo $DB_Ctype;?></td>
<td><?php echo $DB_Sem;?></td>
<td><?php echo $DB_Dept;?></td>

</tr>

<?php
}
}
mysql_close($con);
?>

</table>
</form>
</center>

<!-- Footer Start -->
<div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: 20px;">
        <div class="container pt-5">
            <div class="row g-5 pt-4">
                <!-- <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Quick Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Specialities</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Login</a>
                        <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                    </div>
                </div> -->
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Popular Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="index2.html"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-light mb-2" href="aabout.html"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <!-- <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Packages</a> -->
                        <!-- <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Doctor</a> -->
                        <a class="text-light mb-2" href="acontact.html"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                        <!-- <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Signup</a> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Get In Touch</h3>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>GSFC University, Vigyan Bhavan, P.O. Fertilizernagar, Vadodara - 391750, Gujarat, India</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>attgproject@gmail.com</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>0265-3093740</p>
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Follow Us</h3>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="container-fluid text-light py-4" style="background: #051225;">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-9 text-center text-md-start">
                    <p class="mb-md-0"><a class="text-white border-bottom" href="#">ATTG </a>&copy; <a class="text-white border-bottom" href="#">Sankruti Gohil, Mitanshu Sinha, Shivang Rana, Ikhlas Khan</a>. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="lib/twentytwenty/jquery.event.move.js"></script>
    <script src="lib/twentytwenty/jquery.twentytwenty.js"></script>

    <script>
        // Prevent closing from click inside dropdown
        $(document).on('click', '.dropdown-menu', function(e) {
            e.stopPropagation();
        });

        // make it as accordion for smaller screens
        if ($(window).width() < 992) {
            $('.dropdown-menu a').click(function(e) {
                e.preventDefault();
                if ($(this).next('.submenu').length) {
                    $(this).next('.submenu').toggle();
                }
                $('.dropdown').on('hide.bs.dropdown', function() {
                    $(this).find('.submenu').hide();
                })
            });
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>
</html>