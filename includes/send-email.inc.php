<?php 
    // Send email from contact form
    if(isset($_POST["email-submit"])) {
        $headers = array("From: ".$_POST["email"]."", "Reply-To: jxasanchez@gmail.com", "X-Mailer: PHP/".phpversion());

        $headers = implode("\r\n", $headers);
        
        if(!mail("jxasanchez@gmail.com", $_POST["subject"], $_POST["message"], $headers)) {
            // Redirect to home and show failure message
            header("Location:../?failed#contact");
        } else {
            // Redirect to home and show success message
            header("Location:../?sent#contact");
        }
    }
?>