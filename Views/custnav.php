<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
<?php

$base_url = "http://localhost/TatvaSoft/";

if (!isset($_SESSION['UserId'])) { ?> 
    <nav class="navbar  navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="./homepage.php"><img src="http://localhost/TatvaSoft/assets/image/logo-large.png" class="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  w-100 justify-content-end">
                    <li class="nav-item  booknow">
                        <a class="nav-link book-now" href="booknow.php" title="Book Service" >Book Now</a>
                    </li>
                    <li class="nav-item ps">
                        <a class="nav-link ps1" title="Price" href="prices.php">Prices & services</a>
                    </li>
                    <li class="nav-item wbg">
                        <a class="nav-link warrenty" title="Warrenty" href="#">Warranty</a>
                        <a class="nav-link blog" title="Blog" href="#">Blog</a>
                        <a class="nav-link Contact" title="Contact" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item  login">
                        <a class="nav-link log-in" title="Login" href=".#modalform">Login</a>
                    </li>
                    <li class="nav-item  helper">
                        <a class="nav-link helper1" title="Become a Service Provider" href="SpSignup.php">Become a Helper</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<?php } ?>


<?php if (isset($_SESSION['UserId'])) { ?>
    <div class="header-navigationbar">
        <nav class="navbar navbar-expand-lg fixed-top">
            <a class="navbar-brand" href="homepage.php"><img src="http://localhost/TatvaSoft/assets/image/logo-large.png"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fa fa-bars bars"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item booked">
                        <a class="nav-link booknow" href="booknow.php">Book now</a>
                    </li>
                    <li class="nav-item prices">
                        <a class="nav-link item1" href="prices.php">Prices & services</a>
                    </li>
                    <li class="nav-item wbg">
                        <a class="nav-link warrenty" href="#">Warranty</a>
                        <a class="nav-link blog" href="#">Blog</a>
                        <a class="nav-link Contact" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item dropdown notification">
                        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell ntf"></i><span class="badge badge-danger">2</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Notification1</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Notification2</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Notification3</a>
                        </div>
                    </li>
<li class="nav-item dropdown users">
  <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <img src="http://localhost/TatvaSoft/assets/image/admin-user.png">
  </a>
   <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="#">Welcome,<b><?php echo $_SESSION['username']; ?></b></a></li>
            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">User Profile</a>
                            <a class="dropdown-item mysettingbtn" href="./customerpage.php">Setting</a>
                             <form method="POST" action="http://localhost/TatvaSoft/?controller=Helperland&function=logout"> 
                                    <button class="dropdown-item logout"  name="logout">Logout</button>
                            </form>
    
    </ul>
</li>
                   

                   
                </ul>
            </div>
        </nav>
    </div>
    <!-- Mobile Navbar -->

    <div class="mobile-nav">

        <nav class="navbar navbar-expand-lg fixed-top">
            <a class="navbar-brand"><img src="assets/image/white-logo-transparent-background.png"></a>
            <div class="nav-brand dropdown notifications">
                <a class="dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bell ntf"></i><span class="badge badge-danger">2</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Notification1</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Notification2</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Notification3</a>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContents" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fa fa-bars bars"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContents">

                <ul class=" nav ">
                    <li class="nav-item">
                        <h1 class="wlcm">Welcome,
                    <li class="nav-item"><span class="wlcm-nm"><?php echo $_SESSION['username']; ?></span></li>
                    </h1>

                    </li>


                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a href="#" class="nav-link ">
                            Service History </a>
                    </li>
                    <li class="nav-item ">
                        <a href="#" class="nav-link ">
                            Service Schedule
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            Favourite Pros </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            Invoices </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            My Ratings
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            Notifications </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            My Setting </a>
                    </li>
                    <li class="nav-item">
                    <form method="POST" action="http://localhost/TatvaSoft/?controller=Helperland&function=logout">
                                    <button class="dropdown-item logout" name="logout" type="submit">Logout</button>
                                </form>
                    </li>
                    <li class="nav-item newnav">
                        <a href="<?= $base_url."./?controller=Helperland&function=gotobookservicepage"?>" class="nav-link ">
                            Book now
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./Price.php" class="nav-link ">
                            Prices & services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            Warranty </a>
                    </li>
                    <li class="nav-item ">
                        <a href="#" class="nav-link ">
                            Blog </a>
                    </li>
                    <li class="nav-item ">
                        <a href="./Contact.php" class="nav-link ">
                            Contact </a>
                    </li>

                    <li class="nav-item fb-insta">
                        <a href="#" class="nav-link"><i class="fa fa-facebook"></i><span><i class="fa fa-instagram"></i></span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <script  src="../assets/js/common.js"></script>
<?php } ?>
