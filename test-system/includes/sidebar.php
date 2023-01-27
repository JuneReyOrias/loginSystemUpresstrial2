<div class="side-bar">
    <div class="logo-details">
        <i class='bx bx-meteor'></i>
        <span class="logo-name">UPRESS</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="../admin/dashboard.php" class="<?php echo $dashboard; ?>">
                <i class='bx bx-grid-alt' ></i>
                <span class="links-name">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="#" class="<?php echo $purchase; ?>">
                <i class='bx bx-archive'></i>
                <span class="links-name">Purchase</span>
            </a>
        </li>
        <li>
            <a href="#" class="<?php echo $order; ?>">
                <i class='bx bx-cart'></i>
                <span class="links-name">Order</span>
            </a>
        </li>
        <li>
        <a href="../programs/programs.php" class="<?php echo $programs; ?>">
                <i class='bx bx-book-reader'></i>
                <span class="links-name">Programs</span>
            </a>
        </li>
        <li>
            <a href="#" class="<?php echo $trackorders; ?>">
                <i class='bx bx-send'></i>
                <span class="links-name">Track Order</span>
            </a>
        </li>
        <li>
            <a href="#" class="<?php echo $settings; ?>">
                <i class='bx bx-cog'></i>
                <span class="links-name">Settings</span>
            </a>
        </li>
       

        <hr class="line">
        
        <li>
        <div class="side-bar">
            <div class=".profile-details">

            <i class='bx bx-user-circle'></i>
            <!-- each time you need to output in PHP, use echo -->
            <!-- the $_SESSION['fullname'] is set in login page -->
            <!-- session variables can be accessed anywhere in the page -->
            <span class="admin-name"><?php echo $_SESSION['fullname']; ?></span>
>
        </div>
        
        <li id="logout-link">
            <a href="../login/logout.php">
                <i class='bx bx-log-out'></i>
                <span class="links-name">Logout</span>
            </a>
        </li>
    </ul>
</div>