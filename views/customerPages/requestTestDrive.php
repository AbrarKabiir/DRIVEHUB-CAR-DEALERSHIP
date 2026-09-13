<?php

$car=["car_id"=>2, "brand"=>"BMW", "model"=>"M4 Competition"];

?>
<!doctype html>
<html>

<head>
    <title>Request a Test Drive - DriveHub</title>
    <link rel="stylesheet" href="../css/requestTestDrive.css">
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
                <div class="modal-title">Request a Test Drive</div>
                <div class="modal-note">
                    Pick a date and time. Your request stays <span class="amber">Pending</span>
                    until an employee approves or rejects it.
                </div>
            </div>
            <a href="carDetails.php?carId=<?php echo $car["car_id"]; ?>" class="modal-close">&times;</a>
        </div>

        <!-- Stage 1: this opens the dashboard. In Stage 2 it posts to testDriveControls.php -->
        <form action="customerDashboard.php" method="post">

            <input type="hidden" name="carId" value="<?php echo $car["car_id"]; ?>">

            <div class="group">
                <label>Vehicle</label>
                <div class="readonly-box"><?php echo $car["brand"]." ".$car["model"]; ?></div>
            </div>

            <div class="form-row">
                <div class="group">
                    <label for="preferredDate">Preferred Date</label>
                    <input type="date" class="input" id="preferredDate" name="preferredDate">
                    <span class="error-text"></span>
                </div>

                <div class="group">
                    <label for="preferredTime">Preferred Time</label>
                    <select class="select" id="preferredTime" name="preferredTime">
                        <option value="">Select a time</option>
                        <option value="10:00:00">10:00 AM</option>
                        <option value="11:00:00">11:00 AM</option>
                        <option value="14:30:00">02:30 PM</option>
                        <option value="16:30:00">04:30 PM</option>
                    </select>
                    <span class="error-text"></span>
                </div>
            </div>

            <div class="form-actions">
                <a href="carDetails.php?carId=<?php echo $car["car_id"]; ?>" class="btn btn-ghost">Cancel</a>
                <input type="submit" class="btn btn-primary" name="submit" value="Submit Request">
            </div>

        </form>

    </div>

</body>

</html>
