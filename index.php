<?php include 'partials/header.php'; ?>

<a href="#top" class="scroll-top">
    <i class="top-arrow fa fa-angle-up"></i>
</a>

<?php 
    include "partials/navigation.php";
    
    include "partials/index/landing.php";

    echo "<hr class='section-divider'>";

    include "partials/index/about.php";

    echo "<hr class='section-divider'>";

    include "partials/index/projects.php";

    echo "<hr class='section-divider'>";

    include "partials/index/contact.php";

    include 'partials/footer.php';
?>