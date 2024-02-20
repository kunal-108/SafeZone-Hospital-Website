<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - SafeZone</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include "header.php" ?>

    <!-- Contact Section Start -->

    <div class="container-fluid same" id="contact">
        <div class="row" id="pathMenu">
            <a href="index.php">home</a><span>></span><a href="">contact</a>
        </div>
        <div class="row text-center" id="content">
            <h1 class="">Contact</h1>
            <p class="px-3">A long black shadow slid across the pavement near their feet and the five Venusians, very much startled,
                looked overhead. They were barely in time to see the huge gray form of the carnivore before it vanished
                behind a sign atop a nearby building.</p>
        </div>

        <!-- Map Section Start -->
        <div class="row" id="map">
            <div class="col-md-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.967925667818!2d77.280417974692!3d28.54068377571503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce3717feed0a9%3A0x75f7243c5e33d581!2sApollo%20hospital%20jasol!5e0!3m2!1sen!2sin!4v1697712520383!5m2!1sen!2sin"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <!-- Map Section End -->


        <!-- Form Section Start -->
        <div class="container" id="form">
            <div class="row">
                <div class="col-lg-4">
                    <img src="./images/contact-image.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8">
                    <form action="database.php" method="post">
                        <h2 class="text-center">Get In Touch</h2>
                        <div class="row50">
                            <div class="input">
                                <label>Name</label>
                                <input type="text" placeholder="Full Name" name="nm" required>
                            </div>
                            <div class="input">
                                <label>Email</label>
                                <input type="email" placeholder="Your Email" name="eml" required>
                            </div>
                        </div>
                        <div class="row50">
                            <div class="input">
                                <label>Phone</label>
                                <input type="number" placeholder="Your Phone Number" name="phn" required>
                            </div>
                            <div class="input">
                                <label>Subject</label>
                                <input type="text" placeholder="Your Subject" name="sub" required>
                            </div>
                        </div>
                        <div class="row100">
                            <div class="input">
                                <label>Message</label>
                                <textarea placeholder="Write your message..." name="msg" required></textarea>
                            </div>
                        </div>
                        <div class="row100">
                            <div class="input">
                                <button>Send</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- Form Section End -->
    </div>

    <!-- Contact Section End -->

    <?php include 'footer.php' ?>

</body>
</html>