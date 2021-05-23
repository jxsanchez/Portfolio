<section id="contact" class="section">
    <h1 class="section-title">Please don't hesitate to contact me!</h1>

    <form action="includes/send-email.inc.php" method="POST" id="contact-form" name="email-form" required>
        <input class="contact-email" type="email" name="email" placeholder="Your E-mail" required>
        <input class="contact-subject" type="text" name="subject" placeholder="Subject" required>
        <textarea class="contact-msg" name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>

        <button class="contact-submit" name="email-submit">
            <i class="fa fa-envelope"></i>
        </button>
        <?php
            if(isset($_GET["sent"])) {
                echo '<p class="success">Your message has been received.</p>';
            } else if(isset($_GET["failed"])) {
                echo '<p class="failure">Your message failed to send.</p>';
            }
        ?>
    </form>
</section> <!-- End of Contact-->