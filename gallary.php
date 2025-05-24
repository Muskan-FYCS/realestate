<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Real Estate</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<a href="index.php"></a>
<section class="gallery-section" id="gallery">
  <h2>Our Property Gallery</h2>
  <div class="gallery-grid">
    <img src="image//images.jpeg" alt="" />
    <img src="image/1.jpg" alt="" />
    <img src="image/balaram.jpg" alt="" />
    <img src="image/download.jpeg" alt="" />
    <img src="image/HLD-Terraces-Amenties2.jpg" alt="" />
    <img src="image/OmnidianImage-1381.jpg" alt="" />
    <img src="image/pisawali1.jpg" alt="" />
    <img src="image/pisawali3.jpg" alt="" />
  </div>
</section>

<style>
  .gallery-section {
  padding: 40px 20px;
  background-color: rgb(189, 137, 42);
  text-align: center;
}

.gallery-section h2 {
  font-size: 2rem;
  color: #2c3e50;
  margin-bottom: 30px;
}

.gallery-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
  max-width: 1200px;
  margin: 0 auto;
}

.gallery-grid img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  border-radius: 10px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
}

.gallery-grid img:hover {
  transform: scale(1.05);
}

  </style>
</body>
</html>
