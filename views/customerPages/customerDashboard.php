<?php

$testDrives=[
    ["brand"=>"Porsche", "model"=>"911 Carrera S", "preferred_date"=>"2024-08-15", "preferred_time"=>"10:00 AM", "status"=>"approved"],
    ["brand"=>"Range Rover", "model"=>"Sport SVR", "preferred_date"=>"2024-08-20", "preferred_time"=>"03:00 PM", "status"=>"rejected"]
];

$inquiries=[
    ["inquiry_id"=>1, "brand"=>"Porsche", "model"=>"911 Carrera S", "message"=>"Extended warranty and service coverage options for this model...", "inquiry_date"=>"2024-08-09", "inquiry_status"=>"resolved"],
    ["inquiry_id"=>2, "brand"=>"Audi", "model"=>"RS7 Sportback", "message"=>"Is a colour customization option available for this car?", "inquiry_date"=>"2024-08-11", "inquiry_status"=>"pending"]
];

?>
<!doctype html>
<html>

<head>
    <title>My Dashboard - DriveHub</title>
    <link rel="stylesheet" href="customerDashboard.css">
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

    <div class="container">

        <h1 class="page-title">My Dashboard</h1>

        <div class="stat-grid">
            <div class="stat-card">
                <div class="stat-number amber"><?php echo count($testDrives); ?></div>
                <div class="stat-label">Test Drive Requests</div>
            </div>
            <div class="stat-card">
                <div class="stat-number sky"><?php echo count($inquiries); ?></div>
                <div class="stat-label">Vehicle Inquiries</div>
            </div>

        </div>

        <div class="card">
            <div class="card-head">
                <div>
                    <div class="card-title">Test Drive Requests</div>
                </div>

            </div>

            <table class="data-table">
                <tr>
                    <th>Vehicle</th>
                    <th>Requested Date</th>
                    <th>Preferred Time</th>
                    <th>Status</th>
                </tr>
                <?php
                    foreach($testDrives as $testDrive)
                    {
                ?>
                        <tr>
                            <td class="strong"><?php echo $testDrive["brand"]." ".$testDrive["model"]; ?></td>
                            <td><?php echo $testDrive["preferred_date"]; ?></td>
                            <td><?php echo $testDrive["preferred_time"]; ?></td>
                            <td><span class="badge badge-<?php echo $testDrive["status"]; ?>"><?php echo $testDrive["status"]; ?></span></td>
                        </tr>
                <?php
                    }
                ?>
            </table>
        </div>

        <div class="card">
            <div class="card-head">
                <div>
                    <div class="card-title">Vehicle Inquiries</div>
                </div>
            </div>

            <table class="data-table">
                <tr>
                    <th>Vehicle</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                <?php
                    foreach($inquiries as $inquiry)
                    {
                ?>
                        <tr>
                            <td class="strong"><?php echo $inquiry["brand"]." ".$inquiry["model"]; ?></td>
                            <td><?php echo $inquiry["message"]; ?></td>
                            <td><?php echo $inquiry["inquiry_date"]; ?></td>
                            <td><span class="badge badge-<?php echo $inquiry["inquiry_status"]; ?>"><?php echo $inquiry["inquiry_status"]; ?></span></td>
                            <td><a href="inquiryDetails.php?inquiryId=<?php echo $inquiry["inquiry_id"]; ?>">View Details &rarr;</a></td>
                        </tr>
                <?php
                    }
                ?>
            </table>
        </div>

    </div>

</body>

</html>
