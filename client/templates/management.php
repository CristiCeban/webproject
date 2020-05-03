<?php
if (!isLoggedIn())
    header("Location: login.php");
elseif (!isAdmin()) {
    alertPHPBack("You don't have the admin rights to access this page");
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
    <link href="css/management.css" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha256-KM512VNnjElC30ehFwehXjx1YCHPiQkOPmqnrWtpccM=" crossorigin="anonymous"></script>
    <title>Management</title>
</head>
<body>
<!--------------------------NAVBAR--------------------------->
<?php
require "../blocks/header.php";
?>
<nav class="navbar navbar-expand-md navbar-dark bg-secondary">
    <div class="container-fluid">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" href="management.php?category=Users">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="management.php?category=Teachers">Teachers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="management.php?category=Modules">Modules</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="management.php?category=Groups">Groups</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="management.php?category=Gtypes">Gtypes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="management.php?category=Assigments">Assigments</a>
                </li>
            </ul>
    </div>
    <form class="form-inline">
        <div class="md-form my-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        </div>
    </form>
</nav>

<!-------------------------------Users----------------------------->
<?php if($this->category === 'Users'):?>
    <div class="container" style="padding-top: 50px">
        <div class="row">
            <div class="col-sm-5">
                <h2>Manage <b>Users</b></h2>
            </div>
            <div class="col-sm-5 float-right">
                <button onClick="assign('user=teacher','Add to Module',600,600)" class="btn btn-success" style="width: 150px">Assign to Teacher</button>
            </div>
            <div class="col-sm-2 float-right">
                <button onClick="addFunction('uid=true','Add User',600,600)" class="btn btn-success" style="width: 150px">Add User</button>
            </div>
        </div>
        <table class="table table-striped" style="padding-top: 50px">
            <thead>
            <tr>
                <th>uid</th>
                <th>login</th>
                <th>mdp</th>
                <th>role</th>
                <th>action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($this->users as $user):?>
                <tr>
                    <td><?php echo $user->uid;?></td>
                    <td><?php echo $user->login;?></td>
                    <td><?php echo $user->mdp;?></td>
                    <td><?php echo $user->role;?></td>
                    <td><a href="#" onclick="editFunction(<?php echo "'uid=".$user->uid."'"?>,'Edit User',600,600);return false"
                            <?php echo 'id=user'.$user->uid?> ><i class="fas fa-edit"></i></a>
                        <a href="#" style="color: red" onclick="deleteFunction(<?php echo "'uid=".$user->uid."'";echo ','; echo "'".$user->login."'"?>);return false">
                            <i class="fas fa-trash-alt"></i></a></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
<!-------------------------------Teachers--------------------------->
<?php elseif($this->category === 'Teachers'): ?>
    <div class="container" style="padding-top: 50px">
        <div class="row">
            <div class="col-sm-10">
                <h2>Manage <b>Teachers</b></h2>
            </div>
            <div class="col-sm-2 float-right">
                <button onClick="addFunction('eid=true','Add Teacher',600,600)" class="btn btn-success" style="width: 150px">Add Teacher</button>
            </div>
        </div>
        <table class="table table-striped" style="padding-top: 50px">
            <thead>
            <tr>
                <th>eid</th>
                <th>uid</th>
                <th>nom</th>
                <th>prenom</th>
                <th>email</th>
                <th>tel</th>
                <th>etid</th>
                <th>annee</th>
                <th>action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($this->teachers as $teacher):?>
                <tr>
                    <td><?php echo $teacher->eid;?></td>
                    <td><?php echo $teacher->uid;?></td>
                    <td><?php echo $teacher->nom;?></td>
                    <td><?php echo $teacher->prenom;?></td>
                    <td><?php echo $teacher->email;?></td>
                    <td><?php echo $teacher->tel;?></td>
                    <td><?php echo $teacher->etid;?></td>
                    <td><?php echo $teacher->annee;?></td>
                    <td><a href="#" onclick="editFunction(<?php echo "'eid=".$teacher->eid."'"?>,'Edit Teacher',600,600);return false"
                            <?php echo 'id=teacher'.$teacher->eid?> ><i class="fas fa-edit"></i></a>
                        <a href="#" style="color: red" onclick="deleteFunction(<?php echo "'eid=".$teacher->eid."'";echo ','; echo "'".$teacher->nom." ".$teacher->prenom."'"?>);return false">
                            <i class="fas fa-trash-alt"></i></a></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>

<!-------------------------------Modules--------------------------->
<?php elseif($this->category === 'Modules'): ?>
    <div class="container" style="padding-top: 50px">
        <div class="row">
            <div class="col-sm-10">
                <h2>Manage <b>Modules</b></h2>
            </div>
            <div class="col-sm-2 float-right">
                <button onClick="addFunction('mid=true','Add Module',600,600)" class="btn btn-success" style="width: 150px">Add Module</button>
            </div>
        </div>
        <table class="table table-striped" style="padding-top: 50px">
            <thead>
            <tr>
                <th>mid</th>
                <th>intitule</th>
                <th>code</th>
                <th>eid</th>
                <th>cid</th>
                <th>annee</th>
                <th>action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($this->modules as $module):?>
                <tr>
                    <td><?php echo $module->mid;?></td>
                    <td><?php echo $module->intitule;?></td>
                    <td><?php echo $module->code;?></td>
                    <td><?php echo $module->eid;?></td>
                    <td><?php echo $module->cid;?></td>
                    <td><?php echo $module->annee;?></td>
                    <td><a href="#" onclick="editFunction(<?php echo "'mid=".$module->mid."'"?>,'Edit Module',600,600);return false"
                            <?php echo 'id=module'.$module->mid?> ><i class="fas fa-edit"></i></a>
                        <a href="#" style="color: red" onclick="deleteFunction(<?php echo "'mid=".$module->mid."'";echo ','; echo "'".$module->intitule."'"?>);return false">
                            <i class="fas fa-trash-alt"></i></a></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>

<!-------------------------------Groups--------------------------->
<?php elseif($this->category === 'Groups'): ?>
    <div class="container" style="padding-top: 50px">
        <div class="row">
            <div class="col-sm-5">
                <h2>Manage <b>Groups</b></h2>
            </div>
            <div class="col-sm-5 float-right">
                <button onClick="assign('group=module','Add to Module',600,600)" class="btn btn-success" style="width: 150px">Assign to Module</button>
            </div>
            <div class="col-sm-2 float-right">
                <button onClick="addFunction('gid=true','Add Group',600,600)" class="btn btn-success" style="width: 150px">Add Group</button>
            </div>
        </div>
        <table class="table table-striped" style="padding-top: 50px">
            <thead>
            <tr>
                <th>gid</th>
                <th>mid</th>
                <th>nom</th>
                <th>annee</th>
                <th>gtid</th>
                <th>action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($this->groups as $group):?>
                <tr>
                    <td><?php echo $group->gid;?></td>
                    <td><?php echo $group->mid;?></td>
                    <td><?php echo $group->nom;?></td>
                    <td><?php echo $group->annee;?></td>
                    <td><?php echo $group->gtid;?></td>
                    <td><a href="#" onclick="editFunction(<?php echo "'gid=".$group->gid."'"?>,'Edit Group',600,600);return false"
                            <?php echo 'id=group'.$group->gid?> ><i class="fas fa-edit"></i></a>
                        <a href="#" style="color: red" onclick="deleteFunction(<?php echo "'gid=".$group->gid."'";echo ','; echo "'".$group->nom."'"?>);return false">
                            <i class="fas fa-trash-alt"></i></a></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>

<!-------------------------------Gtypes--------------------------->
<?php elseif($this->category === 'Gtypes'): ?>
    <div class="container" style="padding-top: 50px">
        <div class="row">
            <div class="col-sm-10">
                <h2>Manage <b>Gtypes</b></h2>
            </div>
            <div class="col-sm-2 float-right">
                <button onClick="addFunction('gtid=true','Add Group Type',600,600)" class="btn btn-success" style="width: 150px">Add Group Type</button>
            </div>
        </div>
        <table class="table table-striped" style="padding-top: 50px">
            <thead>
            <tr>
                <th>gtid</th>
                <th>nom</th>
                <th>nbh</th>
                <th>coeff</th>
                <th>action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($this->gtypes as $gtype):?>
                <tr>
                    <td><?php echo $gtype->gtid;?></td>
                    <td><?php echo $gtype->nom;?></td>
                    <td><?php echo $gtype->nbh;?></td>
                    <td><?php echo $gtype->coeff;?></td>
                    <td><a href="#" onclick="editFunction(<?php echo "'gtid=".$gtype->gtid."'"?>,'Edit Group Type',600,600);return false"
                            <?php echo 'id=groupType'.$gtype->gtid?> ><i class="fas fa-edit"></i></a>
                        <a href="#" style="color: red" onclick="deleteFunction(<?php echo "'gtid=".$gtype->gtid."'";echo ','; echo "'".$gtype->nom."'"?>);return false">
                            <i class="fas fa-trash-alt"></i></a></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>

<!-------------------------------Assigments--------------------------->
<?php elseif($this->category === 'Assigments'): ?>
    <div class="container" style="padding-top: 50px">
        <div class="row">
            <div class="col-sm-10">
                <h2>Manage <b>Affectations</b></h2>
            </div>
            <div class="col-sm-2 float-right">
                <button onClick="assign('teacher=group','Add Affectation',600,600)" class="btn btn-success" style="width: 150px">assign Affectation</button>
            </div>
        </div>
        <table class="table table-striped" style="padding-top: 50px">
            <thead>
            <tr>
                <th>eid</th>
                <th>gid</th>
                <th>nbh</th>
                <th>action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($this->affectations as $affectation):?>
                <tr>
                    <td><?php echo $affectation->eid;?></td>
                    <td><?php echo $affectation->gid;?></td>
                    <td><?php echo $affectation->nbh;?></td>
                    <td><a href="#" style="color: red" onclick="deleteFunction(<?php echo "'aff=".$affectation->eid."'";echo ','; echo "'".$affectation->eid." ".$affectation->gid."'"?>);return false">
                            <i class="fas fa-trash-alt"></i></a></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
<?php endif ?>
<!----------------------------Footer------------------------------>

<?php
require "../blocks/footer.php";
?>

<script>
    function assign(id, title, w, h){
        let url = "../server/assignTool.php?"+id;
        let left = (screen.width/2)-(w/2);
        let top = (screen.height/2)-(h/2);
        return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
    }
    function editFunction(id, title, w, h) {
        let url = "../server/editTool.php?"+id;
        let left = (screen.width/2)-(w/2);
        let top = (screen.height/2)-(h/2);
        return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
    }
    function deleteFunction(id,name){
        if(confirm('Are you sure want to delete '+name)){
            window.location.assign('../server/deleteTool.php?'+id);
        }
    }
    function addFunction(id,title,w,h){
        let url = "../server/addTool.php?"+id;
        let left = (screen.width/2)-(w/2);
        let top = (screen.height/2)-(h/2);
        return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
    }
</script>
</body>
</html>