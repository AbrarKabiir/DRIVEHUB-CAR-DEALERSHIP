<?php
    session_start();
?>

<!doctype html>
<html>

<head>
    <title>DriveHub - Premium Car Showroom</title>
    <link rel="stylesheet" href="css/landing.css">
</head>

<body>

    <div class="nav">
        
        <div class="logo">        
            
            <span class="fs">DRIVE</span>
            <span class="sc">HUB</span>

        </div>

        <div class="navbtn">
       
            <a href="login.php" class="btnsign">Sign In</a>
            <a href="register.php" class="btncreate">Create Account</a>       

        </div>
    </div>

    <div class="hero">

        <div class="tagline">PREMIUM AUTOMOTIVE</div>

        <h1 class="title">Find Your <span class="next">Next Drive.</span></h1>

        <p class="description">
            Explore our curated collection of world-class vehicles. Browse specifications,
            schedule test drives, and connect with our expert team - all in one place.
        </p>

        <div class="hero-buttons">
            <a href="register.php" class="btncreatebig">Create an Account</a>
            <a href="login.php" class="btnsignbig">Sign In</a>
        </div>

        <div class="hero-stats">
            <div>
                <div class="hero-stat-number">120+</div>
                <div class="hero-stat-label">Premium Vehicles</div>
            </div>
            <div>
                <div class="hero-stat-number">15+</div>
                <div class="hero-stat-label">Luxury Brands</div>
            </div>
            <div>
                <div class="hero-stat-number">500+</div>
                <div class="hero-stat-label">Happy Clients</div>
            </div>
        </div>
        
    </div>

    <div class="feature-grid">
        <div class="feature-box">
            <div class="feature-icon">&#128269;</div>
            <div class="feature-title">Explore Vehicles</div>
            <p class="feature-text">
                Search by brand or model, filter by price and availability, and open any
                vehicle to see its full specifications.
            </p>
        </div>

        <div class="feature-box">
            <div class="feature-icon">&#128197;</div>
            <div class="feature-title">Request a Test Drive</div>
            <p class="feature-text">
                Pick a date and a time that suits you. Track your request on your dashboard
                until an employee approves it.
            </p>
        </div>

        <div class="feature-box">
            <div class="feature-icon">&#128172;</div>
            <div class="feature-title">Send an Inquiry</div>
            <p class="feature-text">
                Ask about pricing, financing or specifications, and read the reply from our
                team on your dashboard.
            </p>
        </div>
    </div>

    <div class="footer">&copy; 2026 DriveHub. All rights reserved.</div>

</body>

</html>
