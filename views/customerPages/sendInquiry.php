<?php

// STAGE 1 - inquiry form. No database yet.
$car=["car_id"=>2, "brand"=>"BMW", "model"=>"M4 Competition"];

?>
<!doctype html>
<html>

<head>
    <title>Send an Inquiry - DriveHub</title>
    <link rel="stylesheet" href="sendInquiry.css">
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

    <div class="modal-card">

        <div class="modal-head">
            <div>
                <div class="modal-title">Send an Inquiry</div>
                <div class="modal-note">
                    Ask a question about this vehicle. An employee will respond and you'll see it on your dashboard.
                </div>
            </div>
            <a href="carDetails.php?carId=<?php echo $car["car_id"]; ?>" class="modal-close">&times;</a>
        </div>

        <form action="customerDashboard.php" method="post">

            <input type="hidden" name="carId" value="<?php echo $car["car_id"]; ?>">

            <div class="group">
                <label>Vehicle</label>
                <div class="readonly-box"><?php echo $car["brand"]." ".$car["model"]; ?></div>
            </div>

            <div class="group">
                <label for="message">Your Message</label>
                <textarea class="textarea" id="message" name="message" placeholder="Type your question about pricing, availability, financing, specifications..."></textarea>
                <span class="error-text"></span>
            </div>

            <div class="form-actions">
                <a href="carDetails.php?carId=<?php echo $car["car_id"]; ?>" class="btn btn-ghost">Cancel</a>
                <input type="submit" class="btn btn-primary" name="submit" value="Submit Inquiry">
            </div>

        </form>

    </div>

</body>

</html>
