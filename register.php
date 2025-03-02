<?php
// Include header
include 'header.php';
?>

<div>
    <link rel="stylesheet" href="register.css">
</div>

<!-- Main content starts here -->
<div class="main-content">
    <!-- Hero section with background image and registration form -->
    <div class="hero-section" style="background-image: url('assets/img/bg-header.jpg');">
        <div class="register-container">
            <h1 class="register-title">REGISTER PAGE</h1>
            <p class="register-subtitle">Save time and leave the groceries to us.</p>

            <?php if (isset($errors) && !empty($errors)): ?>
                <div class="error-container">
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo htmlspecialchars($error); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <div class="register-form-container">
                <form method="POST" action="">
                    <div class="form-group">
                        <input type="text" name="fullName" placeholder="Full Name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="username" placeholder="Username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="confirmPassword" placeholder="Confirm Password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-register">REGISTER</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Main content ends here -->

<?php
// Include footer
include 'footer.php';
?>