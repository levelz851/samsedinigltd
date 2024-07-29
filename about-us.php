<?php 
    require "header\header.php";
    require "connection\connection.php";
    define("IMG_FOLDER" , "images/");

?>
    
    <section id="pageCover" class="row aboutUs">        
        <div class="row pageTitle">Mission Statement</div>
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
                                <h2>Mission Statement</h2>
                                <p>At Samsedi Nigerian Limited, our mission is to deliver exceptional construction services that combine innovation, quality, and sustainability. We are committed to transforming visions into reality through expert craftsmanship, advanced technology, and unwavering integrity. Our goal is to create enduring structures that enhance communities, enrich lives, and contribute to the growth and development of Nigeria. <br><br> We prioritize customer satisfaction, safety, and environmental responsibility, striving to exceed expectations and set new standards in the construction industry. By fostering a culture of continuous improvement, collaboration, and respect, we aim to build a legacy of excellence and trust..</p>
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
                            <div class="row member m0">
                                <div class="row m0">
                                    <div class="textsPart">
                                        <h3>Biography</h3>
                                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. <br><br> Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
                                    </div>
                                    <div class="memImg">
                                        <img src="images\CEO 1.png" alt="" width="100%" height="100%">
                                    </div>
                                </div>
                                <div class="row m0 memberIntro">
                                    <ul class="list-inline memberSocial">
                          
                                        <li><a href="tel:+2348035633236"><i class='bx bxl-whatsapp bx-flip-vertical bx-tada' ></i></a></li>
                                        <li><a href="mailto:nicholassedi@gmail.com"><i class='bx bx-envelope bx-tada' ></i></a></li>
                                    </ul>
                                    <div class="namePro">
                                        <span class="name">Nicholas Samsedi</span> Chief Executive Officer (CEO)
                                    </div>
                                </div>
                            </div>
                            <div class="row member m0">
                                <div class="row m0">
                                    <div class="textsPart">
                                        <h3>Biography</h3>
                                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. <br><br> Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
                                    </div>
                                    <div class="memImg">
                                        <img src="images/AST CEO.png" alt="">
                                    </div>
                                </div>
                                <div class="row m0 memberIntro">
                                    <ul class="list-inline memberSocial">
                                        <li><a href="tel:+2348035137265"><i class='bx bxl-whatsapp bx-flip-vertical bx-tada' ></i></a></li>
                                        <li><a href="mailto:lizsamsedi@gmail.com"><i class='bx bx-envelope bx-tada' ></i></a></li>
                                    </ul>
                                    <div class="namePro">
                                        <span class="name">Mrs Elizabeth Sedi</span> Director/Secretary
                                    </div>
                                </div>
                            </div>
                            <div class="row member m0">
                                <div class="row m0">
                                    <div class="textsPart">
                                        <h3>Biography</h3>
                                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. <br><br> Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
                                    </div>
                                    <div class="memImg">
                                        <img src="images/SPM.png" alt="">
                                    </div>
                                </div>
                                <div class="row m0 memberIntro">
                                    <ul class="list-inline memberSocial">
                                        <li><a href="tel:+2348109755858"><i class='bx bxl-whatsapp bx-flip-vertical bx-tada' ></i></a></li>
                                        <li><a href="mailto:lewisojl@yahoo.com"><i class='bx bx-envelope bx-tada' ></i></a></li>
                                    </ul>
                                    <div class="namePro">
                                        <span class="name">Odjirigho John Lewis</span> Site/Project Manager 
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