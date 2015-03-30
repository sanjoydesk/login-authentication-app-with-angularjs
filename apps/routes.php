<?php
use Cygnite\Foundation\Application;
use Authority\Authority;
use Cygnite\Base\Router\Router;

if (!defined('CF_SYSTEM')) {
    exit('No External script access allowed');
}

$app = Application::instance();

$currentUser = 4;

// Assuming you have your current user stored
// in $currentUser, with the id property of 1
$authority = new Authority($currentUser);

/*
    * Let's assign an alias to represent a group of actions
    * so that we don't have to handle each action individually each time
    */
$authority->addAlias('manage', array('create', 'update', 'index', 'read', 'delete'));

// Let's allow a User to see all other User resources
$authority->allow('read', 'User');

/*
    * Now let's restrict a User to managing only hiself or herself through
    * the use of a conditional callback.
    *
    * Callback Parameters:
    * $self is always the current instance of Authority so that we always
    * have access to the user or other functions within the scope of the callback.
    * $user here will represent the User object we'll pass into the can() method later
    */
/*$authority->allow('manage', '\Apps\Models\User', function($self, $user) {
        // Here we'll compare id's of the user objects - if they match, permission will
        // be granted, else it will be denied.
        return $self->user()->id === $user->id;
    });

// Now we can check to see if our rules are configured properly

$otherUser = (object) array('id' => 2);
if ($authority->can('read', 'User')) {
    echo 'I can read about any user based on class!';
}

if ($authority->can('read', $otherUser)) {
    echo 'I can read about another user!';
}

if ($authority->can('delete', $otherUser)) {
    echo 'I cannot edit this user so you will not see me :(';
}*/

/*if ($authority->can('delete', $user)) {
    echo 'I can delete my own user, so you see me :)';
}*/




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
