<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SafeZone</title>
</head>

<body>

    <?php include 'header.php' ?>

    <!-- Hero Section Start -->
    <section id="homePage" class="d-flex justify-content-center align-items-center flex-column p-5">
        <h4 class="text-center py-3">Welcome to SafeZone.</h4>
        <h1 class="text-center">Your Safety Our Resposibility</h1>
        <p class="text-center">
            A long black shadow slid across the pavement near their feet and the five Venusians, very much startled,
            looked overhead. They were barely in time to see the huge gray form of the carnivore before it vanished
            behind a sign atop a nearby building.
        </p>
        <a href="#appointment-section" class=" nav-link py-5">
            <button class="d-flex justify-content-center align-items-center">Book Appointment</button>
        </a>
        <div class="container pt-4" style="color:white;" id="facility">
            <div class="row">

                <div class="col-md-4 d-flex justify-content-center align-items-center fs-4"><i
                        class="fa-solid fa-stethoscope fs-2 px-2" style="color:var(--green1);"></i>Expert Facilities
                </div>
                <div class="col-md-4 d-flex justify-content-center align-items-center fs-4"><i
                        class="fa-regular fa-clock fs-2 px-2" style="color:var(--green1);"></i>24X7 Services</div>
                <div class="col-md-4 d-flex justify-content-center align-items-center fs-4"><i
                        class="fa-solid fa-truck-medical fs-2 px-2" style="color:var(--green1);"></i>Fast Services</div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->



    <!-- Why Section Start -->
    <section id="why-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Why Choose <span style="color:var(--green1);">SafeZone.</span> ?</h2>
                    <p>
                        He slowly poured the drink over a large chunk of ice he has especially chiseled off a larger
                        block. He didn't particularly like his drinks cold, but he knew that the drama of chiseling the
                        ice and then pouring a drink over it looked far more impressive than how he actually liked it.
                        It was all about image and he'd managed to perfect the image that he wanted to project.Far more
                        impressive than how he actually liked it. It was all about image and he'd managed to perfect the
                        image that he wanted to project.
                        He slowly poured the drink over a large chunk of ice he has especially chiseled off a larger
                        block. He didn't particularly like his drinks cold, but he knew that the drama of chiseling the
                        ice and then pouring.
                    </p>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                    <div class="w-100 d-flex justify-content-center align-items-center shadow-sm">
                        <img class="img-fluid border border-dark-subtle rounded p-2" src="./images/why.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-12">
                    <p>He slowly poured the drink over a large chunk of ice he has especially chiseled off a larger
                        block. He didn't particularly like his drinks cold, but he knew that the drama of chiseling the
                        ice and then pouring a drink over it looked far more impressive than how he actually liked it.
                        It was all about image and he'd managed to perfect the image that he wanted to project.Far more
                        impressive than how he actually liked it. It was all about image and he'd managed to perfect the
                        image that he wanted to project.
                        He slowly poured the drink over a large chunk of ice he has especially chiseled off a larger
                        block. He didn't particularly like his drinks cold, but he knew that the drama of chiseling the
                        ice and then pouring.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Section End -->



    <!-- Appointment Section Start -->
    <section id="appointment-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Book Appointment</h2>
                    <p>A long black shadow slid across the pavement near their feet and the five Venusians, very much
                        startled, looked overhead. They were barely in time to see the huge gray form of the carnivore
                        before it vanished behind a sign atop a nearby building.</p>
                </div>
            </div>
            <div class="row" id="form">
                <div class="col-md-12">
                    <form action="database2.php" class="row" method="post">
                        <div class="col-lg-6">
                            <div class="input">
                                <label>Name</label>
                                <input type="text" placeholder="Full Name" name="nme" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input">
                                <label>Email</label>
                                <input type="email" placeholder="Your Email" name="el" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input">
                                <label>Phone</label>
                                <input type="number" placeholder="Contact Number" name="pn" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input">
                                <label>Location</label>
                                <select name="st" required>
                                    <option disabled selected>Select Your Location</option>
                                    <option>Location 1</option>
                                    <option>Location 2</option>
                                    <option>Location 3</option>
                                    <option>Location 4</option>
                                    <option>Location 5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input">
                                <label>Appointment Date</label>
                                <input type="date" name="dt" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input">
                                <label>Appointment Time</label>
                                <input type="time" name="tm" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input"><label>Select Department</label>
                                <select name="dpmt">
                                    <option disabled selected>Select Department</option>
                                    <option>Department 1</option>
                                    <option>Department 2</option>
                                    <option>Department 3</option>
                                    <option>Department 4</option>
                                    <option>Department 5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input">
                                <label>Select Doctor</label>
                                <select name="dctr" required>
                                    <option disabled selected>Select Doctor</option>
                                    <option>Doctor 1</option>
                                    <option>Doctor 2</option>
                                    <option>Doctor 3</option>
                                    <option>Doctor 4</option>
                                    <option>Doctor 5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="inputL">
                                <label>Some Message</label>
                                <textarea rows="5" placeholder="Message(Optional)" name="mssg" required></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="inputL">
                                <button>Book Appointment</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Appointment Section End -->


    <!-- Expert Section Start -->
    <section id="experts">
        <div class="row" id="about4">
            <div class="container">
                <div class="row">
                    <h2>Our Leaders</h2>
                    <div class="col-lg-3 col-md-6">
                        <div class="box">
                            <div class="imgBox">
                                <img src="./images/doctor1.jpg" alt="">
                            </div>
                            <h4>Someone Expert</h4>
                            <p>Information about Expert</p>
                            <a href="">Know More</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="box">
                            <div class="imgBox">
                                <img src="./images/doctor2.jpg" alt="">
                            </div>
                            <h4>Someone Expert</h4>
                            <p>Information about Expert</p>
                            <a href="">Know More</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="box">
                            <div class="imgBox">
                                <img src="./images/doctor3.jpg" alt="">
                            </div>
                            <h4>Someone Expert</h4>
                            <p>Information about Expert</p>
                            <a href="">Know More</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="box">
                            <div class="imgBox">
                                <img src="./images/doctor4.jpg" alt="">
                            </div>
                            <h4>Someone Expert</h4>
                            <p>Information about Expert</p>
                            <a href="">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Expert Section End -->



    <!-- FAQ Section Start -->
    <section id="faq">
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="faq-1">
                    <h2>Frequently Asked Questions</h2>
                    <p>A long black shadow slid across the pavement near their feet and the five Venusians, very much
                        startled, looked overhead. They were barely in time to see the huge gray form of the carnivore
                        before it vanished behind a sign atop a nearby building.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Question 1
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Greg understood that this situation would make Michael terribly uncomfortable.
                                        Michael simply had no idea what was about to come and even though Greg could
                                        prevent it from happening, he opted to let it happen. It was quite ironic,
                                        really. It was something Greg had said he would never wish upon anyone a million
                                        times, yet here he was knowingly letting it happen to one of his best friends.
                                        He rationalized that it would ultimately make Michael a better person and that
                                        no matter how uncomfortable, everyone should experience racism at least once in
                                        their lifetime.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Question 2
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Greg understood that this situation would make Michael terribly uncomfortable.
                                        Michael simply had no idea what was about to come and even though Greg could
                                        prevent it from happening, he opted to let it happen. It was quite ironic,
                                        really. It was something Greg had said he would never wish upon anyone a million
                                        times, yet here he was knowingly letting it happen to one of his best friends.
                                        He rationalized that it would ultimately make Michael a better person and that
                                        no matter how uncomfortable, everyone should experience racism at least once in
                                        their lifetime.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Question 3
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Greg understood that this situation would make Michael terribly uncomfortable.
                                        Michael simply had no idea what was about to come and even though Greg could
                                        prevent it from happening, he opted to let it happen. It was quite ironic,
                                        really. It was something Greg had said he would never wish upon anyone a million
                                        times, yet here he was knowingly letting it happen to one of his best friends.
                                        He rationalized that it would ultimately make Michael a better person and that
                                        no matter how uncomfortable, everyone should experience racism at least once in
                                        their lifetime.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    Question 4
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Greg understood that this situation would make Michael terribly uncomfortable.
                                        Michael simply had no idea what was about to come and even though Greg could
                                        prevent it from happening, he opted to let it happen. It was quite ironic,
                                        really. It was something Greg had said he would never wish upon anyone a million
                                        times, yet here he was knowingly letting it happen to one of his best friends.
                                        He rationalized that it would ultimately make Michael a better person and that
                                        no matter how uncomfortable, everyone should experience racism at least once in
                                        their lifetime.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    Question 5
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Greg understood that this situation would make Michael terribly uncomfortable.
                                        Michael simply had no idea what was about to come and even though Greg could
                                        prevent it from happening, he opted to let it happen. It was quite ironic,
                                        really. It was something Greg had said he would never wish upon anyone a million
                                        times, yet here he was knowingly letting it happen to one of his best friends.
                                        He rationalized that it would ultimately make Michael a better person and that
                                        no matter how uncomfortable, everyone should experience racism at least once in
                                        their lifetime.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ Section End -->



    <!-- Another Section Start -->
    <section id="another">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>What Makes Us Speacial ?</h2>
                </div>
            </div>
            <div class="row data">
                <div class="col-md-12">
                    <h4><i class="fa-solid fa-angle-right"></i>Fast Ambulance Service</h4>
                    <p>
                        It wasn't supposed to end that way. The plan had been meticulously thought out and practiced
                        again and again. There was only one possible result once it had been implemented, but as they
                        stood there the result wasn't anything close to what it should have been. They all blankly
                        looked at each wondering how this could have happened. In their minds, they all began to blame
                        the other members of the group as to why they had failed.
                    </p>
                </div>

                <div class="col-md-12">
                    <h4><i class="fa-solid fa-angle-right"></i>24/7 Services</h4>
                    <p>
                        It wasn't supposed to end that way. The plan had been meticulously thought out and practiced
                        again and again. There was only one possible result once it had been implemented, but as they
                        stood there the result wasn't anything close to what it should have been. They all blankly
                        looked at each wondering how this could have happened. In their minds, they all began to blame
                        the other members of the group as to why they had failed.
                    </p>
                </div>

                <div class="col-md-12">
                    <h4><i class="fa-solid fa-angle-right"></i>Expert Facilities</h4>
                    <p>
                        It wasn't supposed to end that way. The plan had been meticulously thought out and practiced
                        again and again. There was only one possible result once it had been implemented, but as they
                        stood there the result wasn't anything close to what it should have been. They all blankly
                        looked at each wondering how this could have happened. In their minds, they all began to blame
                        the other members of the group as to why they had failed.
                    </p>
                </div>

                <div class="col-md-12">
                    <h4><i class="fa-solid fa-angle-right"></i>Emergency Wards Availability All Time</h4>
                    <p>
                        It wasn't supposed to end that way. The plan had been meticulously thought out and practiced
                        again and again. There was only one possible result once it had been implemented, but as they
                        stood there the result wasn't anything close to what it should have been. They all blankly
                        looked at each wondering how this could have happened. In their minds, they all began to blame
                        the other members of the group as to why they had failed.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Another Section End -->



    <!-- Gallery Carousel Section Start -->
    <section id="gall">
        <div class="container-fluid" id="slider">
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel slide carousel-fade" data-bs-ride="carousel" id="mySlider">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="5000">
                                <img src="./images/3.jpg" alt="">
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <img src="./images/carousel6.jpg" alt="">
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <img src="./images/16.jpg" alt="">
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <img src="./images/17.jpg" alt="">
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <img src="./images/2.jpg" alt="">
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <img src="./images/19.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Carousel Section End -->


    <!-- Testimonial Section Start -->
    <section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel slide" data-bs-ride="carousel" id="mySlider">
                        <ul class="carousel-indicators">
                            <li data-bs-target="#mySlider" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#mySlider" data-bs-slide-to="1"></li>
                            <li data-bs-target="#mySlider" data-bs-slide-to="2"></li>
                            <li data-bs-target="#mySlider" data-bs-slide-to="3"></li>
                            <li data-bs-target="#mySlider" data-bs-slide-to="4"></li>
                            <li data-bs-target="#mySlider" data-bs-slide-to="5"></li>
                            <li data-bs-target="#mySlider" data-bs-slide-to="6"></li>
                        </ul>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="2000">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="tbox">
                                            <div class="imgBox"><img src="./images/t1.jpg" alt=""></div>
                                            <div class="imgText">
                                                <h3>Someone Name</h3>
                                                <p>
                                                    The song came from the bathroom belting over the sound of the
                                                    shower's running water. It was the same way each day began since he
                                                    could remember. It listened intently and concluded that the singing
                                                    today was as terrible as it had ever been.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="tbox">
                                            <div class="imgBox"><img src="./images/t9.jpg" alt=""></div>
                                            <div class="imgText">
                                                <h3>Someone Name</h3>
                                                <p>
                                                    The song came from the bathroom belting over the sound of the
                                                    shower's running water. It was the same way each day began since he
                                                    could remember. It listened intently and concluded that the singing
                                                    today was as terrible as it had ever been.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="tbox">
                                            <div class="imgBox"><img src="./images/t3.jpg" alt=""></div>
                                            <div class="imgText">
                                                <h3>Someone Name</h3>
                                                <p>
                                                    The song came from the bathroom belting over the sound of the
                                                    shower's running water. It was the same way each day began since he
                                                    could remember. It listened intently and concluded that the singing
                                                    today was as terrible as it had ever been.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="tbox">
                                            <div class="imgBox"><img src="./images/t4.jpg" alt=""></div>
                                            <div class="imgText">
                                                <h3>Someone Name</h3>
                                                <p>
                                                    The song came from the bathroom belting over the sound of the
                                                    shower's running water. It was the same way each day began since he
                                                    could remember. It listened intently and concluded that the singing
                                                    today was as terrible as it had ever been.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="tbox">
                                            <div class="imgBox"><img src="./images/t5.jpg" alt=""></div>
                                            <div class="imgText">
                                                <h3>Someone Name</h3>
                                                <p>
                                                    The song came from the bathroom belting over the sound of the
                                                    shower's running water. It was the same way each day began since he
                                                    could remember. It listened intently and concluded that the singing
                                                    today was as terrible as it had ever been.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="tbox">
                                            <div class="imgBox"><img src="./images/t6.jpg" alt=""></div>
                                            <div class="imgText">
                                                <h3>Someone Name</h3>
                                                <p>
                                                    The song came from the bathroom belting over the sound of the
                                                    shower's running water. It was the same way each day began since he
                                                    could remember. It listened intently and concluded that the singing
                                                    today was as terrible as it had ever been.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="tbox">
                                            <div class="imgBox"><img src="./images/t7.jpg" alt=""></div>
                                            <div class="imgText">
                                                <h3>Someone Name</h3>
                                                <p>
                                                    The song came from the bathroom belting over the sound of the
                                                    shower's running water. It was the same way each day began since he
                                                    could remember. It listened intently and concluded that the singing
                                                    today was as terrible as it had ever been.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <?php include 'footer.php' ?>

</body>

</html>