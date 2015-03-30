<?php
namespace Apps\Controllers;

use Cygnite\Foundation\Application;
use Cygnite\Mvc\Controller\AbstractBaseController;
use Cygnite\Common\SessionManager\Session;

class HomeController extends AbstractBaseController
{
    /**
    * --------------------------------------------------------------------------
    * The Default Controller
    *--------------------------------------------------------------------------
    *  This controller respond to uri beginning with home and also
    *  respond to root url like "home/index"
    *
    * Your GET request of "home/index" will respond like below -
    *
    *      public function indexAction()
    *     {
    *            echo "Cygnite : Hellow ! World ";
    *     }
    *
    */
	//protected $layout = 'layout.home';

    protected $templateEngine = false;
     /*
     * Your constructor.
     * @access public
     *
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Default method for your controller. Render welcome page to user.
     * @access public
     *
     */
   public function indexAction()
   {
       $this->render('index', array('title' => 'Welcome to Cygnite Framework'));
   }

}//End of your home controller