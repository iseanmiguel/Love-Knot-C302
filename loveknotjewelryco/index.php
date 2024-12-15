<?php 
session_start();
if (isset($_SESSION['email']) && 
          isset($_SESSION['user_id'])) { ?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Love Knot Jewelry Co.</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
 <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">The Key to Unmatched Sophistication</span>
                <div class="site-heading-container">
                    <img src="assets/img/LOVE KNOT.svg" alt="LoveKnotLogo" width="60" height="60" class="logo-image">
                    <span class="site-heading-lower">Love Knot Jewelry Co.</span>
                </div>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.php">Love Knot Jewelry Co.</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php">Home</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="about.php">About Us</a></li>
                        <li class="nav-item dropdown px-lg-4">
                            <a class="nav-link dropdown-toggle text-uppercase" href="products.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Products
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="products.html">All</a></li>
                                <li><a class="dropdown-item" href="necklaces.html">Necklaces</a></li>
                                <li><a class="dropdown-item" href="rings.html">Rings</a></li>
                                <li><a class="dropdown-item" href="bracelets.html">Bracelets</a></li>
                                <li><a class="dropdown-item" href="earrings.html">Earrings</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown px-lg-4">
                            <a class="nav-link dropdown-toggle text-uppercase" href="contact.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Others
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="contact.html">Contact Us</a></li>
                                <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <section class="page-section clearfix">
            <div class="container">
                <div class="intro">
                    <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="assets/img/1.png" alt="Bestselling Necklaces" />
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Bestselling</span>
                            <span class="section-heading-lower">Necklaces</span>
                        </h2>
                        <p class="mb-3">Our necklaces are thoughtfully designed and carefully crafted to become a cherished part of your jewelry collection. Made with premium materials and intricate details, these necklaces are perfect for adding elegance to any outfit or commemorating life’s special moments. Once you experience their beauty and craftsmanship, they will surely become your favorite go-to accessory—we guarantee it!</p>
                        <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="necklaces.html">Take a Look!</a></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="page-section clearfix">
            <div class="container">
                <div class="intro">
                    <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="assets/img/2.png" alt="Bestselling Rings" />
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Bestselling</span>
                            <span class="section-heading-lower">Rings</span>
                        </h2>
                        <p class="mb-3">Our rings are designed to symbolize love, commitment, and personal style. From classic solitaires to intricate band designs, each ring is expertly crafted to capture the essence of timeless elegance. Whether you're celebrating an engagement, anniversary, or a personal milestone, these rings are made to make every moment unforgettable.</p>
                        <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="rings.html">Take a Look!</a></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="page-section clearfix">
            <div class="container">
                <div class="intro">
                    <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="assets/img/3.png" alt="Bestselling Bracelets" />
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Bestselling</span>
                            <span class="section-heading-lower">Bracelets</span>
                        </h2>
                        <p class="mb-3">Our bracelets are the perfect blend of sophistication and charm, designed to complement any look. From sleek minimalist styles to detailed statement pieces, these bracelets are made with precision and care. Whether you're looking for a meaningful gift or a stylish addition to your own collection, you'll find the perfect piece to treasure.</p>
                        <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="bracelets.html">Take a Look!</a></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="page-section clearfix">
            <div class="container">
                <div class="intro">
                    <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="assets/img/4.png" alt="Bestselling Earrings" />
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Bestselling</span>
                            <span class="section-heading-lower">Earings</span>
                        </h2>
                        <p class="mb-3">Our earrings showcase exquisite designs and unmatched craftsmanship. Ranging from delicate studs to elegant drop earrings, these pieces are created to enhance your natural beauty. Perfect for daily wear or special occasions, our earrings are crafted to add a touch of brilliance to your every moment.</p>
                        <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="earrings.html">Take a Look!</a></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">Our Promise</span>
                                <span class="section-heading-lower">To You</span>
                            </h2>
                            <p class="mb-0">When you choose Love Knot Jewelry, we are committed to providing you with exceptional service, a warm and welcoming experience, and jewelry of the highest quality crafted with care and precision. If for any reason you are not completely satisfied, please let us know, and we will do everything we can to ensure your happiness and create a lasting impression.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</body>
</html>
<?php }else {
	$errorM = "Login First!";
	header("Location: login.php?error=$errorM");
} ?>