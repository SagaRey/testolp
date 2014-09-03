<!doctype html>
<?php
	session_start();
	if(!$_SESSION['sid']){
		header('Location: /index.php');
	}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>TestOL</title>
<link href="../css/bootstrap.css" rel="stylesheet">
<style type="text/css">
    #header{
        position: fixed;
        right: 0;
        left: 0;
        top: 20px;
    }
    #body{
        padding-top: 160px;
    }
</style>
</head>
<body>
<div id="header">
    <div class="container">
        <nav id="navbarBar" name="navbar" class="navbar navbar-inverse" role="navigation" >
            <div class="navbar-header">
                <a class="navbar-brand" href="/student/index.php">StudentOL</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/action/studentAction.php?action=practice">Practice</a></li>
                    <li><a href="/action/studentAction.php?action=test">Test</a></li>
                    <li><a href="/action/studentAction.php?action=logout"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<div id="body">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
            <div class="thumbnail">
                <div class="caption">
                  <h3>Practice</h3>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  <p><a href="/action/studentAction.php?action=practice" class="btn btn-default" role="button">Detail</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <div class="caption">
                  <h3>Test</h3>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  <p><a href="/action/studentAction.php?action=test" class="btn btn-default" role="button">Detail</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <div class="caption">
                  <h3>Etc.</h3>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  <p><a href="#" class="btn btn-default" role="button">Detail</a></p>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>