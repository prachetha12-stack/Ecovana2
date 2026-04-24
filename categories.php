<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Plant UI</title>

<style>
body {
  font-family: Arial, sans-serif;
  background: #f5f5f5;
  margin: 0;
  padding: 20px;
}

/* Container */
.container {
  max-width: 1000px;
  margin: auto;
}

/* Card Style */
.card {
  position: relative;
  overflow: hidden;
  border-radius: 20px;
  margin-bottom: 20px;
  cursor: pointer;
}

/* Image */
.card img {
  width: 100%;
  height: 300px;
  object-fit: cover;
  transition: transform 0.5s ease;
}

/* Zoom Effect */
.card:hover img {
  transform: scale(1.1);
}

/* Overlay */
.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  color: white;
  padding: 20px;
  background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);
  width: 100%;
}

/* Title */
.overlay h2 {
  margin: 0;
  font-size: 28px;
}

/* Subtitle */
.overlay p {
  margin: 5px 0;
}

/* Button */
.btn {
  display: inline-block;
  margin-top: 10px;
  padding: 8px 14px;
  background: #2e7d32;
  border-radius: 20px;
  font-size: 14px;
}
</style>
</head>

<body>

<div class="container">

  <!-- Main Banner -->
  <div class="card">
    <img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6" alt="plants">
    <div class="overlay">
      <h2>Indoor Plants</h2>
      <p>Purify your living space</p>
      <div class="btn">80+ varieties</div>
    </div>
  </div>

  <!-- Small Cards -->
  <div class="card">
    <img src="https://images.unsplash.com/photo-1512428813834-c702c7702b78" alt="succulents">
    <div class="overlay">
      <h2>Succulents</h2>
    </div>
  </div>

</div>

</body>
</html>