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
    <link href="css/home.css" rel="stylesheet" type="text/css">
    <link href="css/common.css" rel="stylesheet" type="text/css">
    <!-- Images was taken from  <a href="https://pngtree.com/free-backgrounds">free background photos from pngtree.com</a> all rights related to photos belongs to https://pngtree.com-->
    <!-- Icons was taken from <a href="https://www.freevector.com/stats-icons#">FreeVector.com</a>, all rights related to the icons belongs to https://www.freevector.com-->
</head>
<body>

<?php
    require "../blocks/header.php";
?>
<!--------------------------Slides-------------------------->

<div id="slides" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
        <li data-target="#slides" data-slide-to="3"></li>
        <li data-target="#slides" data-slide-to="4"></li>
        <li data-target="#slides" data-slide-to="5"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active own-carousel">
            <img class="d-block w-100" src="img/statistics_background4.jpg" alt="First slide">
            <div class="carousel-caption">
                <h1 class="display-2">Statistics</h1>
                <h3>Complete Website Layout</h3>
                <button type="button" class="btn btn-outline-light btn-lg">View Demo</button>
                <button type="button" class="btn btn-primary btn-lg">View Stats</button>
            </div>
        </div>
        <div class="carousel-item own-carousel">
            <img class="d-block w-100" src="img/statistics_background5.jpg" alt="Second slide">
            <div class="carousel-caption">
                <h1 class="display-2">Management</h1>
                <h3>Manage the current year</h3>
                <button type="button" class="btn btn-outline-light btn-lg">View Demo</button>
                <button type="button" class="btn btn-primary btn-lg">Manage</button>
            </div>
        </div>
        <div class="carousel-item own-carousel">
            <img class="d-block w-100" src="img/statistics_background3.jpg" alt="Third slide">
        </div>
        <div class="carousel-item own-carousel">
            <img class="d-block w-100" src="img/statistics_background.jpg" alt="Third slide">
        </div>
        <div class="carousel-item own-carousel">
            <img class="d-block w-100" src="img/statistics_background2.jpg" alt="Third slide">
        </div>
        <div class="carousel-item own-carousel">
            <img class="d-block w-100" src="img/statistics_background6.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous></span>
    </a>
    <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<!-------------------------------------Jumbotron---------------------------------->

<div class="container-fluid">
    <div class="row jumbotron">
        <div class="col-xs-12 col-sm-12 col-md9 col-lg-9 col-xl-10">
            <p class="lead">This site allows you to view the entire statistics of the all years
                            related to current university institution
            </p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg3 col-xl-2">
            <a href="#"><button type="button" class="btn btn-outline-secondary btn-lg">
                Get Started</button> </a>
        </div>
    </div>
</div>

<!------------------------------Welcome Section------------------------>

<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">See Stats with ease</h1>
        </div>
        <hr>
        <div class="col-12">
            <p class="lead">Welcome to the this site! This site allows you to see
                the entirely statistics of you course,module,teacher
            </p>
        </div>
    </div>
</div>

<!-----------------------------3 Column Section------------------------->

<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <img class="icons" src="img/statistics_icon5.svg" alt="icons1">
            <h3>Stats</h3>
            <p>See the full statistics of your courses,modules...</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <img class="icons" src="img/statistics_icon3.png" alt="icons2">
            <h3>Management</h3>
            <p>Statistics description below</p>
        </div>
        <div class="col-sm-12 col-md-4">
            <img class="icons" src="img/statistics_icon4.png" alt="icons2">
            <h3>Questions</h3>
            <p>Statistics description below</p>
        </div>
    </div>
    <hr class="my-4">
</div>

<!------------------------------2 Column Section ------------------>
<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-md-12 col-lg-6">
            <h2>If you want to use this...</h2>
            <p>Something to write 1asdassssssssssssssssssssssssssssssssssssssssssssssssssss
                Something to write 1asdassssssssssssssssssssssssssssssssssssssssssssssssssss</p>
            <p>Something to write 1asdassssssssssssssssssssssssssssssssssssssssssssssssssss</p>
            Something to write 1asdassssssssssssssssssssssssssssssssssssssssssssssssssss
            <p>SSomething to write 1asdassssssssssssssssssssssssssssssssssssssssssssssssssss</p>
            <br>
            <a href="#"></a>
        </div>
        <div class="col-lg-6">
            <img src="img/statistics_big_data.jpg" class="img-fluid">
        </div>
    </div>
</div>
<hr class="my-4">
<!-----------------------------------Fixed Background---------------------->
<figure>
    <div class="fixed-wrap">
        <div id="fixed">
        </div>
    </div>
</figure>

<!------------------------------------Philosophy------------------------->

<hr class="my-4">
<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-md-12 col-lg-6">
            <h2>About Us</h2>
            <p>The largest multidisciplinary university in Ile-de-France, the Université Paris-Est Créteil may be
                described as a bold yet successful enterprise: in little more than 40 years since its foundation
                in 1970, UPEC has managed to establish itself both as a regionally grounded institution and an
                internationally oriented university.</p>
            <p>Only 20 minutes from the heart of Paris, UPEC stands out with its 120,000 square meter campus,
                its comprehensive programs and state-of-the-art research. The university houses 32 research centers,
                and 15 faculties, schools and institutes, for a student population of over 32,000.
                Courses and trainings are specially tailored to meet international standards and cover an
                extensive range of disciplines, from technical degrees to doctorates (Ph. D). Besides,
                UPEC has signed more than 580 international agreements with universities and laboratories,
                and enjoys governmental as well as European support.</p>
            <br>
        </div>
        <div class="col-lg-6">
            <img src="img/upec_campus_centre.jpg" class="img-fluid">
        </div>
    </div>
    <hr class="my-4">
</div>

<!-------------------------------------Connect--------------------------------->
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-12">
            <h2>Connect</h2>
        </div>
        <div class="col-12 social padding">
            <a href="https://www.facebook.com/upec.officiel/" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://twitter.com/UPECactus" target="_blank"><i class ="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/uparisestcreteil/" target="_blank" class="instagram"><i class ="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/school/universite-paris-est-creteil-parisS12" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://www.dailymotion.com/UPEC#hp-h-8" target="_blank"><i class="fab fa-dailymotion"></i></a>
        </div>
    </div>
</div>


<!----------------------------Footer------------------------------>
<?php
require "../blocks/footer.php";
?>

</body>
</html>