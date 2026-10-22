<?php
$pageTitle = "Nahal — Pure & Natural Honey";
include __DIR__ . '/includes/header.php';
?>

<main id="main-content">

  <!-- ============ HERO ============ -->
  <section class="hero-slider" id="home">
    <div class="hero-slides">
      <div class="hero-slide active" style="background-image: url('https://images.unsplash.com/photo-1558642452-9d2a7deb7f62?w=1600&q=80');"></div>
      <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1471943311424-646960669fbc?w=1600&q=80');"></div>
      <div class="hero-slide" style="background-image: url('https://images.pexels.com/photos/1638280/pexels-photo-1638280.jpeg?auto=compress&cs=tinysrgb&w=1600');"></div>
    </div>
    
    <div class="hero-overlay"></div>

    <div class="container hero-content">
      <span class="eyebrow text-gold">Pure &amp; Natural</span>
      <h1 class="hero-title text-cream">Nature’s Golden Goodness,<br>in Every Drop.</h1>
      <p class="hero-desc text-cream">Discover the rich taste of pure honey, inspired by nature and brought to your table with care.</p>
      
      <div class="hero-divider"></div>

      <div class="hero-actions">
        <a href="#products" class="btn btn-primary">Explore Our Honey</a>
        <a href="#about" class="btn btn-ghost text-cream border-cream">Discover Our Story</a>
      </div>
    </div>
  </section>

  <!-- ============ PRODUCTS (TOP SELLERS & NEW ARRIVALS) ============ -->
  <section class="products section" id="products">
    <div class="container">
      
      <div class="product-tabs-header reveal">
        <div class="tabs">
          <button class="tab-btn active" data-target="top-sellers">Top Sellers</button>
          <button class="tab-btn" data-target="new-arrivals">New Arrivals</button>
        </div>
        <a href="#products" class="btn-view-all">VIEW ALL <span>&rarr;</span></a>
      </div>

      <!-- Top Sellers -->
      <div class="product-grid-wrapper active" id="top-sellers">
        <div class="product-grid">
          
          <article class="product-card reveal">
            <div class="product-media">
               <img src="assets/images/honey-classic.png" alt="Classic Golden Honey jar" onerror="this.src='https://images.pexels.com/photos/1638280/pexels-photo-1638280.jpeg?auto=compress&cs=tinysrgb&w=700';">
              <span class="product-label">PREMIUM</span>
              <button class="wishlist-btn" aria-label="Add to wishlist">♡</button>
              <div class="card-actions">
                <a href="product.php?id=1" class="btn-quickview">QUICK VIEW</a>
                <button class="btn-add">ADD</button>
              </div>
            </div>
            <div class="product-body">
              <span class="product-cat">Pure Honey</span>
              <h3>Classic Golden Honey</h3>
              <p class="product-short-desc">A familiar golden sweetness for breakfast and tea.</p>
              <div class="product-price">
                <span class="current-price">Rs. 2,500</span>
                <span class="old-price">Rs. 3,000</span>
              </div>
            </div>
          </article>

          <article class="product-card reveal">
            <div class="product-media">
               <img src="assets/images/honey-wildflower.png" alt="Wildflower Honey jar" onerror="this.src='https://images.unsplash.com/photo-1471943311424-646960669fbc?w=700&q=80';">
              <button class="wishlist-btn" aria-label="Add to wishlist">♡</button>
              <div class="card-actions">
                <a href="product.php?id=2" class="btn-quickview">QUICK VIEW</a>
                <button class="btn-add">ADD</button>
              </div>
            </div>
            <div class="product-body">
              <span class="product-cat">Wildflower</span>
              <h3>Wildflower Honey</h3>
              <p class="product-short-desc">A nature-inspired choice for simple pleasure.</p>
              <div class="product-price">
                <span class="current-price">Rs. 3,200</span>
                <span class="old-price">Rs. 4,000</span>
              </div>
            </div>
          </article>

          <article class="product-card reveal">
            <div class="product-media">
            <img src="assets/images/honey-premium.png" alt="Premium honey jar gift" onerror="this.src='https://images.unsplash.com/photo-1558642452-9d2a7deb7f62?w=700&q=80';">
              <span class="product-label">BEST SELLER</span>
              <button class="wishlist-btn" aria-label="Add to wishlist">♡</button>
              <div class="card-actions">
               <a href="product.php?id=3" class="btn-quickview">QUICK VIEW</a>
                <button class="btn-add">ADD</button>
              </div>
            </div>
            <div class="product-body">
              <span class="product-cat">Premium Gift</span>
              <h3>Premium Honey Jar</h3>
              <p class="product-short-desc">A thoughtful addition to your kitchen or a sweet gift.</p>
              <div class="product-price">
                <span class="current-price">Rs. 4,500</span>
                <span class="old-price">Rs. 5,500</span>
              </div>
            </div>
          </article>

        </div>
      </div>

      <!-- New Arrivals -->
      <div class="product-grid-wrapper" id="new-arrivals">
        <div class="product-grid">
          
          <article class="product-card reveal">
            <div class="product-media">
              <img src="https://images.pexels.com/photos/1638280/pexels-photo-1638280.jpeg?auto=compress&cs=tinysrgb&w=700" alt="Organic Sidr Honey">
              <span class="product-label">NEW</span>
              <button class="wishlist-btn" aria-label="Add to wishlist">♡</button>
              <div class="card-actions">
                <a href="product.php?id=4" class="btn-quickview">QUICK VIEW</a>
                <button class="btn-add">ADD</button>
              </div>
            </div>
            <div class="product-body">
              <span class="product-cat">Organic</span>
              <h3>Sidr Honey</h3>
              <p class="product-short-desc">Rich, dark and full of authentic natural flavor.</p>
              <div class="product-price">
                <span class="current-price">Rs. 6,000</span>
                <span class="old-price">Rs. 6,500</span>
              </div>
            </div>
          </article>

          <article class="product-card reveal">
            <div class="product-media">
              <img src="https://images.unsplash.com/photo-1471943311424-646960669fbc?w=700&q=80" alt="Acacia Honey">
              <span class="product-label">NEW</span>
              <button class="wishlist-btn" aria-label="Add to wishlist">♡</button>
              <div class="card-actions">
                <a href="product.php?id=5" class="btn-quickview">QUICK VIEW</a>
                <button class="btn-add">ADD</button>
              </div>
            </div>
            <div class="product-body">
              <span class="product-cat">Pure</span>
              <h3>Acacia Honey</h3>
              <p class="product-short-desc">Light, clear, and perfectly sweet for daily use.</p>
              <div class="product-price">
                <span class="current-price">Rs. 3,800</span>
                <span class="old-price">Rs. 4,200</span>
              </div>
            </div>
          </article>

          <article class="product-card reveal">
            <div class="product-media">
              <img src="https://images.unsplash.com/photo-1558642452-9d2a7deb7f62?w=700&q=80" alt="Black Seed Honey">
              <span class="product-label">NEW</span>
              <button class="wishlist-btn" aria-label="Add to wishlist">♡</button>
              <div class="card-actions">
                <a href="product.php?id=6" class="btn-quickview">QUICK VIEW</a>
                <button class="btn-add">ADD</button>
              </div>
            </div>
            <div class="product-body">
              <span class="product-cat">Infused</span>
              <h3>Black Seed Honey</h3>
              <p class="product-short-desc">A powerful blend of pure honey and black seeds.</p>
              <div class="product-price">
                <span class="current-price">Rs. 4,200</span>
                <span class="old-price">Rs. 4,800</span>
              </div>
            </div>
          </article>

        </div>
      </div>
    </div>
  </section>

  <!-- ============ LIFESTYLE (HONEY & EVERYDAY LIVING) ============ -->
  <section class="lifestyle section" id="benefits">
    <div class="container">
      <div class="section-head reveal">
        <span class="eyebrow">Everyday Living</span>
        <h2 class="section-title">A Touch of Honey Makes It Special.</h2>
      </div>

      <div class="lifestyle-grid">
        <div class="life-card reveal">
          <img src="https://images.unsplash.com/photo-1484723091739-30a097e8f929?w=800&q=80" alt="Honey drizzled over toast and fruit at breakfast">
          <div class="life-caption"><h3>Morning Breakfast</h3><p>Honey with toast, yogurt, or fruit.</p></div>
        </div>
        <div class="life-card reveal">
          <img src="https://images.unsplash.com/photo-1544787219-7f47ccb76574?w=800&q=80" alt="A spoonful of honey beside a warm cup of tea">
          <div class="life-caption"><h3>Tea Time</h3><p>A spoonful of honey in a warm drink.</p></div>
        </div>
        <div class="life-card reveal">
          <img src="https://images.unsplash.com/photo-1600271886742-f049cd451bba?w=800&q=80" alt="Homemade dessert finished with a drizzle of honey">
          <div class="life-caption"><h3>Sweet Moments</h3><p>Honey as part of homemade desserts and recipes.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ WHY CHOOSE ============ -->
  <section class="why section">
    <div class="container">
      <div class="section-head reveal">
        <span class="eyebrow">Why Nahal</span>
        <h2 class="section-title">The Sweetness You Can Appreciate.</h2>
      </div>
      <div class="why-grid">
        <div class="why-card reveal">
          <div class="why-icon" aria-hidden="true">🌿</div>
          <h3>Natural Inspiration</h3>
          <p>A brand rooted in the simple beauty of nature.</p>
        </div>
        <div class="why-card reveal">
          <div class="why-icon" aria-hidden="true">🍯</div>
          <h3>Everyday Versatility</h3>
          <p>A delicious addition to a variety of everyday foods.</p>
        </div>
        <div class="why-card reveal">
          <div class="why-icon" aria-hidden="true">🎁</div>
          <h3>Thoughtful Presentation</h3>
          <p>Honey products presented with care and simplicity.</p>
        </div>
        <div class="why-card reveal">
          <div class="why-icon" aria-hidden="true">✨</div>
          <h3>Golden Goodness</h3>
          <p>A celebration of honey’s familiar sweetness.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ BANNER QUOTE ============ -->
  <section class="banner">
    <div class="banner-overlay">
      <div class="container banner-content reveal">
        <h2>A Little Golden Goodness Goes a Long Way.</h2>
        <p>Bring the warmth of nature’s sweetness to your everyday moments.</p>
        <a href="#products" class="btn btn-light">Explore Our Collection</a>
      </div>
    </div>
  </section>

  <!-- ============ REVIEWS SECTION ============ -->
  <section class="reviews section" id="reviews">
    <div class="container">
      <div class="section-head reveal">
        <span class="eyebrow">Testimonials</span>
        <h2 class="section-title">What Our Customers Say.</h2>
      </div>

      <div class="reviews-grid">
        <div class="review-card reveal">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">"The honey is incredibly pure and the taste is exactly what I was looking for. My family loves it!"</p>
          <div class="review-footer">
            <span class="reviewer-name">Hamza R.</span>
            <span class="review-date">12 Mar 2026</span>
          </div>
        </div>
        <div class="review-card reveal">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">"Delivery was super fast and the packaging was neat. You can tell a lot of care went into this."</p>
          <div class="review-footer">
            <span class="reviewer-name">Bilal A.</span>
            <span class="review-date">4 Mar 2026</span>
          </div>
        </div>
        <div class="review-card reveal">
          <div class="review-stars">★★★★☆</div>
          <p class="review-text">"Second order from Nahal. The quality is consistent and it tastes amazing with tea."</p>
          <div class="review-footer">
            <span class="reviewer-name">Usman T.</span>
            <span class="review-date">27 Feb 2026</span>
          </div>
        </div>
        <div class="review-card reveal">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">"Honestly the best honey I've bought online. It feels premium and natural. Highly recommended!"</p>
          <div class="review-footer">
            <span class="reviewer-name">Ali N.</span>
            <span class="review-date">19 Feb 2026</span>
          </div>
        </div>
      </div>

      <div class="reviews-action reveal">
        <button class="btn btn-ghost" id="openReviewModal">
          WRITE A REVIEW
        </button>
      </div>
    </div>
  </section>

  <!-- ============ WRITE A REVIEW MODAL ============ -->
  <div class="review-modal-overlay" id="reviewModal">
    <div class="review-modal-content">
      <button class="close-modal" id="closeReviewModal">&times;</button>
      <h3>Write a Review</h3>
      <p class="modal-sub">Share your experience with Nahal Honey.</p>
      
      <form id="reviewForm">
        <div class="form-field">
          <label>Your Rating</label>
          <div class="star-rating-input">
            <span class="star" data-value="1">★</span>
            <span class="star" data-value="2">★</span>
            <span class="star" data-value="3">★</span>
            <span class="star" data-value="4">★</span>
            <span class="star" data-value="5">★</span>
          </div>
        </div>
        <div class="form-field">
          <label for="reviewName">Your Name</label>
          <input type="text" id="reviewName" placeholder="e.g. Ahmed Khan" required>
        </div>
        <div class="form-field">
          <label for="reviewText">Your Review</label>
          <textarea id="reviewText" rows="4" placeholder="How was the honey?" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit Review</button>
        <p class="demo-note text-center mt-2">This is a demo. Reviews are not saved.</p>
      </form>
    </div>
  </div>

  <!-- ============ CONTACT ============ -->
  <section class="contact section" id="contact">
    <div class="container contact-grid">
      <div class="contact-copy reveal">
        <span class="eyebrow">Contact</span>
        <h2 class="section-title">Let’s Talk Honey.</h2>
        <p>Have a question about Nahal or our honey collection? We would love to hear from you.</p>

        <ul class="contact-info">
          <li><strong>Email:</strong> <span class="placeholder">hello@example.com</span></li>
          <li><strong>Phone:</strong> <span class="placeholder">+92 000 0000000</span></li>
          <li><strong>Address:</strong> <span class="placeholder">Your address here</span></li>
        </ul>
      </div>

      <form class="contact-form reveal" id="contactForm" novalidate>
        <div class="form-field">
          <label for="name">Full Name</label>
          <input type="text" id="name" name="name" placeholder="Your name" required>
          <small class="error" data-for="name"></small>
        </div>
        <div class="form-field">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" placeholder="you@example.com" required>
          <small class="error" data-for="email"></small>
        </div>
        <div class="form-field">
          <label for="subject">Subject</label>
          <input type="text" id="subject" name="subject" placeholder="What is this about?" required>
          <small class="error" data-for="subject"></small>
        </div>
        <div class="form-field">
          <label for="message">Message</label>
          <textarea id="message" name="message" rows="4" placeholder="Write your message..." required></textarea>
          <small class="error" data-for="message"></small>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Send Message</button>
        <p class="form-feedback" id="formFeedback" role="status" aria-live="polite"></p>
      </form>
    </div>
  </section>

  <!-- ============ TRUST BADGES (SCROLLING) ============ -->
  <section class="trust-bar">
    <div class="trust-track">
      
      <!-- Group 1 -->
      <div class="trust-item">
        <svg viewBox="0 0 24 24" fill="none" stroke="#e3a72f" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path><path d="M3 3v5h5"></path></svg>
        <div class="trust-text">
          <h4>EASY RETURNS</h4>
          <p>Not satisfied? Return within 7 days.</p>
        </div>
      </div>

      <div class="trust-item">
        <svg viewBox="0 0 24 24" fill="none" stroke="#2980b9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 18v-6a9 9 0 0 1 18 0v6"></path><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path></svg>
        <div class="trust-text">
          <h4>CUSTOMER SUPPORT</h4>
          <p>WhatsApp or call, 9am–9pm PKT.</p>
        </div>
      </div>

      <div class="trust-item">
        <svg viewBox="0 0 24 24" fill="none" stroke="#27ae60" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
        <div class="trust-text">
          <h4>SECURE PAYMENT</h4>
          <p>Cash on delivery, Easypaisa and JazzCash.</p>
        </div>
      </div>

      <div class="trust-item">
        <svg viewBox="0 0 24 24" fill="none" stroke="#d35400" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
        <div class="trust-text">
          <h4>FAST DELIVERY</h4>
          <p>On every order, anywhere in Pakistan.</p>
        </div>
      </div>

      <!-- Group 2 (Duplicate for seamless scrolling) -->
      <div class="trust-item">
        <svg viewBox="0 0 24 24" fill="none" stroke="#e3a72f" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path><path d="M3 3v5h5"></path></svg>
        <div class="trust-text">
          <h4>EASY RETURNS</h4>
          <p>Not satisfied? Return within 7 days.</p>
        </div>
      </div>

      <div class="trust-item">
        <svg viewBox="0 0 24 24" fill="none" stroke="#2980b9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 18v-6a9 9 0 0 1 18 0v6"></path><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path></svg>
        <div class="trust-text">
          <h4>CUSTOMER SUPPORT</h4>
          <p>WhatsApp or call, 9am–9pm PKT.</p>
        </div>
      </div>

      <div class="trust-item">
        <svg viewBox="0 0 24 24" fill="none" stroke="#27ae60" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
        <div class="trust-text">
          <h4>SECURE PAYMENT</h4>
          <p>Cash on delivery, Easypaisa and JazzCash.</p>
        </div>
      </div>

      <div class="trust-item">
        <svg viewBox="0 0 24 24" fill="none" stroke="#d35400" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
        <div class="trust-text">
          <h4>FAST DELIVERY</h4>
          <p>On every order, anywhere in Pakistan.</p>
        </div>
      </div>

    </div>
  </section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>