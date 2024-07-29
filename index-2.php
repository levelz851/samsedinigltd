<?php 
    session_start();
    require "header\header.php";
    require "connection\connection.php";

?>

<style>
/* .innerRow img{
    width:70px; 
    height:auto;
    display: flex;  
    border:2px solid red;
    top: 15px;
    left: 10px;
    margin-left: 70px;
    margin-top: 30px;
    /* position: relative; */


} */

/* .innerRow i{
    width:70px; 
    height:auto;
    display: block;  
    border:2px solid red;
    /* top: 15px;
    left: 10px;
    margin-left: 70px;
    margin-top: 30px; */
    /* position: relative; */


}

</style>
    
    <section id="nr_slider" class="row">
        <div class="mainSliderContainer">
            <div class="mainSlider" >
                <ul>
                    <!-- SLIDE  -->
                    <li data-transition="boxslide" data-slotamount="7" >
                       <img src="images/slider/slide1.png" alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                       <div class="caption sfr str"  
                           data-x="center" 
                           data-y="140" 
                           data-speed="700"  
                           data-start="1700" 
                           data-easing="easeOutBack">
                            <h2>We Are A <strong>Construction</strong> Company</h2>
                       </div>
                       <div class="caption sfl stl"  
                           data-x="center" 
                           data-y="225" 
                           data-speed="500" 
                           data-start="1900" 
                           data-easing="easeOutBack">
                            <div class="cont-row">from small <span class="bb3">houses</span> to big <span class="bb1">buildings</span></div>
                       </div>
                       <div class="caption skewfromleft skewtoleft"  
                           data-x="center" 
                           data-y="310"
                           data-hoffset="-176" 
                           data-speed="500" 
                           data-start="1900" 
                           data-easing="easeOutBack"><div class="ico_box"><img src="images/slider/ico1.png" alt="brifcase"></div>
                       </div>
                       <div class="caption sfb stb"  
                           data-x="center" 
                           data-y="310" 
                           data-hoffset="0"
                           data-speed="500" 
                           data-start="1900" 
                           data-easing="easeOutBack"><div class="ico_box"><img src="images/slider/ico2.png" alt="brifcase"></div>
                       </div>
                       <div class="caption skewfromright skewtoright"  
                           data-x="center" 
                           data-y="310" 
                           data-hoffset="176"
                           data-speed="500" 
                           data-start="1900" 
                           data-easing="easeOutBack"><div class="ico_box"><img src="images/slider/ico3.png" alt="brifcase"></div>
                       </div>                       
                    </li>  
                    <!-- SLIDE 2 -->
                    <li data-transition="boxslide" data-slotamount="7" >
                       <img src="images/slider/slide2.png" alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                       <div class="caption sfr str"  
                           data-x="-100" 
                           data-y="135" 
                           data-speed="700"  
                           data-start="1700" 
                           data-easing="easeOutBack">
                            <h3><strong>Building Dreams,</strong> Creating Realities</h3>
                       </div>
                       <div class="caption sfl stl"  
                           data-x="-100" 
                           data-y="190" 
                           data-speed="500" 
                           data-start="1900" 
                           data-easing="easeOutBack">
                            <h4>Innovative <strong>Solutions for </strong> Modern Construction</h4>
                       </div>
                       <div class="caption skewfromleft skewtoleft"  
                           data-x="-100" 
                           data-y="265"
                           data-hoffset="-176" 
                           data-speed="500" 
                           data-start="1900" 
                           data-easing="easeOutBack">
                           <p>Quality Construction,<br> Trusted Service<br></p>
                       </div>
                       <div class="caption sfb stb"  
                           data-x="-100" 
                           data-y="375" 
                           data-hoffset="0"
                           data-speed="500" 
                           data-start="1900" 
                           data-easing="easeOutBack">
                           <a href="contact2.php" type="button" class="btn btn-default">Contact Us</a>
                       </div>
                       <div class="caption skewfromright skewtoright"  
                           data-x="right" 
                           data-y="130" 
                           data-hoffset="176"
                           data-speed="500" 
                           data-start="1900" 
                           data-easing="easeOutBack"><div class="tools"><img src="images/slider/construction_tools.png" alt="brifcase"></div>
                       </div>                      
                    </li>  
                    <!-- SLIDE 3 -->
                    <li data-transition="boxslide" data-slotamount="7" >
                       <img src="images/slider/slide3.png" alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                       <div class="caption sfr str"  
                           data-x="-100" 
                           data-y="135" 
                           data-speed="700"  
                           data-start="1700" 
                           data-easing="easeOutBack">
                            <h3><strong>Your Vision, </strong> Our Expertise</h3>
                       </div>
                       <div class="caption sfl stl"  
                           data-x="-100" 
                           data-y="190" 
                           data-speed="500" 
                           data-start="1900" 
                           data-easing="easeOutBack">
                            <h4>Constructing with <strong> Precision and Passion</strong></h4>
                       </div>
                       <div class="caption skewfromleft skewtoleft"  
                           data-x="-100" 
                           data-y="265"
                           data-hoffset="-176" 
                           data-speed="500" 
                           data-start="1900" 
                           data-easing="easeOutBack">
                           <p>At Samsedi Nigerian Limited, we transform visions into reality<br> with expertise in sustainable construction. From residential to </p>
                       </div>
                       <div class="caption sfb stb"  
                           data-x="-100" 
                           data-y="375" 
                           data-hoffset="0"
                           data-speed="500" 
                           data-start="1900" 
                           data-easing="easeOutBack">
                           <a href="about-us2.php" type="button" class="btn btn-default">Learn More</a>
                       </div>
                       <div class="caption skewfromright skewtoright"  
                           data-x="right" 
                           data-y="0"
                           data-hoffset="176"
                           data-speed="500" 
                           data-start="1900" 
                           data-easing="easeOutBack"><div class="sketch"><img src="images/slider/sketch.png" alt="brifcase"></div>
                       </div>                       
                    </li>                          
                </ul>
            </div>
        </div>
        
        <div class="container sliderAfterTriangle"> </div> <!--Triangle After Slider-->
    </section> <!--Slider-->
    
    <section id="nr_services" class="row">
        <div class="container">
            <div class="row sectionTitles">
                <h2 class="sectionTitle">Our Services</h2>
                <div class="sectionSubTitle">what we offer</div>
            </div>
            <div class="row m0 text-center">
                <div class="col-sm-3">
                    <div class="row m0 service">
                        <div class="row m0 innerRow">
                            <i class='fa bx bx-building-house'></i>
                            <div class="serviceName" data-hover="Architecture Plans"><p>Architecture Plans</p></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row m0 service">
                        <div class="row m0 innerRow">
                            <!-- <i class="fa fa-film"></i> -->
                            <i class='fa bx bx-hard-hat'></i>
                            <div class="serviceName" data-hover="Construction Designs"><p>Construction Designs</p></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row m0 service">
                        <div class="row m0 innerRow">
                            <i class='fa bx bx-timer'></i>
                            <div class="serviceName" data-hover="Fast Building"><p>Fast Building</p></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row m0 service">
                        <div class="row m0 innerRow">
                            <i class='fa bx bxs-city'></i>
                            <div class="serviceName" data-hover="House Rebuilding"><p>House Rebuilding</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!--Services-->
    
    <section id="projectsRow" class="row fullWidth">
        <div class="row sectionTitles m0">
            <h2 class="sectionTitle">Our Projects</h2>
            <div class="sectionSubTitle">latest works</div>
        </div>
        <div class="row filtersRow m0">
            <button type="button" class="collapsed project_filderButton visible-xs" data-toggle="collapse" data-target="#filters">
                <span class="btn-text"><i class='fa bx bx-filter'></i>Project Filter</span>
            </button>
            <ul class="list-inline text-center collapse navbar-collapse filters" id="filters">
                <li class="active" data-filter="*"><i class="fa fa-th"></i>Show All</li>
                <li data-filter=".equipment">Equipmants</li>
                <li data-filter=".roads">Roads</li>
                <li data-filter=".drains">Drainages</li>
    
            </ul>
        </div>
        <div class="row projects m0" id="container">
            <!-- roads -->
            <div class="project roads">
                <a href="images/road 1.png" data-lightbox="project" data-title="Central Hospital (building)">
                    <img src="images/road 1.png" alt="Project 1" class="projectImg">
                </a>
                <div class="projectDetails row m0">
                    <div class="fleft nameType">
                        <div class="row m0 projectName">Construction Site</div>
                        <div class="row m0 projectType">building</div>
                    </div>

                    <div class="fright projectIcons btn-group" role="group">
                        <a href="images/road 1.png" data-lightbox="project" data-title="Construction CEO (ceo, architect)" class="btn btn-default"><i class="fa fa-search"></i></a>
                        <a href="#" class="btn btn-default"><i class="fa fa-file-o"></i></a>
                    </div>
                </div>
            </div>

            <div class="project roads">
                <a href="images/road 2.png" data-lightbox="project" data-title="Central Hospital (building)">
                    <img src="images/road 2.png" alt="Project 1" class="projectImg">
                </a>
                <div class="projectDetails row m0">
                    <div class="fleft nameType">
                        <div class="row m0 projectName">Construction Site</div>
                        <div class="row m0 projectType">building</div>
                    </div>

                    <div class="fright projectIcons btn-group" role="group">
                        <a href="images/road 2.png" data-lightbox="project" data-title="Construction CEO (ceo, architect)" class="btn btn-default"><i class="fa fa-search"></i></a>
                        <a href="#" class="btn btn-default"><i class="fa fa-file-o"></i></a>
                    </div>
            
                </div>
            </div>

            <div class="project roads">
                <a href="images/road 3.png" data-lightbox="project" data-title="Central Hospital (building)">
                    <img src="images/road 3.png" alt="Project 1" class="projectImg">
                </a>
                <div class="projectDetails row m0">
                    <div class="fleft nameType">
                        <div class="row m0 projectName">Construction Site</div>
                        <div class="row m0 projectType">building</div>
                    </div>

                    <div class="fright projectIcons btn-group" role="group">
                        <a href="images/road 3.png" data-lightbox="project" data-title="Construction CEO (ceo, architect)" class="btn btn-default"><i class="fa fa-search"></i></a>
                        <a href="#" class="btn btn-default"><i class="fa fa-file-o"></i></a>
                    </div>
             
                </div>
            </div>

            <!-- end of roads -->

            <!-- equipment -->
            <div class="project equipment">
                <a href="images\tryer.png" data-lightbox="project" data-title="Construction CEO (ceo, architect)">
                    <img src="images\tryer.png" alt="Project 1" class="projectImg">
                </a>
                <div class="projectDetails row m0">
                    <div class="fleft nameType">
                        <div class="row m0 projectName">Construction CEO</div>
                        <div class="row m0 projectType">ceo, architect</div>
                    </div>
                    <div class="fright projectIcons btn-group" role="group">
                        <a href="images\tryer.png" data-lightbox="project" data-title="Construction CEO (ceo, architect)" class="btn btn-default"><i class="fa fa-search"></i></a>
                        <a href="#" class="btn btn-default"><i class="fa fa-file-o"></i></a>
                    </div>
                </div>
            </div>

            <div class="project equipment">
                <a href="images\tools 4.png" data-lightbox="project" data-title="Construction CEO (ceo, architect)">
                    <img src="images\tools 4.png" alt="Project 1" class="projectImg">
                </a>
                <div class="projectDetails row m0">
                    <div class="fleft nameType">
                        <div class="row m0 projectName">Construction CEO</div>
                        <div class="row m0 projectType">ceo, architect</div>
                    </div>
                    <div class="fright projectIcons btn-group" role="group">
                        <a href="images/tools 4.png" data-lightbox="project" data-title="Construction CEO (ceo, architect)" class="btn btn-default"><i class="fa fa-search"></i></a>
                        <a href="#" class="btn btn-default"><i class="fa fa-file-o"></i></a>
                    </div>
                </div>
            </div>

            <div class="project equipment">
                <a href="images\tools 6.png" data-lightbox="project" data-title="Construction CEO (ceo, architect)">
                    <img src="images\tools 6.png" alt="Project 1" class="projectImg">
                </a>
                <div class="projectDetails row m0">
                    <div class="fleft nameType">
                        <div class="row m0 projectName">Construction CEO</div>
                        <div class="row m0 projectType">ceo, architect</div>
                    </div>
                    <div class="fright projectIcons btn-group" role="group">
                        <a href="images/tools 6.png" data-lightbox="project" data-title="Construction CEO (ceo, architect)" class="btn btn-default"><i class="fa fa-search"></i></a>
                        <a href="#" class="btn btn-default"><i class="fa fa-file-o"></i></a>
                    </div>
                </div>
            </div>

            <!-- end of equipment -->

            <!-- drainages -->
            <div class="project drains">
                <a href="images/drain 4.png" data-lightbox="project" data-title="Workder Accessories (tools, accessories)">
                    <img src="images\drain 4.png" alt="Project 1" class="projectImg">
                </a>
                <div class="projectDetails row m0">
                    <div class="fleft nameType">
                        <div class="row m0 projectName">Workder Accessories</div>
                        <div class="row m0 projectType">tools, accessories</div>
                    </div>

                    <div class="fright projectIcons btn-group" role="group">
                        <a href="images/drain 4.png" data-lightbox="project" data-title="Construction CEO (ceo, architect)" class="btn btn-default"><i class="fa fa-search"></i></a>
                        <a href="#" class="btn btn-default"><i class="fa fa-file-o"></i></a>
                    </div>
                </div>
            </div>

            <div class="project drains">
                <a href="images/drain 11.png" data-lightbox="project" data-title="Workder Accessories (tools, accessories)">
                    <img src="images\drain 11.png" alt="Project 1" class="projectImg">
                </a>
                <div class="projectDetails row m0">
                    <div class="fleft nameType">
                        <div class="row m0 projectName">Workder Accessories</div>
                        <div class="row m0 projectType">tools, accessories</div>
                    </div>

                    <div class="fright projectIcons btn-group" role="group">
                        <a href="images/drain 11.png" data-lightbox="project" data-title="Construction CEO (ceo, architect)" class="btn btn-default"><i class="fa fa-search"></i></a>
                        <a href="#" class="btn btn-default"><i class="fa fa-file-o"></i></a>
                    </div>
                </div>
            </div>


            <div class="project drains">
                <a href="images/drain 8.png" data-lightbox="project" data-title="Workder Accessories (tools, accessories)">
                    <img src="images/drain 8.png" alt="Project 1" class="projectImg">
                </a>
                <div class="projectDetails row m0">
                    <div class="fleft nameType">
                        <div class="row m0 projectName">Workder Accessories</div>
                        <div class="row m0 projectType">tools, accessories</div>
                    </div>

                    <div class="fright projectIcons btn-group" role="group">
                        <a href="images/drain 8.png" data-lightbox="project" data-title="Construction CEO (ceo, architect)" class="btn btn-default"><i class="fa fa-search"></i></a>
                        <a href="#" class="btn btn-default"><i class="fa fa-file-o"></i></a>
                    </div>
                </div>
            </div>


            <!-- end or dranages -->
      
    </section> <!--Projects-->
    
    <section id="latestPosts" class="row">
        <div class="container">
            <div class="row sectionTitles">
                <h2 class="sectionTitle">Latest Posts</h2>
                <div class="sectionSubTitle">fresh news</div>
            </div>
            <?php 
            // session_start();
            define("IMG_PATH" , "images/") ;
            $query = "SELECT * FROM latest_post ORDER BY RAND() LIMIT 3";
            $result = $mysqli->query($query);
            if($result->num_rows > 0){
                while($rows = $result->fetch_assoc()){
       
                    $image_name = $rows['image_name'];
                    $title = $rows['title'];
                    $about = $rows['about'];
                    $date_created = $rows['date_created']; 


                   $_SESSION["image_name"] =   $image_name;
                   $_SESSION["title"] =   $title;
                   $_SESSION["about"] =   $about;
                   $_SESSION["date_created"] =   $date_created;

                    echo '
                        <div class="col-sm-4 blog">
                            <div class="row m0 blogInner">
                                <div class="row m0 blogDateTime">
                                    <i class="fa fa-calendar"></i> Date: '.$rows['date_created']  .'
                                </div>
                                <div class="row m0 featureImg">
                                    <a href="single-post.php">
                                        <img src="'.IMG_PATH . $rows['image_name'] .'" alt="Faceted Search Has Landed" class="img-responsive">
                                    </a>
                                </div>
                                <div class="row m0 postExcerpts">
                                    <div class="row m0 postExcerptInner">
                                        <a href="single-post.php" class="postTitle row m0"><h4>'.$rows['title'].'</h4></a>
                                        <p>'.$rows['about'] .'</p>
                                        <a href="single-post.php" class="readMore">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ';

                }

            }
            ?>
    
        </div>
    </section> <!--Latest Blog-->
    
    <section id="testimonials" class="row">
        <div class="container">
            <div class="row sectionTitles">
                <h2 class="sectionTitle whiteTC">Latest Posts</h2>
                <div class="sectionSubTitle whiteTC">fresh news</div>
            </div>
            <div class="row">
                <div class="owl-carousel testimonialSlider row m0">
                    <div class="item">
                        <div class="clientPhoto row m0">
                            <img src="images/testimonial/photo.png" alt="">
                        </div>
                        <div class="clientNameTitle row m0">John Smith, CEO at Evanto</div>
                        <div class="arrow row m0">
                            <img src="images/testimonial/arrow.png" alt="arrow down">
                        </div>
                        <div class="testimonial row m0">This is Photoshop's version of Lorem Ipsum Proin gravida nibh vel velit auctor aliquet. Aenean Sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,</div>
                    </div>
                    <div class="item">
                        <div class="clientPhoto row m0">
                            <img src="images/testimonial/photo.png" alt="">
                        </div>
                        <div class="clientNameTitle row m0">John Smith, CEO at Evanto</div>
                        <div class="arrow row m0">
                            <img src="images/testimonial/arrow.png" alt="arrow down">
                        </div>
                        <div class="testimonial row m0">This is Photoshop's version of Lorem Ipsum Proin gravida nibh vel velit auctor aliquet. Aenean Sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,</div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!--Testimonials-->
    
    <section id="elements" class="row">
        <div class="row sectionTitles m0">
            <h2 class="sectionTitle"> People Often Ask </h2>
            <div class="sectionSubTitle">Here</div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="panel-group" id="hAccordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#hAccordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        <i class='bx bx-question-mark'></i>What services does Samsedi Nigerian Limited offer?<span class="sign fa"> </span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <div class="fleft icon">
                                        <i class='bx bx-notepad'></i>
                                    </div>
                                    <div class="fleft texts" style="font-style: italic;">
                                    Samsedi Nigerian Limited provides a wide range of construction services including residential and commercial building construction, civil engineering projects, road construction, and infrastructure development. We also offer renovation and remodeling services to update and improve existing structures.
                                    </div>
                                </div>
                            </div>
                        </div> <!--hAccordion No #1--> 
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading2">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#hAccordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                            <i class='bx bx-question-mark'></i>How do you ensure the quality of your construction work? <span class="sign fa"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                                <div class="panel-body">
                                    <div class="fleft icon">
                                        <i class='bx bx-notepad'></i>
                                    </div>
                                    <div class="fleft texts" style="font-style: italic;">
                                    We ensure the quality of our construction work by using high-quality materials, employing skilled professionals, and adhering to strict quality control measures throughout the project. Our team conducts regular inspections and testing to ensure that all aspects of the construction meet our standards
                                    </div>
                                </div>
                            </div>
                        </div> <!--hAccordion No #2--> 
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading3">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#hAccordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        <i class='bx bx-question-mark'></i>How do you handle project changes or unforeseen issues?<span class="sign fa"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                <div class="panel-body">
                                    <div class="fleft icon">
                                        <i class='bx bx-notepad'></i>
                                    </div>
                                    <div class="fleft texts" style="font-style: italic;">
                                    We understand that changes and unforeseen issues can arise during a construction project. We handle these by maintaining open communication with our clients, providing transparent updates, and working together to find solutions. Our goal is to minimize any disruptions and keep the project on track
                                    </div>
                                </div>
                            </div>
                        </div> <!--hAccordion No #3--> 
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading4">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#hAccordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        <i class='bx bx-question-mark'></i>Can I visit the construction site during the project? <span class="sign fa"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                                <div class="panel-body">
                                    <div class="fleft icon">
                                        <i class='bx bx-notepad'></i>
                                    </div>
                                    <div class="fleft texts" style="font-style: italic;">
                                    Yes, clients are welcome to visit the construction site. We believe in maintaining transparency and encourage clients to see the progress of their project. However, for safety reasons, we request that you schedule visits in advance and follow all safety guidelines while on site
                                    </div>
                                </div>
                            </div>
                        </div> <!--hAccordion No #4--> 
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading5">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#hAccordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    <i class='bx bx-question-mark'></i>What safety measures do you implement on construction sites? <span class="sign fa"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                                <div class="panel-body">
                                    <div class="fleft icon">
                                        <i class='bx bx-notepad'></i>
                                    </div>
                                    <div class="fleft texts" style="font-style: italic;">
                                    Safety is a top priority at Samsedi Nigerian Limited. We implement rigorous safety protocols, including regular training for our workers, use of personal protective equipment (PPE), and adherence to all safety regulations. We also conduct regular site inspections to identify and address any potential hazards                                    </div>
                                </div>
                            </div>
                        </div> <!--hAccordion No #5-->                        
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row m0 leftAlignedTap">
                        <ul class="nav nav-tabs" role="tablist" id="myTab">
                            <li role="presentation" class="active"><a href="#h_tab1" aria-controls="h_tab1" role="tab" data-toggle="tab">
                                <i class='bx bx-laptop bx-flashing' ></i>Tech in Construction
                            </a></li>
                            <li role="presentation"><a href="#h_tab2" aria-controls="h_tab2" role="tab" data-toggle="tab">
                                <i class='bx bx-briefcase-alt bx-flashing' ></i> Pro Construction
                            </a></li>
                            <li role="presentation"><a href="#h_tab3" aria-controls="h_tab3" role="tab" data-toggle="tab">
                                <i class='bx bx-home-circle bx-flashing' ></i> Renovation Benefits
                            </a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="h_tab1" style="font-style: italic;">
                                Technology plays a crucial role in modern construction, enhancing efficiency, accuracy, and safety. At Samsedi Nigerian Limited, we leverage cutting-edge technologies such as Building Information Modeling (BIM), drones for site surveys, and advanced project management software. These tools enable us to plan and execute projects with greater precision, monitor progress in real-time, and address potential issues proactively. The integration of technology ensures that our construction processes are streamlined, cost-effective, and of the highest quality.
                            </div>
                            <div role="tabpanel" class="tab-pane" id="h_tab2"style="font-style: italic;">
                                Hiring a professional construction company like Samsedi Nigerian Limited offers numerous benefits, including expertise, reliability, and peace of mind. Our team of experienced professionals brings extensive knowledge and skills to every project, ensuring high-quality workmanship and timely completion. We handle all aspects of construction, from planning and design to execution and finishing, providing a seamless experience for our clients. By choosing a reputable construction company, you can be confident that your project will be managed efficiently, adhere to all standards, and exceed your expectations.                            </div>
                            <div role="tabpanel" class="tab-pane" id="h_tab3" style="font-style: italic;">
                                Renovating your home or office can significantly enhance its functionality, aesthetics, and value. At Samsedi Nigerian Limited, we specialize in renovations that transform spaces to meet your evolving needs and preferences. Whether you're looking to update an outdated design, improve energy efficiency, or expand your living or working area, our team provides expert guidance and quality craftsmanship. Renovations can also address wear and tear, ensuring that your property remains in excellent condition. Investing in renovation is a smart way to revitalize your space and increase its overall appeal and market value.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!--Elements-->
    
    <?php 
   require "footer\Footer.php";
   ?>