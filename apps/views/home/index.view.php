<!doctype html>
<html lang="en" ng-app="MyTutorialApp">
<?php
use Cygnite\Common\UrlManager\Url;
use Cygnite\Common\SessionManager\Session;
?>
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Angular JS Application" />
    <meta name="author" content="Cygnite Framework Bootstrap Starter Site." />
    <!-- Google will often use this as its description of your page/site. Make it good. -->
    <meta name="description" content="Cygnite + Angular + Bootstrap JS Tutorial." />
    <!--  Mobile Viewport Fix -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <title>Angular JS Sample Login Authentication App</title>
    <link rel="stylesheet" type="text/css" title= '' href="/mycygnite/assets/css/bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" title= '' href="/mycygnite/assets/css/bootstrap/css/bootstrap-theme.min.css" >
    <link rel="stylesheet" type="text/css" title= '' href="/mycygnite/assets/css/cygnite/flash.css" >
    <link rel="stylesheet" type="text/css" title= '' href="/mycygnite/assets/css/cygnite/wysihtml5/prettify.css" >
    <link rel="stylesheet" type="text/css" title= '' href="/mycygnite/assets/css/cygnite/wysihtml5/bootstrap-wysihtml5.css" >

    <style> body { padding: 60px 0; } </style>
</head>

<body >


<!-- Fluid Container -->
<div class='container'>

    <!-- Navbar -->
    <div class="navbar navbar-default navbar-inverse navbar-fixed-top" >
        <div class="container">

            <div style="margin:0px important; padding:0px !important;color:#fff;float:left;"><h3>Single Page App Using Angular JS and PHP </h3></div>
            <div style="float:right;padding-top: 14px;"><a style="color:#fff;" href="<?php echo Url::getBase(); ?>#/login"><h4>Login</h4></h4></a></div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">

               <!-- <ul class="nav navbar-nav">
                    <li>
                        <?php /*if(Session::has('auth:user')) { */?>
                        <a href="<?php /*echo Url::getBase(); */?>#/home"><span class="glyphicon glyphicon-home"></span> Home</a>
                        <?php /*} */?>
                    </li>
                </ul>-->


                <ul class="nav navbar-nav pull-right">
                    <!-- Right side menu -->
                    <li> </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ./ navbar -->

    <!-- Content -->

    <div class="row">
        <div class="col-sm-12">

            <base href="{{baseUrl}}" ng-init="baseUrl = '<?php echo Url::getBase(); ?>'" />

            <!-- Your angular templates will render here-->
            <div id="view" ng-view></div>

        </div>
    </div>

    <!-- ./ Content -->

    <!-- Footer -->
    <footer class="clearfix"></footer>
    <!-- ./ Footer -->

</div>
<!-- ./ Container End -->
<!-- load angular and angular route via CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>
<script type="text/javascript" src="/mycygnite/assets/js/angular/app.js"></script>

<style type="text/css">
    .navbar-inverse {background: none repeat scroll 0 0 #07508f!important;}
</style>

</body>
</html>
