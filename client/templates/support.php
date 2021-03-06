<?php
    if(isset($ok)){
        alertPHP("You send with success your request");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <link href="css/common.css" rel="stylesheet" type="text/css">
    <link href="css/support.css" rel="stylesheet" type="text/css">
    <title>Support</title>
</head>
<body>
<!--------------------------NAVBAR--------------------------->
<?php
    require "../blocks/header.php";
?>
<!-------------------------2 rows--------------------------------->

<div class="container fluid ">
    <div class="row">
        <div class="col-md-12 col-lg-6">
            <p class="ready">Ready to contact us?</p>
            <h1 class="started">LET'S GET STARTED!</h1>
        </div>
    </div>
</div>

<!-----------------------------Contact--------------------------->

<div class="container justify-content-center">
    <form action="../server/mail_support.php" method="post">

        <!------1 row----->

        <div class="row">
            <div class="col-md-12 col-lg-3">
                <p>My name is</p>
            </div>
            <div class="col-md-12 col-lg-3">
                <input name ="last_name" type="text" class="form-control" placeholder="Last Name*" required>
            </div>
            <div class="col-md-12 col-lg-3">
                <input name ="first_name" type="text" class="form-control" placeholder="First Name*" required>
            </div>
        </div>

        <!------2 row----->
        <div class="row">
            <div class="col-md-12 col-lg-3">
                <p>My contact info</p>
            </div>
            <div class="col-md-12 col-lg-3">
                <input name="email" type="email" class="form-control" placeholder="Email address*" required>
            </div>
            <div class="col-md-12 col-lg-3">
                <input name="mobile_phone" type="text" class="form-control" placeholder="Mobile Phone"
                           pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
            </div>
        </div>

        <!-------3 row------->

        <div class="row">
            <div class="col-md-12 col-lg-3">
                <p>My organization is</p>
            </div>
            <div class="col-md-12 col-lg-3">
                <div class="form-group">
                    <input name="org_name" type="text" class="form-control" placeholder="Company Name">
                </div>
            </div>
            <div class="col-md-12 col-lg-3">
                <div class="form-group">
                    <input name="website" type="email" class="form-control" placeholder="https://example.com">
                </div>
            </div>
        </div>

        <!---------4 row---------->
        <div class="row">
            <div class="col-md-12 col-lg-3">
                <p>Let's talk about</p>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="form-group">
                    <textarea name="description" class="form-control about" placeholder="Max 300 characters" required></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center padding-bottom">
                <button class="btn btn-primary my-btn">Send message</button>
            </div>
        </div>
    </form>
</div>
<!----------------------------Footer------------------------------>

<?php
require "../blocks/footer.php";
?>

</body>
</html>