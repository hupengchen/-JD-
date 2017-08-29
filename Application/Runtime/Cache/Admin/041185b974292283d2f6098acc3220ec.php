<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/JD/Application/Admin/Common/Template//bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/JD/Application/Admin/Common/Template//css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/JD/Application/Admin/Common/Template//css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/JD/Application/Admin/Common/Template//css/login.css" media="screen">

<link rel="stylesheet" type="text/css" href="/JD/Application/Admin/Common/Template//css/mws-theme.css" media="screen">

<title>MWS Admin - Login Page</title>

</head>

<body>
    <div id="mws-login-wrapper">
        <div id="mws-login">
            <h1>Login</h1>
            <div class="mws-login-lock"><i class="icon-lock"></i></div>
            <div id="mws-login-form">
                <form class="mws-form" action="<?php echo U('Home/index');?>" onsubmit="return false" method="post">
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="text" name="uname" class="mws-login-username required" placeholder="username">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="password" name="upwd" class="mws-login-password required" placeholder="password">
                        </div>
                    </div>
                    <div id="mws-login-remember" class="mws-form-row mws-inset">
                        <ul class="mws-form-list inline">
                            <li>
                                <label for="remember"></label>
                            </li>
                        </ul>
                    </div>
                    <div class="mws-form-row">
                        <input type="submit" value="登录" class="btn btn-success mws-login-button">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript Plugins -->
    <script src="/JD/Application/Admin/Common/Template//js/libs/jquery-1.8.3.min.js"></script>
    <script src="/JD/Application/Admin/Common/Template//js/libs/jquery.placeholder.min.js"></script>
    <script src="/JD/Application/Admin/Common/Template//custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/JD/Application/Admin/Common/Template//jui/js/jquery-ui-effects.min.js"></script>

    <!-- Plugin Scripts -->
    <script src="/JD/Application/Admin/Common/Template//plugins/validate/jquery.validate-min.js"></script>

    <!-- Login Script -->
    <script src="/JD/Application/Admin/Common/Template//js/core/login.js"></script>
    <script src="/JD/Application/Admin/Common/Js//md5.js"></script>
    <script src="/JD/Application/Admin/Common/Js//check_login.js"></script>
    
</body>
</html>