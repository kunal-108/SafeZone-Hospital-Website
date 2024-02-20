<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SafeZone - Header</title>
    <!-- Font Awesome Icon Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS Link -->
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <!-- Header File Start -->
    <div class="container-fluid" id="topbar">
        <div class="row py-1 d-flex justify-content-center align-items-center">
            <div class="col-lg-4 col-md-6 d-flex justify-content-center align-items-center">
                <label><i class="fa-solid fa-phone"></i></label><a href="tel:+011 3287 4282"> +011 3287 4282</a>&emsp;
                <a href="tel:tel:+011 6893 2983"> +011 6893 2983</a>
            </div>
            <div class="col-lg-4 col-md-6 d-flex justify-content-center align-items-center" id="email">
                <label><i class="fa-solid fa-envelope"></i></label><a href="mailto:safezone.123@gmail.com">
                    safezone.123@gmail.com</a>
            </div>
            <div class="offset-lg-2 col-lg-2 col-md-6 d-flex justify-content-center align-items-center"
                id="topbarSocial">
                <a href="" class="mx-2"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="" class="mx-2"><i class="fa-brands fa-instagram"></i></a>
                <a href="" class="mx-2"><i class="fa-brands fa-twitter"></i></a>
                <a href="" class="mx-2"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>

        </div>
    </div>
    <nav class="navbar navbar-expand-lg" id="main_navbar">
        <div class="container-fluid">
            <a class="navbar-brand fs-2" href="index.php"><i
                    class="fa-solid fa-heart-pulse"></i>Safe<span>Zone.</span></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="department.php">Departments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="service.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="doctor.php">Doctors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Some Links
                        </a>
                        <ul class="dropdown-menu" id="dropdown_navbar">
                            <li><a class="dropdown-item" href="#">link 1</a></li>
                            <li><a class="dropdown-item" href="#">link 2</a></li>
                            <li><a class="dropdown-item" href="#">link 3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header File End -->


    <!-- bootstrap javascript link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>