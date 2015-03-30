<?php
use Cygnite\Common\UrlManager\Url;
use Cygnite\Common\SessionManager\Session;
?>
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
                <li>
                    <?php if(Session::has('auth:user')) { ?>
                        <a href="<?php echo Url::getBase(); ?>#/home"><span class="glyphicon glyphicon-home"></span> Home</a>
                    <?php } ?>
                </li>
            </ul>

            <ul class="nav navbar-nav pull-right">
                <!-- Right side menu -->
                <li ng-show="welcome"> <a href="#"> <?php
                        show(Session::get());
                        if(Session::has('auth:user')) {
                            $user = Session::get('auth:user');
                            echo 'Welcome, '.$user['username'];
                        }
                        ?> </a>
                </li>
                <li> <a href="#/logout"><?php echo (Session::has('auth:user')) ? 'LogOut' : ''; ?>  </a> </li>
            </ul>
        </div>
    </div>
</div>