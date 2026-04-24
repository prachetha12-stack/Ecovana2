<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ECOVANA Plant Store</title>
<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: Arial, sans-serif;
}

body{
    background:#f8f8f5;
    padding:20px;
}

/* Header */
header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:30px;
}

.logo{
    display:flex;
    align-items:center;
    gap:10px;
}

.logo img{
    width:40px;
}

.logo h1{
    font-size:28px;
    color:#222;
}

.nav-buttons{
    display:flex;
    gap:15px;
    align-items:center;
    
}

.btn{
    padding:10px 20px;
    border-radius:25px;
    border:none;
    cursor:pointer;
    font-weight:bold;
}
.signin{
    background:white;
    border:1px solid #ccc;
}
.open-btn {
    margin: 100px auto;
    display: block;
    padding: 5px 10px;
    background: #ffffff;
    color: #fff;
    border: none;
    border-radius: 8px;
    cursor: pointer;
}

.home{
    background:#1f5e2f;
    color:white;
}

/* Products */
.products{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(320px,1fr));
    gap:25px;
}

.card{
    background:white;
    border-radius:25px;
    overflow:hidden;
    box-shadow:0 5px 12px rgba(0,0,0,0.08);
}

.card img{
    width:100%;
    height:280px;
    object-fit:cover;
}

.card-content{
    padding:20px;
}

.category{
    color:#7c8b4e;
    font-size:15px;
    margin-bottom:10px;
}

.title{
    font-size:28px;
    margin-bottom:10px;
    color:#222;
}

.rating{
    color:#5d8b2f;
    margin-bottom:15px;
}

.bottom{
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.price{
    font-size:32px;
    font-weight:bold;
}

.add-btn{
    padding:10px 18px;
    border:none;
    border-radius:20px;
    background:#e7f0e5;
    color:#1f5e2f;
    font-weight:bold;
    cursor:pointer;
}

</style>
<script>
    function toggleMenu(){
        alert("Menu clicked");
    }
function openSearch() {
    document.getElementById("overlay").style.display = "flex";
}

function closeSearch() {
    document.getElementById("overlay").style.display = "none";
}
</script>
</head>
<body>

<header>
    <div class="logo">
        <h1>ECOVANA</h1>
    </div>

    <div class="nav-buttons">
        <a href="search.php"><button class="open-btn" onclick="openSearch()"><img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/search--v1.png" alt="search--v1"/></button></a>
        <a href="login.php"><button class="btn signin">Sign In</button></a>
        <a href="index.php"><button class="btn home">Home</button></a>
        <div onclick="toggleMenu()">☰</div>
    </div>
</header>

<section class="products">

    <!-- Product 1 -->
    <div class="card">
        <a href='succulent'><button class=""><img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6"></button></a>
        <div class="card-content">
            <div class="category">Succulent</div>
            <div class="title">Echeveria Succulent</div>
            <div class="rating">★★★★★ 4.7 (211)</div>

            <div class="bottom">
                <div class="price">₹199</div>
                <a href='add_to_cart.php'><button class="add-btn">🛒 Add</button></a>
            </div>
        </div>
    </div>

    <!-- Product 2 -->
    <div class="card">
        <img src="https://www.idyl.co.in/cdn/shop/files/Tulsi1.webp?v=1756877631">
        <div class="card-content">
            <div class="category">Herb</div>
            <div class="title">Tulsi (Holy Basil)</div>
            <div class="rating">★★★★★ 5 (305)</div>

            <div class="bottom">
                <div class="price">₹129</div>
                <a href='add_to_cart.php'><button class="add-btn">🛒 Add</button></a>
            </div>
        </div>
    </div>
     <!-- Product 3 -->
    <div class="card">
        <img src="https://images.unsplash.com/photo-1586082207282-3dcb61d25ebd?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cm9zZSUyMGZsb3dlcnxlbnwwfHwwfHx8MA%3D%3D">
            <div class="category">Sherbs</div>
            <div class="title">Rose Plant</div>
            <div class="rating">★★★★★ 5 (500)</div>

            <div class="bottom">
                <div class="price">₹189</div>
                <a href='add_to_cart.php'><button class="add-btn">🛒 Add</button></a>
            </div>
        </div>
    </div>
     <!-- Product 4 -->
    <div class="card">
        <img src="https://www.mydomaine.com/thmb/N3StDx3PyGbF0Pwafv-P9-qiNZU=/900x0/filters:no_upscale():strip_icc()/1566417254329_20190821-1566417255317-b9314f1d9f7a4668a466c5ffb1913a8f.jpg">
            <div class="category">Herb</div>
            <div class="title">Peace Lily</div>
            <div class="rating">★★★★★ 4.5 (280)</div>

            <div class="bottom">
                <div class="price">₹167</div>
                <a href='add_to_cart.php'><button class="add-btn">🛒 Add</button></a>
            </div>
        </div>
    </div>
<!-- Product 5 -->
    <div class="card">
        <img src="https://media.istockphoto.com/id/183412216/photo/closeup-of-orange-marigold-flowers-and-foliage.jpg?s=612x612&w=0&k=20&c=O6933Jjnj0uGT7AXg9HhTY6L20ru-9w7iPYuyvHKQkk=">
        <div class="card-content">
            <div class="category">Herb</div>
            <div class="title">MariGold</div>
            <div class="rating">★★★★ 4 (209)</div>

            <div class="bottom">
                <div class="price">₹129</div>
                <a href='add_to_cart.php'><button class="add-btn">🛒 Add</button></a>
            </div>
        </div>
    </div>
    <!-- Product 6 -->
    <div class="card">
        <img src="https://t4.ftcdn.net/jpg/00/82/75/51/360_F_82755187_ispxPOCGLG43ovhhliOxCThaZlkec1zA.jpg">
        <div class="card-content">
            <div class="category">Herb</div>
            <div class="title">Basil</div>
            <div class="rating">★★★★★ 4.7 (100)</div>

            <div class="bottom">
                <div class="price">₹188</div>
                <a href='add_to_cart.php'><button class="add-btn">🛒 Add</button></a>
            </div>
        </div>
    </div>

     <!-- Product 7 -->
    <div class="card">
        <img src="https://images.unsplash.com/photo-1588908933351-eeb8cd4c4521?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8bWludCUyMHBsYW50fGVufDB8fDB8fHww">
        <div class="card-content">
            <div class="category">Herbs</div>
            <div class="title">Mint</div>
            <div class="rating">★★★★ 4.0 (250)</div>

            <div class="bottom">
                <div class="price">₹109</div>
                <a href='add_to_cart.php'><button class="add-btn">🛒 Add</button></a>
            </div>
        </div>
    </div>

     <!-- Product 8 -->
    <div class="card">
        <img src="https://www.vedonic.com/cdn/shop/products/1iLdpEDeEiCNr9pZHMvhyPnVHo3KbCAri_1024x1024.jpg?v=1659535880">
        <div class="card-content">
            <div class="category">Herbs</div>
            <div class="title">Coriander</div>
            <div class="rating">★★★★★ 4.9 (302)</div>

            <div class="bottom">
                <div class="price">₹166</div>
                <a href='add_to_cart.php'><button class="add-btn">🛒 Add</button></a>
            </div>
        </div>
    </div>

     <!-- Product 9 -->
    <div class="card">
        <img src="https://www.thespruce.com/thmb/eYlCmLEI6ojL6Z2y-09xSCBs7Is=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/growing-oregano-plants-1402818-11-ce2a0899a12e4767a5ec71340464f508.jpg">
        <div class="card-content">
            <div class="category">Herbs</div>
            <div class="title">Origano</div>
            <div class="rating">★★★★ 3.8 (288)</div>

            <div class="bottom">
                <div class="price">₹209</div>
                <a href='add_to_cart.php'><button class="add-btn">🛒 Add</button></a>
            </div>
        </div>
    </div>

     <!-- Product 10 -->
    <div class="card">
        <img src="https://dukaan.b-cdn.net/700x700/webp/730950/570a0a01-8039-4174-b518-9bf54edfe5fb/img-0465-d27786e4-c676-425f-bed6-9b5e2195245f.JPG">
        <div class="card-content">
            <div class="category">Herbs</div>
            <div class="title">Rosemary</div>
            <div class="rating">★★★★★ 4.5 (377)</div>

            <div class="bottom">
                <div class="price">₹250</div>
                <a href='add_to_cart.php'><button class="add-btn">🛒 Add</button></a>
            </div>
        </div>
    </div>

     <!-- Product 11 -->
    <div class="card">
        <img src="https://seedandplant.com/cdn/shop/products/ThymeSeeds.jpg?v=1622947621">
        <div class="card-content">
            <div class="category">Herbs</div>
            <div class="title">Thyme</div>
            <div class="rating">★★★★★ 4.2 (187)</div>

            <div class="bottom">
                <div class="price">₹136</div>
                <a href='add_to_cart.php'><button class="add-btn">🛒 Add</button></a>
            </div>
        </div>
    </div>

     <!-- Product 12 -->
    <div class="card">
        <img src="https://cdn.britannica.com/10/198810-050-A2364A2D/sage-plant.jpg">
        <div class="card-content">
            <div class="category">Herbs</div>
            <div class="title">Sage</div>
            <div class="rating">★★★★ 3.5 (158)</div>

            <div class="bottom">
                <div class="price">₹225</div>
                <a href='add_to_cart.php'><button class="add-btn">🛒 Add</button></a>
            </div>
        </div>
    </div>

     <!-- Product 13 -->
    <div class="card">
        <img src="https://growagoodlife.com/wp-content/uploads/2023/05/grow-dill-plant-square.jpg">
        <div class="card-content">
            <div class="category">Herbs</div>
            <div class="title">Dill</div>
            <div class="rating">★★★★★ 4.1 (190)</div>

            <div class="bottom">
                <div class="price">₹152</div>
                <a href='add_to_cart.php'><button class="add-btn">🛒 Add</button></a>
            </div>
        </div>
    </div>

     <!-- Product 14 -->
    <div class="card">
        <img src="https://www.gardenia.net/wp-content/uploads/2015/02/shutterstock_1736663630-Optimized.jpg">
        <div class="card-content">
            <div class="category">Herbs</div>
            <div class="title">Chives</div>
            <div class="rating">★★★★★ 4.3 (334)</div>

            <div class="bottom">
                <div class="price">₹270</div>
                <a href='add_to_cart.php'><button class="add-btn">🛒 Add</button></a>
            </div>
        </div>
    </div>

     <!-- Product 15 -->
    <div class="card">
        <img src="https://shrigramorganics.com/wp-content/uploads/2020/06/pg-bougainvillea-glabra-pink-800x800-1.jpg">
        <div class="card-content">
            <div class="category">Shrub</div>
            <div class="title">Bougainvillea</div>
            <div class="rating">★★★★★ 4.6 (422)</div>

            <div class="bottom">
                <div class="price">₹199</div>
                <a href='add_to_cart.php'><button class="add-btn">🛒 Add</button></a>
            </div>
        </div>
    </div>

     <!-- Product 16 -->
    <div class="card">
        <img src="https://dukaan.b-cdn.net/700x700/webp/7076809/ccbe69ad-0081-487e-a10b-b9abb9ef50be/61t-nubp3xl-789055e4-ec1f-4882-bb17-adfa4dde7067.jpg">
        <div class="card-content">
            <div class="category">Shrub</div>
            <div class="title">Azalea</div>
            <div class="rating">★★★★ 3.5 (177)</div>

            <div class="bottom">
                <div class="price">₹129</div>
                <a href='add_to_cart.php'><button class="add-btn">🛒 Add</button></a>
            </div>
        </div>
    </div>

     <!-- Product 17 -->
    <div class="card">
        <img src="https://havenplant.in/cdn/shop/files/GettyImages-1194703346-2000-fa383754d6c246ac86c338cd207d2648.jpg?v=1724180379">
        <div class="card-content">
            <div class="category">Shrub</div>
            <div class="title">Camellia</div>
            <div class="rating">★★★★★ 4.1 (431)</div>

            <div class="bottom">
                <div class="price">₹219</div>
                <a href='add_to_cart.php'><button class="add-btn">🛒 Add</button></a>
            </div>
        </div>
    </div>

     <!-- Product 18 -->
    <div class="card">
        <img src="https://mybageecha.com/cdn/shop/products/thevetia-peruviana-Yellow_Oleander.jpg?v=1750069403">
        <div class="card-content">
            <div class="category">Shrub</div>
            <div class="title">Oleander</div>
            <div class="rating">★★★★★ 3.9 (327)</div>

            <div class="bottom">
                <div class="price">₹177</div>
                <a href='add_to_cart.php'><button class="add-btn">🛒 Add</button></a>
            </div>
        </div>
    </div>

     <!-- Product 19-->
    <div class="card">
        <img src="https://masonhome.in/cdn/shop/files/freepik_develop-a-portrait-highresolution-commercial-photography-packshot-portrait-image-of-the-item_a1985860-9bda-4088-a674-087be6207aa1.png?v=1774961732&width=1500">
        <div class="card-content">
            <div class="category">Shrub</div>
            <div class="title">Lavender</div>
            <div class="rating">★★★★★ 4.4 (163)</div>

            <div class="bottom">
                <div class="price">₹143</div>
                <a href='add_to_cart.php'><button class="add-btn">🛒 Add</button></a>
            </div>
        </div>
    </div>

     <!-- Product 20 -->
    <div class="card">
        <img src="https://cdn.britannica.com/04/197204-050-B60F40C7/Cape-jasmine-flower.jpg">
        <div class="card-content">
            <div class="category">Shrub</div>
            <div class="title">Gardenia</div>
            <div class="rating">★★★★ 3.9(99)</div>

            <div class="bottom">
                <div class="price">₹205</div>
                <a href='add_to_cart.php'><button class="add-btn">🛒 Add</button></a>
            </div>
        </div>
    </div>

     <!-- Product 21 -->
    <div class="card">
        <img src="https://media.istockphoto.com/id/184844131/photo/tropical-shrub.jpg?s=612x612&w=0&k=20&c=5UCtateAUpX8wRgD8iAL4OgZLnSl-BPSqzNGMGvJnJo=">
        <div class="card-content">
            <div class="category">Shrub</div>
            <div class="title">Ixora</div>
            <div class="rating">★★★★★ 4.8 (550)</div>

            <div class="bottom">
                <div class="price">₹375</div>
                <a href='add_to_cart.php'><button class="add-btn">🛒 Add</button></a>
            </div>
        </div>
    </div>

     <!-- Product 22 -->
    <div class="card">
        <img src="https://www.planetnatural.com/wp-content/uploads/2024/06/Croton-Plant.jpg">
        <div class="card-content">
            <div class="category">Shrub</div>
            <div class="title">Croton</div>
            <div class="rating">★★★★★ 4.4 (300)</div>

            <div class="bottom">
                <div class="price">₹151</div>
                <a href='add_to_cart.php'><button class="add-btn">🛒 Add</button></a>
            </div>
        </div>
    </div>

     <!-- Product 23 -->
    <div class="card">
        <img src="https://cdn.pixabay.com/photo/2023/06/16/16/31/bridalwreath-spirea-8068419_1280.jpg">
        <div class="card-content">
            <div class="category">Shrub</div>
            <div class="title">Spirea</div>
            <div class="rating">★★★★★ 4.2 (488)</div>

            <div class="bottom">
                <div class="price">₹353</div>
                <a href='add_to_cart.php'><button class="add-btn">🛒 Add</button></a>
            </div>
        </div>
    </div>

     <!-- Product 24 -->
    <div class="card">
        <img src="https://t4.ftcdn.net/jpg/06/59/22/57/360_F_659225755_zn6hCb8XcYDMRrr0mfZ0LM4mnkHen3qd.jpg">
        <div class="card-content">
            <div class="category">Shrub</div>
            <div class="title">Rhododendron</div>
            <div class="rating">★★★★★ 3.9 (105)</div>

            <div class="bottom">
                <div class="price">₹298</div>
                <a href='add_to_cart.php'><button class="add-btn">🛒 Add</button></a>
            </div>
        </div>
    </div>

     <!-- Product 25 -->
    <div class="card">
        <img src="https://img.freepik.com/free-photo/vibrant-pink-periwinkle-flower-green-foliage_632498-60802.jpg?semt=ais_hybrid&w=740&q=80">
        <div class="card-content">
            <div class="category">Shrub</div>
            <div class="title">Weigela</div>
            <div class="rating">★★★★★ 4.2 (112)</div>

            <div class="bottom">
                <div class="price">₹102</div>
                <a href='add_to_cart.php'><button class="add-btn">🛒 Add</button></a>
            </div>
        </div>
    </div>

     <!-- Product 26 -->
    <div class="card">
        <img src="https://t3.ftcdn.net/jpg/02/12/37/58/360_F_212375823_kBTiRd0DAHr81I2BDFKGEv7cBXJgcdUC.jpg">
        <div class="card-content">
            <div class="category">Shrub</div>
            <div class="title">Raspberry</div>
            <div class="rating">★★★★ 3.8 (187)</div>

            <div class="bottom">
                <div class="price">₹459</div>
                <a href='add_to_cart.php'><button class="add-btn">🛒 Add</button></a>
            </div>
        </div>
    </div>

     <!-- Product 27 -->
    <div class="card">
        <img src="https://www.hugaplant.com/cdn/shop/files/MAIN_2e53e85f-6075-48be-8477-1a615cf5685c.png?v=1702358753">
        <div class="card-content">
            <div class="category">Shrub</div>
            <div class="title">Lantana</div>
            <div class="rating">★★★★★ 4.8 (199)</div>

            <div class="bottom">
                <div class="price">₹253</div>
                <a href='add_to_cart.php'><button class="add-btn">🛒 Add</button></a>
            </div>
        </div>
    </div>

     <!-- Product 28 -->
    <div class="card">
        <img src="https://www.ugaoo.com/cdn/shop/articles/jatropha.png?v=1671503439">
        <div class="card-content">
            <div class="category">Shrub</div>
            <div class="title">Jatropha</div>
            <div class="rating">★★★★★ 4.1 (205)</div>

            <div class="bottom">
                <div class="price">₹220</div>
                <a href='add_to_cart.php'><button class="add-btn">🛒 Add</button></a>
            </div>
        </div>
    </div>

     <!-- Product 29 -->
    <div class="card">
        <img src="https://www.paudhewale.com/s/660a356584d1ac2391ae69de/68d0e62b6813d54c2461ecbf/paudhewale-2024-07-04t024527-868.png">
        <div class="card-content">
            <div class="category">Shrub</div>
            <div class="title">Chandini</div>
            <div class="rating">★★★★★ 4.4 (89)</div>

            <div class="bottom">
                <div class="price">₹289</div>
                <a href='add_to_cart.php'><button class="add-btn">🛒 Add</button></a>
            </div>
        </div>
    </div>

     <!-- Product 30 -->
    <div class="card">
        <img src="https://www.minislifestyle.com/cdn/shop/files/kanakambaram2_1200x1200.jpg?v=1690997093">
        <div class="card-content">
            <div class="category">Shrub</div>
            <div class="title">Kanakambara</div>
            <div class="rating">★★★★★ 4.1 (309)</div>

            <div class="bottom">
                <div class="price">₹199</div>
                <a href='add_to_cart.php'><button class="add-btn">🛒 Add</button></a>
            </div>
        </div>
    </div>

     <!-- Product 31 -->
    <div class="card">
        <img src="https://cdn.pixabay.com/photo/2022/11/25/03/04/flower-7615286_640.jpg">
        <div class="card-content">
            <div class="category">Shrub</div>
            <div class="title">Tecoma</div>
            <div class="rating">★★★★ 4.0 (360)</div>

            <div class="bottom">
                <div class="price">₹299</div>
                <a href='add_to_cart.php'><button class="add-btn">🛒 Add</button></a>
            </div>
        </div>
    </div>

     <!-- Product 32 -->
    <div class="card">
        <img src="https://thumbs.dreamstime.com/b/hibiscus-rosa-sinensis-yellow-purple-flowers-also-known-as-chinese-china-rose-hawaiian-mallow-tropical-garden-tenerife-412989605.jpg">
        <div class="card-content">
            <div class="category">Shrub</div>
            <div class="title">Hibiscus rosa-sinensis</div>
            <div class="rating">★★★★★ 4.6 (433)</div>

            <div class="bottom">
                <div class="price">₹289</div>
                <a href='add_to_cart.php'><button class="add-btn">🛒 Add</button></a>
            </div>
        </div>
    </div>

     <!-- Product 33 -->
    <div class="card">
        <img src="https://dms.mydukaan.io/original/jpeg/media/cf79c41f-774f-44d1-bace-04725d83a586.png">
        <div class="card-content">
            <div class="category">Shrub</div>
            <div class="title">Kaner</div>
            <div class="rating">★★★★★ 4.5 (219)</div>

            <div class="bottom">
                <div class="price">₹359</div>
                <a href='add_to_cart.php'><button class="add-btn">🛒 Add</button></a>
            </div>
        </div>
    </div>

     <!-- Product 34 -->
    <div class="card">
        <img src="https://cdn.mos.cms.futurecdn.net/GUqVEkQbZwQAAGW3QmmM5U-1600-80.jpg">
        <div class="card-content">
            <div class="category">Shrub</div>
            <div class="title">Plumbago</div>
            <div class="rating">★★★★ 4.0 (99)</div>

            <div class="bottom">
                <div class="price">₹497</div>
                <a href='add_to_cart.php'><button class="add-btn">🛒 Add</button></a>
            </div>
        </div>
    </div>

    <!-- Product 35 -->
    <div class="card">
        <img src="https://t3.ftcdn.net/jpg/07/20/16/24/360_F_720162454_LpIYGsx3HHORnUU4XLvCVuHsFCCZzdL2.jpg">
        <div class="card-content">
            <div class="category">Shrub</div>
            <div class="title">Allamanda</div>
            <div class="rating">★★★★★ 4.1 (156)</div>

            <div class="bottom">
                <div class="price">₹289</div>
                <a href='add_to_cart.php'><button class="add-btn">🛒 Add</button></a>
            </div>
        </div>
    </div>

    <!-- Product 36 -->
    <div class="card">
        <img src="https://nurserynisarga.in/wp-content/uploads/2023/04/1-4.webp">
        <div class="card-content">
            <div class="category">Shrub</div>
            <div class="title">Mussaenda</div>
            <div class="rating">★★★★★ 5.0 (509)</div>

            <div class="bottom">
                <div class="price">₹479</div>
                <a href='add_to_cart.php'><button class="add-btn">🛒 Add</button></a>
            </div>
        </div>
    </div>
</section>

</body>
</html>