<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freshcery - Groceries Organic Store</title>
    <link rel="stylesheet" href="styles.css">
    <?php if (isset($page_specific_css)): ?>
        <link rel="stylesheet" href="<?php echo $page_specific_css; ?>">
    <?php endif; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
</head>

<body>
    <header id="main-header" class="<?php echo (isset($is_homepage) && $is_homepage) ? 'transparent' : ''; ?>">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <a href="index.php">
                        <img src="assets/img/logo/logo.png" alt="Freshcery">
                    </a>
                </div>
                <nav>
                    <ul>
                        <li><a href="shop.php" <?php if (isset($active_page) && $active_page == 'shop') echo 'class="active"'; ?>>Shop</a></li>
                        <li><a href="faq.php" <?php if (isset($active_page) && $active_page == 'faq') echo 'class="active"'; ?>>FAQ</a></li>
                        <li><a href="contact.php" <?php if (isset($active_page) && $active_page == 'contact') echo 'class="active"'; ?>>Contact</a></li>
                        <li><a href="register.php" <?php if (isset($active_page) && $active_page == 'register') echo 'class="active"'; ?>>Register</a></li>
                        <li><a href="login.php" <?php if (isset($active_page) && $active_page == 'login') echo 'class="active"'; ?>>Login</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>