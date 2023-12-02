

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
    <meta charset='utf-8'>
    <title>Metropolitan College Kalmunai</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css'>
    <link href="img/favicon.png" rel="icon">
        <!-- Include Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- Include jQuery -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>

<!-- Include Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Include Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

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
<link rel="stylesheet" href="./style.css">
<link href="css/style.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .item-container {
            position: relative;
            text-align: center;
            margin-bottom: 50px;
            overflow: hidden;
            margin-top: 70px; /* Adjust the margin-top */
        }

        .item-image {
            width: 100%;
            /* Set the image width to 100% */
            height: 400px;
            /* Maintain aspect ratio */
            display: block;
           
        }

        .item-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0);
            /* Initially hidden and scaled down */
            background-color: rgba(0, 0, 0, 0.3);
            color: white;
            padding: 20px;
            transition: transform 0.8s ease-in-out;
            text-align: center;
        }

        /* New class to trigger the animation */
        .animate-overlay {
            transform: translate(-50%, -50%) scale(1);
        }
     /* Style for the detail-container */
     .detail-container {
                            padding: 1px;
                            margin-left: 70px;
                            width: 50%;
                            height: 100%;
                            overflow: auto;
                        }

                        /* Style for the detail image */
                        .filtered-item {
                            width: 100%;
                            height: auto;
                            margin-bottom: 10px;
                        }

                        /* Style for the detail-container */
                        .detail-container {
                            background-color: #f5f5f5;
                            padding: 20px;
                            border: 1px solid #e0e0e0;
                            border-radius: 5px;
                        }

                        /* Style for the title */
                        .detail-title {
                            font-size: 24px;
                            margin-bottom: 20px;
                            color: #333;
                        }

                        /* Style for the image container */
                        .detail-image-container {
                            text-align: center;
                            
                        }

                        /* Style for the course description title */
                        .course-description-title {
                            font-size: 20px;
                            /* margin-top: 20px; */
                            color: #007bff;
                            margin-top: 10px; /* Adjust the margin-top */
                            margin-bottom: 5px; /* Adjust the margin-bottom */
                        }

                        /* Style for the course description text */
                        .course-description {
                            font-size: 16px;
                            margin-bottom: 5px; 
                            color: #000;
                        }

                        /* Style for the hidden requirements */
                        .hidden-requirements {
                            max-height: 0;
                            overflow: hidden;
                            transition: max-height 0.3s ease-in-out;
                            padding: 0 10px;
                            opacity: 0;
                            margin-top: 10px; /* Adjust the margin-top */
                           
                        }
        

                        /* Style for the custom down arrow */
                        .custom-down-arrow {
                            font-size: 18px;     
                            transition: transform 0.8s;
                            cursor: pointer;
                            transform: rotate(0deg);
                            float: right;
                            
                        }

                        /* Style for the card view */
                         .card {
                        border: 1px solid #e0e0e0;
                        border-radius: 5px;
                        margin-top: 90px; /* Adjust the margin-top */
                        padding: 10px;
                        position: relative;
                        cursor: pointer;
                        background-color: #050a52;
                        color: #fff;
                    }



                    /* New style for responsive layout */
                    .main-container {
                        display: flex;
                        flex-direction: row;
                        flex-wrap: wrap;
                        
                    }

                    .detail-container {
                        flex: 1;
                        padding: 20px;
                        border: 1px solid #e0e0e0;
                        border-radius: 2px;
                        margin-right: 25px;
                    }

                  
                    .course-modules {
                        flex: 1;
                        margin-top: 40px; /* Adjust the margin-top */
                        overflow: auto;
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
      


                   
        /* New animation for content appearing from the right */
        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(100%);
            }
            to {
                opacity: 1;
                transform: translateX(0%);
            }
        }

        .animated-content {
            opacity: 0;
            animation: slideInRight 2s forwards;
        }
      
      /* Animation for the titlebar */
@keyframes animateTitlebar {
    from {
        opacity: 0;
        transform: translate(-50%, -50%) scale(0);
    }
    to {
        opacity: 1;
        transform: translate(-50%, -50%) scale(1);
    }
}

        /* Style for the titlebar */
        .titlebar {
    position: absolute;
    top: 90%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    margin-bottom: 20px;
    overflow: hidden;
    animation: animateTitlebar 0.8s ease-in-out forwards;
    width: 100%;
    z-index: 1; /* Adjust the z-index */
}


        .titlebar h1 {
            font-size: 30px;
            color: #007bff;
            /* Change color as needed */
            margin: 0;
        }

        .section-title {
            max-width: 600px;
            margin: 0 auto;
            padding-bottom: 3px;
            margin-bottom: 5px;
        }

      

    /* Media query for tablets and smaller desktops */
    @media (max-width: 992px) {
        .detail-container {
            margin-left: 0;
            width: 100%;
        }

        .main-container {
            flex-direction: column;
        }
    }

    /* Media query for mobile devices */
    @media (max-width: 576px) {
        .main-container {
            flex-direction: column;
        }

        .card,
        .course-modules {
            margin-top: 20px;
        }

        .item-container {
            margin-top: 50px;
        }

        .titlebar {
            top: 80%;
        }
    }

    .rotating-image-y {
    animation: rotateImageY 8s linear infinite; /* Adjust duration and timing function as needed */
}

@keyframes rotateImageY {
    0% {
        transform: rotateY(0deg);
    }
    100% {
        transform: rotateY(30deg); /* Adjust the rotation degrees for a full rotation */
    }
}

.course-modules table tbody tr:nth-child(odd) {
        background-color: #e3e3e3; /* Apply your first color here */
    }

    .course-modules table tbody tr:nth-child(even) {
        background-color: #4e7f85; /* Apply your second color here */
        color:black;
    }

  @keyframes borderAnimation {
  0% {
    border-color: #ff0000;
  }
  50% {
    border-color: #00ff00;
  }
  100% {
    border-color: #0000ff;
  }
}

.border-animation {
  border: 2px solid #ff0000; /* Initial border color */
   animation: borderAnimation 2s infinite alternate;  
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
                    <h1 class="display-4 text-white animated zoomIn">Detailed View Of Your selection</h1>
                    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    </div>
                    <p class="h5 text-white"><i class="fas fa-graduation-cap"></i>&nbsp<?php echo $subject; ?></p> 
                    <p class="h5 text-white"><i class="fas fa-clock"></i> &nbsp<?php echo $p_username; ?></p>              
                </div>
            </div>
        </div>
    <!-- Navbar End -->
 
    <div id="modules-section" class='main-container animated-content' style="margin-bottom: 50px;margin-top: 100px;">
        <div class='detail-container'>
            <h1 class='detail-title'><?php echo $p_title; ?></h1>
            <div class='detail-image-container border-animation'>
                <img src='uploads/<?php echo $p_img; ?>' alt='Image' class='filtered-item rotating-image-y' style="width:100%;">
            </div>
            <div class='course-description-container '>
                <h2 class='course-description-title'>Course Description</h2>
                <p class='course-description'><strong>Subject:</strong> <?php echo $subject; ?></p>
                <div class='card' onclick='toggleRequirements();'>
                     <strong>Requirements
                        <span class='custom-down-arrow' >&#9660;</span>
                     </strong>
                     <div id='requirements-box' class='hidden-requirements' style='background-color:white; height:Auto; padding: 1px;'>
                        <p class='course-description'><?php echo $disc; ?></p>
                     </div>
                     </div> 
               </div>
           </div>
          
           <div class='course-modules'>
    <div class="container-fluid py-5 wow fadeInUp " data-wow-delay="0.2s">
    <h2 class='course-description-title course-title-run'>Course Modules</h2>
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


    <script>
        // Function to smoothly scroll to the item-container
        function scrollToItem() {
            document.getElementById('item-section').scrollIntoView({
                behavior: 'smooth'
            });
        }

        // Function to smoothly scroll to the course-modules table
        function scrollToModules() {
            document.getElementById('modules-section').scrollIntoView({
                behavior: 'smooth'
            });
        }

        // Add event listener to trigger animations when scrolling
        window.addEventListener('scroll', () => {
            const animatedElements = document.querySelectorAll('.animated-content');
            animatedElements.forEach((element) => {
                if (isElementInViewport(element)) {
                    element.style.animationPlayState = 'running';
                }
            });
        });

        // Check if an element is in the viewport
        function isElementInViewport(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }
    </script>
      
      
      <!-- trigger the animation after the page has loaded -->
    <script>
        window.addEventListener('load', () => {
            const itemOverlay = document.getElementById('item-overlay');
            itemOverlay.classList.add('animate-overlay');
        });
    </script>

        <script>
                function toggleRequirements() {
                    var requirementsBox = document.getElementById('requirements-box');
                    var customDownArrow = document.querySelector('.custom-down-arrow');

                    if (requirementsBox.classList.contains('hidden-requirements')) {
                        requirementsBox.classList.remove('hidden-requirements');
                        customDownArrow.style.transform = 'rotate(180deg)';
                    } else {
                        requirementsBox.classList.add('hidden-requirements');
                        customDownArrow.style.transform = 'rotate(0deg)';
                    }
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
 <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
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
                            <button class="btn btn-dark">WhatsApp</button>
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
<div class="container-fluid text-white" style="background: #061429;margin-bottom:-50px;">
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
    <!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
<!-- Footer End -->



    
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



