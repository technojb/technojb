<?php
$pageName = 'contact';
$pageTitle="Contact Us - TechnoJB";
include_once 'includes/header.php';
?>

<div class="page-title-container" style="background-image:url(assets/img/contact.jpg); background-repeat:repeat-x; height:250px;">
    <div class="container" style="text-align: center;">
        <div class="row" >
            <div class="col-sm-12 wow fadeIn" >                        
                <h1  style="color:#e24b1d; font-size: 75px; line-height: 140px; text-align: center;">Contact Us</h1>
            </div>
        </div>
    </div>
</div>

<!-- Contact Us -->
<div class="contact-us-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 contact-form wow fadeInLeft">
                <h1 style="color:#000000;">Get in Touch to speak of your needs</h1>
                <p>
                    Please feel free to fill the form and we will get back to you within 24 hours. PLease fill as much information so we can understand the nature of your query in detail.               
                </p>
                <form role="form" action="assets/sendmail.php" method="post">
                    <div class="form-group">
                        <label for="contact-name">Name</label>
                        <input type="text" name="name" placeholder="Enter your name..." class="contact-name" id="contact-name">
                    </div>
                    <div class="form-group">
                        <label for="contact-email">Email</label>
                        <input type="text" name="email" placeholder="Enter your email..." class="contact-email" id="contact-email">
                    </div>
                    <div class="form-group">
                        <label for="contact-subject">Subject</label>
                        <input type="text" name="subject" placeholder="Your subject..." class="contact-subject" id="contact-subject">
                    </div>
                    <div class="form-group">
                        <label for="contact-message">Message</label>
                        <textarea name="message" placeholder="Your message..." class="contact-message" id="contact-message"></textarea>
                    </div>
                    <button type="submit" class="btn">Send</button>
                </form>
            </div>
            <div class="col-sm-5 contact-address wow fadeInUp">
                <h3>We Are Here</h3>
                <div class="map"></div>
                <h3>Address</h3>
                <div class="footer-box-text footer-box-text-contact">
                    <p><i class="fa fa-map-marker"></i> 3rd Floor, Above Oriental Bank of Commerce, Near Glassy Junction, Jalandhar 144001</p>
                    <p><i class="fa fa-phone"></i> Phone: +91 81960 81960</p>
                    <p><i class="fa fa-user"></i> Skype: Techno.JB</p>
                    <p><i class="fa fa-envelope"></i> Email: <a href="">info@technojb.com</a></p>
                </div>

            </div>
        </div>
    </div>
</div>



<?php
include_once 'includes/footer.php';
