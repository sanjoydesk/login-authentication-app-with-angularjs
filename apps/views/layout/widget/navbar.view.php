<?php use Cygnite\Common\UrlManager\Url; ?>
<div class="navbar navbar-default navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">

            <ul class="nav navbar-nav">
                <li><a href="<?php echo Url::getBase(); ?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li><a href="<?php echo Url::getBase(); ?>/inventory"><span class="glyphicon glyphicon-home"></span> Inventory</a></li>
            </ul>

            <ul class="nav navbar-nav pull-right">
                <!-- Right side menu -->
                <li> LogOut</li>
            </ul>
        </div>
    </div>
</div>
<!-- ./ navbar -->