<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <title>Index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <style type="text/css">
    body{
      background-image: url(./img/background.jpg);
      background-size: cover;
    }
    </style>
  </head>
  <body>
    <div class="container" style="padding-top:15%">
      <div class="row">
        <div class="col-md-8">
        </div>
        <div class="col-md-4 well">
          <ul class="nav nav-tabs">
            <li name="student" class="active"><a href="#student" data-toggle="tab">Student</a></li>
            <li name="teacher"><a href="#teacher" data-toggle="tab">Teacher</a></li>
            <li name="manager"><a href="#manager" data-toggle="tab">Manager</a></li>
          </ul>
          <br>
          <div class="tab-content">
            <div name="student" class="tab-pane active" id="student">
              <form class="form-horizontal" role="form" action="action/studentAction.php" method="post">
                <input type="hidden" name="action" value="login">
                <div class="form-group">
                  <div class="col-md-10">
                    <input type="text" class="form-control" name="sid" placeholder="StudentID" value="<?php echo $_COOKIE['sid'] ?>" >
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-10">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-10">
                    <div class="checkbox">
                      <label>
                        <input name="remember" type="checkbox"> Remember Me
                      </label>
                      <?php if($_GET['error'] == 'student'){ ?>
                        <span class="text-danger pull-right"><strong>Login Error!&nbsp;</strong></span>
                      <?php } ?>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-10 btn-group">
                    <button type="submit" class="btn btn-primary col-md-6">Sign in</button>
                    <button type="reset" class="btn btn-default col-md-6">Reset</button>
                  </div>
                </div>
              </form>
            </div>
            <div name="teacher" class="tab-pane" id="teacher">
              <form class="form-horizontal" role="form"  action="action/teacherAction.php" method="post">
                <input type="hidden" name="action" value="login">
                <div class="form-group">
                  <div class="col-md-10">
                    <input type="text" class="form-control" name="tid" placeholder="TeacherID" value="<?php echo $_COOKIE['tid'] ?>" >
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-10">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-10">
                    <div class="checkbox">
                      <label>
                        <input name="remember" type="checkbox"> Remember Me
                      </label>
                      <?php if($_GET['error'] == 'teacher'){ ?>
                        <span class="text-danger pull-right"><strong>Login Error!&nbsp;</strong></span>
                      <?php } ?>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-10 btn-group">
                    <button type="submit" class="btn btn-primary col-md-6">Sign in</button>
                    <button type="reset" class="btn btn-default col-md-6">Reset</button>
                  </div>
                </div>
              </form>
            </div>
            <div name="manager" class="tab-pane" id="manager">
              <form class="form-horizontal" role="form"  action="action/managerAction.php" method="post">
                <input type="hidden" name="action" value="login">
                <div class="form-group">
                  <div class="col-md-10">
                    <input type="text" class="form-control" name="mid" placeholder="ManagerID" value="<?php echo $_COOKIE['mid'] ?>" >
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-10">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-10">
                    <div class="checkbox">
                      <label>
                        <input name="remember" type="checkbox"> Remember Me
                      </label>
                      <?php if($_GET['error'] == 'manager'){ ?>
                        <span class="text-danger pull-right"><strong>Login Error!&nbsp;</strong></span>
                      <?php } ?>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-10 btn-group">
                    <button type="submit" class="btn btn-primary col-md-6">Sign in</button>
                    <button type="reset" class="btn btn-default col-md-6">Reset</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script type="text/javascript">
       $(function(){
          var url = window.location.href;
          if (url.match('teacher')){
            $('a[href="#teacher"]').tab('show');
          }else if (url.match('manager')) {
            $('a[href="#manager"]').tab('show');
          };
       });
    </script>
  </body>
</html>