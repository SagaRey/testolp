<!DOCTYPE html>
<?php
    session_start();
    if(!$_SESSION['tid']){
        header('Location: /index.php');
    }
    $questions = $_SESSION['questions'];
    $test = $_SESSION['test'];
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>TestOL</title>
<link href="../css/bootstrap.css" rel="stylesheet">
<style type="text/css">
    .chevron-left{
        width: 30px;
    }
    #header{
        position: fixed;
        right: 0;
        left: 0;
        top: 20px;
    }
    #body{
        padding-top: 70px;
    }
    #navbar{
        position: relative;
        top: 0px;
        left: -26px;
        height: 52px;
        visibility: hidden;
    }
    #navbarBar{
        top:-52px;
        height:52px;
    }
</style>
</head>
<body>
<div id="header">
    <div class="container">
        <button id="navbar" type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-home"></span></button>
        <nav id="navbarBar" name="navbar" class="navbar navbar-inverse" role="navigation" >
            <div class="navbar-header">
                <a class="navbar-brand" href="/teacher/index.php">TeacherOL</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/action/questionAction.php?action=queryall">Question</a></li>
                    <li><a href="/action/testAction.php?action=queryall">Test</a></li>
                    <li><a href="/action/teacherAction.php?action=logout"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
                    <li><a class="chevron-left"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<div id="body">
    <div id="contain" class="container">
        <div class="row" style="padding-top:20px;">
            <div name="record" class="col-md-8 tab-content">
                <?php
                    $i = 0;
                    foreach ($questions as $question) {
                        $i ++;
                ?>
                <div id="<?php echo $question['qno'] ?>" class="panel panel-default tab-pane <?php if($i == 1 ) echo 'active' ?> ">
                    <div class="panel-heading"><strong><?php echo $i ?></strong></div>
                    <table class="table">
                        <tr>
                            <th width="10%">Qno</th><td width="40%"><?php echo $question['qno'] ?></td>
                            <th width="10%"></th><td width="40%"></td>
                        </tr>
                        <tr>
                            <th>Difficulty</th><td><?php echo $question['difficulty'] ?></td>
                            <th>Subject</th><td><?php echo $question['subject'] ?></td>
                        </tr>
                        <tr>
                            <th>Point</th><td><?php echo $question['point'] ?></td>
                            <th>Type</th><td><?php echo $question['type'] ?></td>
                        </tr>
                        <tr height="120px">
                            <th>Question</th><td><?php echo $question['question'] ?></td>
                            <th></th><td></td>
                        </tr>
                        <tr>
                            <th>OptionA</th><td><?php echo $question['optionA'] ?></td>
                            <th>OptionH</th><td><?php echo $question['optionH'] ?></td>
                        </tr>
                        <tr>
                            <th>OptionB</th><td><?php echo $question['optionB'] ?></td>
                            <th>OptionI</th><td><?php echo $question['optionI'] ?></td>
                        </tr>
                        <tr>
                            <th>OptionC</th><td><?php echo $question['optionC'] ?></td>
                            <th>OptionJ</th><td><?php echo $question['optionJ'] ?></td>
                        </tr>
                        <tr>
                            <th>OptionD</th><td><?php echo $question['optionD'] ?></td>
                            <th>OptionK</th><td><?php echo $question['optionK'] ?></td>
                        </tr>
                        <tr>
                            <th>OptionE</th><td><?php echo $question['optionE'] ?></td>
                            <th>OptionL</th><td><?php echo $question['optionL'] ?></td>
                        </tr>
                        <tr>
                            <th>OptionF</th><td><?php echo $question['optionF'] ?></td>
                            <th>OptionM</th><td><?php echo $question['optionM'] ?></td>
                        </tr>
                        <tr>
                            <th>OptionG</th><td><?php echo $question['optionG'] ?></td>
                            <th>OptionN</th><td><?php echo $question['optionN'] ?></td>
                        </tr>
                    </table>
                </div>
                <?php
                    }
                ?>
            </div>
            <div class="col-md-1">
                <ul class="nav nav-pills nav-stacked">
                <?php
                    $i = 0;
                    foreach ($questions as $question) {
                        $i ++;
                ?>
                  <li <?php if($i == 1 ) echo "class='active'" ?> ><a href="#<?php echo $question['qno'] ?>" data-toggle="tab"><?php echo $i ?></a></li>
                <?php
                    }
                ?>
                </ul>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <table class="table">
                        <tr><th>Tno</th><td><?php echo $test['tno'] ?></td></tr>
                        <tr><th>Subject</th><td><?php echo $test['subject'] ?></td></tr>
                        <tr><th>Tid</th><td><?php echo $test['tid'] ?></td></tr>
                        <tr><th>Difficulty</th><td><?php echo $test['difficulty'] ?></td></tr>
                        <tr><th>Quantity</th><td><?php echo $test['quantity'] ?></td></tr>
                        <tr><th>Total</th><td><?php echo $test['total'] ?></td></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#navbar").click(function(){
            $("#navbar").css("visibility","hidden");
            $("[name='navbar']").show();
            $("[name='navbar']").animate({width:'100%'},600);
        });
        $(".chevron-left").click(function(){
            $("[name='navbar']").animate({width:'0%'},600,function(){
                $("[name='navbar']").hide();
                $("#navbar").css("visibility","visible");
            });
        });
    });
</script>
</body>
</html>