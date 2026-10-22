<?php
$pageTitle = "Product Details — Nahal";
include __DIR__ . '/includes/header.php';

$products = [
    1 => ['name' => 'Classic Golden Honey', 'desc' => 'A familiar golden sweetness for breakfast, tea, and everyday enjoyment. Sourced with care and bottled to preserve its pure and natural taste.', 'img' => 'assets/images/honey-classic.png', 'prices' => [2500, 4700, 6500], 'olds' => [3000, 5500, 7500]],
    2 => ['name' => 'Wildflower Honey', 'desc' => 'A nature-inspired choice for those who love the simple pleasure of honey. Rich in natural flavors collected from wild blooms.', 'img' => 'assets/images/honey-wildflower.png', 'prices' => [3200, 6000, 8500], 'olds' => [4000, 7000, 9500]],
    3 => ['name' => 'Premium Honey Jar', 'desc' => 'A thoughtful addition to your kitchen or a sweet gift for someone special. Packaged beautifully to retain maximum purity.', 'img' => 'assets/images/honey-premium.png', 'prices' => [4500, 8500, 12000], 'olds' => [5500, 9500, 14000]],
    4 => ['name' => 'Sidr Honey', 'desc' => 'Rich, dark and full of authentic natural flavor. A premium organic choice for honey lovers.', 'img' => 'https://images.pexels.com/photos/1638280/pexels-photo-1638280.jpeg', 'prices' => [6000, 11500, 16000], 'olds' => [6500, 12500, 17500]],
    5 => ['name' => 'Acacia Honey', 'desc' => 'Light, clear, and perfectly sweet for daily use. A pure delight for your morning routine.', 'img' => 'https://images.unsplash.com/photo-1471943311424-646960669fbc?w=1000&q=80', 'prices' => [3800, 7200, 10500], 'olds' => [4200, 8000, 11500]],
    6 => ['name' => 'Black Seed Honey', 'desc' => 'A powerful blend of pure honey and black seeds. Carefully mixed for a unique taste.', 'img' => 'https://images.unsplash.com/photo-1558642452-9d2a7deb7f62?w=1000&q=80', 'prices' => [4200, 8000, 11500], 'olds' => [4800, 9000, 13000]]
];

$id = isset($_GET['id']) && isset($products[$_GET['id']]) ? (int)$_GET['id'] : 1;
$p = $products[$id];

$discount = round((($p['olds'][0] - $p['prices'][0]) / $p['olds'][0]) * 100);
?>

<main id="main-content" class="product-page">
  <div class="container">
    <div class="breadcrumb">
      <a href="index.php">Home</a> / <a href="index.php#products">Our Honey</a> / <span><?php echo $p['name']; ?></span>
    </div>

    <div class="product-details-grid">
      <div class="product-image-wrap">
        <img src="<?php echo $p['img']; ?>" alt="<?php echo $p['name']; ?>" onerror="this.src='https://images.unsplash.com/photo-1558642452-9d2a7deb7f62?w=1000&q=80';">
        <button class="zoom-btn">🔍 ZOOM</button>
      </div>

      <div class="product-info">
        <h1 class="product-title"><?php echo $p['name']; ?></h1>
        
        <div class="product-reviews">
          <span class="stars">★★★★★</span> 
          <span>5.0 (12 Reviews)</span> | <span class="sku">SKU: NH-<?php echo $id; ?>00</span>
        </div>

        <div class="product-price-large">
          <span class="current-price" id="dynamic-price">Rs. <?php echo number_format($p['prices'][0]); ?></span>
          <span class="old-price" id="dynamic-old-price">Rs. <?php echo number_format($p['olds'][0]); ?></span>
          <span class="discount-badge" id="dynamic-discount">-<?php echo $discount; ?>%</span>
        </div>

        <p class="product-description"><?php echo $p['desc']; ?></p>
        <p class="stock-status">🟢 In Stock & Ready to Ship</p>

        <hr class="divider">

        <div class="weight-selection">
          <p class="weight-label">SIZE / WEIGHT</p>
          <div class="weight-options">
            <!-- Yahan mene PHP se direct data pass kiya hai JS ko -->
            <button class="weight-btn active" data-price="<?php echo $p['prices'][0]; ?>" data-old="<?php echo $p['olds'][0]; ?>">1 KG</button>
            <button class="weight-btn" data-price="<?php echo $p['prices'][1]; ?>" data-old="<?php echo $p['olds'][1]; ?>">2 KG</button>
            <button class="weight-btn" data-price="<?php echo $p['prices'][2]; ?>" data-old="<?php echo $p['olds'][2]; ?>">3 KG</button>
          </div>
          <p class="low-stock">🟠 LOW STOCK — ONLY 5 LEFT</p>
        </div>

        <div class="action-buttons">
          <button class="btn btn-primary btn-add-cart">Buy Now</button>
          <button class="btn btn-ghost btn-wishlist">♡ WISHLIST</button>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>