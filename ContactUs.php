<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Poppins', sans-serif;
  background-color: #f9f9f9;
  color: #333;
  line-height: 1.6;
}

header {
  background-color: gray;
  color: #fff;
  padding: 30px 20px;
  text-align: center;
}

header h1 {
  font-size: 2.5rem;
  margin-bottom: 10px;
}

header .location {
  font-size: 1rem;
  font-weight: 300;
}

main {
  padding: 40px 20px;
  max-width: 900px;
  margin: 0 auto;
}

section {
  margin-bottom: 40px;
}

.contact-info p,
.social-media a {
  font-size: 1rem;
  margin-bottom: 10px;
}

.contact-form form {
  display: flex;
  flex-direction: column;
}

.contact-form input,
.contact-form textarea {
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.contact-form button {
  padding: 12px;
  background-color: gray;
  color: #fff;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  font-weight: bold;
  transition: background-color 0.3s ease;
}

.contact-form button:hover {
  background-color: #2e2b2b;
}

.social-media .icons {
  display: flex;
  gap: 15px;
  flex-wrap: wrap;
}

.social-media a {
  text-decoration: none;
  background-color: gray;
  color: white;
  padding: 10px 15px;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.social-media a:hover {
  background-color: rgb(40, 38, 38);
}

footer {
  background-color: gray;
  color: white;
  text-align: center;
  padding: 20px 10px;
  margin-top: 30px;
}

</style>
<body>
  <header>
    <h1>Styles By Mercy</h1>
    <p class="location">Located in Agbor, Delta State</p>
  </header>

  <main>
    <section class="contact-info">
      <h2>Contact Information</h2>
      <p><strong>Phone:</strong> +234 704 560 4953</p>
      <p><strong>Email:</strong> doubraraji@gmail.com</p>
      <p><strong>Address:</strong> Shop 20 Garrage Market, Lagos Asaba Road Agbor Delta state</p>
      <p><strong>Business Hours:</strong> Mon - Sat: 9AM - 6PM</p>
    </section>

    <section class="contact-form">
      <h2>Send Us a Message</h2>
      <form action="#" method="post">
        <input type="text" name="name" placeholder="Your Full Name" required />
        <input type="email" name="email" placeholder="Your Email Address" required />
        <input type="text" name="subject" placeholder="Subject" />
        <textarea name="message" placeholder="Your Message..." required></textarea>
        <button type="submit">Send Message</button>
      </form>
    </section>

    <section class="social-media">
      <h2>Follow Us</h2>
      <div class="icons">
        <a href="#" target="_blank">Instagram</a>
        <a href="#" target="_blank">Facebook</a>
        <a href="#" target="_blank">WhatsApp</a>
      </div>
    </section>

    <section class="map">
      <h2>Find Us on the Map</h2>
      <iframe 
        src="https://www.google.com/maps?q=Agbor,Delta%20State,Nigeria&output=embed"
        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy">
      </iframe>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 Designed By Mercy.</p>
  </footer>
</body>
</html>
