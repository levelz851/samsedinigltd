<?php 
    require "header\header.php";

?>
    
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
                <div class="row m0">
                    <div class="col-sm-6">
                        <div class="row m0">
                            <h3>Get in touch!</h3>
                            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor <br><br>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                            <ul class="list-inline">
                                <li><i class="fa fa-home"></i> lorem ipsum street</li>
                                <li><i class="fa fa-phone"></i> +399 (500) 321 9548</li>
                                <li><i class="fa fa-envelope"></i> info@domain.com</li>
                            </ul>
                        </div>                        
                    </div>
                    <div class="col-sm-6">
                        <div class="row m0 commentForm">
                            <form class="row m0" id="contactForm" method="post" name="contact" action="http://premiumlayers.net/demo/html/construction/contact_process.php">
                                <div class="col-sm-6 p0 commenterInfoInputs">
                                    <div class="row m0">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="text" class="form-control" name="name" id="name"  placeholder="Name">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="e-mail">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-link"></i></span>
                                            <input type="url"  name="url" id="url" class="form-control" placeholder="website">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 p0">
                                    <div class="row m0">                                        
                                        <div class="input-group">
                                            <textarea placeholder="Message" name="message" id="message" class="form-control"></textarea>
                                        </div>
                                        <button class="btn btn-default" type="submit">send message</button>
                                    </div>
                                </div>
                            </form>
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
                </div>                
                <div class="row m0">
                    <h3>Find us on Google Map</h3>
                    <div id="mapBox"></div>
                </div>
            </div>            
        </div>
    </section>
    
    <?php 
   require "footer\Footer.php";
   ?>