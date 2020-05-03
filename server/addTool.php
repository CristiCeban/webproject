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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha256-KM512VNnjElC30ehFwehXjx1YCHPiQkOPmqnrWtpccM=" crossorigin="anonymous"></script>
    <title>Add</title>
</head>
<body>
<?php
include_once '../config/init.php';
$manager = new Manager();
if(isset($_GET['uid'])&&$_GET['uid']==='true') {
    ?>
    <div class="container justify-content-center padding-top">
        <form class="padding-top" method="post" action="addToDb.php">
            <!---------------------1 row---------------->
            <div class="row">
                <div class="col-md-12 col-lg-3">
                    <p>Login</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <input required name="login" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <p>Mdp</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <input required name="mdp" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <p>Role</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <select class="list-group-item" style="text-align-last: center" name="role">
                        <option selected>user</option>
                        <option>admin</option>
                    </select>
                    <!--<div class="form-group">
                        <input required name="role" type="text" class="form-control">
                    </div>-->
                </div>
            </div>
            <!----------Button------------->
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="col text-center padding-bottom">
                        <button name="btn_add_user" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php
}
elseif(isset($_GET['eid'])&&$_GET['eid']==='true') {
    ?>
    <div class="container justify-content-center padding-top">
        <form class="padding-top" method="post" action="addToDb.php">
            <!---------------------1 row---------------->
            <div class="row">
                <div class="col-md-12 col-lg-3">
                    <p>Nom</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <input required name="nom" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <p>Prenom</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <input required name="prenom" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <p>email</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <input required name="email" type="email" class="form-control">
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <p>tel</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <input required name="tel" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <p>annee</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <input required name="annee" type="number" class="form-control">
                    </div>
                </div>
            </div>
            <!----------Button------------->
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="col text-center padding-bottom">
                        <button name="btn_add_teacher" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

<?php
}
elseif(isset($_GET['mid'])&&$_GET['mid']==='true') {
?>
<div class="container justify-content-center padding-top">
    <form class="padding-top" method="post" action="addToDb.php">
        <!---------------------1 row---------------->
        <div class="row">
            <div class="col-md-12 col-lg-3">
                <p>Intitule</p>
            </div>
            <div class="col-md-12 col-lg-3">
                <div class="form-group">
                    <input required name="intitule" type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-12 col-lg-3">
                <p>code</p>
            </div>
            <div class="col-md-12 col-lg-3">
                <div class="form-group">
                    <input required name="code" type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-12 col-lg-3">
                <p>annee</p>
            </div>
            <div class="col-md-12 col-lg-3">
                <div class="form-group">
                    <input required name="annee" type="text" class="form-control">
                </div>
            </div>
        </div>
        <!----------Button------------->
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="col text-center padding-bottom">
                    <button name="btn_add_module" class="btn btn-primary">Add</button>
                </div>
            </div>
        </div>
    </form>
</div>
<?php
}
elseif(isset($_GET['gid'])&&$_GET['gid']==='true') {
    ?>
    <div class="container justify-content-center padding-top">
        <form class="padding-top" method="post" action="addToDb.php">
            <!---------------------1 row---------------->
            <div class="row">
                <div class="col-md-12 col-lg-3">
                    <p>nom</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <input required name="nom" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <p>annee</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <input required name="annee" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <!----------Button------------->
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="col text-center padding-bottom">
                        <button name="btn_add_group" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </div>
        </form>
    </div>


<?php
}
elseif(isset($_GET['gtid'])&&$_GET['gtid']==='true'){ ?>
    <div class="container justify-content-center padding-top">
        <form class="padding-top" method="post" action="addToDb.php">
            <!---------------------1 row---------------->
            <div class="row">
                <div class="col-md-12 col-lg-3">
                    <p>nom</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <input required name="nom" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <p>nbh</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <input required name="nbh" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <p>coeff</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <input required name="coeff" type="text" class="form-control">
                    </div>
                </div>
            </div>

            <!----------Button------------->
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="col text-center padding-bottom">
                        <button name="btn_add_gtype" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php
}
?>

</body>
</html>