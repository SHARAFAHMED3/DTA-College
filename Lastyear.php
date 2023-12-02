<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dharuth Thowheed Assalafiyya Institute - Sri Lanka</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <!-- Favicon -->
    <link href="img/logo1.png" rel="icon">

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
    <link href="css/style.css" rel="stylesheet">
    <link href="css/styleCard.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">	
    <style>
      .container-card {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between; 
}

.card {
    background-color: #fff;
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    overflow: hidden;
    border-radius: 20px;
    width: calc(33.33% - 20px); /* Adjust card width to fit 3 cards in a row with some spacing */
    margin: 20px 10px; /* Add margin between the cards */
    border-radius: 6px;
    box-shadow: 0px 1px 10px rgba(0,0,0,0.2);
    transition: all 400ms ease-out;
    cursor: pointer;
    transition: transform 0.3s ease-in-out;
}


.card figure {
    margin: 0;
}

.card img {
    width: 100%; /* Make the image fill the card */
    height: 280px; /* Maintain aspect ratio */
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
.bg-header1 {
    background: linear-gradient(rgba(9, 30, 62, .7), rgba(9, 30, 62, .7)), url(img/bg-header.jpeg) center center no-repeat;
    background-size: cover;
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
                <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Kandy Road,Paragahadaniya,Kurunagela</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+94 76 000 3110</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>dtacollege@gmail.com</small>
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
           <img src="img/logo1.png" alt="DTAC Logo"style="height: 80px;" >
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
        <div class="container-fluid bg-primary py-5 bg-header1" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">இறுதி வருடம்</h1>
                </div>
            </div>
        </div>
    <!-- Navbar End -->


<!--Tarjetas-->
<div class="container-card">
<?php
    $query = "SELECT * FROM subject WHERE year = 7";
    $result = mysqli_query($con, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        $subject = $row['subject'];
        $S_img = $row['S_img'];

        echo '<div class="card">';
        echo '<figure>';
        echo '<img src="uploads/book.jpg" alt="Image">';
        echo '</figure>';
        echo '<div class="contenido-card">';
        echo '<h3>' . $subject . '</h3>';
        echo '<p>Year: ' . $row['year'] . '</p>'; // Add any other relevant information
        echo '<a href="#">Read More</a>'; // You can customize the link accordingly
        echo '</div></div>';
    }
?>
</div>





       <!-- Vendor Start -->
       <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
            <div class="owl-carousel vendor-carousel">
                    <img src="img/vendor/vendor-11.jpg" alt="" height="100px">
                    <img src="img/vendor/vendor-22.jpg" alt="" height="100px">
                    <img src="img/vendor/vendor-33.jpg" alt="" height="100px">
                    <img src="img/vendor/vendor-44.jpeg" alt="" height="100px">
                    <img src="img/vendor/vendor-55.jpeg" alt="" height="100px">
                    <img src="img/vendor/vendor-66.jpg" alt="" height="100px">
                    <img src="img/vendor/webp.webp" alt="" height="100px">
                    <img src="img/vendor/vendor-88.jpg" alt="" height="100px">
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
                    <h1 class="m-0 text-white met">D.T.A College</h1>
                    </a>
                    <p class="mt-3 mb-4">Always Trust Allah...</p>
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
                            <p class="mb-0">Kandy Road,Paragahadaniya,Kurunagela</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <p class="mb-0">dtacollege@gmail.com</p>
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
                                <a class="text-light mb-2" href="chairman.html"><i class="bi bi-arrow-right text-primary me-2"></i>Message from Mudeer</a>
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
                    <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">D.T.A College</a>. All Rights Reserved.Designed by D.T.A College IT</p>
                </div>
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
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>