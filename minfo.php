<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>More information - Ecovana</title>
    <style>
        html,body{
            height: 100%;
            margin: 0;
            font-family: 'Segoe UI','Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            scroll-behavior: smooth;
            background: #f5f8fa;
            color: #222;
        }
        .top-header{
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            background-color: green;
            border-bottom: white;
        }
        .right a{
            margin: 0;
            font-size: 18px;
            letter-spacing: 2px;
            color: white;
        }
        .full-image{
            width: 100%;
            height: 80vh;
            background-image: url('20.jpg');
            background-size: cover;
            background-position: center;
            position: relative;
            overflow: hidden;
            animation: zoomMove 12s ease-in-out infinite alternate, changeImage 10s infinite;
        }
        @keyframes zoomMove{
            0%{transform: scale(1) translateX(0);
        }
        100%{
            transform: scale(1.08) translateX(-10px);
        }
        }
        @keyframes changeImage{
            0%{
                background-image: url('20.jpg');
            }
            50%{
                background-image: url('3.jpg');
            }
            100%{
                background-image: url('2.jpg');

            }
        }
        .hero-content{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            text-align: center;
            color: white;
            z-index: 10;
            width: 80%;
        }
        .hero-content h1{
            font-size: 5rem;
            margin-bottom: 10px;
            text-shadow: 2px 2px 2px rgba(0,0,0,0.7);
        }
        .hero-content p{
            font-size: 1.9rem;
            text-shadow: 1px 1px 4px rgb(0, 0, 0,0.7);
        }
        .features{
            display: flex;
            justify-content: center;
            gap: 100px;
            padding: 80px;
            background: #f7f7f7;
            text-align: center;
        }
        .feature-box{
            width: 300px;
        }
        .feature-box img{
            width: 80px;
            margin-bottom: 20px;
        }
        .feature-box h3{
            font-size: 24px;
            margin-bottom: 20px;
        }
        .feature-box p{
            color: #777;
            line-height: 1.6;
        }
        .content{
            padding: 40px 15px 60px;
            max-width: 900px;
            margin: auto;
        }
        h1,h2{
            color: #ffffff;
            font-weight: 700;
            margin-bottom: 15px;
        }
        p{
            font-size: 1.0rem;
            line-height: 1.6rem;
            margin-bottom: 25px;
            color: #fffffff5;
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
        document.addEventListener('DOMContentLoaded',()=>{
        });
    </script>
</head>
<body>
    <div class="top-header">
        <div class="right">
            <a href="index.php">Home</a>
                <a href="login.php">Login</a>
            </span>
        </div>
</div>
    <div class="full-image">
        <div class="hero-content">
            <h1>Welcome To <br> Ecovana</h1>
            <p>Your Journey To A Greener World Starts Here.</p>
        </div>
    </div>
    <div class="content">
        <section class="features">
            <div class="feature-box">
                <img src="s3.png" alt="Natural">
            <h3>Introduction</h3>
            <p>Welcome to our Online Plant Nursery Management, where nature meets technology! We connect you with a wide variety of plants, care tips and expert landscaping advice right at your fingertips.</p>
            </div>
        
        <div class="feature-box">
                <img src="s2.png" alt="Natural">
            <h3>Main Motive</h3>
            <p>Our plant nursery management system aims to provide a seamless way for customers to explore, select, and purchase plants online while facilitating efficient nursery management for staff.</p>
        </div>

        <div class="feature-box">
                <img src="b1.png" alt="Natural">
            <h3>About Plants</h3>
            <p>Plants exist in the weather and light rays that surround them. We cultivate a wide variety of indoor and outdoor plants suited to different environments and care levels. Our expert guidanceensures your plants thrive.</p>
        </div>
        </section>

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
        </div>
        </div>
        </body>
        </html>