<?php
use Cygnite\Foundation\Application;
use Cygnite\Base\Router\Router;
use Cygnite\Common\SessionManager\Session;
use Cygnite\Common\UrlManager\Url;
use Cygnite\Mvc\View\Widget;

if (!defined('CF_SYSTEM')) {
    exit('No External script access allowed');
}

$app = Application::instance();

// Before Router Middle Ware
$app->router->before('GET', '/{:all}', function ()
{
   //echo "This site is under maintenance.";exit;
});

// Dynamic route: /hello/cygnite/3222
$app->router->get('/angular/', function ($router)
{
	echo Widget::make('home:index');
});

/*
GET       - resource/           user.getIndex
GET       - resource/new        user.getNew
POST      - resource/           user.postCreate
GET       - resource/{id}       user.getShow
GET       - resource/{id}/edit  user.getEdit
PUT|PATCH - resource/{id}       user.putUpdate
DELETE    - resource/{id}       user.delete
*/
//$app->router->resource('resource', 'user'); // respond to resource routing

/**
 * After routing callback
 * Will call after executing all user defined routing.
 */
$app->router->after(function()
{
   //echo "After Routing callback";
});


$app->router->run();
