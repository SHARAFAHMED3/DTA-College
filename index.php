<?php
// Establish a direct database connection
$con = mysqli_connect("localhost", "root", "", "metropolitan");

// Check if the connection was successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dharuth Thowheed Assalafiyya Institute - Sri Lanka</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    
  <link rel="stylesheet" href="./style.css">
    <!-- Favicon -->
    <link href="img/logo1.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Include Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>

   <!-- ? <link rel="stylesheet" href="./popup/popstyle.css"> -->
    <!-- Customized Bootstrap Stylesheet -->
    
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
   <style>
 body.blur {
    background-color: rgb(33, 92, 110); opacity:0.7;
        }
  
        .popup {
    width: 80%; /* Adjust the width as needed */
    max-width: 600px; /* Maximum width for larger screens */
    padding: 20px;
    position: fixed;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    z-index: 9999;
    box-shadow: 0 5px 10px rgba(255, 0, 0, 0.5);
    border-radius: 5px;
}

.popup button#close {
    position: absolute;
    top: 10px;
    right: 10px;
    background-color: transparent;
    font-size: 30px;
    color: #000000;
    border: 2px solid #000000;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}

.popup button#close:focus {
    outline: none; /* Remove focus outline */
}
/* Adjustments for smaller screens */
@media (max-width: 768px) {
    .popup {
        width: 90%;
        max-width: 60%; /* Adjust the max-width for smaller screens */
     
    }
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
        width: auto;
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
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Kandy Road,Paragahadaniya,Kurunagela</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+94 76 000 3110</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>dtacollege@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://twitter.com/MetropolitSL"><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.facebook.com/Metropolitancollege"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.linkedin.com/company/metropolitancollegesl"><i class="fab fa-linkedin-in fw-normal"></i></a>
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
        <img src="img\logo1.png" alt="DTAC Logo" style="height: 80px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ms-auto py-0">
          <li class="nav-item">
            <a href="index.php" class="nav-link active" >Home</a>
          </li>
          <li class="nav-item">
            <a href="about.html" class="nav-link">About</a>
          </li>
          <li class="nav-item">
            <a href="chairman.html" class="nav-link">Message from Mudeer</a>
          </li>
         
         
          <li class="nav-item">
            <a href="event.html" class="nav-link">Events</a>
          </li>
          <li class="nav-item">
            <a href="contact.html" class="nav-link">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </div> 

 
    <!-- Navbar End  -->


    <!-- Crousel satrt -->
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" >
            <div class="carousel-inner" style=" margin-top: 100px;">
                <div class="carousel-item active">
                    <img class="w-100" src="img/crousel1.jpeg" alt="Image" style="height: 540px; width:720px">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/crousel2.jpeg" alt="Image" style="height: 540px; width:720px">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/crousel3.jpeg" alt="Image" style="height: 540px; width:720px">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>

    <!-- Carousel End -->

   
    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(153, 51, 4, 0.7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0" style=" margin-top:10px;">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="darkblue shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">TEACHER</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bggreen shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">STUDENT</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="darkblue shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">ADMIN</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold sHead text-uppercase">About Us</h5>
                        <h1 class="mb-0">மஃஹத் தாருத் தவ்ஹீத் அஸ்ஸலபிய்யா தோற்றம்</h1>
                    </div>
                    <p class="mb-4"> தாருத் தவ்ஹீத் அஸ்ஸலபிய்யா, அஷ்ஷெய்க் முஹம்மது அபூபக்கர் சித்தீக் மதனி அவர்களது அயராத முயற்சியின் பலனாகவும், ஜம்இய்யாவின் முன்னாள் பொதுத் தலைவர் எம்.ஏ. ஆதம் பாவா ரஹிமஹுல்லாஹ் மற்றும் ஜம்இய்யாவின் கிளைத் தலைவர்கள், அங்கத்தவர்கள் ஆகியோரின் முயற்சியினாலும் தாருத் தவ்ஹீத் அஸ்ஸலபிய்யா என்ற பெயரில் திட்டமிட்ட அடிப்படையில் ஒரு கலாபீடத்தினை ஸ்தாபிக்கும் சிந்தனை உருவாகியது.
இதனடிப்படையில் 1980 ஆம் ஆண்டு ஆகஸ்ட் மாதம் 26 ஆம் திகதி உள்ளூர் மாணவர்களோடு மட்டும் ஆரம்பித்து வைக்கப்பட்ட தாருத் தவ்ஹீத் மத்ரஸா 1983 ஆகஸ்ட் மாதம் 08 ஆம் திகதி உள்ளூர், வெளியூர் மாணவர்களையும் இணைத்து பறகஹதெனியாவில் "மஃஹத் தாருத் தவ்ஹீத் அஸ்ஸலபிய்யா" ஒரு கலாபீடமாக செயற்பட ஆரம்பித்தது. </p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-3"></i>43 ஆண்டு அனுபவம்</h6>
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-3"></i>அனுபவம் வாய்ந்த விரிவுரையாளர்கள்</h6>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-3"></i>43 ஆண்டு அனுபவம்</h6>
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-3"></i>அனுபவம் வாய்ந்த விரிவுரையாளர்கள்</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Chat to ask any question</h5>
                            <h4 class="text-primary mb-0">+9476 000 3110</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/name.jpeg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold sHead text-uppercase">Why Choose Us</h5>
                <h1 class="mb-0">your success... our achievement...</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h4>மார்க்க கல்வி கற்பிக்கப்படல்</h4>
                            <p class="mb-0">இஸ்லாமிய மார்க்க கல்வியை அல்குர்ஆன் அஸ்ஸுன்னா அடிப்படையில் திறன்பட உளப்பூர்வமாக கற்பித்தல்.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <h4>உலக கல்வி கற்பிக்கப்படல்</h4>
                            <p class="mb-0">தரம் 8,9,10,11,மற்றும் க.பொ.த உயர் தர(கலை பிரிவு) அரச பாட திட்டங்கள் திறமையான ஆசிரியர்கள் மூலம் கற்பித்தல்.</p>
                       </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/logo1.png" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h4>உலக கல்வி கற்பிக்கப்படல்</h4>
                            <p class="mb-0">தரம் 8,9,10,11,மற்றும் க.பொ.த உயர் தர(கலை பிரிவு) அரச பாட திட்டங்கள் திறமையான ஆசிரியர்கள் மூலம் கற்பித்தல்.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <h4>மார்க்க கல்வி கற்பிக்கப்படல்</h4>
                            <p class="mb-0">இஸ்லாமிய மார்க்க கல்வியை அல்குர்ஆன் அஸ்ஸுன்னா அடிப்படையில் திறன்பட உளப்பூர்வமாக கற்பித்தல்.</p>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->


    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold sHead text-uppercase">Education Levels</h5>
                <h1 class="mb-0">From basic to advanced.</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-shield-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">1ம் வருடம்</h4>
                        <p class="m-0">அரபுமொழியின் அடிப்படை பாடங்கள் மற்றும் தரம் 8 கான அரச பாட நெறிகள் வழங்கப்படும்.</p>
                        <a class="btn btn-lg btn-primary rounded" href="#">     <!-- Foundation Programmes.php -->
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-chart-pie text-white"></i>
                        </div>
                        <h4 class="mb-3">2ம் வருடம்</h4>
                        <p class="m-0">அரபுமொழியின் அடிப்படை பாடங்கள் மற்றும் தரம் 8 கான அரச பாட நெறிகள் வழங்கப்படும்.</p>
                        <a class="btn btn-lg btn-primary rounded" href="#">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-code text-white"></i>
                        </div>
                        <h4 class="mb-3">3ம் வருடம்</h4>
                        <p class="m-0">அரபுமொழியின் அடிப்படை பாடங்கள் மற்றும் தரம் 8 கான அரச பாட நெறிகள் வழங்கப்படும்.</p>
                        <a class="btn btn-lg btn-primary rounded" href="#">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-search text-white"></i>
                        </div>
                        <h4 class="mb-3">4ம் வருடம்</h4>
                        <p class="m-0">அரபுமொழியின் அடிப்படை பாடங்கள் மற்றும் தரம் 8 கான அரச பாட நெறிகள் வழங்கப்படும்.</p>
                        <a class="btn btn-lg btn-primary rounded" href="#">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-book text-white"></i>
                        </div>
                        <h4 class="mb-3">5ம் வருடம்</h4>
                        <p class="m-0">அரபுமொழியின் அடிப்படை பாடங்கள் மற்றும் தரம் 8 கான அரச பாட நெறிகள் வழங்கப்படும்.</p>
                        <a class="btn btn-lg btn-primary rounded" href="#">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-book text-white"></i>
                        </div>
                        <h4 class="mb-3">6ம் வருடம்</h4>
                        <p class="m-0">அரபுமொழியின் அடிப்படை பாடங்கள் மற்றும் தரம் 8 கான அரச பாட நெறிகள் வழங்கப்படும்.</p>
                        <a class="btn btn-lg btn-primary rounded" href="#">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-book text-white"></i>
                        </div>
                        <h4 class="mb-3">இறுதி வருடம்</h4>
                        <p class="m-0">அரபுமொழியின் அடிப்படை பாடங்கள் மற்றும் தரம் 8 கான அரச பாட நெறிகள் வழங்கப்படும்.</p>
                        <a class="btn btn-lg btn-primary rounded" href="Lastyear.php">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
  
    <!-- Popup -->
    <div class="popup" >
        <button id="close">&times;</button>
        <img src="img/post.jpeg" alt="" class="img-fluid" style="opacity:1; display: block;height: 600px; width:100%">


    </div>
    
    <!-- Event Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold sHead text-uppercase">Seminars</h5>
                <h1 class="mb-0">Subjects of Seminar</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="uploads/Ilmu-Balaghah.jpg" alt="Founder">
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Ilmul-Balaghah</h4>
                            <p class="text-uppercase m-0">importance of Ilmul-Balaghah</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="uploads/Ilmu-Balaghah.jpg" alt="Founder">
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Ilmul-Balaghah</h4>
                            <p class="text-uppercase m-0">importance of Ilmul-Balaghah</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="uploads/Ilmu-Balaghah.jpg" alt="Founder">
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Ilmul-Balaghah</h4>
                            <p class="text-uppercase m-0">importance of Ilmul-Balaghah</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="uploads/Ilmu-Balaghah.jpg" alt="Founder">
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Ilmul-Balaghah</h4>
                            <p class="text-uppercase m-0">importance of Ilmul-Balaghah</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Event End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold sHead text-uppercase">Testimonial</h5>
                <h1 class="mb-0">Our Students Say About Our College</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/feedback1.jpg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Amjath Razik Madani</h4>
                            <small class="text-uppercase">Phd in KSA</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                    I am extremely satisfied with my educational journey at DTA College. The college played a pivotal role in laying a strong foundation of knowledge, which proved instrumental in my success during the A/L studies. The emphasis on academic excellence and the positive learning environment at DTA College significantly contributed to my personal and academic growth.</div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/feedback1.jpg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                        <h4 class="text-primary mb-1">Amjath Razik Madani</h4>
                            <small class="text-uppercase">Phd in KSA</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                    I am extremely satisfied with my educational journey at DTA College. The college played a pivotal role in laying a strong foundation of knowledge, which proved instrumental in my success during the A/L studies. The emphasis on academic excellence and the positive learning environment at DTA College significantly contributed to my personal and academic growth.</div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/feedback1.jpg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                        <h4 class="text-primary mb-1">Amjath Razik Madani</h4>
                            <small class="text-uppercase">Phd in KSA</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                    I am extremely satisfied with my educational journey at DTA College. The college played a pivotal role in laying a strong foundation of knowledge, which proved instrumental in my success during the A/L studies. The emphasis on academic excellence and the positive learning environment at DTA College significantly contributed to my personal and academic growth.</div>
                </div>
                </div>
        </div>
    </div>
    <!-- Testimonial End -->


    



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
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Message from Mudeer</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Event</a>
                                <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact</a>
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
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                    <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">D.T.A College</a>. All Rights Reserved.Designed by D.T.A College IT</p>
                </div>
                    </div>
                </div>
            </div>
        </div>
           <!-- Back to Top -->
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

    <!--  Javascript -->
    <script src="js/main.js"></script>

    <script>
        window.addEventListener("load", function() {
            setTimeout(function() {
                document.querySelector("body").classList.add("blur");
                document.querySelector(".popup").style.display = "block";
            }, 1000);
        });

        document.querySelector("#close").addEventListener("click", function() {
            document.querySelector(".popup").style.display = "none";
            document.querySelector("body").classList.remove("blur");
        });
    </script>
</body>

</html>