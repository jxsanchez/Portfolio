<?php 
    $languages = array("HTML", "CSS", "PHP", "JavaScript", "SQL", "C++");
    $technologies = array("Git/GitHub", "REST APIs", "MySQL", "MongoDB", "WordPress");
    $frameworks = array("React.js");
    $libraries = array("jQuery", "Express.js", "Mongoose", "Bootstrap");
    $skills = array("MacOS Terminal", "Windows Terminal", "Full-Stack Web Development", "Agile", "Scrum");

    // Creates a column for each skill category given a title for the column and an array with the list of skills
    function createAboutColumn($title, $dataArr) {
        echo '<div class="col-sm">
                <h3 class="skill-title">'.$title.'</h3>';

        // Display each skill
        foreach($dataArr as $data) {
                echo '<p>'.$data.'</p>';
        }

        echo '</div>';
    }
?>

<section id="about" class="section">
    <h1 class="section-title">A programmer with an Associate in Computer Science.</h1>
    <p>I have been coding since 2016 and developing websites since 2019. I have experience with: </p>

    <div class="skills-wrapper">
        <div class="container">
            <div class="row">
                <?php
                    createAboutColumn("Languages", $languages);
                    createAboutColumn("Technologies", $technologies);
                    createAboutColumn("Frameworks", $frameworks);
                    createAboutColumn("Libraries", $libraries);
                    createAboutColumn("Skills", $skills);
                ?>
            </div>
        </div>
    </div>

    <div class="continue-wrapper">
        <a href="#projects" class="continue-link">Here's what I've made...</a>
        <i class="fa fa-angle-down continue-arrow"></i>
    </div>
</section> <!-- End of About-->

<hr class="section-divider">