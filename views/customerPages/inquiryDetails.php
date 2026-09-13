<?php

// STAGE 1 - inquiry details. No database yet.
$inquiry=[
    "brand"=>"Porsche",
    "model"=>"911 Carrera S",
    "inquiry_date"=>"2024-08-09",
    "inquiry_status"=>"resolved",
    "message"=>"Interested in extended warranty and service coverage options for this model. What packages are available?",
    "employee_response"=>"Thanks for reaching out. We offer 3-year and 5-year extended coverage plans. I have noted your interest and will call you to walk through pricing."
];

?>
<!doctype html>
<html>

<head>
    <title>Inquiry Details - DriveHub</title>
    <link rel="stylesheet" href="inquiryDetails.css">
</head>

<body>

    <div class="navbar">
        <div class="nav-left">
            <div class="logo">
                <div class="logo-emoji">&#128663;</div>
                <div class="logo-text">DRIVE<span>HUB</span></div>
            </div>
            <div class="nav-links">
                <a href="vehicles.php">Vehicles</a>
                <a href="customerDashboard.php" class="active">My Dashboard</a>
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
                <div class="modal-title">Inquiry Details</div>
                <div class="modal-note">
                    <?php echo $inquiry["brand"]." ".$inquiry["model"]; ?> &middot;
                    Submitted <?php echo $inquiry["inquiry_date"]; ?>
                </div>
            </div>
        </div>

        <div class="read-label">Your Message</div>
        <div class="read-box"><?php echo $inquiry["message"]; ?></div>

        <div class="read-label">Employee Response</div>
        <div class="read-box read-box-amber"><?php echo $inquiry["employee_response"]; ?></div>

        <div class="form-actions">
            <a href="customerDashboard.php" class="btn btn-primary">Close</a>
        </div>

    </div>

</body>

</html>
