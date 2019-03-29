<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.4.8/css/ionicons.min.css">
        <link rel="stylesheet" href="/res/admin/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="/res/admin/plugins/iCheck/square/blue.css">
        <link rel="stylesheet" href="/res/admin/bootstrap/css/bootstrap.min.css">
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="/res/admin/index2.html"><b>Admin</b>TLE</a>
            </div><!-- FIM LOGIN-LOGO -->
            <div class="login-box-body">
                <p class="login-box-msg">Sign in to Start your session</p>
                <form action="/admin/login" method="POST">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="User" name="login">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox">Remember Me
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div>
                    </div>
                </form>
                <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i>Sign in Facebook</a>
                    <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i>Sign in Google+</a>
                </div>
                <a href="#">I forgot my password</a></br>
                <a href="register.html" class="text-center">Register a new membership</a>
            </div><!-- FIM LOGIN-BOX-BODY -->
        </div><!-- FIM LOGIN-BOX -->
        
<!-- jQuery 2.2.3 -->
<script src="/res/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/res/admin/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="/res/admin/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
    </body>
</html>
