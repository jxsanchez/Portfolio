<?php 
    $languages = array("HTML", "CSS", "PHP", "JavaScript", "SQL", "C++");
    $technologies = array("Git/GitHub", "REST APIs", "MySQL", "MongoDB", "WordPress");
    $frameworks = array("React.js");
    $libraries = array("jQuery", "Express.js", "Mongoose", "Bootstrap");
    $skills = array("MacOS Terminal", "Windows Terminal", "Full-Stack Web Development", "Agile", "Scrum");
?>

<section id="about" class="section">
    <h1 class="section-title">A programmer with an Associate in Computer Science.</h1>
    <p>I have been practicing developing websites since 2019. I have experience with: </p>

    <div class="skills-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <h3 class="skill-title">Languages</h3>
                    <?php 
                        foreach($languages as $data) {
                            echo '<p>'.$data.'</p>';
                        }
                    ?>
                </div>

                <div class="col-sm">
                    <h3 class="skill-title">Technologies</h3>
                    <?php 
                        foreach($technologies as $data) {
                            echo '<p>'.$data.'</p>';
                        }
                    ?>
                </div>
                
                <div class="col-sm">
                    <h3 class="skill-title">Frameworks</h3>
                    <?php 
                        foreach($frameworks as $data) {
                            echo '<p>'.$data.'</p>';
                        }
                    ?>
                </div>

                <div class="col-sm">
                    <h3 class="skill-title">Libraries</h3>
                    <?php 
                        foreach($libraries as $data) {
                            echo '<p>'.$data.'</p>';
                        }
                    ?>
                </div>

                <div class="col-sm">
                    <h3 class="skill-title">Skills</h3>
                    <?php 
                        foreach($skills as $data) {
                            echo '<p>'.$data.'</p>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="continue-wrapper">
        <a href="#projects" class="continue-link">Here's what I've made...</a>
        <i class="fa fa-angle-down continue-arrow"></i>
    </div>
</section> <!-- End of About-->