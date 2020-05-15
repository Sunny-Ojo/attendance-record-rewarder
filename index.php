<?php
session_start();
function check_attendance($input)
{
    $input = strtoupper($input);
    $allowed_chars = ['A', 'P', 'L'];
    $result = true;
    $msg = 'Qualified for a reward';
    $absent_count = substr_count($input, 'A');
    $late_count = substr_count($input, 'L');
    $split_str = str_split($input);
    foreach ($split_str as $char) {
        if (!in_array($char, $allowed_chars)) {
            $msg = ' Contains invalid character "' . $char . '"';
            $result = false;
            break;
        }
    }
    if ($late_count > 2) {
        $msg = 'No reward, attendance record contains more than 2 consecutive lateness';
        $result = false;
    }
    if ($absent_count > 1) {
        $msg = 'No reward, attendance record contains ' . $absent_count . ' Absents';
        $result = false;
    }
    $_SESSION["msg"] = $msg;

}

if (isset($_POST['check'])) {
    check_attendance($_POST['attendance']);
}

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title></title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-6 col-lg-6 my-5">
                <div class="card">
                    <div class="card-header text-success text-center">Student record rewarder</div>
                    <div class="card-body">
                        <form method="post">
                            <div class="form-group">
                                <?php
if (!empty($_SESSION["msg"])) {
    echo '<div class="text-center mb-2">' . $_SESSION["msg"] . '</div>';
    session_destroy();
}
?>
                                <input type="text" name="attendance" class="form-control" required
                                    placeholder="Enter student record">
                            </div>
                            <div class="form-group">
                                <button name="check" class="btn btn-primary">Submit</button>
                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>