<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Attendance record rewarder</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <style>
    .form-control {
        box-shadow: none !important;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-6 col-lg-6 my-5">
                <div class="card">
                    <div class="card-header text-monospace text-center text-success">
                        <b>
                            <h5>
                                Check whether a student needs to rewarded according to his
                                attendance record.
                            </h5>
                        </b>
                    </div>
                    <div class="card-body">
                        <div class="messages-area">
                            <?php if (!empty($_SESSION["error"])) {
    echo '<div class="alert alert-danger">' . ucfirst($_SESSION["error"]);'</div>';
    session_destroy();}

if (isset($_SESSION["success"])) {
    echo '<div class="alert alert-success">' . ucfirst($_SESSION["success"]);'</div>';
    session_destroy();}
?>
                        </div>
                        <form action="record.php" method="get">
                            <div class="form-group">
                                <label for="record">Enter Student Record</label>

                                <input type="text" name="record" id="record" class="form-control"
                                    placeholder="Students record" autofocus required />
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Check status" class="btn btn-primary text-center"
                                    name="submit" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>