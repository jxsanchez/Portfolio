<?php 
    include_once "classes/project.class.php";    

    $projectObj = new Project(); // Project object.

    $projects = $projectObj->getProjects(); // Get all projects from database.
?>

<section id="projects" class="section">
    <h1 class="section-title">A few of my projects.</h1>

    <!-- Project Carousel -->
    <div id="projectCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <?php
            foreach($projects as $key => $project) {
                echo '<li data-target="#projectCarousel" data-slide-to="'.$key.'"';

                // Add active class to first project
                echo ($key == 0) ? ' class="active"' : '';

                echo '></li>';
            }
        ?>
        </ol>

        <div class="carousel-inner">
            <?php 
                // Display all projects as carousel items using database information
                foreach($projects as $key => $project) {
                    echo '<div class="carousel-item ';

                    // Add active class to first project
                    echo ($key == 0) ? ' active' : '';       
                    
                    echo '" target="blank">';

                    echo '<img src="'.$project["img_url"].'" class="desktop-only">
                            <img src="'.$project["img_url_m"].'" class="mobile-only-portrait">
                        
                        <div class="carousel-caption">
                            <h5>'.$project["title"].'</h5>
                            <p>'.$project["description"].'</p>
                            
                            <div class="caption-links">';

                    echo ($project["url"] != "none") ? '<a href="'.$project["url"].'" target="blank"><i class="fa fa-external-link"></i></a>' : '';
                    echo ($project["github_url"] != "none") ? '<a href="'.$project["github_url"].'" target="blank"><i class="fa fa-github-alt"></i></a>' : '';
                        
                    echo' </div>
                        </div>
                     </div>';
                }
            ?>
        </div> <!-- end of carousel-inner -->

        <a class="carousel-control-prev" href="#projectCarousel" role="button" data-slide="prev">
            <i class="carousel-control-btn fa fa-angle-left"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#projectCarousel" role="button" data-slide="next">
            <i class="carousel-control-btn fa fa-angle-right"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="continue-wrapper">
        <a href="#contact" class="continue-link">Any questions?</a>
        <i class="fa fa-angle-down continue-arrow"></i>
    </div>
</section> <!-- End of Projects-->

<hr class="section-divider">