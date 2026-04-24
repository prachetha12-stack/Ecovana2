<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ecovana</title>

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Segoe UI', sans-serif;
}

body {
  background: #cefa88;
}

/* HERO SECTION */
.hero {
  height: 100vh;
  background: url('https://img.freepik.com/free-photo/lush-green-tropical-palm-leaves-background_84443-73341.jpg?semt=ais_hybrid&w=740&q=80') no-repeat center/cover;
  position: relative;
  color: white;
}

/* DARK OVERLAY */
.hero::before {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,0.4);
}

/* NAVBAR */
.navbar {
  position: relative;
  z-index: 2;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px 50px;
}

.logo {
  font-size: 24px;
  font-weight: bold;
}

.nav-actions {
  display: flex;
  gap: 15px;
  align-items: center;
}

.btn {
  padding: 10px 18px;
  border-radius: 25px;
  border: 1px solid rgba(255,255,255,0.4);
  background: transparent;
  color: white;
  cursor: pointer;
  transition: 0.3s;
}

.btn:hover {
  background: rgba(255,255,255,0.2);
}

.btn-primary {
  background: #3cb371;
  border: none;
}

/* HERO CONTENT */
.hero-content {
  position: relative;
  z-index: 2;
  max-width: 700px;
  padding: 100px 50px;
}

.tag {
  display: inline-block;
  background: rgba(255,255,255,0.2);
  padding: 8px 16px;
  border-radius: 20px;
  margin-bottom: 20px;
  font-size: 14px;
}

.hero h1 {
  font-size: 50px;
  line-height: 1.2;
  margin-bottom: 20px;
}

.hero p {
  font-size: 18px;
  margin-bottom: 30px;
}

/* BUTTON GROUP */
.buttons {
  display: flex;
  gap: 15px;
}

.glass-box {
  position: absolute;
  right: 60px;
  bottom: 120px;
  padding: 20px 30px;
  border-radius: 15px;
  background: rgba(255,255,255,0.2);
  backdrop-filter: blur(10px);
  text-align: center;
}

.glass-box h2 {
  font-size: 28px;
}

/* SCROLL ICON */
.scroll {
  position: absolute;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%);
  font-size: 24px;
  opacity: 0.7;
}
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
.container1 {
  max-width: 1100px;
  margin: auto;
  padding: 60px 20px;
}

/* HEADER */
.small-title {
  color: #47852f;
  font-size: 14px;
  font: bold;
  letter-spacing: 1px;
  margin-bottom: 10px;
}

h1 {
  font-size: 50px;
  margin-bottom: 20px;
  color: #d5ffd7;
}

p.desc {
  max-width: 700px;
  color: #666;
  margin-bottom: 40px;
  line-height: 1.6;
}

/* GRID */
.grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
}

/* CARD */
.card2 {
  background: white;
  padding: 20px;
  border-radius: 15px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.4);
  transition: 0.3s;
  display: flex;
  gap: 15px;
  align-items: flex-start;
}

.card2:hover {
  transform: translateY(-5px);
}

/* ICON */
.icon {
  width: 80px;
  height: 40px;
  background: #e1ffe1;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 18px;
}

/* TEXT */
.card2 h3 {
  font-size: 22px;
  margin-bottom: 5px;
}

.card2 p {
  font-size: 14px;
  color: #666;
}
.section{
            margin-bottom: 50px;
        }
        .contact-info{
            border-top: 2px solid #4caf50;
            padding-top: 20px;
            font-size: 1em;
            color: #555;
        }
        .contact-info span{
            display: block;
            margin-bottom: 8px;
        }
</style>
<script>
    function toggleMenu(){
        alert("Menu clicked");
    }
</script>
</head>

<body>

<section class="hero">

  <!-- NAVBAR -->
  <div class="navbar">
    <div class="logo">ECOVANA</div>

    <div class="nav-actions">
      <a href="login.php"><button class="btn">Sign In</button></a>
      <a href="shopping.php"><button class="btn btn-primary">Shop Now</button></a>
      <div onclick="toggleMenu()">☰</div>
    </div>
  </div>

  <!-- HERO CONTENT -->
  <div class="hero-content">
    <div class="tag">• ONLINE PLANT NURSERY • EST. 2026</div>

    <h1>Bring Nature Home.</h1>

    <p>
      Handpicked indoor plants, rare succulents, and fragrant herbs —
      delivered healthy to your doorstep.
    </p>

    <div class="buttons">
      <a href="shopping.php"><button class="btn btn-primary">Shop Plants →</button></a>
      <a href="signup.php"><button class="btn">Create Account</button></a>
    </div>
  </div>

  <!-- GLASS BOX -->
  <div class="glass-box">
    <h2>200+</h2>
    <p>Plant Varieties</p>
  </div>

  <!-- SCROLL ICON -->
  <div class="scroll">⌄</div><br>
  <br>
  <h2 style="color:darkgreen;">   Explore the Categories </h2><br>
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

   <!-- Main Banner -->
 <div class="card">
    <img src="https://hips.hearstapps.com/hmg-prod/images/annual-flower-arrangements-on-a-patio-royalty-free-image-1749490530.pjpeg?crop=0.844xw:1xh;center,top&resize=1200:*" alt="plants">
    <div class="overlay">
      <h2>Outdoor Plants</h2>
        <p>Beautify your garden and balcony</p>
      <div class="btn">50+ varieties</div>
    </div>
  </div> 

  <!-- Small Cards -->
  <div class="card">
    <img src="https://images.unsplash.com/photo-1512428813834-c702c7702b78" alt="succulents">
    <div class="overlay">
      <h2>Succulents</h2>
      <p>Grow beautiful succulents with minimal care</p>
      <div class="btn">50+ varieties</div>
    </div>
  </div>

  <!-- Small Cards -->
   <div class="card">
    <img src="https://gachwala.in/wp-content/uploads/2022/06/buy_mint_pudina_plant_3.jpg" alt="herbs">
    <div class="overlay">
      <h2>Herbs</h2>
      <p>Grow your own fresh herbs</p>
      <div class="btn">90+ varieties</div>
    </div>
  </div>

   <!-- Small Cards -->
  <div class="card">
    <img src="https://images.unsplash.com/photo-1665479754958-1a8bdc47cc0d?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dHVsc2klMjBwbGFudHxlbnwwfHwwfHx8MA%3D%3D" alt="Medicinal Plants">
    <div class="overlay">
      <h2>Medicinal Plants</h2>
      <p>Grow healing plants for natural remedies</p>
      <div class="btn">50+ varieties</div>
    </div>
  </div>

     <!-- Small Cards -->
  <div class="card">
    <img src="https://hips.hearstapps.com/hmg-prod/images/beautiful-summer-garden-featuring-a-spectacular-royalty-free-image-1711378499.jpg?crop=0.752xw:1.00xh;0.0192xw,0&resize=1120:*" alt="Shrubs">
    <div class="overlay">
      <h2>Shrubs</h2>
      <p>Grow beautiful shrubs for your garden</p>
      <div class="btn">30+ varieties</div>
    </div>
  </div>

     <!-- Small Cards -->
  <div class="card">
    <img src="https://thumbs.dreamstime.com/b/collection-assorted-gardening-tools-wooden-handles-arranged-neatly-soil-surrounded-vibrant-green-plants-330858582.jpg" alt="Shrubs">
    <div class="overlay">
      <h2>Tools</h2>
      <p>The right tools make every plant trive.</p>
      <div class="btn">20+ varieties</div>
    </div>
  </div>

  <center>
     <div class="nav-actions">
      <a href="shopping.php"><button class="btn">Browse All Plants</button></a>
  </center>
  <br>
    <h2 style="color:black;">   Why Choose Ecovana? </h2><br>
    <div class="container">

  <h1 style="color: darkgreen;">Plants you can trust,<br>delivered with care.</h1>

  <p class="desc">
    <h3 style="color: #47852f;">We’re not just an online store — we’re a nursery that has been growing
    healthy plants for years. Every plant you order is nurtured in our greenhouse,
    not sourced from a warehouse.</h3>
  </p>

  <div class="grid">

    <div class="card2">
      <div class="icon">🌿</div>
      <div>
        <h2>Expert-Curated Selection</h2>
        <h3 style="color: black;"><p>Every plant is hand-selected for health, growth, and suitability.</p></h3>
      </div>
    </div>

    <div class="card2">
      <div class="icon">🚚</div>
      <div>
        <h2>Safe Doorstep Delivery</h2>
        <h3 style="color: black;"><p>Special packaging keeps plants safe and healthy during delivery.</p></h3>
      </div>
    </div>
    <div class="card2">
      <div class="icon">✔️</div>
      <div>
        <h2>Quality Guarantee</h2>
        <h3 style="color: black;"><p>7-day plant health guarantee with free replacement.</p></h3>
      </div>
    </div>

    <div class="card2">
      <div class="icon">💬</div>
      <div>
        <h2>Care Guidance Included</h2>
        <h3 style="color: black;"><p>Get personalized care tips and support for your plants.</p></h3>
      </div>
    </div>
    </div>
    <div class="section contact-info">
                <center><img src="cf3.png" alt="Natural">
            <h3>Contact Us</h3>
            <span><b> Email:</b> ecovananurserymanagement@gmail.com</span>
            <span><b> Mobile (Whatsapp No):</b> 1800-2431796 / +918745239012 / +919645281055</span>
            <span> <b>Website:</b> WWW.EcovanaPlantNursery.com</span>
            <span><b>Social Media account:</b> Ecovana_Plant_Nursery<br><br>
                <b>Instagram | Twitter | Facebook | Youtube</b> 
            </span>
</center>
            </div>
        </div><br><br>
</div>

</section>
</body>
</html>