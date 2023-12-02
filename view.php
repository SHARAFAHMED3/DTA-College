<?php
include("config.php");
session_start();

if (isset($_GET['post_id'])) {
    $post_id = $_GET['post_id'];

    // Create and execute a query to retrieve details of the item based on p_no
    $query = "SELECT * FROM post WHERE p_no = $post_id";
    $result = mysqli_query($con, $query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $p_title = $row['p_title'];
            $subject = $row['subject'];
            $p_username = $row['p_duration'];
            $p_img = $row['p_img'];
            $disc = $row['p_requirement'];

            // Retrieve module information based on p_no
            $module_query = "SELECT modName, modCr FROM modules WHERE p_no = $post_id";
            $module_result = mysqli_query($con, $module_query);
            ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Metropolitan College Kalmunai</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <!-- Favicon -->
    <link href="img/favicon.png" rel="icon">

    <!-- Include Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="./style.css">
    <link href="css/style.css" rel="stylesheet">
    <style>
/* Custom styles */

/* Header */
.header {
    /* background-color: #007BFF; */
    /* margin-bottom: 90px;
    padding: 5rem 0; */
}

.header h1 {
    /* color: white; */
}

/* Course and Faculty */
.course-faculty {
    background-color: #F8F9FA;
    padding: 3rem 0;
}

.custom-card {
    border: 1px solid #dee2e6;
    border-radius: .25rem;
    padding: 1rem;
    margin-bottom: 1rem;
}

.custom-card .card-title {
    font-size: 1.25rem;
    font-weight: bold;
}

/* Image */
.image {
    padding: 3rem 0;
}

/* Overview */
.overview {
    padding: 3rem 0;
}

/* Entry Qualification */
.entry-qualification {
    padding: 3rem 0;
}

/* Modules */
.modules {
    padding: 3rem 0;
}
/* Define styles for the accordion */
.accordion-button {
    display: block;
    width: 100%;
    text-align: left;
    padding: 1rem;
    font-size: 1.25rem;
    background-color: #f8f9fa;
    border: 1px solid #dee2e6;
    border-radius: 0.25rem;
    margin-bottom: 0.5rem;
    text-decoration: none;
    color: #000;
}

.accordion-button:hover {
    background-color: #e9ecef;
}

.accordion-button[aria-expanded="true"] {
    background-color: #d1ecf1;
}

.card-body {
    padding: 1rem;
    border: 1px solid #dee2e6;
    border-top: none;
}

/* Initially hide the collapsible content */
.collapse {
    display: none;
}

/* Show the collapsible content when the URL has a corresponding fragment identifier (e.g., #collapseOverview) */
:target .collapse {
    display: block;
}
.course-modules table {
                        width: 100%;
                        border-collapse: collapse;
                        margin-top: 10px;
                        
                    }

                    .course-modules th, .course-modules td {
                        border: 1px solid #ddd;
                        padding: 8px;
                        text-align: left;
                    }

                    .course-modules th {
                        background-color: #f2f2f2;
                    }

                    /* Media query for responsive layout */
                    @media (max-width: 768px) {
                        .main-container {
                            flex-direction: column;
                        }

                        .course-modules {
                            margin-top: 10px;
                        }
                    }


.course-modules table tbody tr:nth-child(odd) {
        background-color: #f9f9f9; /* Apply your first color here */
    }

    .course-modules table tbody tr:nth-child(even) {
        background-color: #e3e3e3; /* Apply your second color here */
    }

              /*responsive navigation */

/* Adjust padding and margin for the navbar */
.navbar {
    padding: 10px;
}

/* Style the brand/logo */
.navbar-brand img {
    max-width: 100%;
    height: auto;
}

/* Adjust the margin for the navbar toggler */
.navbar-toggler {
    margin: 0;
}

/* Center the toggle icon */
.navbar-toggler-icon {
    display: inline-block;
    width: 1.5em;
    height: 1.5em;
    vertical-align: middle;
    background: no-repeat center center;
    background-size: 100% 100%;
}

/* Ensure the collapsed menu is aligned right */
.navbar-collapse {
    justify-content: flex-end;
}

/* Style links in the navbar */
.navbar-nav .nav-link {
    padding: 0.5rem 1rem;
    font-size: 1rem;
}

/* Ensure navbar links are vertically centered */
.navbar-nav .nav-link {
    display: flex;
    align-items: center;
}

/* Add some space between items */
.navbar-nav .nav-item {
    margin-right: 1rem;
}

/* Ensure dropdown menu appears on hover */
.navbar-nav .nav-item:hover .dropdown-menu {
    display: block;
}

/* Style dropdown menu */
.dropdown-menu {
    display: none;
    position: absolute;
    background-color: #fff;
    min-width: 10rem;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
}

/* Adjust dropdown item styles */
.dropdown-menu a {
    color: #333;
    padding: 0.5rem 1rem;
}

/* Make dropdown items block level */
.dropdown-menu a {
    display: block;
    width: 100%;
    clear: both;
    text-align: left;
}

/* Add hover effect to dropdown items */
.dropdown-menu a:hover {
    background-color: #f5f5f5;
}

/* Adjust dropdown item padding */
.dropdown-menu a {
    padding: 0.5rem 1rem;
}


  /*custom drop down menue */

  .mega-menu {
      display: none;
      position: absolute;
      z-index: 1;
      background-color: #fff;
      border: 1px solid #ccc;
      padding: 10px;
    }
   
    .menu-link {
      display: block;
      padding: 5px 0;
      color: #000;
      text-decoration: none;
    }
    .menu-link:hover {
      background-color: #f5f5f5;
    }
    
/* Additional styles for sub-dropdown columns */
.mega-menu.show {
    display: flex;
    flex-direction: column; /* Display as a column to show in a single column */
    z-index: 999;
}

.mega-menu.show .menu-list li {
    width: 100%; /* Each item takes full width */
    padding: 5px 0; /* Add some padding between items */
    box-sizing: border-box; /* Include padding in item width */
}

/* Adjustments for larger screens (e.g., desktop) */
@media (min-width: 992px) {
    .mega-menu.show {
        flex-direction: row; /* Display as a row for larger screens */
    }

    .mega-menu.show .menu-list li {
        width: auto; /* Reset width to auto for larger screens */
        padding: 5px 15px; /* Add some padding between items */
    }
}

   </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Main Street, Kalmunai</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+94 76 000 3110</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>centremanagerk@metropolitancollege.lk</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->



<!-- Navigation started -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
         <a href="index.php" class="navbar-brand p-0">
           <img src="img/logo.png" alt="Metropolitan College Logo" >
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
           <span class="fa fa-bars"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarCollapse">
           <ul class="navbar-nav ms-auto py-0">
             <li class="nav-item">
               <a href="index.php" class="nav-link" >Home</a>
             </li>
             <li class="nav-item">
               <a href="about.html" class="nav-link">About</a>
             </li>
             <li class="nav-item">
               <a href="chairman.html" class="nav-link">Message from Chairman</a>
             </li>
            
              <li>
                   <a href="javascript:void(0);" class="nav-link menu-bar-link" onclick="toggleProgramDropdown()"  aria-haspopup="true">Programs</a>
                   <ul id="programDropdown" class="mega-menu mega-menu--flat">
                       <li>
                           <a href="#" class="menu-link mega-menu-link mega-menu-header">Certificate&Diploma</a>
                           <ul class="menu menu-list">
                               <li>
                                   <a href="certificate-programmes.php" class="menu-link menu-list-link">Certificate Programs</a>
                               </li>
                               <li>
                                   <a href="diploma-programmes.php" class="menu-link menu-list-link">Diploma Programs</a>
                               </li>
                               <li>
                                   <a href="higher-diploma-programmes.php" class="menu-link menu-list-link">Higher Diploma Programs</a>
                               </li>
                           </ul>
                       </li>
                       <li>
                           <a href="#" class="menu-link mega-menu-link mega-menu-header">University Programs</a>
                           <ul class="menu menu-list">
                               <li>
                                   <a href="Bachelor's Programmes Final Year Top Up.php" class="menu-link menu-list-link">Bachelors' Programs Top-up</a>
                               </li>
                               <li>
                                   <a href="Bachelor's Programmes Three Years Programmes.php" class="menu-link menu-list-link">Bachalors Programes</a>
                               </li>
                               <li>
                                   <a href="Master's Programmes.php" class="menu-link menu-list-link">Masters Programes</a>
                               </li>
                               <li>
                                   <a href="Doctoate Programmes.php" class="menu-link menu-list-link">Doctorate Programes</a>
                               </li>
                           </ul>
                       </li>
                       <li>
                           <a href="#" class="menu-link mega-menu-link mega-menu-header">OTHM Programes</a>
                           <ul class="menu menu-list">
                               <li>
                                   <a href="Foundation Programmes.php" class="menu-link menu-list-link">Foundation Programes</a>
                               </li>
                               <li>
                                   <a href="Undergraduate Programmes.php" class="menu-link menu-list-link">Undegraduate Programes</a>
                               </li>
                               <li>
                                   <a href="Postgraduate Programmes.php" class="menu-link menu-list-link">Postgraduate Programes</a>
                               </li>
                               <li>
                                   <a href="Doctoral Programmes.php" class="menu-link menu-list-link">Doctoral Programes</a>
                               </li>
                           </ul>
                       </li>
                   </ul>
               </li>
             
             <li class="nav-item">
               <a href="" class="nav-link">Events</a>
             </li>
             <li class="nav-item">
               <a href="contact.html" class="nav-link">Contact</a>
             </li>
           </ul>
         </div>
       </nav>
     </div> 
   
     <script>
       function toggleProgramDropdown() {
         const programDropdown = document.getElementById('programDropdown');
         programDropdown.classList.toggle('show');
       }
     </script>
       <!-- Navbar End  -->



        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 10px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn"><?php echo $p_title; ?></h1>
                   
                    <p class="h5 text-white"><i class="fas fa-clock"></i> &nbsp<?php echo $p_username; ?></p>              
                </div>
            </div>
        </div>
        
           <!-- course-icon Start -->
           <div class="container mt-5 wow slideInUp" data-wow-delay="0.3s">
            <div class="row">
                <!-- Course Column -->
                <div class="col-md-6 col-sm-12">
                    <div class="card course-card">
                        <div class="card-body" style="height: 70px;">
                            <h6 class="card-title">
                                <i class="fas fa-book"></i><?php echo $p_title;?>
                            </h6>
                        </div>
                    </div>
                </div>
                
                <!-- Faculty Column -->
                <div class="col-md-6 col-sm-12 mt-3 mt-md-0">
                    <div class="card faculty-card">
                        <div class="card-body" style="height: 70px;">
                            <h6 class="card-text animated zoomIn">
                                <i class="fas fa-chalkboard-teacher"></i>  <?php echo $subject; ?>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     <!-- course-icon End -->
        
        <!-- Image -->
        <div class="image">
            <div class="container mt-5 wow fadeInUp" data-wow-delay="0.1s">
                <img src="uploads/<?php echo $p_img; ?>" alt="Responsive Image" class="img-fluid mx-auto d-block">
            </div>
        </div>
        
      
    <!-- Overview -->
    <div class="overview wow slideInUp" data-wow-delay="0.3s" style="background-color:#11335e">
        <div class="container mt-5">
            <div class="card">
                <div class="card-header" id="headingOverview" style="background-color:#618d91">
                    <h2 class="mb-0">
                        <button class="accordion-button" onclick="toggleAccordion('collapseOverview')" aria-expanded="false">
                            Overview
                        </button>
                    </h2>
                </div>

                <div id="collapseOverview" class="collapse">
                    <div class="card-body">
                        <strong>The objective of <?php echo $subject; ?> </strong> qualification is to equip learners with the underpinning knowledge, understanding, and skills required for a career. The programme enables learners to demonstrate their skills by producing evidence from their work or training activities. 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Entry Qualification -->
    <div class="entry-qualification wow slideInUp" data-wow-delay="0.3s" style="background-color:#066c78">
        <div class="container mt-5">
            <div class="card">
                <div class="card-header" id="headingEntry" style="background-color:#618d91">
                    <h2 class="mb-0">
                        <button class="accordion-button" onclick="toggleAccordion('collapseEntry')" aria-expanded="false">
                            Entry Qualification
                        </button>
                    </h2>
                </div>

                <div id="collapseEntry" class="collapse">
                    <div class="card-body">
                        <strong><?php echo $disc; ?></strong>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modules -->
    <div class="modules wow slideInUp" data-wow-delay="0.3s" style="background-color:#11335e">
        <div class="container mt-5">
            <div class="card">
                <div class="card-header" id="headingModules" style="background-color:#618d91">
                    <h2 class="mb-0">
                        <button class="accordion-button" onclick="toggleAccordion('collapseModules')" aria-expanded="false">
                            Modules
                        </button>
                    </h2>
                </div>

                <div id="collapseModules" class="collapse">
                    <div class="accordion-body">
                    <div class='course-modules'>
    <div class="container-fluid">
    <table>
        <thead>
            <tr>
                <th>Module Name</th>
                <th>Credit</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($module_result) {
                $isOdd = true;
                while ($module_row = mysqli_fetch_assoc($module_result)) {
                    $moduleName = $module_row['modName'];
                    $credit = $module_row['modCr'];
                    $rowClass = $isOdd ? 'odd' : 'even';
                    echo "<tr class='$rowClass'><td>$moduleName</td><td>$credit</td></tr>";
                    $isOdd = !$isOdd;
                }
            } else {
                echo "<tr><td colspan='2'>No modules available.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleAccordion(id) {
            const element = document.getElementById(id);
            element.style.display = (element.style.display === 'none' || element.style.display === '') ? 'block' : 'none';
        }
    </script>
       <!-- Vendor Start -->
       <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="img/vendor/vendor-1.png" alt="">
                    <img src="img/vendor/vendor-2.jpg" alt="">
                    <img src="img/vendor/vendor-3.jpg" alt="">
                    <img src="img/vendor/vendor-4.jpg" alt="">
                    <img src="img/vendor/vender-5.png" alt="">
                    <img src="img/vendor/vendor-6.jpg" alt="">
                    <img src="img/vendor/vendor-7.jpg" alt="">
                    <img src="img/vendor/vendor-8.jpg" alt="">
                    </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->
    
 <!-- Footer Start -->
 <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s" >
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-4 col-md-6 footer-about">
                <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="m-0 text-white met">Metropolitan College</h1>
                    </a>
                    <p class="mt-3 mb-4">your success ... our acheivment ...</p>
                    <form action="">
                        <div class="input-group">
                            <button class="btn btn-dark" onclick="sendWhatsAppMessage()">WhatsApp</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-8 col-md-6">
                <div class="row gx-5">
                    <div class="col-lg-6 col-md-12 pt-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Get In Touch</h3>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            <p class="mb-0">Main Street, Kalmunai</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <p class="mb-0">centremanagerk@metropolitancollege.lk</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <p class="mb-0">&#40;+94 &#41; 76 000 3110</p>
                        </div>
                        <div class="d-flex mt-4">
                            <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-tiktok fw-normal"></i></a>
                        </div>
                    </div>
                        <div class="col-lg-6 col-md-12 pt-0 pt-lg-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Popular Links</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="index.php"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="about.html"><i class="bi bi-arrow-right text-primary me-2"></i>About</a>
                                <!-- <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>programmes</a> -->
                                <!-- <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Faculties</a> -->
                                <a class="text-light mb-2" href="chairman.html"><i class="bi bi-arrow-right text-primary me-2"></i>Message From The Chairman</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Event</a>
                                <a class="text-light" href="contact.html"><i class="bi bi-arrow-right text-primary me-2"></i>Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid text-white" style="background: #061429;">
    <div class="container text-center">
        <div class="row justify-content-end">
            <div class="col-lg-8 col-md-6">
                <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                    <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Metropololitan College</a>. All Rights Reserved. 
                    
                    Designed by Metropolitan IT Team with AAZA</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<script>
    function sendWhatsAppMessage() {
      // Replace '1234567890' with the recipient's phone number and 'Hello!' with the desired message.
      var phoneNumber = '+94765566919';
      var message = 'Hello!';
      
      // Create the WhatsApp URL with the phone number and message.
      var whatsappURL = 'https://api.whatsapp.com/send?phone=' + phoneNumber + '&text=' + encodeURIComponent(message);
      
      // Open WhatsApp in a new window or tab.
      window.open(whatsappURL);
    }
  </script>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

<?php
        } else {
            echo "Item not found.";
        }
    } else {
        echo "Error fetching data from the database: " . mysqli_error($con);
    }
} else {
    echo "Invalid request.";
}

mysqli_close($con);
?>