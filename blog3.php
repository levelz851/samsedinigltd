<?php 
    session_start();
    require "header\header.php";
    require "connection\connection.php";


?>
    
    <section id="pageCover" class="row blogPage">
        
        <div class="row pageTitle">News</div>
        <div class="row pageBreadcrumbs">
            <ol class="breadcrumb">
              <li><a href="index-2.html">home</a></li>
              <li class="active">news</li>
            </ol>
        </div>
    </section>
    
    <section id="blogs" class="row">
        <div class="container">
            <div class="row">
                <?php 


                define("IMG_PATH" , "images/") ;
                // $query = 'SELECT * FROM latest_post ORDER BY RAND() LIMIT 3';
                $query = 'SELECT * FROM latest_post ORDER BY RAND()';
                $result= $mysqli->query($query);
                if($result->num_rows > 0){
                    while( $rows = $result->fetch_assoc()){

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
            <div class="row paginationRow m0">
                <div class="paginationInner m0 row">
               
                </div>
            </div>
        </div>
    </section>
    
    <?php 
   require "footer\Footer.php";
   ?>