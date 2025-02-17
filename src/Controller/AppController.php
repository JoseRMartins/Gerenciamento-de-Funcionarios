<?php

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class AppController extends Controller
{

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');

        $this->loadComponent('Auth', [
            'loginRedirect' => [
                'controller' => 'welcome',
                'action' => 'index',
            ],
            'logoutRedirect' => [
                'controller' => 'users',
                'action' => 'login'
            ],
            'authError' => false
        ]);
    }

    
    public function beforeRender(Event $event)
    {
        $prefix = null;
        if($this->request->getParam(['prefix']) !== null ){
            $prefix = $this->request->getParam(['prefix']);
        }

         if($prefix == 'admin')
        {
            if(($this->request->getParam(['action']) !== null ) AND (($this->request->getParam(['action']) == 'login') OR ($this->request->getParam(['action']) == 'cadastrar'))){
                $this->viewBuilder()->setLayout('login');
            }else{
                //$perfilUser = $this->Auth->user();
                $user = TableRegistry::get('Users');
                $perfilUser = $user->getUserDados($this->Auth->user('id'));                
                $this->set(compact('perfilUser'));

                $this->viewBuilder()->setLayout('admin');
            }
        }
    }


}
