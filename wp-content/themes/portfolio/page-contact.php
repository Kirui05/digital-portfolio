<?php
/*
Template Name: Contact Page
*/
?>

<?php
// Form validation
$name = $email = $message = '';
$nameError = $emailError = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        if (empty($name)) {
            $nameError = 'Name is required';
        }
    }

    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        if (empty($email)) {
            $emailError = 'Email is required';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = 'Invalid email format';
        }
    }

    if (isset($_POST['message'])) {
        $message = $_POST['message'];
    }

    // If all fields are valid, you can proceed with further actions
    if (empty($nameError) && empty($emailError)) {
        // Process the form data or send an email
        // Your code goes here
    }
}
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
                            <label for="name">Name</label>
                            <div class="icons1">
                                <ion-icon name="person-outline"></ion-icon>
                                <input type="text" placeholder="Enter your name" name="name" id="name" required
                                    value="<?php echo htmlspecialchars($name); ?>">
                            </div>
                            <span class="error"><?php echo $nameError; ?></span>
                        </div>

                        <div class="input1">
                            <label for="email">Email address</label>
                            <div class="icons1">
                                <ion-icon name="mail-outline"></ion-icon>
                                <input type="text" placeholder="Enter email address" name="email" id="email"
                                    required value="<?php echo htmlspecialchars($email); ?>">
                            </div>
                            <span class="error"><?php echo $emailError; ?></span>
                        </div>

                        <div class="input1">
                            <label for="message">Message</label>
                            <div class="icons1">
                                <textarea name="message" placeholder="Enter your message" id="message" cols="74"
                                    rows="2"
                                    style="border: 1px solid #b8b6b6;resize: none;border-radius: 0.375em 0.375em 0.375em 0.375em;background-color:#fff"><?php echo htmlspecialchars($message); ?></textarea>
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
    .error {
        color: red;
    }
</style>

<?php get_footer() ?>