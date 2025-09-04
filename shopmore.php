<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Shop More</title>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;500;700&display=swap" rel="stylesheet">
</head> 
<style>
  a{
    text-decoration: none;
  }
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Outfit', sans-serif;
  background: linear-gradient(to right, #1f1f1f, #2c2c2c);
  color: #fff;
  overflow-x: hidden;
}

/* Header */
.header {
  text-align: center;
  padding: 60px 20px 30px;
  background: rgba(255, 255, 255, 0.05);
  backdrop-filter: blur(5px);
}

.header h1 {
  font-size: 3rem;
  font-weight: 700;
  color: #f4c2c2;
}

.header p {
  margin-top: 10px;
  font-size: 1.2rem;
  color: #bbb;
}

/* Grid Layout */
.grid-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 30px;
  padding: 40px;
}

/* Cards */
.card {
  position: relative;
  overflow: hidden;
  border-radius: 20px;
  background: rgba(255, 255, 255, 0.07);
  backdrop-filter: blur(8px);
  transition: transform 0.4s ease;
  transform: scale(0.95);
  opacity: 0;
  animation: fadeUp 0.8s forwards;
}

.card img {
  width: 100%;
  display: block;
  border-radius: 20px 20px 0 0;
}

.info {
  padding: 15px;
  text-align: center;
}

.info h3 {
  font-weight: 500;
  font-size: 1.2rem;
  color: #ffdede;
  margin-bottom: 5px;
}

.info span {
  font-weight: 300;
  color: #eee;
}

.card:hover {
  transform: scale(1.02);
}

/* Animation */
@keyframes fadeUp {
  0% {
    opacity: 0;
    transform: translateY(40px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

.animate-delay1 {
  animation-delay: 0.2s;
}

.animate-delay2 {
  animation-delay: 0.4s;
}

.animate-delay3 {
  animation-delay: 0.6s;
}

.animate-delay4 {
  animation-delay: 0.8s;
}
.animate-delay5 {
  animation-delay: 0.10s;
}
.animate-delay6 {
  animation-delay: 0.12s;
}
.animate-delay7 {
  animation-delay: 0.14s;
}
.animate-delay8 {
  animation-delay: 0.16s;
}
.animate-delay9 {
  animation-delay: 0.18s;
}
.animate-delay10 {
  animation-delay: 0.20s;
}
.animate-delay11 {
  animation-delay: 0.22s;
}
.animate-delay12 {
  animation-delay: 0.24s;
}
.animate-delay13 {
  animation-delay: 0.26s;
}
.animate-delay14 {
  animation-delay: 0.28s;
}
.animate-delay15 {
  animation-delay: 0.30s;
}

/* Footer */
footer {
  text-align: center;
  padding: 30px;
  background: #1c1c1c;
  color: #aaa;
  font-size: 0.9rem;
}

</style>
<body>
  <header class="header">
    <h1>Styles By Mercy</h1>
    <p>Shop More - Female Collection</p>
  </header>

  <main class="grid-container">
   <a href="display.php"> <div class="card animate-delay1">
      <img src="image/Brown summer outfit .jpeg" alt="Velvet Dress">
      <div class="info">
        <h3>Summer Outfit</h3>
        <span>$24</span>
      </div>
    </div></a>

   <a href="display.php"> <div class="card animate-delay2">
      <img src="image/Floral  Maxidress .jpeg" alt="Silk Gown">
      <div class="info">
        <h3>Floral Maxi Dress</h3>
        <span>$25</span>
      </div>
    </div></a>

   <a href="display.php"> <div class="card animate-delay3">
      <img src="image/Maxi Dress.jpeg" alt="Satin Set">
      <div class="info">
        <h3>Maxi Dress</h3>
        <span>$22</span>
      </div>
    </div></a>

   <a href="display.php"> <div class="card animate-delay4">
      <img src="image/green jumpsuit.jpeg" alt="Jumpsuit">
      <div class="info">
        <h3>Luxury Green Coperate</h3>
        <span>$38</span>
      </div>
    </div></a>

   <a href="display.php"> <div class="card animate-delay5">
      <img src="image/pink short.jpeg" alt="Bf Jeans">
      <div class="info">
        <h3>Pink Shorts</h3>
        <span>$25</span>
      </div>
    </div></a>

    <a href="display.php"><div class="card animate-delay6">
      <img src="image/crop tops.jpeg" alt="Crop Top">
      <div class="info">
        <h3>Crop Tops</h3>
        <span>$15</span>
      </div>
    </div></a>

    <a href="display.php"><div class="card animate-delay7">
      <img src="image/green shorts.jpeg" alt="Cargo Pants">
      <div class="info">
        <h3>Green Top & Shorts</h3>
        <span>$56</span>
      </div>
    </div></a>

    <a href="display.php"><div class="card animate-delay8">
      <img src="image/Summer outfit .jpeg" alt="Outwares">
      <div class="info">
        <h3>Beach Outfits</h3>
        <span>$40</span>
      </div>
    </div></a>

    <a href="display.php"><div class="card animate-delay9">
      <img src="image/couples wear.jpeg" alt="Black Gown">
      <div class="info">
        <h3>Brown Couple Wear</h3>
        <span>$30</span>
      </div>
    </div></a>

    <a href="display.php"><div class="card animate-delay10">
      <img src="image/coperate trouser.jpeg" alt="Hijab">
      <div class="info">
        <h3>Women Coperate Trouser</h3>
        <span>$30</span>
      </div>
    </div></a>

   <a href="display.php"> <div class="card animate-delay11">
      <img src="image/jersey top.jpeg" alt="Sundress">
      <div class="info">
        <h3>Jersey Top</h3>
        <span>$28</span>
      </div>
    </div></a>

    <a href="display.php"><div class="card animate-delay12">
      <img src="image/hoodie.jpeg" alt="Shorts">
      <div class="info">
        <h3>Hoodie</h3>
        <span>$20</span>
      </div>
    </div></a>

    <a href="display.php"><div class="card animate-delay13">
      <img src="image/joggers.jpeg" alt="Loafers">
      <div class="info">
        <h3>Joggers</h3>
        <span>$30</span>
      </div>
    </div></a>

    <a href="display.php"><div class="card animate-delay14">
      <img src="image/nightwear.jpeg" alt="Mini Skirt">
      <div class="info">
        <h3>Night Wear</h3>
        <span>$15</span>
      </div>
    </div></a>

    <a href="display.php"><div class="card animate-delay15">
      <img src="image/red jacket.jpeg" alt="Heels">
      <div class="info">
        <h3>Jacket & Bf Jeans</h3>
        <span>$50</span>
      </div>
    </div></a>



  </main>

  <footer>
    <p>&copy; 2025 Designed By Mercy.</p>
  </footer>
</body>
</html>
