<!DOCTYPE html>
<?php
    session_start();
    if(!$_SESSION['tid']){
        header('Location: /index.php');
    }
    $tests = $_SESSION['tests'];
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
    .badge{
        background-color: #d9534f;
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
            <?php
                $tests = $_SESSION['tests'];
                foreach ($tests as $test) {
            ?>
                <div name="record" class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo $test['tno'] ?>
                            <?php if($test['tno'] == $_SESSION['tno'] ) { echo "<span class='badge'>New</span>"; } ?>
                            <span class="glyphicon glyphicon-link pull-right link"></span>
                        </div>
                        <table class="table">
                            <tr>
                                <th width="20%">Tno</th><td name="tno" width="80%"><?php echo $test['tno'] ?></td>
                            </tr>
                            <tr>
                                <th>Subject</th><td><?php echo $test['subject'] ?></td>
                            </tr>
                            <tr>
                                <th>Tid</th><td><?php echo $test['tid'] ?></td>
                            </tr>
                            <tr>
                                <th>Difficulty</th><td><?php echo $test['difficulty'] ?></td>
                            </tr>
                            <tr>
                                <th>Quantity</th><td><?php echo $test['quantity'] ?></td>
                            </tr>
                            <tr>
                                <th>Total</th><td><?php echo $test['total'] ?></td>
                            </tr>
                            <tr>
                                <th>Date</th><td><?php echo $test['date'] ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            <?php
                }
            ?>
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
        $(window).scroll(function(){
            var top = $(window).scrollTop();
            if (top > 80 && ($("#navbar").css("visibility")) == "hidden") {              
                $("[name='navbar']").css("width","0%");
                $("[name='navbar']").hide();
                $("#navbar").css("visibility","visible");
            }
            if (top <= 80 && ($("#navbar").css("visibility")) == "visible"){            
                $("#navbar").css("visibility","hidden");
                $("[name='navbar']").show();
                $("[name='navbar']").css("width","0%");
                $("[name='navbar']").animate({width:'100%'},300);
            };
        });
        $(".link").click(function(){
            window.location.href = "/action/testAction.php?action=get&tno=" + $(this).closest(".panel").find("[name='tno']").text();
        });
    });
</script>
</body>
</html>