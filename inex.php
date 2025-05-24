<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Real Estate</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <header>
    <nav class="navbar">
      <div class="logo">🏡 BALARAM HEIGHTS</div>
      <ul class="nav-links" id="navLinks">
        <li><a href="home.php">Home</a></li>
        <li><a href="details.php">Listings</a></li>
        <li><a href="gallery.php">Gallery</a></li>
      </ul>
      <div class="hamburger" id="hamburger">
        ☰
      </div>
    </nav>
  </header>
  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: ;
  
}

.navbar {
  background-color:rgb(189, 137, 42);
  color: white;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1rem 2rem;
  position: relative;
}

.logo {
  font-size: 1.5rem;
  font-weight: bold;
}

.nav-links {
  list-style: none;
  display: flex;
  gap: 2rem;
}

.nav-links li a {
  color: white;
  text-decoration: none;
  font-weight: 500;
  font-family: bold;
}

.hamburger {
  display: none;
  font-size: 1.8rem;
  cursor: pointer;
}

@media (max-width: 768px) {
  .nav-links {
    flex-direction: column;
    position: absolute;
    top: 70px;
    right: 0;
    background-color: #34495e;
    width: 100%;
    display: none;
    padding: 1rem 0;
  }

  .nav-links.active {
    display: flex;
  }

  .hamburger {
    display: block;
  }
}
.hero {
    background-image: url(image/balaram.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 150vh;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.hero::before {
  content: '';
  position: absolute;
  top: 0; left: 0;
  width: 100%; height: 100%;
  z-index: 1;
}

.hero-content {
  position: relative;
  z-index: 2;
  max-width: 600px;
}

.hero h1 {
  font-size: 3rem;
  margin-bottom: 1rem;
  
}

.hero p {
  font-size: 1.2rem;
  margin-bottom: 2rem;
}

.signup-btn {
  background-color: #e67e22;
  border: none;
  padding: 0.75rem 1.5rem;
  font-size: 1rem;
  border-radius: 5px;
  cursor: pointer;
  transition: background 0.3s;
}

.signup-btn:hover {
  background-color: #d35400;
}

.map-section {
  padding: 20px 10px;
  background-color: #f9f9f9;
  text-align: center;
}

.map-section h2 {
  font-size: 2rem;
  color: #2c3e50;
  margin-bottom: 20px;
}

.map-section iframe {
  width: 50%;
  max-width: 50%;
  height: 450px;
  border: 0;
  border-radius: 10px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.site-footer {
  background-color:rgb(189, 137, 42);
  color: black;
  padding: 30px 20px;
  text-align: center;
}

.footer-content {
  max-width: 800px;
  margin: auto;
  font-size: 0.95rem;
}

.site-footer a {
  color: black;
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  margin-top: 5px;
}

.site-footer a:hover {
  text-decoration: underline;
}

.icon {
  width: 24px;
  height: 24px;
  margin-right: 8px;
}

  </style>
  <script>
    const hamburger = document.getElementById('hamburger');
const navLinks = document.getElementById('navLinks');

hamburger.addEventListener('click', () => {
  navLinks.classList.toggle('active');
});

  </script>
  

    <section class="hero">
  <div class="hero-content">
    <h1>Find Your Dream Home</h1>
    <p>Browse listings, connect with agents, and take the next step.</p>
   </div>
</section>

<div class="project">
<h1>Project</h1>
  <h2>G-7 Project – A, B, C Wing</h2>

  <div class="wings">
    <!-- A Wing -->
    <div class="wing-card">
      <h3>A Wing</h3>
      <p><strong>1 BHK:</strong> 688-691 sq.ft – ₹43 Lakhs</p>
      <p><strong>2 BHK:</strong> 911 sq.ft – ₹57 Lakhs</p>
    </div>

    <!-- B Wing -->
    <div class="wing-card">
      <h3>B Wing</h3>
      <p><strong>1 BHK:</strong> 688sq.ft – ₹43 Lakhs</p>
      <p><strong>2 BHK:</strong> 911 sq.ft – ₹57 Lakhs</p>
    </div>

    <!-- C Wing -->
    <div class="wing-card">
      <h3>C Wing</h3>
      <p><strong>1 BHK:</strong> 620 sq.ft – ₹47 Lakhs</p>
      <p><strong>2 BHK:</strong> 920 sq.ft – ₹69 Lakhs</p>
    </div>
    <div class="wing-card">
      <h3>D Wing</h3>
      <p><strong>1 BHK:</strong> 620 sq.ft – ₹47 Lakhs</p>
      <p><strong>2 BHK:</strong> 920 sq.ft – ₹69 Lakhs</p>
    </div>
  </div>
</div>
<style>
  .project {
  padding: 30px;
  background-color: #f7f9fc;
  font-family: Arial, sans-serif;
}
.project h1{
  text-align: center;
  background-color:rgb(189, 137, 42);
  padding-left: 20px;
  padding-bottom: 10px;
  margin-bottom: 40px;
}

.project h2 {
  text-align: center;
  font-size: 2rem;
  color: #2c3e50;
  margin-bottom: 30px;
}

.wings {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  justify-content: center;
}

.wing-card {
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  padding: 40px;
  width: 300px;
  transition: transform 0.3s;
}

.wing-card:hover {
  transform: translateY(-5px);
}

.wing-card h3 {
  font-size: 1.5rem;
  margin-bottom: 15px;
  color: #1f2937;
}

.wing-card p {
  font-size: 1rem;
  color: #444;
  margin: 5px 0;
}

  </style>
</section>

<section class="">
  <h2>Property Enquiry</h2>
  <form action="submit.php" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <label for="phone">Phone Number:</label>
    <input type="text" name="phone" id="phone" required>

    <label for="budget">Budget:</label>
    <input type="text" name="budget" id="budget" required>

    <label for="property_type">Property Type:</label>
    <select name="property_type" id="property_type" required>
      <option value="">-- Select Property Type --</option>
      <option value="1BHK">1BHK</option>
      <option value="2BHK">2BHK</option>
      <option value="1RK">1RK</option>
    </select>

    <input type="submit" value="Submit Enquiry">
  </form>
  <style>
  body{
      background-color: rgb(189, 137, 42);
      text-align: center; 
    }
  form {
        background-color: #ffffff;
        padding: 25px 20px;
        border-radius: 16px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        width: 80%;
        max-width: 600px;
        display: flex;
        flex-direction: column;
        gap: 12px;
        background-color: beige;
        margin-bottom: 40px;
        position: center;
      }

      h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
      }

      label {
        font-weight: 500;
        font-size: 14px;
        color: #444;
      }

      input[type="text"],
      input[type="email"],
      select {
        padding: 10px 12px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 14px;
        background-color: #fefefe;
        transition: border 0.3s;
      }

      input:focus,
      select:focus {
        border-color: #007bff;
        outline: none;
      }

      input[type="submit"] {
        margin-top: 10px;
        background: #007bff;
        color: white;
        border: none;
        padding: 12px;
        font-size: 16px;
        border-radius: 8px;
        cursor: pointer;
        transition: background 0.3s;
      }

      input[type="submit"]:hover {
        background: #28a745;
      }

      @media (max-width: 480px) {
        form {
          padding: 20px 15px;
        }
      }
  </style>
</section>



<section class="map-section">
  <h2>Our Location</h2>
  <iframe
    src="https://www.google.com/maps?q=19.2363871,73.1246653&z=15&output=embed"
    width="50%"
    height="250"
    style="border:0;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</section>

<footer class="site-footer">
  <div class="footer-content">
    <p><strong>📍 Address:</strong> Balaram Heights, Kalyan East, Maharashtra, India</p>
    <p>
      <a href="https://wa.me/918433622161" target="_blank">
        <img src="https://img.icons8.com/color/48/000000/whatsapp--v1.png" alt="WhatsApp" class="icon" />
        +91 8433622161
      </a>
    </p>
    <p>
      <a href="https://www.instagram.com/saiparadise2025/" target="_blank">
        <img src="https://img.icons8.com/color/48/000000/instagram-new--v1.png" alt="Instagram" class="icon" />
        @Saiparadise2025
    </p>
    <p>&copy; 2025 Dream Homes. All rights reserved.</p>
  </div>
</footer>

</body>
</html>
