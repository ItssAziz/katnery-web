<?php
// Start output buffering and session at very top
ob_start();
require_once 'header.php';

// Rest of file content
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bracelets - Katnery</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

    <div class="container mx-auto px-4 py-8" <?= ($_SESSION['lang'] ?? 'en') == 'ar' ? 'dir="rtl"' : '' ?>>
        <!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav text-sm text-gray-500 mb-4">
    <a href="index.php" class="no-underline text-gray-500"><?= $translations['home'] ?></a> &nbsp;/&nbsp; <?= $translations['bracelets_page_title'] ?>
</nav>

<!-- Page Title -->
<h1 class="text-5xl font-bold mb-4"><?= $translations['bracelets_page_title'] ?></h1>

        <!-- Sorting, Filtering and Product Count -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
            <span id="product-count" class="text-gray-500"><?= sprintf($translations['showing_products'], 0) ?></span>
            
            <div class="flex flex-col sm:flex-row gap-4 w-full md:w-auto">
                <!-- Price Range Filter -->
                <div class="flex items-center gap-2">
                    <span class="text-gray-500 whitespace-nowrap"><?= $translations['price_filter_label'] ?></span>
                    <input type="range" id="price-range" min="0" max="5000" step="100" value="5000" 
                           class="w-24 md:w-32" />
                    <span id="price-value" class="text-gray-500"><span class="icon-saudi_riyal">&#xea;</span>5000</span>
                </div>
                
                <!-- Sorting -->
                <div class="relative">
                    <select id="sort-options" class="appearance-none bg-transparent border-none text-gray-500">
    <option value="default"><?= $translations['default_sorting'] ?></option>
    <option value="price-asc"><?= $translations['price_low_to_high'] ?></option>
    <option value="price-desc"><?= $translations['price_high_to_low'] ?></option>
    <option value="name-asc"><?= $translations['name_a_to_z'] ?></option>
    <option value="name-desc"><?= $translations['name_z_to_a'] ?></option>
</select>
                    <i class="fas fa-chevron-down absolute right-0 top-0 mt-2 mr-2 text-gray-500"></i>
                </div>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="product-grid">
            <!-- Product Items -->
            <div class="product-item text-center" 
                data-category="<?= $translations['bracelets_category'] ?? 'Bracelet' ?>"
                data-name="<?= $translations['chain_bracelet'] ?? 'Chain Bracelet' ?>"
                data-price="1100"
                data-images='["/assets/img/bracelet-01-a.webp", "/assets/img/bracelet-01-b.webp", "/assets/img/bracelet-01-c.jpg", "/assets/img/bracelet-01-d.jpg"]'
                data-description="<?= $translations['chain_bracelet_desc'] ?? 'Delicate chain bracelet with adjustable length' ?>">
                <div class="product-image">
                    <a href="product.php?name=<?= urlencode($translations['chain_bracelet'] ?? 'Chain Bracelet') ?>&price=1100&description=<?= urlencode($translations['chain_bracelet_desc'] ?? 'Delicate chain bracelet with adjustable length') ?>&images=/assets/img/bracelet-01-a.webp,/assets/img/bracelet-01-b.webp,/assets/img/bracelet-01-c.jpg,/assets/img/bracelet-01-d.jpg&category=<?= urlencode($translations['bracelets_category'] ?? 'Bracelet') ?>">
                        <img src="/assets/img/bracelet-01-a.webp" alt="<?= htmlspecialchars($translations['chain_bracelet'] ?? 'Chain Bracelet') ?> - <?= htmlspecialchars($translations['chain_bracelet_desc'] ?? 'Delicate chain bracelet with adjustable length') ?>" class="w-full">
                    </a>
                    <div class="overlay">
                        <a href="#" class="eye-icon quick-view-btn">
                            <img src="/assets/img/quick-view.svg" alt="<?= $translations['quick_view'] ?? 'Quick View' ?>" width="28" height="28" loading="lazy">
                            <span class="quick-view-tooltip"><?= $translations['quick_view'] ?? 'Quick View' ?></span>
                        </a>
                    </div>
                </div>
                <h2 class="text-xl font-semibold mt-4"><?= $translations['chain_bracelet'] ?? 'Chain Bracelet' ?></h2>
                <p class="price mt-2"><span class="icon-saudi_riyal">&#xea;</span>1100</p>
            </div>

            <div class="product-item text-center" 
                data-category="<?= $translations['bracelets_category'] ?? 'Bracelet' ?>"
                data-name="<?= $translations['bangle_bracelet'] ?? 'Bangle Bracelet' ?>"
                data-price="1250"
                data-images='["/assets/img/bracelet-01-b.webp", "/assets/img/bracelet-01-c.jpg", "/assets/img/bracelet-01-d.jpg", "/assets/img/bracelet-01-a.webp"]'
                data-description="<?= $translations['bangle_bracelet_desc'] ?? 'Solid bangle bracelet with engraved details' ?>">
                <div class="product-image">
                    <a href="product.php?name=<?= urlencode($translations['bangle_bracelet'] ?? 'Bangle Bracelet') ?>&price=1250&description=<?= urlencode($translations['bangle_bracelet_desc'] ?? 'Solid bangle bracelet with engraved details') ?>&images=/assets/img/bracelet-01-b.webp,/assets/img/bracelet-01-c.jpg,/assets/img/bracelet-01-d.jpg,/assets/img/bracelet-01-a.webp&category=<?= urlencode($translations['bracelets_category'] ?? 'Bracelet') ?>">
                        <img src="/assets/img/bracelet-01-b.webp" alt="<?= htmlspecialchars($translations['bangle_bracelet'] ?? 'Bangle Bracelet') ?> - <?= htmlspecialchars($translations['bangle_bracelet_desc'] ?? 'Solid bangle bracelet with engraved details') ?>" class="w-full">
                    </a>
                    <div class="overlay">
                        <a href="#" class="eye-icon quick-view-btn">
                            <img src="/assets/img/quick-view.svg" alt="<?= $translations['quick_view'] ?? 'Quick View' ?>" width="28" height="28" loading="lazy">
                            <span class="quick-view-tooltip"><?= $translations['quick_view'] ?? 'Quick View' ?></span>
                        </a>
                    </div>
                </div>
                <h2 class="text-xl font-semibold mt-4"><?= $translations['bangle_bracelet'] ?? 'Bangle Bracelet' ?></h2>
                <p class="price mt-2"><span class="icon-saudi_riyal">&#xea;</span>1250</p>
            </div>

            <!-- Product Item 3 -->
            <div class="product-item text-center" 
                data-category="<?= $translations['bracelets_category'] ?? 'Bracelet' ?>"
                data-name="<?= $translations['personalized_charm_bracelet'] ?? 'Personalized Charm Bracelet' ?>"
                data-price="1400"
                data-images='["/assets/img/bracelet-01-c.jpg", "/assets/img/bracelet-01-a.webp", "/assets/img/bracelet-01-b.webp", "/assets/img/bracelet-01-d.jpg"]'
                data-description="<?= $translations['personalized_charm_bracelet_desc'] ?? 'Custom-crafted bracelet with hand-selected charms' ?>">
                <div class="product-image">
                    <a href="product.php?name=<?= urlencode($translations['personalized_charm_bracelet'] ?? 'Personalized Charm Bracelet') ?>&price=1400&description=<?= urlencode($translations['personalized_charm_bracelet_desc'] ?? 'Customizable charm bracelet with adjustable length') ?>&images=/assets/img/bracelet-01-c.jpg,/assets/img/bracelet-01-d.jpg,/assets/img/bracelet-01-a.webp,/assets/img/bracelet-01-b.webp&category=<?= urlencode($translations['bracelets_category'] ?? 'Bracelet') ?>">
                        <img src="/assets/img/bracelet-01-c.jpg" alt="<?= htmlspecialchars($translations['personalized_charm_bracelet'] ?? 'Personalized Charm Bracelet') ?> - <?= htmlspecialchars($translations['personalized_charm_bracelet_desc'] ?? 'Customizable charm bracelet with adjustable length') ?>" class="w-full">
                    </a>
                    <div class="overlay">
                        <a href="#" class="eye-icon quick-view-btn">
                            <img src="/assets/img/quick-view.svg" alt="<?= $translations['quick_view'] ?? 'Quick View' ?>" width="28" height="28" loading="lazy">
                            <span class="quick-view-tooltip"><?= $translations['quick_view'] ?? 'Quick View' ?></span>
                        </a>
                    </div>
                </div>
                <h2 class="text-xl font-semibold mt-4"><?= $translations['personalized_charm_bracelet'] ?? 'Personalized Charm Bracelet' ?></h2>
                <p class="price mt-2"><span class="icon-saudi_riyal">&#xea;</span>1400</p>
            </div>

            <!-- Product Item 4 -->
            <div class="product-item text-center" 
                data-category="<?= $translations['bracelets_category'] ?? 'Bracelet' ?>"
                data-name="<?= $translations['elegant_diamondcut_tennis_bracelet'] ?? 'Elegant Diamond-Cut Tennis Bracelet' ?>"
                data-price="1600"
                data-images='["/assets/img/bracelet-01-d.jpg", "/assets/img/bracelet-01-a.webp", "/assets/img/bracelet-01-b.webp", "/assets/img/bracelet-01-c.jpg"]'
                data-description="<?= $translations['elegant_diamondcut_tennis_bracelet_desc'] ?? 'Exquisite diamond-cut tennis bracelet' ?>">
                <div class="product-image">
                    <a href="product.php?name=<?= urlencode($translations['elegant_diamondcut_tennis_bracelet'] ?? 'Elegant Diamond-Cut Tennis Bracelet') ?>&price=1600&description=<?= urlencode($translations['elegant_diamondcut_tennis_bracelet_desc'] ?? 'Classic tennis bracelet with diamond-cut finish') ?>&images=/assets/img/bracelet-01-d.jpg,/assets/img/bracelet-01-a.webp,/assets/img/bracelet-01-b.webp,/assets/img/bracelet-01-c.jpg&category=<?= urlencode($translations['bracelets_category'] ?? 'Bracelet') ?>">
                        <img src="/assets/img/bracelet-01-d.jpg" alt="<?= htmlspecialchars($translations['elegant_diamondcut_tennis_bracelet'] ?? 'Elegant Diamond-Cut Tennis Bracelet') ?> - <?= htmlspecialchars($translations['elegant_diamondcut_tennis_bracelet_desc'] ?? 'Classic tennis bracelet with diamond-cut finish') ?>" class="w-full">
                    </a>
                    <div class="overlay">
                        <a href="#" class="eye-icon quick-view-btn">
                            <img src="/assets/img/quick-view.svg" alt="<?= $translations['quick_view'] ?? 'Quick View' ?>" width="28" height="28" loading="lazy">
                            <span class="quick-view-tooltip"><?= $translations['quick_view'] ?? 'Quick View' ?></span>
                        </a>
                    </div>
                </div>
                <h2 class="text-xl font-semibold mt-4"><?= $translations['elegant_diamondcut_tennis_bracelet'] ?? 'Elegant Diamond-Cut Tennis Bracelet' ?></h2>
                <p class="price mt-2"><span class="icon-saudi_riyal">&#xea;</span>1600</p>
            </div>

            <!-- Add more bracelet items here following the same structure -->
        </div>

        <!-- Modal -->
    <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden" id="product-modal">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-4xl w-full relative <?= $_SESSION['lang'] === 'ar' ? 'rtl' : '' ?>">
            <button id="close-modal" class="absolute top-4 right-4 text-2xl" aria-label="Close product modal">
                &times;
            </button>
            <div class="flex flex-col md:flex-row <?= $_SESSION['lang'] === 'ar' ? 'md:flex-row-reverse' : '' ?>">
                <div class="md:w-1/2">
                    <div class="relative">
                        <?php if(isset($translations['sale_badge'])): ?>
                            <span class="absolute top-0 left-0 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded"><?= $translations['sale_badge'] ?></span>
                        <?php endif; ?>
                        <div class="slideshow-container" id="modal-slideshow">
                            <!-- Slides will be inserted here dynamically -->
                        </div>
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        <div class="flex justify-center mt-4 space-x-2" id="modal-dots">
                            <!-- Dots will be inserted here dynamically -->
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 md:pl-6 mt-6 md:mt-0">
                    <a href="http://localhost/katnery/bracelets.php" class="text-sm text-gray-500 hover:underline" id="modal-category"><?= $translations['category'] ?? 'Category' ?></a>
                    <h1 class="text-3xl font-bold text-gray-900" id="modal-title"><?= $translations['product_name'] ?? 'Product Name' ?></h1>
                    <div class="flex items-center mt-2">
                        <span class="text-2xl font-bold text-brown-600 ml-2" id="modal-price"><span class="icon-saudi_riyal">&#xea;</span><?= $translations['price'] ?? 'Price' ?></span>
                        <span class="text-sm text-gray-500 ml-2"><?= $translations['free_shipping'] ?></span>
                    </div>
                    <p class="text-gray-700 mt-4" id="modal-description"><?= $translations['product_description'] ?? 'Product Description' ?></p>
                    <a href="https://t.me/yourtelegram" class="order-button mt-4" target="_blank">
                        <i class="fab fa-telegram"></i> <?= $translations['order_now'] ?? 'Order Now' ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>

    <?php include('footer.php'); ?>

    <script src="assets/js/main.js"></script>
</body>
</html>
