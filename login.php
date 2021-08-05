<?php 
    include('path.php');
    include(APPROOT . '/app/controllers/users.php');

    guestsOnly();

    include(APPROOT . '/app/includes/head.php'); 
?>
    <div class="container-self">
        <?php include(APPROOT . '/app/includes/blogLoginNav.php'); ?>

        <header class="login-container">
            <h1 class="font-property">Sign In</h1>
            <?php include(APPROOT . '/app/includes/secondaryDivider.php'); ?>
            <form action="login.php" method ="post">
                <?php include(APPROOT . '/app/helpers/formErrors.php'); ?>
                <input type="text" placeholder="Username" value="<?php echo $username; ?>" name="username">
                <div class="field">
                    <input type="password" placeholder="Password" value="<?php echo $password; ?>" name="password" id="login-pass">
                    <i class="fas fa-eye show-hide" onclick="loginShowPassword()"></i>
                </div>
                <button id="submit" type="submit" name="login-btn">Sign in</button>
                <p class="options">
                    Not Registered Yet? 
                    <a href="<?php echo URLROOT; ?>/register.php">
                        Create an Account!
                    </a>
                </p>
            </form>
        </header>

        <?php include(APPROOT . '/app/includes/footer.php'); ?>
    </div>
<script src="<?php echo URLROOT . '/assets/javascript/showPassword.js' ?>"></script>
<?php include(APPROOT . '/app/includes/end.php'); ?>