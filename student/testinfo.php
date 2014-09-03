<!DOCTYPE html>
<?php
    session_start();
    if(!$_SESSION['sid']){
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
    .check{
        display: none;
        color: #d9534f;
    }
    .editing{
        box-shadow: inset 2px 1px 3px rgba(0,0,0,.075);
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
                <a class="navbar-brand" href="/student/index.php">StudentOL</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/action/studentAction.php?action=practice">Practice</a></li>
                    <li><a href="/action/studentAction.php?action=test">Test</a></li>
                    <li><a href="/action/studentAction.php?action=logout"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
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
                        <div class="panel-heading">
                            <strong><?php echo $i ?></strong>
<!--                             <span class="glyphicon glyphicon-remove pull-right check"></span>
                            <span class="glyphicon glyphicon-ok pull-right check"></span> -->
                            <span class="glyphicon glyphicon-check pull-right"></span>
                        </div>
                        <div class="panel-body" style="height: 100px">
                            <p><?php echo $question['question'] ?></p>
                        </div>
                        <table class="table">
                            <?php
                                if($question['type'] == '单选'){
                            ?>
                                <tr name="A"><th width="10%"> A</th><td width="90%"><?php echo $question['optionA'] ?></td></tr>
                                <tr name="B"><th> B</th><td><?php echo $question['optionB'] ?></td></tr>
                                <tr name="C"><th> C</th><td><?php echo $question['optionC'] ?></td></tr>
                                <tr name="D"><th> D</th><td><?php echo $question['optionD'] ?></td></tr>
                                <tr style="visibility: hidden"><th>&nbsp;</th><td>&nbsp;</td></tr>
                                <tr style="visibility: hidden"><th>&nbsp;</th><td>&nbsp;</td></tr>
                                <input name="type" type="hidden" value="<?php echo $question['type'] ?>">
                                <input name="H" type="hidden" value="<?php echo $question['optionH'] ?>">
                            <?php
                                }
                            ?>
                            <?php
                                if($question['type'] == '多选'){
                            ?>
                                <tr name="A"><th width="10%"> A</th><td width="90%"><?php echo $question['optionA'] ?></td></tr>
                                <tr name="B"><th> B</th><td><?php echo $question['optionB'] ?></td></tr>
                                <tr name="C"><th> C</th><td><?php echo $question['optionC'] ?></td></tr>
                                <tr name="D"><th> D</th><td><?php echo $question['optionD'] ?></td></tr>
                                <tr name="E"><th> E</th><td><?php echo $question['optionE'] ?></td></tr>
                                <tr style="visibility: hidden;"><th>&nbsp;</th><td>&nbsp;</td></tr>
                                <input name="type" type="hidden" value="<?php echo $question['type'] ?>">
                                <input name="H" type="hidden" value="<?php echo $question['optionH'] ?>">
                                <input name="I" type="hidden" value="<?php echo $question['optionI'] ?>">
                                <input name="J" type="hidden" value="<?php echo $question['optionJ'] ?>">
                                <input name="K" type="hidden" value="<?php echo $question['optionK'] ?>">
                                <input name="L" type="hidden" value="<?php echo $question['optionL'] ?>">
                            <?php
                                }
                            ?>
                            <?php
                                if($question['type'] == '简答'){
                            ?>
                                <tr><th width="10%"> 1.</th><td class="editing" width="40%" name="A" Contenteditable="true"></td><th width="10%" class="answer"><?php if( $question['optionH'] ){ ?> 1.<?php } ?></th><td width="40%" name="H" class="answer" ><?php echo $question['optionH'] ?></td></tr>
                                <tr><th> 2.</th><td class="editing" name="B" Contenteditable="true"></td><th class="answer"><?php if( $question['optionI'] ){ ?> 2.<?php } ?></th><td name="I" class="answer" ><?php echo $question['optionI'] ?></td></tr>
                                <tr><th> 3.</th><td class="editing" name="C" Contenteditable="true"></td><th class="answer"><?php if( $question['optionJ'] ){ ?> 3.<?php } ?></th><td name="J" class="answer" ><?php echo $question['optionJ'] ?></td></tr>
                                <tr><th> 4.</th><td class="editing" name="D" Contenteditable="true"></td><th class="answer"><?php if( $question['optionK'] ){ ?> 4.<?php } ?></th><td name="K" class="answer" ><?php echo $question['optionK'] ?></td></tr>
                                <tr><th> 5.</th><td class="editing" name="E" Contenteditable="true"></td><th class="answer"><?php if( $question['optionL'] ){ ?> 5.<?php } ?></th><td name="L" class="answer" ><?php echo $question['optionL'] ?></td></tr>
                                <tr><th> 6.</th><td class="editing" name="F" Contenteditable="true"></td><th class="answer"><?php if( $question['optionM'] ){ ?> 6.<?php } ?></th><td name="M" class="answer" ><?php echo $question['optionM'] ?></td></tr>
                                <input name="type" type="hidden" value="<?php echo $question['type'] ?>">
                            <?php
                                }
                            ?>
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
                        <tr><th>Time</th><td><a id="time">12:00</a></td></tr>
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

        $(".answer").hide();

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
        var start = new Date().getTime();
        // alert(start);
        count(start);
    });
    function count(start){
        var d = new Date();
        var t = d.getTime();
        // alert(start);
        $("#time").text(to4(Math.round((t - start)/1000)));
        setTimeout("count(" + start + ")",500);
    };
    function to4(x){
        if(x < 10){
            x = "00:0" + x;
        }else if(x < 60){
            x = "00:" + x;
        }else if(x/60 < 10 && x%60 < 10){
            x = "0" + Math.floor(x/60) + ":0" + x%60;
        }else if(x/60 < 10 && x%60 < 60){
            x = "0" + Math.floor(x/60) + ":" + x%60;
        }else if(x/60 > 10 && x%60 < 10){
            x =  Math.floor(x/60) + ":0" + x%60;
        }else if(x/60 > 10 && x%60 < 60){
            x =  Math.floor(x/60) + ":" + x%60;
        }
        return x;
    };
    $("tr").click(function(){
        if($(this).closest("table").find("[name='type']").val() == "单选"){
            $(this).closest("table").find("tr").removeClass("warning");
            $(this).addClass("warning");
        }else if($(this).closest("table").find("[name='type']").val() == "多选"){
            if($(this).hasClass("warning")){
                $(this).removeClass("warning");
            }else{
                $(this).addClass("warning");
            }
        }else{

        }
    });
    $(".glyphicon-check").click(function(){
        $(this).hide();
        var close = $(this).closest(".panel");
        if(close.find("[name='type']").val() == "单选"){
            var answer = close.find("[name='H']").val();
            if(close.find("[name='" + answer + "']").hasClass("warning")){
                close.find("[name='" + answer + "']").removeClass("warning");
                close.find("[name='" + answer + "']").addClass("success");
            }else{
                close.find("[name='" + answer + "']").addClass("danger");
            };
        }else if(close.find("[name='type']").val() == "多选"){
            var list = new Array(close.find("[name='H']").val(),close.find("[name='I']").val(),close.find("[name='J']").val(),close.find("[name='K']").val(),close.find("[name='L']").val());
            for (var i =  0; i < list.length; i++) {
                if(close.find("[name='" + list[i] + "']").hasClass("warning")){
                    close.find("[name='" + list[i] + "']").removeClass("warning");
                    close.find("[name='" + list[i] + "']").addClass("success");
                }else{
                    close.find("[name='" + list[i] + "']").addClass("danger");
                };
            };
        }else{
            close.find(".answer").show();
            var answer = close.find("[name='A']").text() + close.find("[name='B']").text() + close.find("[name='C']").text() + close.find("[name='D']").text() + close.find("[name='E']").text() + close.find("[name='F']").text()
            if(close.find("[name='H']").text() != "" ){
                if(answer.indexOf(close.find("[name='H']").text()) != -1){
                    close.find("[name='H']").addClass("success");
                }else{
                    close.find("[name='H']").addClass("danger");
                }
            }
            if(close.find("[name='I']").text() != "" ){
                if(answer.indexOf(close.find("[name='I']").text()) != -1){
                    close.find("[name='I']").addClass("success");
                }else{
                    close.find("[name='I']").addClass("danger");
                }
            }
            if(close.find("[name='J']").text() != "" ){
                if(answer.indexOf(close.find("[name='J']").text()) != -1){
                    close.find("[name='J']").addClass("success");
                }else{
                    close.find("[name='J']").addClass("danger");
                }
            }
            if(close.find("[name='K']").text() != "" ){
                if(answer.indexOf(close.find("[name='K']").text()) != -1){
                    close.find("[name='K']").addClass("success");
                }else{
                    close.find("[name='K']").addClass("danger");
                }
            }
            if(close.find("[name='L']").text() != "" ){
                if(answer.indexOf(close.find("[name='L']").text()) != -1){
                    close.find("[name='L']").addClass("success");
                }else{
                    close.find("[name='L']").addClass("danger");
                }
            }
            if(close.find("[name='M']").text() != "" ){
                if(answer.indexOf(close.find("[name='M']").text()) != -1){
                    close.find("[name='M']").addClass("success");
                }else{
                    close.find("[name='M']").addClass("danger");
                }
            }
        }
    });
</script>
</body>
</html>