<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About Us</title>
</head>
<style>
    /* General Styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  line-height: 1.6;
  color: gray;
  background-color: #fdfdfd;
}

/* Container */
.container {
  width: 90%;
  max-width: 1000px;
  margin: auto;
  padding: 20px;
}

/* Header */
header {
  background-color: gray;
  color: #fff;
  padding: 20px 0;
}

.brand-name {
  font-size: 2rem;
  margin-bottom: 10px;
}

nav ul {
  list-style: none;
  display: flex;
  gap: 20px;
  flex-wrap: wrap;
}

nav a {
  color: #fff;
  text-decoration: none;
  font-weight: bold;
}

nav a.active, nav a:hover {
  text-decoration: underline;
}

/* About Section */
.about-section {
  padding: 50px 0;
  background-color: #fff9f6;
}

.about-section h2 {
  font-size: 2.2rem;
  color: gray;
  margin-bottom: 20px;
}

.about-section p {
  margin-bottom: 15px;
  font-size: 1.1rem;
}

/* Footer */
footer {
  background-color: gray;
  color: #fff;
  text-align: center;
  padding: 15px 0;
  margin-top: 40px;
}

</style>
<body>

  <header>
    <div class="container">
      <h1 class="brand-name">Styles By Mercy</h1>
      <nav>
        <ul>
          <li><a href="Index.php">Home</a></li>
          <li><a href="Best.php">Best Seller</a></li>
          <li><a href="About.php" class="active">About Us</a></li>
          <li><a href="ContactUs.php">Contact Us</a></li>
        </ul>
      </nav>
    </div>
  </header> 

  <section class="about-section">
    <div class="container">
      <h2>About Us</h2>
      <p><strong>Styles By Mercy</strong> is a modern clothing brand based in <strong>Agbor, Delta State</strong>, dedicated to bringing elegance, confidence, and African-inspired fashion to everyday life.</p>
      
      <p>Founded with passion and creativity, our brand blends traditional African designs with modern trends to offer unique and stylish outfits for men and women. Whether it's casual wear, office outfits, or custom styles for events, we ensure every piece tells a story of class and culture.</p>

      <p>Our mission is to inspire confidence and style in every customer. At Styles By Mercy, fashion isn't just about clothing—it's a lifestyle.</p>

      <p>Visit us in Agbor or shop online to experience fashion like never before.</p>
    </div>
  </section>

  <footer>
    <div class="container">
      <p>&copy; 2025 Designed Mercy.</p>
    </div>
  </footer>

</body>
</html>
