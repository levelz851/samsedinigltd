<?php 
    require "header\header.php";
    require "connection\connection.php";
    define("IMG_FOLDER" , "images/");


?>
    
    <section id="pageCover" class="row aboutUs">
        <div class="row pageTitle">Our People</div>
        <div class="row pageBreadcrumbs">
            <ol class="breadcrumb">
              <li><a href="index-2.html">home</a></li>
              <li class="active">about us</li>
            </ol>
        </div>
    </section>
    
    <section id="aboutus" class="row">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="row aboutContent">
                        <div class="row aboutUsTexts m0 member">
                            <div class="fleft textsPart">
                                <h2>About us</h2>
                                <p>Welcome to Samsedi Nigerian Limited, where we bring your construction visions to life with precision and expertise.
                                    With years of experience in the industry, our company is dedicated to providing top-notch construction services that exceed expectations. We specialize in a wide range of services, including residential and commercial construction, renovation, and project management. Our team of skilled professionals is committed to delivering quality workmanship and exceptional customer service.</p>
                                
                                <br>
                                <h2>Our People</h2>
                                <p> At Samsedi Nigerian Limited, our people are our greatest asset. We are proud to have a team of highly skilled professionals who bring a wealth of experience, dedication, and innovation to every project. Our workforce is comprised of talented individuals from diverse backgrounds, each contributing their unique expertise to deliver exceptional results.</p>
                            </div>
                            <div class="fleft aboutImg">
                                <?php 
                                    $query = "SELECT * FROM latest_post ORDER BY RAND() LIMIT 1";
                                        $result = $mysqli->query($query);
                                        if($result->num_rows > 0){
                                            while($rows = $result->fetch_assoc()){
                                                $rows["image_name"];

                                                echo '<img src="'. IMG_FOLDER . $rows["image_name"].'" alt="">';

                                            }

                                        }
                                
                                
                                ?>
                            </div>
                        </div>
                        <div class="row m0 members">
                            <div class="col-sm-4 member3_1 member">
                                <div class="row m0">
                                    <div class="row m0 memImg">
                                        <img src="images/CEO 1.png" alt="" width="100%" height="auto">
                                    </div>
                                    <div class="row m0 memberIntro">
                                        <div class="row m0 name">Nicholas Samsedi</div>
                                        <div class="row m0 pro">Chief Executive Officer (CEO)</div>
                                        <div class="row m0">
                                            <ul class="list-inline memberSocial">
                                                <li><a href="tel:+2348035633236"><i class='bx bxl-whatsapp bx-flip-vertical bx-tada' ></i></a></li>
                                                <li><a href="mailto:nicholassedi@gmail.com"><i class='bx bx-envelope bx-tada' ></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 member3_1 member">
                                <div class="row m0">
                                    <div class="row m0 memImg">
                                        <img src="images/AST CEO.png" alt="" width="100%" height="100%">
                                    </div>
                                    <div class="row m0 memberIntro">
                                        <div class="row m0 name">Mrs Elizabeth Sedi</div>
                                        <div class="row m0 pro">Director/Secretary</div>
                                        <div class="row m0">
                                            <ul class="list-inline memberSocial">
                                                <li><a href="tel:+2348035137265"><i class='bx bxl-whatsapp bx-flip-vertical bx-tada' ></i></a></li>
                                                <li><a href="mailto:lizsamsedi@gmail.com"><i class='bx bx-envelope bx-tada' ></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 member3_1 member">
                                <div class="row m0">
                                    <div class="row m0 memImg">
                                        <img src="images/SPM.png" alt="" width="100%" height="100%">
                                    </div>
                                    <div class="row m0 memberIntro">
                                        <div class="row m0 name">Odjirigho John Lewis</div>
                                        <div class="row m0 pro">Site/Project Manager </div>
                                        <div class="row m0">
                                            <ul class="list-inline memberSocial">
                                                <li><a href="tel:+2348109755858"><i class='bx bxl-whatsapp bx-flip-vertical bx-tada' ></i></a></li>
                                                <li><a href="mailto:lewisojl@yahoo.com"><i class='bx bx-envelope bx-tada' ></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row partnersSlide">
                        <h2>Partners</h2>
                        <div class="owl-carousel partnerSlider">
                            <div class="item"><img src="images/partner1.png" alt=""></div>
                            <div class="item"><img src="images/partner1.png" alt=""></div>
                            <div class="item"><img src="images/partner1.png" alt=""></div>
                            <div class="item"><img src="images/partner1.png" alt=""></div>
                            <div class="item"><img src="images/partner1.png" alt=""></div>
                        </div>
                    </div>
                </div>
                <aside class="col-sm-3 sidebar">
                    <div class="row m0 recentPostWidget widgetS">
                        <h4>Recent Posts</h4>
                        <div class="row m0 recentblogs">
                            <div class="media recentblog">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="images/tank 1.png" alt="">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="#"><h5 class="media-heading">Newly built and customized tank</h5></a>
                                </div>
                            </div>
                            <div class="media recentblog">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="images/road 11.png" alt="">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="#"><h5 class="media-heading">Clean and well constructed road</h5></a>
                                </div>
                            </div>
                            <div class="media recentblog">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="images/drain 11.png" alt="">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="#"><h5 class="media-heading">Neat and functional drainage system</h5></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row m0 contactWidget widgetS">
                        <h4>Contact us</h4>
                        <ul class="list-unstyled">
                            <li><a href="tel:+2348035633236"><i class='bx bxl-whatsapp bx-flip-vertical bx-tada' ></i>08035633236</a></li>
                            <li><a href="mailto:nicholassedi@gmail.com"><i class='bx bx-envelope bx-tada' ></i> nicholassedi@gmail.com </a></li>
                            <li><i class='bx bx-home-circle bx-tada' ></i> N02 Bob Oshodin Street Off Akhionbara GRA Benin City</li>
                      <h4>Quote</h4>
                        <p>
                        Building your vision, creating reality.<br><br>This concise quote captures the essence of a construction company's mission to turn clients' dreams into tangible structures
                        </p>        </ul>
                    </div>
                    <div class="row m0 textWidget widgetS">
                  
                    </div>
                </aside>
            </div>            
        </div>
    </section>
    
    <?php 
        require "footer\Footer.php";
   ?>