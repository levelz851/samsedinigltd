<?php 
    require "header\header.php";
    USE PHPMailer\PHPMailer\PHPMailer;
    USE PHPMailer\PHPMailer\Exception;
    require_once 'vendor/autoload.php';

    $error = [];
    $ErrorMessage = '';
    $successMessage = '';
    $siteKey = '6LcTVhcqAAAAALcrXO5o7UJ-lVCp3TgvvA5wILl5';
    $secure = '';


    if($_SERVER["REQUEST_METHOD"] == "post"){
        function sanitize_inputs($input){
            $input = trim($input);
            $input = stripslashes($input);
            $input = htmlspecialchars($input, ENT_QUOTES , 'UTF-8');
            return $input;

        }
        $name = sanitize_inputs($_POST["name"]);
        $email = sanitize_inputs($_POST["email"]);
        $number = sanitize_inputs($_POST["number"]);
        $message = sanitize_inputs($_POST["message"]);



        if(isset($name)  || isset($number) || isset($email) || isset($message)){
            echo "
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>

                 <script>
                    function showAlert() {
                        Swal.fire({
                            title: 'Good job!',
                            text: 'You clicked the button!',
                            icon: 'success',
                            timer: 5000, 
                            confirmButtonText: 'Cool'
                        });
                    }
                </script>
            ";
        }





    }


?>
<style>
    /* Basic Reset */
/* * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
} */

.wawa {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: auto;
    background-color: #f4f4f4;
}

.whatsapp-button {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 1000;
}

.whatsapp-button a {
    display: flex;
    align-items: center;
    background-color: #25d366;
    color: #fff;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 50px;
    font-size: 16px;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.whatsapp-button a img {
    width: 24px;
    height: 24px;
    margin-right: 10px;
}

.whatsapp-button a i {
    width:30px;
    height: 30px;
    margin-right: 10px;
    
}

.whatsapp-button a:hover {
    background-color: #1ebea5;
}

/* Responsive */
@media (max-width: 600px) {
    .whatsapp-button a {
        font-size: 14px;
        padding: 8px 16px;
    }

    .whatsapp-button a img {
        width: 20px;
        height: 20px;
    }

    .whatsapp-button a i {
        width: 20px;
        height: 20px;
    }
}

</style>
    
<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
<!-- <script>
        function showAlert() {
            Swal.fire({
                title: 'Good job!',
                text: 'You clicked the button!',
                icon: 'success',
                timer: 5000, 
                confirmButtonText: 'Cool'
            });
        }
</script> -->
    <section id="pageCover" class="row">
        <img src="images/contactCover.png" alt="" class="pageCover">
        <div class="row pageTitle">Contact us</div>
        <div class="row pageBreadcrumbs">
            <ol class="breadcrumb">
              <li><a href="index-2.html">home</a></li>
              <li class="active">contact us</li>
            </ol>
        </div>
    </section>
    
    <section id="contacts" class="row">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="row m0">
                        <h3>Get in touch!</h3>
                        <p>We'd love to hear from you! Whether you have a question about our services, need assistance, or just want to give us feedback, we're here to help. <br><br>If you prefer, you can send us a message using the form below, and we will get back to you as soon as possible.</p>
                        <ul class="list-inline">
                            <li><i class='bx bx-home-circle bx-tada' ></i>N02 Bob Oshodin Street Off Akhionbara GRA Benin City</li>
                            <li><a href="tel:+2348035633236"><i class='bx bxl-whatsapp bx-flip-vertical bx-tada' ></i>08035633236</a></li>
                            <li><a href="mailto:nicholassedi@gmail.com"><i class='bx bx-envelope bx-tada' ></i> nicholassedi@gmail.com </a></li>
                        </ul>
                    </div>
                    <div class="row m0 commentForm">
                        <form class="row m0" id="contactForm" method="post" name="contact" action="https://formsubmit.co/dalilodjirigho745@gmail.com">
                            <div class="col-sm-6 p0 commenterInfoInputs">
                                <div class="row m0">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class='bx bx-user'></i></span>
                                        <input type="text" class="form-control" name="name" id="name"  placeholder="Name">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class='bx bx-envelope' ></i></span>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="e-mail">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class='bx bx-phone'></i></span>
                                        <input type="tel"  name="number" id="url" class="form-control" placeholder="Phone Number">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p0">
                                <div class="row m0">                                        
                                    <div class="input-group">
                                        <textarea placeholder="Message" name="message" id="message" class="form-control"></textarea>
                                    </div>
                                    <button class="btn btn-default" type="submit"  onclick="showAlert()">send message</button>

                                </div>
                            </div>
                        </form>   
                        
                        <div class="wawa">
                            <div class="whatsapp-button">
                                <a href="https://wa.me/+2348035633236" target="_blank">
                                    <!-- <img src="whatsapp-icon.png" alt="WhatsApp"> -->
                                    <i class='bx bxl-whatsapp'></i>
                                    Chat with us up <br>WhatsApp
                                </a>
                            </div>
                        </div>
                        <div id="success">
                            <span class="green textcenter">
                                <p>Your message was sent successfully! I will be in touch as soon as I can.</p>
                            </span>
                        </div>
                        <div id="error">
                            <span>
                                <p>Something went wrong, try refreshing and submitting the form again.</p>
                            </span>
                        </div>
                    </div> 
                </div>
                <div class="col-sm-6">
                    <h3>Find us on Google Map</h3>
                    <div id="mapBox">
                        <div class="mapouter">
                <div class="gmap_canvas"><iframe width="100%" height="350" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=Richfield Off  Akhionbara GRA Benin%20City&amp;t=&amp;z=11&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                        href="https://www.emojilib.com/"></a>
                    </div>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        height: 350px;
                        width: 100%;
                    }

                    .gmap_canvas {
                        overflow: hidden;
                        /* background: none !important; */
                        background: #000 !important;
                        height: 350px;
                        width: 100%;
                    }
                </style>
        </div>
                    </div>
                </div>
            </div>            
        </div>
    </section>
    
    <?php 
        require "footer\Footer.php";
   ?>