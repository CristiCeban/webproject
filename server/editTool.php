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
    <title>Edit</title>
</head>
<body>
<?php
include_once '../config/init.php';
$manager = new Manager();
if(isset($_GET['uid'])) {
    $user = $manager->getUser($_GET['uid']);

    ?>

    <!----------------------------------------USER---------------------------------------->

    <div class="container justify-content-center padding-top">
        <form action="editToDb.php?<?php echo 'uid='.$_GET['uid']; ?>" class="padding-top" method="post">
            <!---------------------1 row---------------->
            <div class="row">
                <div class="col-md-12 col-lg-3">
                    <p>Login</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <input name="login" type="text" class="form-control" value="<?php echo $user->login?>">
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <p>Mdp</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <input name="mdp" type="text" class="form-control" value="<?php echo $user->mdp?>">
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <p>Role</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <input name="role" type="text" class="form-control" value="<?php echo $user->role?>">
                    </div>
                </div>
            </div>
            <!----------Button------------->
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="col text-center padding-bottom">
                        <button name="btn_edit_user" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php
}
elseif(isset($_GET['eid'])){
    $teacher = $manager->getTeacher($_GET['eid']);?>

    <!----------------------------------------TEACHER---------------------------------------->

    <div class="container justify-content-center padding-top">
        <form action="editToDb.php?<?php echo 'eid='.$_GET['eid']; ?>" class="padding-top" method="post">
            <!---------------------1 row---------------->
            <div class="row">
                <div class="col-md-12 col-lg-3">
                    <p>Nom</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <input name="nom" type="text" class="form-control" value="<?php echo $teacher->nom?>">
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <p>Prenom</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <input name="prenom" type="text" class="form-control" value="<?php echo $teacher->prenom?>">
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <p>Email</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <input name="email" type="text" class="form-control" value="<?php echo $teacher->email?>">
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <p>Tel</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <input name="tel" type="text" class="form-control" value="<?php echo $teacher->tel?>">
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <p>Annee</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <input name="annee" type="text" class="form-control" value="<?php echo $teacher->annee?>">
                    </div>
                </div>
            </div>
            <!----------Button------------->
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="col text-center padding-bottom">
                        <button name="btn_edit_teacher" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php
}
elseif(isset($_GET['mid'])){
    $module = $manager->getModule($_GET['mid']);?>
    <!----------------------------------------MODULE---------------------------------------->
    <div class="container justify-content-center padding-top">
        <form action="editToDb.php?<?php echo 'mid='.$_GET['mid']; ?>" class="padding-top" method="post">
            <!---------------------1 row---------------->
            <div class="row">
                <div class="col-md-12 col-lg-3">
                    <p>intitule</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <input name="intitule" type="text" class="form-control" value="<?php echo $module->intitule?>">
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <p>code</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <input name="code" type="text" class="form-control" value="<?php echo $module->code?>">
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <p>annee</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <input name="annee" type="text" class="form-control" value="<?php echo $module->annee?>">
                    </div>
            </div>
            <!----------Button------------->
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="col text-center padding-bottom">
                        <button name="btn_edit_module" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php
}
elseif(isset($_GET['gid'])){
    $group = $manager->getGroup($_GET['gid']);?>
    <!----------------------------------------GROUP---------------------------------------->
    <div class="container justify-content-center padding-top">
        <form action="editToDb.php?<?php echo 'gid='.$_GET['gid']; ?>" class="padding-top" method="post">
            <!---------------------1 row---------------->
            <div class="row">
                <div class="col-md-12 col-lg-3">
                    <p>nom</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <input name="nom" type="nom" class="form-control" value="<?php echo $group->nom?>">
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <p>annee</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <input name="annee" type="text" class="form-control" value="<?php echo $group->annee?>">
                    </div>
                </div>
            </div>
                <!----------Button------------->
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="col text-center padding-bottom">
                        <button name="btn_edit_group" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php
}
elseif(isset($_GET['gtid'])){
$gtype = $manager->getGtype($_GET['gtid']);?>
    <!----------------------------------------GROUP TYPE---------------------------------------->
    <div class="container justify-content-center padding-top">
        <form action="editToDb.php?<?php echo 'gtid='.$_GET['gtid']; ?>" class="padding-top" method="post">
            <!---------------------1 row---------------->
            <div class="row">
                <div class="col-md-12 col-lg-3">
                    <p>nom</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <input name="nom" type="nom" class="form-control" value="<?php echo $gtype->nom?>">
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <p>nbh</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <input name="nbh" type="text" class="form-control" value="<?php echo $gtype->nbh?>">
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <p>coeff</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <input name="coeff" type="text" class="form-control" value="<?php echo $gtype->coeff?>">
                    </div>
                </div>
            </div>
                <!----------Button------------->
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="col text-center padding-bottom">
                        <button name="btn_edit_gtype" class="btn btn-primary">Update</button>
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