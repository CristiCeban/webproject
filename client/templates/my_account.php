<?php
if(!isLoggedIn())
    header("Location: index.php");

alertChangedPass($alert_msg);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Site</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <link href="css/common.css" rel="stylesheet" type="text/css">
    <link href="css/my_account.css" rel="stylesheet" type="text/css">
</head>
<body>
<!----------------------------navbar------------------------------>
<?php
require "../blocks/header.php";
?>
<div class="container fluid">
    <h3 class="padding-top">Good day,<?php if(isset($_COOKIE['username']))
                        echo $_COOKIE['username'];
                    else echo 'unknown'; ?>
    </h3>
    <h4>Today is <?php $date = new DateTime();
                    echo $date->format('l, F d,Y'); ?>.</h4>
</div>

<div class="modal-dialog text-center">
    <div class="col-sm-12 main-section">
        <div class="modal-content">

            <div class="col-12 form-input">
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse" aria-expanded="false" aria-controls="collapse">
                    Change Password
                </button>
                <div class="collapse" id="collapse">
                    <div class="card card-body form-input main-section">
                <form action="../server/change_pass.php" method="post">
                    <div class="form-group">
                        <input type="password" name="password_initial" class="form-control" placeholder="Enter Password" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password_repeat1" class="form-control" placeholder="Enter New Password" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password_repeat2" class="form-control" placeholder="Repeat New Password" required>
                    </div>
                    <button type="submit" name="btn_submit" class="btn btn-success">Reset Password</button>
                </form>
            </div>
                </div>
            </div>
        </div> <!-- End of the Modal Content-->
    </div>
</div>

<!----------------------------Footer------------------------------>
<?php
require "../blocks/footer.php";
?>

</body>
</html>
