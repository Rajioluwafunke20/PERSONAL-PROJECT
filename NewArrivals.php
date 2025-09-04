<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>New Arrivals</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<style>
  a{
    text-decoration: none;
    color: black;
  }
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  body {
    font-family: 'Poppins', sans-serif;
    background-color: #fffdfd;
    color: #333;
    line-height: 1.6;
  }

  header {
    background-color: gray;
    color: white;
    padding: 20px;
    text-align: center;
  }

  header h1 {
    font-size: 2.5rem;
  }

  header .location {
    font-size: 1rem;
    margin-bottom: 10px;
  }

  header nav a {
    color: white;
    text-decoration: none;
    margin: 0 15px;
    font-weight: 500;
  }

  .hero {
    text-align: center;
    background-color: #f7f4f3;
    padding: 40px 20px;
  }

  .hero h2 {
    font-size: 2rem;
    margin-bottom: 10px;
  }

  .features {
    display: flex;
    justify-content: space-around;
    padding: 30px 10px;
    background-color: #fef8f7;
    flex-wrap: wrap;
  }

  .features div {
    text-align: center;
    max-width: 250px;
    margin-bottom: 20px;
  }

  .filter-bar {
    display: flex;
    justify-content: flex-end;
    padding: 20px;
    background-color: #fff4f4;
  }

  .filter-bar select {
    padding: 5px 10px;
    font-size: 1rem;
  }

  .products {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 30px;
    padding: 40px 20px;
  }

  .product-card {
    background-color: #f9f9f9;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
    text-align: center;
  }

  .product-card:hover {
    transform: scale(1.03);
  }

  .product-card img {
    width: 100%;
    height: auto;
  }

  .product-card h4 {
    margin: 15px 0 10px;
    font-size: 1.1rem;
  }

  .product-card .price {
    color: #b13d3d;
    font-size: 1.2rem;
    font-weight: bold;
    margin-bottom: 15px;
  }

  footer {
    background-color: gray;
    color: white;
    text-align: center;
    padding: 20px 10px;
    margin-top: 40px;
  }
</style> 

<body>
  <header>
    <h1>Styles By Mercy</h1>
    <p class="location">Located in Agbor, Delta State</p>
    <nav>
      <a href="Index.php">Home</a>
      <a href="Best.php">Best Seller</a>
      <a href="NewArrivals.php">New Arrivals</a>
      <a href="ContactUs.php">Contact Us</a>
    </nav>
  </header>

  <section class="hero">
    <h2>New Arrivals</h2>
    <p>Discover our latest collection — fresh styles and bold looks for every occasion.</p>
  </section>

  <section class="features">
    <div>
      <h3>🚚 Free Delivery</h3>
      <p>For orders over ₦20,000 within Delta State</p>
    </div>
    <div>
      <h3>💎 Premium Quality</h3>
      <p>Locally made with love & care</p>
    </div>
    <div>
      <h3>📦 Easy Returns</h3>
      <p>Return within 14 days with receipt</p>
    </div>
  </section>

  <section class="filter-bar">
    <label for="sort">Sort by:</label>
    <select id="sort">
      <option>Newest First</option>
      <option>Price: Low to High</option>
      <option>Price: High to Low</option>
    </select>
  </section>

  <section class="products">
    <!-- Product Card Example -->
    <a href="display.php">
      <div class="product-card" data-category="women">
        <img src="image/orange gown.jpg" alt="Ankara Dress">
        <h4>Elegant Ankara Dress</h4>
        <p class="price">$20</p>
      </div>
    </a>

    <a href="display.php">
      <div class="product-card" data-category="men">
        <img src="image/men cloth.jpg" alt="Senator Wear">
        <h4>Men's Senator Wear</h4>
        <p class="price">$90</p>
      </div>
    </a>

    <a href="display.php">
      <div class="product-card" data-category="women">
        <img src="image/shirt2.jpg" alt="Casual Top">
        <h4>Women's Casual Top</h4>
        <p class="price">$8</p>
      </div>
    </a>

    <a href="display.php">
      <div class="product-card" data-category="men">
        <img src="image/tshirt.jpg" alt="Agbada">
        <h4>Royal Agbada Set</h4>
        <p class="price">$35</p>
      </div>
    </a>

    <a href="display.php">
      <div class="product-card" data-category="kids">
        <img src="image/red gown.jpg" alt="Kids Gown">
        <h4>Floral Gown</h4>
        <p class="price">$54</p>
      </div>
    </a>

    <a href="display.php">
      <div class="product-card" data-category="women">
        <img src="image/crop top.jpg" alt="Crop Top">
        <h4>Trendy Crop Top</h4>
        <p class="price">$10</p>
      </div>
    </a>

    <a href="display.php">
      <div class="product-card" data-category="women">
        <img src="image/sundress.jpg" alt="Crop Top">
        <h4>Sundress</h4>
        <p class="price">$10</p>
      </div>
    </a>

    <a href="display.php">
      <div class="product-card" data-category="women">
        <img src="image/Brown summer outfit .jpeg" alt="Crop Top">
        <h4>Brown Gown</h4>
        <p class="price">$10</p>
      </div>
    </a>
    <!-- Add more as needed -->
  </section>

  <footer>
    <p>&copy; 2025 Designed By Mercy.</p>
  </footer>

  <script>
    const categoryFilter = document.getElementById('categoryFilter');
    const products = document.querySelectorAll('.product-card');

    categoryFilter.addEventListener('change', function () {
      const selected = this.value;

      products.forEach(product => {
        const category = product.getAttribute('data-category');
        if (selected === 'all' || selected === category) {
          product.style.display = 'block';
        } else {
          product.style.display = 'none';
        }
      });
    });
  </script>

</body>

</html>