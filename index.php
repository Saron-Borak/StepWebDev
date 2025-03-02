<?php
// Set page variables
$is_homepage = true;
$active_page = 'home';
$page_specific_css = 'home-styles.css';
$page_specific_js = 'home-scripts.js';

// Include header
include 'header.php';
?>

<div>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="home-styles.css">
</div>

<section class="hero">
    <div class="video-container">
        <video autoplay muted loop id="hero-video">
            <source src="assets/media/explore.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="video-overlay"></div>
    </div>
    <div class="container">
        <div class="hero-content">
            <h1>SAVE TIME AND LEAVE THE GROCERIES TO US.</h1>
            <p>Always Fresh Everyday.</p>

            <div class="process-steps">
                <div class="step">
                    <div class="step-icon">
                        <i class="fas fa-shopping-basket"></i>
                    </div>
                    <h3>BUY</h3>
                    <p>Simply click-to-buy on the product you want and submit your order when you're done.</p>
                </div>

                <div class="step">
                    <div class="step-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>HARVEST</h3>
                    <p>Our team ensures the produce quality is up to our standard and delivers to your door within 24 hours of harvest day.</p>
                </div>

                <div class="step">
                    <div class="step-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3>DELIVERY</h3>
                    <p>Farmers receive your orders two days in advance so they can prepare for harvest exactly as your orders – no wasted produce.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="why-freshcery">
    <div class="container">
        <h2>WHY FRESHCERY</h2>

        <div class="features">
            <div class="feature">
                <div class="feature-icon">
                    <i class="fas fa-leaf"></i>
                </div>
                <h3>STRAIGHT FROM THE FARM</h3>
                <p>Our farm-to-table concept emphasizes on getting the fresh produce directly from local farms to your tables within one day, hence you know you get the freshest produce straight from harvest.</p>
            </div>

            <div class="feature">
                <div class="feature-icon">
                    <i class="fas fa-question"></i>
                </div>
                <h3>KNOW YOUR FARMERS</h3>
                <p>We want you to know exactly who is growing your food by having the farmers profile on each item and farmers page. You're welcome to visit the farms and see the love they put into growing your food.</p>
            </div>

            <div class="feature">
                <div class="feature-icon">
                    <i class="fas fa-smile"></i>
                </div>
                <h3>IMPROVING FARMERS' LIVELIHOOD</h3>
                <p>Slowly but sure, by cutting the complex supply chain and food system, we hope to improve the welfare of farmers by giving them the returns they deserve for their hard work.</p>
            </div>
        </div>

        <div class="cta">
            <a href="shop.php" class="btn btn-primary">SHOP NOW</a>
        </div>
    </div>
</section>

<section class="categories">
    <h2>CATEGORIES</h2>

    <div class="category-grid">
        <?php
        $categories = [
            ['name' => 'VEGETABLES', 'image' => 'assets/img/vegetable.png', 'link' => 'category.php?cat=vegetables'],
            ['name' => 'MEATS', 'image' => 'assets/img/meat.jpg', 'link' => 'category.php?cat=meats'],
            ['name' => 'FISHES', 'image' => 'assets/img/fish.jpg', 'link' => 'category.php?cat=fishes'],
            ['name' => 'FRUITS', 'image' => 'assets/img/fruit.jpg', 'link' => 'category.php?cat=fruits']
        ];

        foreach ($categories as $category) {
            echo '<div class="category-item" style="background-image: url(\'' . $category['image'] . '\');">';
            echo '<a href="' . $category['link'] . '">';
            echo '<span class="category-name">' . $category['name'] . '</span>';
            echo '</a>';
            echo '</div>';
        }
        ?>
    </div>
</section>

<?php
// Include footer
include 'footer.php';
?>