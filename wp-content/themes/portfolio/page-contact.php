<?php
/*
Template Name: Contact Page
*/
?>

<?php get_header() ?>

<!-- contact me form -->
<section>
    <div class="main-container">
        <div class="login">
            <div class="logcover">
                <form action="" method="POST">
                    <div class="form">
                        <h2>Contact me</h2>

                        <div class="input1">
                            <label for="">Name</label>
                            <div class="icons1">
                                <ion-icon name="person-outline"></ion-icon>
                                <input type="text" placeholder="Enter your name" name="name" required>
                            </div>
                        </div>
                        <div class="input1">
                            <label for="">Email address</label>
                            <div class="icons1">
                                <ion-icon name="mail-outline"></ion-icon>
                                <input type="text" placeholder="Enter email address" name="email" required>
                            </div>
                        </div>
                        <div class="input1">
                            <label for="">Message</label>
                            <div class="icons1">
                                <textarea name="message" placeholder="Enter your message" id="" cols="74" rows="2" style="border: 1px solid #b8b6b6;resize: none;border-radius: 0.375em 0.375em 0.375em 0.375em;background-color:#fff"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btnlog" name="login-submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>

<style>
    .contact-cover {
        background-color: #fff;
    }
</style>

<?php get_footer() ?>