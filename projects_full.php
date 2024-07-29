<?php 
    require "header\header.php";
    require "connection\connection.php";

?>
    
    <section id="pageCover" class="row projectPage">        
        <div class="row pageTitle">Projects</div>
        <div class="row pageBreadcrumbs">
            <ol class="breadcrumb">
              <li><a href="index-2.html">home</a></li>
              <li class="active">projects</li>
            </ol>
        </div>
    </section>
    
    <section id="projectsRow" class="row fullWidth page">
        <div class="row filtersRow m0">
            <button type="button" class="collapsed project_filderButton visible-xs" data-toggle="collapse" data-target="#filters">
                <span class="btn-text"><i class="fa fa-filter"></i> Project Filter</span>
            </button>
            <ul class="list-inline text-center collapse navbar-collapse filters" id="filters">
                <li class="active" data-filter="*"><i class="fa fa-th"></i>Show All</li>
                <li data-filter=".equipment">Equipmants</li>
                <li data-filter=".road">Roads</li>
                <li data-filter=".drains">Drainages</li>
                <li data-filter=".houses">Houses</li>
                <li data-filter=".projects">Projects</li>



            </ul>
        </div>


        <div class="row projects m0" id="container">

        <?php 
        define("IMG_FOLDER" , "images/");
        $query = "SELECT * FROM projects ORDER BY RAND()";
        $result = $mysqli->query($query);                                                               
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $row["project_name"];
                $row["project_image"];
                $row["project_category"];


                echo '

                    <div class="project ' .  $row["project_category"] . '">
                    <a href="' .IMG_FOLDER .  $row["project_image"] . '" data-lightbox="project" data-title="Central Hospital (building)">
                        <img src="' .IMG_FOLDER .  $row["project_image"] . '" alt="Project 1" class="projectImg">
                    </a>
                    <div class="projectDetails row m0">
                        <div class="fleft nameType">
                            <div class="row m0 projectName">Samsedi Nigerian Limited</div>
                            <div class="row m0 projectType">Constriction</div>
                        </div>
                        <div class="fright projectIcons btn-group" role="group">
                            <a href="' .IMG_FOLDER .  $row["project_image"] . '" data-lightbox="project" data-title="Central Hospital (building)" class="btn btn-default"><i class="fa fa-search"></i></a>
                            <a href="#" class="btn btn-default"><i class="fa fa-file-o"></i></a>
                        </div>
                    </div>
                </div> 
                    
                ';


            }
            echo "</br>";


        }
        
        ?>

      
        
            <br>
        <!-- <div class="row paginationRow m0">
            <div class="paginationInner m0 row">
                <ul class="pagination">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                </ul>
            </div>
        </div> -->
    </section> <!--Projects-->    
    
    <?php 
   require "footer\Footer.php";
   ?>