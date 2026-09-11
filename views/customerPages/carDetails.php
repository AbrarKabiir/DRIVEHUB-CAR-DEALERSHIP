<?php

$car=["car_id"=>2, "brand"=>"BMW", "model"=>"M4 Competition", "year"=>2024, "price"=>112000,
      "fuel_type"=>"Petrol", "transmission"=>"Automatic", "engine"=>"3.0L Twin-Turbo Inline-Six",
      "availability_status"=>"available"];

?>
<!doctype html>
<html>

<head>
    <title>Car Details - DriveHub</title>
    <link rel="stylesheet" href="../css/carDetails.css">
</head>

<body>

    <div class="navbar">

        <div class="nav-left">

            <div class="logo">
                <div class="logo-emoji">&#128663;</div>
                <div class="logo-text">DRIVE<span>HUB</span></div>
            </div>

            <div class="nav-links">
                <a href="vehicles.php" class="active">Vehicles</a>
                <a href="customerDashboard.php">My Dashboard</a>
                <a href="../account/profile.php">Profile</a>
            </div>

        </div>

        <div class="nav-right">

            <div>
                <div class="user-name">James Harrington</div>
                <div class="user-role">Customer</div>
            </div>

            <a href="../logout.php" class="btn btn-ghost btn-small">Logout</a>
        </div>

    </div>

    <div class="container">

        <div class="details-layout">

            <div class="details-photo">
                <div class="car-icon"></div>
            </div>

            <div>
                <div class="details-top">
                    <div class="car-brand"><?php echo $car["brand"]; ?></div>
                </div>

                <div class="details-model"><?php echo $car["model"]; ?></div>

                <div class="price-tag">Starting Price</div>
                <div class="price-big">$<?php echo number_format($car["price"]); ?></div>

                <div class="details-grid">
                    <div class="spec-box">
                        <div class="spec-label">Brand</div>
                        <div class="spec-value"><?php echo $car["brand"]; ?></div>
                    </div>
                    <div class="spec-box">
                        <div class="spec-label">Model</div>
                        <div class="spec-value"><?php echo $car["model"]; ?></div>
                    </div>
                    <div class="spec-box">
                        <div class="spec-label">Year</div>
                        <div class="spec-value"><?php echo $car["year"]; ?></div>
                    </div>
                    <div class="spec-box">
                        <div class="spec-label">Price</div>
                        <div class="spec-value">$<?php echo number_format($car["price"]); ?></div>
                    </div>
                    <div class="spec-box">
                        <div class="spec-label">Fuel Type</div>
                        <div class="spec-value"><?php echo $car["fuel_type"]; ?></div>
                    </div>
                    <div class="spec-box">
                        <div class="spec-label">Transmission</div>
                        <div class="spec-value"><?php echo $car["transmission"]; ?></div>
                    </div>
                    <div class="spec-box">
                        <div class="spec-label">Engine</div>
                        <div class="spec-value"><?php echo $car["engine"]; ?></div>
                    </div>
                    <div class="spec-box">
                        <div class="spec-label">Availability</div>
                        <div class="spec-value"><?php echo $car["availability_status"]; ?></div>
                    </div>
                </div>

                <div class="details-cta">
                    <a href="requestTestDrive.php?carId=<?php echo $car["car_id"]; ?>" class="btn btn-testdrive">Request Test Drive</a>
                    <a href="sendInquiry.php?carId=<?php echo $car["car_id"]; ?>" class="btn btn-ghost">Send Inquiry</a>
                </div>
            </div>

        </div>

    </div>

</body>

</html>
