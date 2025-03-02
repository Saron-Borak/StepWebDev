<?php
include 'header.php';
// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST["fullName"] ?? "";
    $email = $_POST["email"] ?? "";
    $message = $_POST["message"] ?? "";

    // Validate form data
    $errors = [];

    if (empty($fullName)) {
        $errors[] = "Full name is required";
    }

    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    if (empty($message)) {
        $errors[] = "Message is required";
    }

    // If no errors, process the form (e.g., send email, save to database)
    if (empty($errors)) {
        // You can add your email sending code here
        // Example: mail("hello@freshcery.com", "Contact Form Submission", $message, "From: $email");

        $success = "Your message has been sent. Thank you!";

        // Clear form data after successful submission
        $fullName = $email = $message = "";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Freshcery</title>
    <!-- Your CSS links would go here -->
    <style>
        /* Basic styling for the contact section */
        .contact-section {
            display: flex;
            flex-wrap: wrap;
            padding: 40px 0;
            max-width: 1200px;
            margin: 0 auto;
        }

        .contact-banner {
            margin-top: 100px;
        }

        .contact-form {
            flex: 1;
            padding: 0 20px;
            min-width: 300px;
        }

        .contact-info {
            flex: 1;
            background-color: #e94a6a;
            color: white;
            padding: 30px;
            min-width: 300px;
        }

        .contact-form h2 {
            color: #e94a6a;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        textarea.form-control {
            min-height: 120px;
        }

        .btn-send {
            background-color: #e94a6a;
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 4px;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        /* Map styling */
        .map-container {
            width: 100%;
            margin-top: 40px;
        }

        /* Media queries for responsive design */
        @media (max-width: 768px) {

            .contact-form,
            .contact-info {
                flex: 100%;
            }
        }
    </style>
</head>

<body>
    <!-- Main contact banner section with background -->
    <div class="contact-banner" style="background-image: url('assets/img/bg-header.jpg'); background-size: cover; color: white; text-align: center; padding: 80px 0;">
        <h1>CONTACT</h1>
        <p>Don't Hesitate to Contact Us.</p>
    </div>

    <!-- Contact form and info section -->
    <div class="contact-section">
        <div class="contact-form">
            <h2>SEND US A MESSAGE</h2>

            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo htmlspecialchars($error); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <?php if (isset($success)): ?>
                <div class="alert alert-success">
                    <?php echo htmlspecialchars($success); ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <input type="text" name="fullName" class="form-control" placeholder="Full Name" value="<?php echo htmlspecialchars($fullName ?? ''); ?>">
                </div>

                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo htmlspecialchars($email ?? ''); ?>">
                </div>

                <div class="form-group">
                    <textarea name="message" class="form-control" placeholder="Message"><?php echo htmlspecialchars($message ?? ''); ?></textarea>
                </div>

                <button type="submit" class="btn-send">Send</button>
            </form>
        </div>

        <div class="contact-info">
            <h2>FRESHCERY HEADQUARTER</h2>
            <p>Jl. Petani No. 159, Cibabat<br>
                Cimahi Utara<br>
                Kota Cimahi<br>
                Jawa Barat 40513</p>

            <p><i class="phone-icon"></i> 0898986362</p>
            <p><i class="email-icon"></i> hello@freshcery.com</p>
        </div>
    </div>

    <!-- Google Maps section -->
    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9883373529008!2d107.5811247!3d-6.893175599999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6be228785eb%3A0x2a096bfa28e54745!2sD&#39;Botanica%20Bandung%20Mall!5e0!3m2!1sen!2sid!4v1709425536121!5m2!1sen!2sid"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</body>

</html>

<?php include './footer.php';
