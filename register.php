<?php 
    include('path.php');
    include(APPROOT . '/app/controllers/users.php');

    guestsOnly();

    $pageTitle = "Cindy's Life - Register";
    include(APPROOT . '/app/includes/head.php');
?>
    <div class="container-self">
        <?php include(APPROOT . '/app/includes/blogLoginNav.php'); ?>

        <div class="container">
            <header class="login-container">
                <h1 class="font-property">Register</h1>
                <?php include(APPROOT . '/app/includes/secondaryDivider.php'); ?>
                <form action="register.php" method ="post">
                    <?php include(APPROOT . '/app/helpers/formErrors.php'); ?>
                    <input type="text" placeholder="Username" value="<?php echo $username; ?>" name="username">
                    <input type="email" placeholder="Email" value="<?php echo $email; ?>" name="email">
                    <div class="field">
                        <input type="password" placeholder="Password" value="<?php echo $password; ?>" name="password" id="pass">
                        <span onclick="showPassword()">Show</span>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Confirm Password" value="<?php echo $confirmPassword; ?>" name="confirmPassword" id="conf-pass">
                    </div>
                    <button type="submit" value="submit" name="register-btn">Sign in</button>
                    <p class="options">
                        Already Have an Account
                        <a href="<?php echo URLROOT; ?>/login.php">
                            Let's Sign In
                        </a>
                    </p>
                </form>
            </header>
        </div>

        <?php include(APPROOT . '/app/includes/footer.php'); ?>
    </div>
<script src="<?php echo URLROOT . '/assets/javascript/showPassword.js' ?>"></script>
<?php include(APPROOT . '/app/includes/blogEnd.php'); ?>