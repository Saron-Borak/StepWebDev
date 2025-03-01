<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-column">
                <h3>ABOUT</h3>
                <p>Nisi esse dolor irure dolor eiusmod ex deserunt proident cillum eu qui enim occaecat sunt aliqua anim eiusmod qui ut voluptate.</p>
            </div>

            <div class="footer-column">
                <h3>LINKS</h3>
                <ul>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a href="how-it-works.php">How it Works</a></li>
                    <li><a href="terms.php">Terms</a></li>
                    <li><a href="privacy.php">Privacy Policy</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>CONTACT</h3>
                <p><i class="fas fa-phone"></i> 08272367238</p>
                <p><i class="fas fa-envelope"></i> hello@domain.com</p>

                <h3 class="social-heading">FOLLOW US</h3>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="footer-column">
                <h3>GET OUR APP</h3>
                <div class="app-links">
                    <a href="#"><img src="assets/img/playstore.png" alt="Google Play"></a>
                    <div class="app-preview">
                        <img src="assets/img/mockup.png" alt="App Preview">
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="copyright">
        <p>&copy; <?php echo date('Y'); ?> Freshcery | Groceries Organic Store. All rights reserved.</p>
    </div>
</footer>

<script src="scripts.js"></script>
<?php if (isset($page_specific_js)): ?>
    <script src="<?php echo $page_specific_js; ?>"></script>
<?php endif; ?>
</body>

</html>