<nav class="navbar">
    <div class="toggle-menu">
        <a href="<?php echo URLROOT; ?>/index.php" class="logo">Cindy's Life</a>
        <button class="nav-toggle">
            <i class="fas fa-bars"></i>
        </button> 
    </div>
    <div class="navigation">
        <ul class="links">
            <a href="<?php echo URLROOT; ?>/index.php">
                <li>Home</li>
            </a>
            <a href="<?php echo URLROOT; ?>/index.php/#tags">
                <li>Tags</li>
            </a>
            <a href="<?php echo URLROOT; ?>/index.php/#about">
                <li>About</li>
            </a>
            <a href="<?php echo URLROOT; ?>/index.php/#contact">
                <li>Contact</li>
            </a>
            <a href="<?php echo URLROOT; ?>/blog.php">
                <li>Blog</li>
            </a>
            <?php if(isset($_SESSION['id'])): ?>
                <a href="#">
                    <li class="dropdown">
                        <a id="dropdown"><?php echo $_SESSION['username']; ?></a>
                            <div class="dropdown-content">
                                <?php if($_SESSION['admin'] === 1): ?>
                                    <a href="<?php echo URLROOT; ?>/#">Admin</a>
                                    <a href="<?php echo URLROOT; ?>/logout.php">Log Out</a>
                                <?php else: ?>
                                    <a href="<?php echo URLROOT; ?>/logout.php">Log Out</a>
                                <?php endif; ?>
                            </div>
                    </li>
            <?php else: ?>
                    <a href="<?php echo URLROOT; ?>/login.php">
                        <li>Login</li>
                    </a>
                </a>
            <?php endif; ?>
        </ul>
    </div>
</nav>