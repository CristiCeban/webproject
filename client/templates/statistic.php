<?php
if(!isLoggedIn())
    header("Location: login.php");
?>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="jquery-editable-select.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <link href="css/common.css" rel="stylesheet" type="text/css">
    <link href="css/statistic.css" rel="stylesheet" type="text/css">
    <title>Statistics</title>
</head>
<body>

<!--------------------------NAVBAR--------------------------->
<?php
require "../blocks/header.php";
?>

<!-------------------------page---------------------->

<div class="container">
    <div class="row">
        <!-------------3 column ---------------------->
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
                    <select hidden class="list-group-item mdb-select md-form" style="text-align-last: center" name="selectTeacher" id="teacher" onchange="validate()">
                        <option selected>Select teacher</option>
                        <?php foreach($this->teachers as $teacher):?>
                            <option><?php echo $teacher->nom. ' ' . $teacher->prenom ?></option>
                        <?php endforeach; ?>
                    </select>
                    <select hidden class="list-group-item" style="text-align-last: center" name="selectModule" id="module" onchange="validate()">
                        <option>Select module</option>
                        <?php foreach($this->modules as $module):?>
                            <option><?php echo $module->intitule.'-'.$module->annee?></option>
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
        <!-------------------------9 columns------------------------>
        <div class="col-lg-9 text-center">
            <div class="container">
                <div class="row">
                    <?php if($this->teachersOk===GOOD):
                        $nbh=$this->dashboard->getNbhTeacher($this->selectedTeacher,$this->selectedYear);
                    ?>
                    <?php if(count($this->modulesOfTeacher)===0){
                        echo '<p class="col-md-12" style="font-size: large;">'.($this->selectedTeacher . " hasn't module in " . $this->selectedYear).'</p>';}
                    else { ?>
                    <h1 style="font-size: 40px;color: #cd5c5c;text-align: center"><?php echo $this->selectedTeacher?> have the folowing Modules in
                        <?php echo $this->selectedYear.':'?></h1>

                    <?php foreach($this->categoriesOfTeacher as $category):?>
                    <div class="col-md-12 col-lg-12">
                        <h1><u><?php echo $category->nom.'<br>';?></u></h1>
                        <?php $modulesOfCategory = $this->dashboard->getAllModulesByCategory($category->cid,$this->selectedTeacher,$this->selectedYear) ?>
                        <?php foreach($modulesOfCategory as $module) : ?>
                        <div class="row">
                            <div class="col-md-7"
                            <h5 style="font-size: x-large"><?php echo $module->intitule ?></h5>
                            <br>
                            <p style="font-size: medium"><?php echo 'Code:'.$module->code;?></p>
                        </div>
                        <div class="col-md-5">
                            <a class="btn btn-secondary" href="#">View</a>
                        </div>
                    </div>
                <?php $groupsOfModule = $this->dashboard->getAllGroupsByModule($module->mid,$this->selectedTeacher,$this->selectedYear)?>
                    <div class="row">
                        <?php foreach($groupsOfModule as $group) : ?>
                            <?php $affectations = $this->dashboard->getAllAffectationsGroupes($group->gid,$this->selectedTeacher,$this->selectedYear) ?>
                            <div class="col-md-5">
                                <div class="container fluid">
                                    <h2 style="font-size: large"><?php echo $group->nom;?></h2>
                                    <h2 style="font-size: medium"><?php echo $affectations->nbh.' hours'?></h2>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach;?>
                </div>
                <?php endforeach; ?>
                <div id="charts">
                    <div id="piechart" style="width: 900px; height: 500px;"></div>
                </div>
                <?php } ?>


                <?php elseif($this->modulesOk===GOOD):
                    //TODO add statistic for module?>


                <?php elseif($this->groupsOk===GOOD):
                    //TODO add statistic for group?>

                <?php endif ?>
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
    <?php if($this->modulesOfTeacher!==BAD):
    $schedules = $dashboard->getScheduleTeacher($this->selectedTeacher,$this->selectedYear);
    $ocupationTime = 0;
    foreach ($schedules as $schedule):
        $ocupationTime+=$schedule->nbh;
    endforeach;
    $freeTime = $nbh->nbh - $ocupationTime?>
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['unscheduled',     <?php echo $ocupationTime ?>],
            <?php foreach ($schedules as $schedule):
            echo '["'.$schedule->nom.'-'.$schedule->intitule.'",'.$schedule->nbh.'],';
        endforeach;?>

        ]);

        var options = {
            title: '<?php echo $this->selectedTeacher.' '.'horaire in '.$this->selectedYear?>'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
    <?php endif ?>
</script>