<?php

$cars=[
    ["car_id"=>1, "brand"=>"BMW", "model"=>"M4 Competition", "year"=>2024, "price"=>112000, "engine"=>"3.0L Twin-Turbo Inline-Six", "transmission"=>"Automatic", "availability_status"=>"available"],
    ["car_id"=>2, "brand"=>"Audi", "model"=>"RS7 Sportback", "year"=>2024, "price"=>139900, "engine"=>"4.0L Twin-Turbo V8", "transmission"=>"Tiptronic", "availability_status"=>"available"],
    ["car_id"=>3, "brand"=>"Porsche", "model"=>"911 Carrera S", "year"=>2024, "price"=>148500, "engine"=>"3.0L Twin-Turbo Flat-Six", "transmission"=>"PDK Automatic", "availability_status"=>"available"],
    ["car_id"=>4, "brand"=>"Range Rover", "model"=>"Sport SVR", "year"=>2024, "price"=>168000, "engine"=>"5.0L Supercharged V8", "transmission"=>"Automatic", "availability_status"=>"available"],
    ["car_id"=>5, "brand"=>"Mercedes-Benz", "model"=>"AMG GT 63", "year"=>2023, "price"=>195000, "engine"=>"4.0L Biturbo V8", "transmission"=>"Automatic", "availability_status"=>"sold"],
    ["car_id"=>6, "brand"=>"Maserati", "model"=>"GranTurismo Trofeo", "year"=>2024, "price"=>223500, "engine"=>"3.0L Twin-Turbo V6", "transmission"=>"Automatic", "availability_status"=>"available"],
    ["car_id"=>7, "brand"=>"Ferrari", "model"=>"Roma Spider", "year"=>2024, "price"=>278000, "engine"=>"3.9L Twin-Turbo V8", "transmission"=>"DCT Automatic", "availability_status"=>"available"],
    ["car_id"=>8, "brand"=>"Lamborghini", "model"=>"Huracan EVO", "year"=>2023, "price"=>349000, "engine"=>"5.2L V10", "transmission"=>"Automatic", "availability_status"=>"sold"]
];

?>
<!doctype html>
<html>

<head>
    <title>Vehicles - DriveHub</title>
    <link rel="stylesheet" href="css/vehicles.css">
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
                <a href="profile.php">Profile</a>
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

        <div class="page-tag"><b>DRIVEHUB COLLECTION</b></div>

        <h1 class="page-title">Explore Our Vehicles</h1>

        <p class="page-sub">
            Discover our handpicked selection of the world's finest automobiles.<br>
            Each vehicle is meticulously inspected and ready for its next owner.
        </p>

        <form action="vehicles.php" method="get">
            <div class="filter-bar">
                
                <input type="text" class="input filter-search" name="keyword" placeholder="Search by brand or model...">

                <select class="select" name="availability">
                    <option value="">All</option>
                    <option value="available">Available</option>
                    <option value="sold">Sold</option>
                </select>

                <input type="submit" class="btn btn-primary" value="Apply">

                <a href="vehicles.php" class="btn btn-ghost">Reset</a>
                
            </div>

        </form>

        <div class="car-grid">
            <?php
                foreach($cars as $car)
                {
            ?>
                    <div class="car-card">

                        <div class="car-photo <?php if($car["availability_status"]=="sold") ?>">

                            <div class="car-icon"></div>

                            <?php
                                if($car["availability_status"]=="sold")
                                {
                                    echo '<div class="sold-stamp">SOLD</div>';
                                }
                            ?>

                        </div>

                        <div class="car-body">
                            <div class="car-brand"><?php echo $car["brand"]; ?></div>
                            <div class="car-model"><?php echo $car["model"]; ?></div>
                            <div class="car-year"><?php echo $car["year"]; ?></div>

                            <div class="spec-row">

                                <div class="spec-box">
                                    <div class="spec-label">Engine</div>
                                    <div class="spec-value"><?php echo $car["engine"]; ?></div>
                                </div>

                                <div class="spec-box">
                                    <div class="spec-label">Transmission</div>
                                    <div class="spec-value"><?php echo $car["transmission"]; ?></div>
                                </div>

                            </div>

                            <div class="car-foot">

                                <div>
                                    <div class="price-label">Starting from</div>
                                    <div class="price-value">$<?php echo number_format($car["price"]); ?></div>
                                </div>
                                
                                <a href="carDetails.php?carId=<?php echo $car["car_id"]; ?>" class="btn btn-primary btn-small">View Details</a>
                                
                            </div>
                        </div>

                    </div>
            <?php
                }
            ?>
        </div>

    </div>

</body>

</html>
