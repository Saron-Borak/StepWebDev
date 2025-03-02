<?php
// Include header
include 'header.php';
?>

<div>
    <link rel="stylesheet" href="login.css">
</div>
<!-- Main content starts here -->
<div class="main-content">

    <!-- Hero section with background image and login -->
    <div class="hero-section" style="background-image: url('assets/img/bg-header.jpg');">
        <div class="login-container">
            <h1 class="login-title">LOGIN PAGE</h1>
            <p class="login-subtitle">Save time and leave the groceries to us.</p>

            <div class="login-form-container">
                <form method="POST" action="">
                    <div class="form-group">
                        <input type="email" name="email" placeholder="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-login">LOG IN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
// Include footer
include 'footer.php';
?>