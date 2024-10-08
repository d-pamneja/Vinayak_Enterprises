<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title><?php include('./shared/title.php')?></title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>

<body>

    <!-- Header -->
    <?php include('./shared/header.php'); ?>
    <!-- /Header -->

    <div class="page-heading-main header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="breadcrumb"><a href="index.php">Home</a> / Contact Us</span>
                    <h3>Contact Us</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-page section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h6>| Contact Us</h6>
                        <h2>Get In Touch</h2>
                    </div>
                    <p>We're here to discuss your Agrochemical, Pharmaceutical, Surfacant and Exports needs. Let's explore how we can drive innovation and success together.
                    </p>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="item phone">
                                <img src="assets/images/phone-icon.png" alt="" style="max-width: 52px;">
                                <h6><a href="tel:07947429300" style="text-decoration: none; color: inherit;">07947429300</a><br><span>Phone Number</span></h6>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="item email">
                                <img src="assets/images/email-icon.png" alt="" style="max-width: 52px;">
                                <h6><a href="mailto:vinayak@gmail.com" style="text-decoration: none; color: inherit;">vinayak@gmail.com</a><br><span>Business Email</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form id="contact-form" action="" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="name">Full Name</label>
                                    <input type="name" name="name" id="name" placeholder="Your Name..."
                                        autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="email">Email Address</label>
                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                        placeholder="Your E-mail..." required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="subject">Subject</label>
                                    <input type="subject" name="subject" id="subject" placeholder="Subject..."
                                        autocomplete="on">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="orange-button">Send Message</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                    <br><br>
                    <div id="response"></div>
                </div>
                <div class="col-lg-12">
                    <div id="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.611528326749!2d77.1280297761845!3d28.641402783676686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d03142fcbc223%3A0x9a5220170e67eba3!2sVinayak%20Stockists!5e0!3m2!1sen!2sin!4v1723301151333!5m2!1sen!2sin"
                            width="100%" height="500px" frameborder="0"
                            style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);"
                            allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include('./shared/footer.php'); ?>
    <!-- /Footer -->

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/counter.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/active.js"></script>
    <script>
        $(document).ready(function() {
            $('#contact-form').on('submit', function(event) {
                event.preventDefault(); 

                var formData = $(this).serialize(); 

                $.ajax({
                    type: 'POST',
                    url: 'sendQuery.php', 
                    data: formData,
                    success: function(response) {
                        $('#response').html('<div class="success">' + response + '</div>')
                            .show();

                    },
                    error: function(xhr, status, error) {
                        $('#response').html('<div class="error">An error occurred: ' + error +
                            '</div>').show();
                    }
                });
            });
        });
    </script>

</body>

</html>