
<!--------------------------NAVBAR--------------------------->
<nav class='navbar navbar-expand-md navbar-light bg-light sticky-top'>
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <span class="resize_span">
                <img class="resize_img" src="img/UPEC-logo.svg"/>
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-togglle="collapse"
                data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="management.php">Management</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="statistic.php">Statistic</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="support.php">Contact</a>
                <li class="nav-item">
                    <?php
                    if (isset($_COOKIE['username'])) :
                    ?>
                    <a class="nav-link" href="../server/disc.php">Disconnect</a>
                    <?php
                    else :
                    ?>
                    <a class="nav-link" href="login.php">Connect</a>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </div>
</nav>

