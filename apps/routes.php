<?php
use Cygnite\Foundation\Application;
use Authority\Authority;
use Cygnite\Base\Router\Router;

if (!defined('CF_SYSTEM')) {
    exit('No External script access allowed');
}

$app = Application::instance();

use Cygnite\Common\SessionManager\Session;
use Cygnite\Common\UrlManager\Url;
use Cygnite\Mvc\View\Widget;


// Before Router Middle Ware
$app->router->before('GET', '/{:all}', function ($router)
{
    //show(Session::get());exit;
   //echo "This site is under maintenance.";exit;
    if (!Session::has('auth:user')) {
       // Url::redirectTo('user/login');
    } else {
        //Url::redirectTo('admin/category/index');
    }

});

$app->router->get('/', function ($router)
{
    Widget::make('inventory::index', array());
});



$app->router->get('user/login/', function ($router)
{
    Router::call('Login.index', array());
});

// Dynamic route: /hello/cygnite/3222
$app->router->get('/hello/{:name}/{:digit}', function ($router, $name, $id)
{
   //Router::call('Home.welcome', array($name, $id));
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
