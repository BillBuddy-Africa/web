<?php
$page = "Contact Us";
include "./components/header.php";
include "./components/navbar.php";
include "./components/mobile-navbar.php";

    $recaptchaSecret = '6LejQU8rAAAAABRZekqMWo49dYvsISaLqR3WKwMt';
    $response = $_POST['g-recaptcha-response'];
    $remoteip = $_SERVER['REMOTE_ADDR'];

    $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$response}&remoteip={$remoteip}");
    $responseData = json_decode($verify);

    if ($responseData->success) {
        // Verified successfully
        //echo "Success!";
    } else {
        // Failed verification
        //echo "reCAPTCHA failed. Please try again.";
    }
    
?>

        <div class="banner-style position-relative overflow-hidden" style="background-image: url(assets/images/contact-banner.jpg)">
            <div class="container">
                <div class="page-banner-content">
                    <h1 class="text-white">Contact Us</h1>
                </div>
            </div>
        </div>
        
        <div class="contact-address-area ptb-120 overflow-hidden">
            <div class="container">
                <div class="address-container bg-color-000000 radius-20">
                    <div class="contact-warp d-flex align-items-center justify-content-between" data-cues="slideInDown" data-duration="700">
                        <div class="location position-relative">
                            <i class="flaticon-phone-call call-icon"></i>
                            <span>Phone Number</span>
                            <a href="tel:+2348103726926">+234 810 3726 926</a>
                        </div>
                        <div class="location position-relative">
                            <i class="flaticon-email-1 call-icon"></i>
                            <span>Email Address</span>
                            <a href="mailto:hello@billbuddy.africa">hello@billbuddy.africa</a>
                        </div>
                        <div class="location position-relative">
                            <i class="flaticon-maps-and-flags call-icon"></i>
                            <span>Visit Our Office</span>
                            <a href="">Lekki, Admiralty way, Lagos.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="contact-form-area pb-120">
            <div class="container">
                <div class="section-title" style="max-width: 665px;">
                    <span class="sub-title two bg-color-9edd05 rounded-pill">Get in Touch</span>
                    <h2>Get In Touch Today!</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-8 col-md-12 mx-auto" data-cues="slideInUp" data-duration="800">
                        <form class="contact-form bg-color-edf1ee radius-30">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" class="form-control" placeholder="Phone">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" class="form-control" placeholder="Subject">
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <textarea class="form-control textarea" placeholder="Write A Message"></textarea>
                                </div>
                            </div>

                            <!-- reCAPTCHA widget -->
                            <div class="g-recaptcha pb-3" data-sitekey="6LejQU8rAAAAAO_roFDBNdNUVcPAndlcQVvCXJab"></div>

                            <button type="submit" class="default-btn">Send Message <i class="ri-arrow-right-up-line"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        

<?php include "./components/footer.php"; ?>