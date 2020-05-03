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
<!---------------------------------------User->Teacher-------------------->
<?php
include_once '../config/init.php';
$manager = new Manager();
if(isset($_GET['user'])&&$_GET['user']==='teacher'):
    $users = $manager->getAllUsers();
    $teachers = $manager->getAllTeachers();
?>
    <div class="container">
        <form action="assignToDb.php" name="asign_user_teacher" method="post" onsubmit="return validateBtnUser()">
            <div class="list-group">
                <div class="row">
                    <div class="col-md-12 col-lg-3">
                        <select class="list-group-item" style="text-align-last: center" name="selectUser" id="user_id">
                            <option selected >Select User</option>
                            <?php foreach($users as $user):?>
                                <option><?php echo $user->login ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-12 col-lg-3">
                        <br>
                    </div>
                    <div class="col-md-12 col-lg-3">
                        <select class="list-group-item" style="text-align-last: center" name="selectTeacher" id="teacher_id">
                            <option selected >Select Teacher</option>
                            <?php foreach($teachers as $teacher):?>
                                <option><?php echo $teacher->nom.' '.$teacher->prenom ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
            <!-------------------------------Button-------------------->
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="text-center" style="padding-top: 2rem">
                        <button name="user_teacher_asign" type="submit" class="btn btn-success">Assign</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!----------------------------------------Group->Module------------------------->
<?php
elseif(isset($_GET['group'])&&$_GET['group']==='module'):
    $groups = $manager->getAllGroups();
    $modules = $manager->getAllModules();
?>
    <div class="container">
        <form action="assignToDb.php" name="asign_user_teacher" method="post" onsubmit="return validateBtnGroup()">
            <div class="list-group">
                <div class="row">
                    <div class="col-md-12 col-lg-3">
                        <select class="list-group-item" style="text-align-last: center" name="selectGroup" id="group_id">
                            <option selected >Select Group</option>
                            <?php foreach($groups as $group):?>
                                <option><?php echo $group->gid.'-'.$group->nom.'-'.$group->annee; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-12 col-lg-3">
                        <br>
                    </div>
                    <div class="col-md-12 col-lg-3">
                        <select class="list-group-item" style="text-align-last: center" name="selectModule" id="module_id">
                            <option selected >Select Module</option>
                            <?php foreach($modules as $module):?>
                                <option><?php echo $module->mid.'-'.$module->intitule.'-'.$module->annee?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
            <!-------------------------------Button-------------------->
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="text-center" style="padding-top: 2rem">
                        <button name="group_module_asign" type="submit" class="btn btn-success">Assign</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

<!----------------------------------------Group->Teacher------------------------->
<?php
elseif(isset($_GET['teacher'])&&$_GET['teacher']==='group'):
    $groups = $manager->getAllGroups();
    $teachers = $manager->getAllTeachers();
    ?>
    <div class="container">
        <form action="assignToDb.php" name="asign_user_teacher" method="post" onsubmit="return validateBtnTeacher()">
            <div class="list-group">
                <div class="row">
                    <div class="col-md-12 col-lg-3">
                        <select class="list-group-item" style="text-align-last: center" name="selectGroup" id="group_id">
                            <option selected >Select Group</option>
                            <?php foreach($groups as $group):?>
                                <option><?php echo $group->gid.'-'.$group->nom.'-'.$group->annee; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-12 col-lg-3">
                        <br>
                    </div>
                    <div class="col-md-12 col-lg-3">
                        <select class="list-group-item" style="text-align-last: center" name="selectTeacher" id="teacher_id">
                            <option selected >Select Teacher</option>
                            <?php foreach($teachers as $teacher):?>
                                <option><?php echo $teacher->eid.'-'.$teacher->nom.' '.$teacher->prenom?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-3">
                        <p>Nbh</p>
                    </div>
                    <div class="col-md-12 col-lg-3">
                        <div class="form-group">
                            <input required name="nbh" type="text" class="form-control" id="nbh_id">
                        </div>
                    </div>
                </div>
            </div>
            <!-------------------------------Button-------------------->
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="text-center" style="padding-top: 2rem">
                        <button name="teacher_group_assign" type="submit" class="btn btn-success">Assign</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

<?php endif;?>

<script>

    function validateBtnUser(){
        let user = document.getElementById('user_id');
        let teacher = document.getElementById('teacher_id');
        if(user.selectedIndex===0||teacher.selectedIndex===0) {
            alert('Choose an affectations first!');
            return false;
        }
    }

    function validateBtnGroup(){
        let group = document.getElementById('group_id');
        let module = document.getElementById('module_id');
        if(group.selectedIndex===0||module.selectedIndex===0) {
            alert('Choose an affectations first!');
            return false;
        }
    }

    function validateBtnTeacher(){
        let group = document.getElementById('group_id');
        let teacher = document.getElementById('teacher_id');
        let nbh = document.getElementById('nbh_id');
        if(group.selectedIndex===0||teacher.selectedIndex===0||nbh<=0) {
            alert('Choose an affectations first and put nbh > 0!');
            return false;
        }
    }

</script>
</body>
</html>