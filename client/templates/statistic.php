<?php
if(!isLoggedIn())
    header("Location: login.php");
?>
<script>
    (document).ready(function() {
    ('.mdb-select').materialSelect();
}
</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="jquery-editable-select.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <link href="css/common.css" rel="stylesheet" type="text/css">
    <link href="css/statistic.css" rel="stylesheet" type="text/css">
    <title>Support</title>
</head>
<body>
<!--------------------------NAVBAR--------------------------->
<?php
require "../blocks/header.php";
?>

<div class="container">

    <div class="row">
        <!-----------------------------------3 column choose ------------------------------->
        <div class="col-lg-3">

            <h1 class="my-4 text-center">Select Categories</h1>
            <form action="statistic.php" name="choose_category" method="post" onsubmit="return validateBtn()">
                <div class="list-group">
                    <select class="list-group-item" style="text-align-last: center" name = "selectYear" id="year">
                        <option selected><?php echo date('Y');?></option>
                        <?php foreach($this->years as $year):?>
                            <option><?php echo $year->annee ?></option>
                        <?php endforeach; ?>
                    </select>
                    <select class="list-group-item" style="text-align-last: center" name="selectCategory" id="category" onchange="validate()">
                        <option selected>Select category</option>
                        <option>Teachers</option>
                        <option>Modules</option>
                        <option>Groups</option>
                    </select>
                    <div id="divSelect"></div>
                    <select hidden class="list-group-item mdb-select md-form" style="text-align-last: center" name="selectTeacher" id="teacher" onchange="validate()">
                        <option selected>Select teacher</option>
                        <?php foreach($this->teachers as $teacher):?>
                            <option><?php echo $teacher->nom. ' ' . $teacher->prenom ?></option>
                        <?php endforeach; ?>
                    </select>
                    <select hidden class="list-group-item" style="text-align-last: center" name="selectModule" id="module" onchange="validate()">
                        <option>Select module</option>
                        <?php foreach($this->modules as $module):?>
                            <option><?php echo $module->intitule ?></option>
                        <?php endforeach; ?>
                    </select>
                    <select hidden class="list-group-item" style="text-align-last: center" name="selectGroup" id="group" onchange="validate()">
                        <option>Select group</option>
                        <?php foreach($this->groups as $group):?>
                            <option><?php echo $group->nom ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="text-center" style="padding-top: 2rem">
                    <button name="button_find" type="submit" class="btn btn-success">Find</button>
                </div>
            </form>
        </div>
        <!-----------------------------------9 column display------------------------------------->
        <div class="col-lg-9 text-center">
            <p><?php echo 'you selected Teacher - ' . $this->selectedTeacher . ' and Year - ' . $this->selectedYear; ?></p>
            <div class="container">
                <div class="row">
                    <?php if($this->modulesOfTeacher!==BAD) {
                        if(count($this->modulesOfTeacher)===0)
                            echo ($this->selectedTeacher . " hasn't module in " . $this->selectedYear);
                        else{ ?>
                            <h1 style="font-size: 40px;color: #cd5c5c;text-align: center"><?php echo $this->selectedTeacher?> have the folowing Modules in
                                <?php echo $this->selectedYear.':'?></h1>
                            <?php foreach($this->modulesOfTeacher as $module): ?>
                                <div class="col-md-10">
                                    <h4><?php echo $module->intitule?></h4>
                                    <p><?php echo 'Code:'.$module->code?></p>
                                </div>
                                <div class="col-md-2">
                                    <a class="btn btn-secondary" href="#">View</a>
                                </div>
                            <?php endforeach;
                        }
                    }?>
                </div>
            </div>
        </div>
    </div>
</div>

<!----------------------------Footer------------------------------>

<?php
require "../blocks/footer.php";
?>

</body>
</html>

<script>
    function validateBtn(){
        let category = document.getElementById('category');
        let teacher = document.getElementById('teacher');
        let module = document.getElementById('module');
        let group = document.getElementById('group');
        if(category.selectedIndex===0) {
            alert('Choose a category first!');
            return false;
        }
        else if(teacher.selectedIndex===0&&module.selectedIndex===0&&group.selectedIndex===0){
            alert('Choose one of the categories!');
            return false;
        }
    }

    function validate(){
        let category = document.getElementById('category');
        let teacher = document.getElementById('teacher');
        let module = document.getElementById('module');
        let group = document.getElementById('group');
        if (category.selectedIndex===0){
            teacher.setAttribute('hidden',true);
            teacher.selectedIndex=0;
            module.setAttribute('hidden',true);
            module.selectedIndex=0;
            group.setAttribute('hidden',true);
            group.selectedIndex=0;
        }
        if(category.selectedIndex===1) {
            teacher.removeAttribute('hidden');
            module.setAttribute('hidden',true);
            module.selectedIndex=0;
            group.setAttribute('hidden',true);
            group.selectedIndex=0;
        }
        if(category.selectedIndex===2) {
            teacher.setAttribute('hidden',true);
            teacher.selectedIndex=0;
            module.removeAttribute('hidden');
            group.setAttribute('hidden',true);
            group.selectedIndex=0;
        }
        if(category.selectedIndex===3) {
            teacher.setAttribute('hidden',true);
            teacher.selectedIndex=0;
            module.setAttribute('hidden',true);
            module.selectedIndex=0;
            group.removeAttribute('hidden');
        }
    }

</script>
