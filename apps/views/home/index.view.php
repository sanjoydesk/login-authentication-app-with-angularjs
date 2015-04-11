<!doctype html>
<html lang="en" ng-app="MyTutorialApp">
<?php
use Cygnite\Mvc\View\Widget;
use Cygnite\Common\UrlManager\Url;
use Cygnite\Common\SessionManager\Session;
?>
<head>
    <meta charset="UTF-8">
    <title>Sample Product Management App Using Angular JS Part 1 </title>
	<link rel="shortcut icon" href="<?php echo Url::getBase(); ?>assets/img/cygnite/fevicon.png" > </link>
    <link rel="stylesheet" type="text/css" title= '' href="<?php echo Url::getBase(); ?>/assets/css/bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" title= '' href="<?php echo Url::getBase(); ?>/assets/css/bootstrap/css/bootstrap-theme.min.css" >
    <link rel="stylesheet" type="text/css" title= '' href="<?php echo Url::getBase(); ?>/assets/css/cygnite/flash.css" >
    <link rel="stylesheet" type="text/css" title= '' href="<?php echo Url::getBase(); ?>/assets/css/cygnite/wysihtml5/prettify.css" >
    <link rel="stylesheet" type="text/css" title= '' href="<?php echo Url::getBase(); ?>/assets/css/cygnite/wysihtml5/bootstrap-wysihtml5.css" >

    <style> body { padding: 60px 0; }  .navbar-inverse {background: none repeat scroll 0 0 #07508f!important;}</style>
	
</head>

<body >


<!-- Fluid Container -->
<div class='container'>

    <!-- Navbar -->
    <div class="navbar navbar-default navbar-inverse navbar-fixed-top" >
        <div class="container">
		<?php //echo Widget::make('layout:widget:navbar'); ?>
            <div class="navbar-header">
			
					<a href="http://www.cygniteframework.com/" class="navbar-brand" rel="nofollow">
                        <small style="color:#fff;font-size: 19px !important;">
                            <i class="glyphicon glyphicon glyphicon-log-out"></i>
                            Single Page App Using Angular JS and Cygnite PHP Framework
                        </small>
                    </a><!-- /.brand -->
					

            </div>
			<div class="navbar-header pull-right"  role="navigation">
                    <!-- Right side menu -->
					<a style="color:#fff; padding-right: 18px;float:left !important;" href="<?php echo Url::getBase(); ?>index.php/angular/#/login"><h4>Login</h4></a> 
                    <a href="http://www.appsntech.com/2015/04/building-simple-product-management-app.html" class="btn btn-sm btn-default nav-button-margin"> <i class="glyphicon glyphicon-book"></i>&nbsp;Tutorial Link</a> 
                </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">

               <!-- <ul class="nav navbar-nav">
                    <li>
                        <?php /*if(Session::has('auth:user')) { */?>
                        <a href="<?php /*echo Url::getBase(); */?>#/home"><span class="glyphicon glyphicon-home"></span> Home</a>
                        <?php /*} */?>
                    </li>
                </ul>-->

                
            </div>
        </div>
    </div>
    <!-- ./ navbar -->

    <!-- Content -->

    <div class="row" style="min-height:480px;">
        <div class="col-sm-12">



            <base href="{{baseUrl}}" ng-init="baseUrl = '<?php echo Url::getBase(); ?>'" />


            <div id="view" ng-view></div>
        </div>
    </div>

    <!-- ./ Content -->

    <!-- Footer -->
    <footer class="clearfix">
			<p> Share some love back. </p>
					<!-- FaceBook Button Start, Remove Or leave -->
            <a href='http://www.facebook.com/sharer.php?u=http://www.appsntech.com/2015/04/building-simple-product-management-app.html&amp;title=Building A Simple Product Management App Using Angular JS + Cygnite PHP + Bootstrap' target='_blank' title='Add To Facebook'><img alt='Add To Facebook' border='0' class='icon-action' src='http://3.bp.blogspot.com/_vLeiVavkV_M/SnleIlLdGwI/AAAAAAAABd8/RfHnWIGGMEY/s200/facebook.png'/></a>

            <!-- FaceBook Button End, Remove Or leave -->
            <!-- Stumbleupon Button Start, Remove Or leave -->
            <a href='http://www.stumbleupon.com/refer.php?url=http://www.appsntech.com/2015/04/building-simple-product-management-app.html&amp;title=Building A Simple Product Management App Using Angular JS + Cygnite PHP + Bootstrap' target='_blank' title='Stumble This'><img alt='Stumble This' border='0' class='icon-action' src='http://2.bp.blogspot.com/_vLeiVavkV_M/SnleiulEMVI/AAAAAAAABeU/kO09nNTlQeo/s200/stumbleupon.png'/></a>

            <!-- Stumbleupon Button End, Remove Or leave -->
            <!-- Digg Button Start, Remove Or leave -->
            <a target='_blank' href='http://digg.com/submit?phase=2&amp;url=http://www.appsntech.com/2015/04/building-simple-product-management-app.html&amp;title=Building A Simple Product Management App Using Angular JS + Cygnite PHP + Bootstrap' title='Digg This'><img alt='Digg This' border='0' class='icon-action' src='http://3.bp.blogspot.com/_vLeiVavkV_M/Snld_x-wXoI/AAAAAAAABd0/cTsGU_Y-zQ8/s200/digg.png'/></a>

            <!-- Digg Button End, Remove Or leave -->
            <!-- Delicious Button Start, Remove Or leave -->
            <a href='http://del.icio.us/post?url=http://www.appsntech.com/2015/04/building-simple-product-management-app.html&amp;title=Building A Simple Product Management App Using Angular JS + Cygnite PHP + Bootstrap' target='_blank' title='Add To Del.icio.us'><img alt='Add To Del.icio.us' border='0' class='icon-action' src='http://2.bp.blogspot.com/_vLeiVavkV_M/Snld35mPSDI/AAAAAAAABds/ccrOpOmP9Zk/s200/delicious.png'/></a>

            <!-- Delicious Button End, Remove Or leave -->
            <!-- Reddit Button Start, Remove Or leave -->
            <a href='http://reddit.com/submit?url=http://www.appsntech.com/2015/04/building-simple-product-management-app.html&amp;title=Building A Simple Product Management App Using Angular JS + Cygnite PHP + Bootstrap' target='_blank' title='Add To Reddit'><img alt='Add To Reddit' border='0' class='icon-action' src='http://3.bp.blogspot.com/_vLeiVavkV_M/SnleX1tMMtI/AAAAAAAABeM/gQSYdrmSc3k/s200/reddit.png'/></a>
            <!-- Reddit Button End, Remove Or leave -->
            <!-- Yahoo Button Start, Remove Or leave -->
            <a href='http://myweb2.search.yahoo.com/myresults/bookmarklet?t=http://www.appsntech.com/2015/04/building-simple-product-management-app.html&amp;title=Building A Simple Product Management App Using Angular JS + Cygnite PHP + Bootstrap' target='_blank' title='Add To Yahoo'><img alt='Add To Yahoo' border='0' class='icon-action' src='http://1.bp.blogspot.com/_vLeiVavkV_M/SnlexsGX2QI/AAAAAAAABes/ai6zvzZKCgw/s200/yahoo.png'/></a>

            <!-- Yahoo Button End, Remove Or leave -->
            <a href='http://twitthis.com/twit?url=http://www.appsntech.com/2015/04/building-simple-product-management-app.html&title=Building A Simple Product Management App Using Angular JS + Cygnite PHP + Bootstrap' target='_blank' title='Tweet This' >
	
	
	</footer>
    <!-- ./ Footer -->

</div>
<!-- ./ Container End -->
<!-- load angular and angular route via CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>
<script type="text/javascript" src="<?php echo Url::getBase(); ?>/assets/js/angular/app.js"></script>



</body>
</html>
