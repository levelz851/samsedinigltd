<?php 
    session_start();
    require "header\header.php";
    define("IMG_PATH" , "images/");

?>
    <section id="pageCover" class="row blogPage">        
        <div class="row pageTitle">News</div>
        <div class="row pageBreadcrumbs">
            <ol class="breadcrumb">
              <li><a href="index-2.php">home</a></li>
              <li class="active">news</li>
            </ol>
        </div>
    </section>
    
    <section id="blogs" class="row">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="row">
                        <div class="row blog sinlge-blog">
                            <div class="row m0 blogInner">
                                <div class="row m0 blogDateTime">
                                    <i class="fa fa-calendar"></i> 14 November 2017, 10:50 AM
                                </div>
                                <div class="row m0 featureImg">
                                    <a href="single-post.php">
                                        <?php echo '<img src="'.IMG_PATH .$_SESSION["image_name"].'" alt="Faceted Search Has Landed" class="img-responsive">'?>
                                    </a>
                                </div>
                                <?php 
                                echo '

                                <div class="row m0 postExcerpts">
                                    <div class="row m0 postExcerptInner">
                                        <a href="single-post.php" class="postTitle row m0"><h4>'. $_SESSION['title'] .'</h4></a>
                                        <p>'. $_SESSION['about'] .'</p>
                                    </div>
                                </div>
                                ';
                                ?>
                            
                            </div>
                        </div>  
                        <div class="row comments">
                            <h3 class="commentsCount">8 Comments</h3>
                            <div class="commentDisplay row m0">
                                <div class="media row m0 comment">
                                    <div class="media-left avatar">
                                        <a href="#">
                                            <img src="images/blog/avatar.png" alt="" class="media-object img-responsive">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="row m0 commenterNtime"><a href="#">ShaneFreer</a>58 minutes ago </div>
                                        <div class="commentTexts row m0">great post!</div>
                                    </div>
                                </div>
                                <div class="row m0 commentreply1 commentreply comment media">
                                    <div class="media-left replyindicator">
                                        <a href="#">
                                            <img src="images/blog/replyIndicator.png" alt="" class="media-object img-responsive">
                                        </a>
                                    </div>
                                    <div class="media-left avatar">
                                        <a href="#">
                                            <img src="images/blog/avatar.png" alt="" class="media-object img-responsive">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="row m0 commenterNtime"><a href="#">Collis Ta'eed</a>42 minutes ago </div>
                                        <div class="commentTexts row m0">yeah i really like it too, very useful!</div>
                                    </div>
                                </div> <!--Reply-->
                                <div class="row m0 commentreply2 commentreply comment media">
                                    <div class="media-left replyindicator">
                                        <a href="#">
                                            <img src="images/blog/replyIndicator.png" alt="" class="media-object img-responsive">
                                        </a>
                                    </div>
                                    <div class="media-left avatar">
                                        <a href="#">
                                            <img src="images/blog/avatar.png" alt="" class="media-object img-responsive">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="row m0 commenterNtime"><a href="#">jremick</a>22 minutes ago </div>
                                        <div class="commentTexts row m0">i found this post very useful too, the comment form works just perfect, keep it up guys :) </div>
                                    </div>
                                </div> <!--Reply-->
                                <div class="row m0 commentreply3 commentreply comment media">
                                    <div class="media-left replyindicator">
                                        <a href="#">
                                            <img src="images/blog/replyIndicator.png" alt="" class="media-object img-responsive">
                                        </a>
                                    </div>
                                    <div class="media-left avatar">
                                        <a href="#">
                                            <img src="images/blog/avatar.png" alt="" class="media-object img-responsive">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="row m0 commenterNtime"><a href="#">joshjanssen</a>22 minutes ago </div>
                                        <div class="commentTexts row m0">yep, especially when it comes to comment testing</div>
                                    </div>
                                </div> <!--Reply-->
                                <div class="row m0 commentreply2 commentreply comment media">
                                    <div class="media-left replyindicator">
                                        <a href="#">
                                            <img src="images/blog/replyIndicator.png" alt="" class="media-object img-responsive">
                                        </a>
                                    </div>
                                    <div class="media-left avatar">
                                        <a href="#">
                                            <img src="images/blog/avatar.png" alt="" class="media-object img-responsive">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="row m0 commenterNtime"><a href="#">stewboon</a>22 minutes ago </div>
                                        <div class="commentTexts row m0">nice job!</div>
                                    </div>
                                </div> <!--Reply-->
                                <div class="row m0 commentreply1 commentreply comment media">
                                    <div class="media-left replyindicator">
                                        <a href="#">
                                            <img src="images/blog/replyIndicator.png" alt="" class="media-object img-responsive">
                                        </a>
                                    </div>
                                    <div class="media-left avatar">
                                        <a href="#">
                                            <img src="images/blog/avatar.png" alt="" class="media-object img-responsive">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="row m0 commenterNtime"><a href="#">bensmithett</a>42 minutes ago </div>
                                        <div class="commentTexts row m0">couldn't be better :D</div>
                                    </div>
                                </div> <!--Reply-->
                                <div class="media row m0 comment">
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/blog/avatar.png" alt="" class="media-object img-responsive">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="row m0 commenterNtime"><a href="#">justinfrench</a>48 minutes ago </div>
                                        <div class="commentTexts row m0">looks very promising</div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                        <div class="row commentForm">
                            <h3>Leave a Comment</h3>
                            <form action="#" class="row m0">
                                <div class="col-sm-6 p0 commenterInfoInputs">
                                    <div class="row m0">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="text" class="form-control" placeholder="Name">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input type="email" class="form-control" placeholder="e-mail">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-link"></i></span>
                                            <input type="url" class="form-control" placeholder="website">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 p0">
                                    <div class="row m0">                                        
                                        <div class="input-group">
                                            <textarea  placeholder="Message" class="form-control"></textarea>
                                        </div>
                                        <button class="btn btn-default" type="submit">post a comment</button>
                                    </div>
                                </div>
                            </form>
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
                        </ul>
                    </div>
                    <div class="row m0 textWidget widgetS">
                        <h4>Quote</h4>
                        <p>
                        Building your vision, creating reality.<br><br>This concise quote captures the essence of a construction company's mission to turn clients' dreams into tangible structures
                        </p>
                    </div>
                </aside>
            </div>            
        </div>
    </section>
    
    <?php 
   require "footer\Footer.php";
   ?>
    
    
    <!--jQuery, Bootstrap and other vendor JS-->
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <script src="vendors/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="vendors/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="vendors/owl.carousel/js/owl.carousel.min.js"></script>
    <script src="vendors/nicescroll/jquery.nicescroll.js"></script>
    
    <script src="vendors/js-flickr-gallery/js/js-flickr-gallery.min.js"></script>
    <script src="vendors/lightbox/js/lightbox.min.js"></script>
    
    <!--Construction JS-->
    <script src="js/construction.js"></script>
</body>

</html>