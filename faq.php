<?php
include 'header.php';

// Array of FAQ items from the provided content
$faq_items = [
    [
        'id' => 1,
        'question' => 'What is Freshchery?',
        'answer' => 'Freshchery delivers groceries from the stores you love to your doorstep in as little as one hour! We empower you to shop at your trusted stores using our own trained and experienced Personal Shoppers, and then ensure a safe delivery to you.'
    ],
    [
        'id' => 2,
        'question' => 'What stores are supported?',
        'answer' => 'We support a selected number of stores in your area including Ranch Market, Farmers Market, Lotte Mart, Transmart Carrefour, Super Indo, Grand Lucky, Red&White and LOKA Lifestyle Supermarket. We are constantly adding new stores from your area, empowering you to shop from those stores. The stores that serve you are based on your location, and the availability of stores in your proximity.'
    ],
    [
        'id' => 3,
        'question' => 'Do you serve my area?',
        'answer' => 'Currently we serve the Greater Jakarta area, including Tangeran, BSD, Bekasi and Depok as well as Surabaya and Bandung central areas. Check if we deliver to your area by downloading the App or using our Website. You can type your address and see the list of stores available. We keep adding stores on a regular basis! If your favorite store is not listed you can suggest it to us via the "Request New Stores" button at the bottom of the supermarkets list.'
    ],
    [
        'id' => 4,
        'question' => 'How fast do you deliver?',
        'answer' => 'We deliver to you in the next hour, or at any other one-hour time-slot today and in the next 6 days.'
    ],
    [
        'id' => 5,
        'question' => 'How much does delivery cost?',
        'answer' => 'It costs IDR20,000 for the delivery on all delivery slots. And FREE DELIVERY for order placed above IDR500,000 in May 2017 only'
    ],
    [
        'id' => 6,
        'question' => 'What are the delivery hours?',
        'answer' => 'Our delivery hours are based on the opening hours of the stores we work with. Usually between 10am and 10pm. You can place your orders at any time of the day.'
    ],
    [
        'id' => 7,
        'question' => 'Can I collect any kinds of club points from the supermarkets?',
        'answer' => 'Currently we do not support the collection of membership points or other savings from stores. Be sure to keep an eye on email and social media updates for updates on how we\'re expanding to improve this functionality.'
    ],
    [
        'id' => 8,
        'question' => 'What happens if any of my items are out of stock?',
        'answer' => 'We receive price and stock updates on a daily base from our retail partners. After placing your order, you will be asked what our Personal Shopper should do in case one of more of your items are out of stock. You can select for the whole order or for each unique product the following actions: choose "let shopper pick" if you want our shoppers to pick the most suitable replacement for you or "call me" if you prefer to receive a phone call. Alternatively, you can also select "do not replace".'
    ],
    [
        'id' => 9,
        'question' => 'Are there price differences from the store?',
        'answer' => 'For some stores, we may add a small service charge on top of the store price. If you notice an item that you think is priced incorrectly, please reach out to us! We reserve the right to cancel items that are priced incorrectly due to error.'
    ],
    [
        'id' => 10,
        'question' => 'How do you treat items that are non-Halal?',
        'answer' => 'We allow you to buy non-Halal items using Freshchery, and are very careful to ensure that at no point during checkout, delivery, or any other time, non-Halal and Halal items get in contact with each other. To ensure that, we use different bags and clearly separated parts of the box for the transport of non-Halal items.'
    ],
    [
        'id' => 11,
        'question' => 'Would I get the Freshchery shopping bag for my order?',
        'answer' => 'As long as the stocks are available, our Driver will put your order on our very own reuseable shopping bag. If you don\'t get the shopping bag, it could be happened because the stocks are empty. But we will restock our shopping bag in the stores maximum at 1 week, don\'t worry.'
    ],
    [
        'id' => 12,
        'question' => 'Can you assure the quality of the products that I bought?',
        'answer' => 'Of course! We can assure the quality of the items for you, our beloved customer. If you found any bad quality items, you can contact our Customer Service and we will replace it.'
    ],
    [
        'id' => 13,
        'question' => 'How do I check the status of my order?',
        'answer' => 'You will get notified when your order is packed, order is on its way and has almost arrived. Remember to turn on your push notification in your phone settings. You can also go on "My Orders" section in the app to check live-time status.'
    ],
    [
        'id' => 14,
        'question' => 'How do I edit or cancel my order?',
        'answer' => 'You can edit your order until the shopper starts picking your items. Go to "My Orders" section in the app and select the order you want to edit. Click on "Edit Order" to change one of the following:<br>
        - Add or remove items<br>
        - Change delivery slot<br>
        - Change payment method<br>
        - Change address<br>
        - Cancel order'
    ],
    [
        'id' => 15,
        'question' => 'How do I report a problem with my order?',
        'answer' => 'You can contact us following the "Help" button in the app and selecting "Contact Us". We respond very quickly!'
    ],
    [
        'id' => 16,
        'question' => 'When will I receive my refund?',
        'answer' => 'Payment will be made within 14 days by crediting your credit card.'
    ],
    [
        'id' => 17,
        'question' => 'How do I review my receipt?',
        'answer' => 'You will receive an electronic receipt via e-mail after your order is delivered.'
    ],
    [
        'id' => 18,
        'question' => 'How do I return my Freshchery bags?',
        'answer' => 'We encourage you to return your Freshchery bags that are still in good condition to your next Freshchery shopper for reuse. Feel free to use them for your own errands too.'
    ],
    [
        'id' => 19,
        'question' => 'How do I return items?',
        'answer' => 'If something seems to be wrong with your order, such as a missing item or an incorrect item, you can reject the items when our rider arrives at your doorstep. We will charge you only for the delivered items. Once an item is accepted by you, it cannot be returned. We do not currently support a return process for any items you may have accidentally purchased via Freshchery. You are more than welcome to coordinate returns directly with your store. Keep in mind that we do keep the in-store receipts for accounting purposes.'
    ],
    [
        'id' => 20,
        'question' => 'Why is my card authorized for more than my order total?',
        'answer' => 'Like a restaurant or a bar, Freshchery temporarily authorizes your card for slightly more than your order total. As soon as your order is complete, we charge your card for exactly what was delivered. Your bank will update the final charge on your statement in 3 – 7 business days after delivery. The temporary authorization can be for up to Rp 100,000 more than the order total. It helps account for charges like items sold by weight. If your final order total exceeds the authorization amount, there may be a second charge for the difference. You can see all charges reflected at the bottom of your receipt, which is available after delivery.'
    ],
    [
        'id' => 21,
        'question' => 'Who will select my items?',
        'answer' => 'All our Personal Shoppers and Drivers are highly trained at selecting the best groceries for you. We employ Personal Shoppers that pick grocery and Drivers to deliver to your doorstep; in some stores, we may rely directly on Drivers to deliver your grocery.'
    ],
    [
        'id' => 22,
        'question' => 'Who will deliver my order?',
        'answer' => 'Your orders will be delivered by specially trained and screened Drivers.'
    ],
    [
        'id' => 23,
        'question' => 'What if all Personal Shoppers are busy?',
        'answer' => 'Occasionally our Personal Shoppers get overwhelmed with orders. During these times, the next available delivery slot may be later in the day. Use the delivery checker in the app to see the next available delivery for your order.'
    ],
    [
        'id' => 24,
        'question' => 'I have many more questions for you!',
        'answer' => 'Contact us! We will be there at support.indonesia@Freshchery.com.'
    ],
];

// Get the page title
$pageTitle = "FAQ";
$pageSubtitle = "Frequently Asked Questions.";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?> - Freshchery</title>
    <style>
        .faq-container {
            margin-top: 100px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            font-family: Arial, sans-serif;
        }

        .faq-header {
            margin-top: 100px;
            background-image: url('assets/img/bg-header.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 50px 20px;
            text-align: center;
            margin-bottom: 30px;
        }

        .faq-title {
            font-size: 48px;
            margin-bottom: 10px;
        }

        .faq-subtitle {
            font-size: 24px;
        }

        .faq-item {
            margin-bottom: 30px;
        }

        .faq-question {
            font-weight: bold;
            margin-bottom: 10px;
            font-size: 18px;
        }

        .faq-answer {
            line-height: 1.6;
            color: #333;
        }

        footer {
            background-color: rgb(231, 231, 231);
            padding: 40px 0 20px;
            /* Reduced padding */
            color: #000000;
            /* Brighter text color */
        }

        /* You can add more styling as needed */
    </style>
</head>

<body>

    <div class="faq-header">
        <h1 class="faq-title"><?php echo $pageTitle; ?></h1>
        <p class="faq-subtitle"><?php echo $pageSubtitle; ?></p>
    </div>

    <div class="faq-container">


        <?php foreach ($faq_items as $item): ?>
            <div class="faq-item">
                <div class="faq-question"><?php echo $item['id']; ?>. <?php echo htmlspecialchars($item['question']); ?></div>
                <div class="faq-answer"><?php echo $item['answer']; ?></div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Your footer would go here (you mentioned you already have it) -->
</body>
<script src="home-scripts.js"></script>
<script src="scripts.js"></script>

</html>

<?php
// Include footer
include 'footer.php';
?>