<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Filesystem\File;
use Cake\Filesystem\Folder;
use Cake\Event\Event;

class UsersController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['cadastrar', 'logout']);
    }

    public function index()
    {
        $this->paginate = [
            'limit' => 10
        ];

        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $this->set('user', $user);
    }


    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Funcionário salvo com sucesso'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->danger(__('Error ao adicionar funcionário'));
        }
        $this->set(compact('user'));
    }


    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Funcionário editado com sucesso'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Error ao editar usuário'));
        }
        $this->set(compact('user'));
    }


    public function delete($id = null)
    {
        $this->request->allowMethod(['post']);
        $user = $this->Users->get($id);
        $destino = WWW_ROOT . "files" . DS . "user" . DS . $user->id . DS;
        $this->Users->deleteArq($destino);

        if ($this->Users->delete($user)) {
            $this->Flash->success(__('Funcionário deletado do sistema'));
        } else {
            $this->Flash->danger(__('Erro ao deletar Funcionário'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function login()
    {
        if($this->request->is('post')){
            $user = $this->Auth->identify();
            if($user){
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }else{
                $this->Flash->danger(__('Erro: Login ou Senha incorretos'));
            }
        }
    }

    public function logout()
    {
        $this->Flash->success(__('Deslogado com Sucesso!'));
       return $this->redirect($this->Auth->logout());
    }

    public function perfil()
    {
        $user_id = $this->Auth->user('id');
        $user = $this->Users->get($user_id);

        $this->set(compact('user'));
    }

    public function editPassword()
    {
         // Obtenha apenas o ID do usuário
        $user_id = $this->Auth->user('id');

        // Busque o usuário pelo ID
        $user = $this->Users->get($user_id, [
        'contain' => []
         ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Senha editada com sucesso'));

                return $this->redirect(['controller' => 'Users', 'action' => 'perfil']);
            }
            $this->Flash->danger(__('Erro: Senha não foi editada com sucesso'));
        }

        $this->set(compact('user'));
    }

    public function alterarFotoPerfil()
    {
        $user_id = $this->Auth->user('id');
        $user = $this->Users->get($user_id);
        $imageAntiga = $user->image;

        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->newEntity();
            $user->image = $this->Users->slugSingleUpload($this->request->getData()['image']['name']);
            $user->id = $user_id;

            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $destino = WWW_ROOT . "files" . DS . "user" . DS . $user_id . DS;
                $imgUpload = $this->request->getData()['image'];
                $imgUpload['name'] = $user->image;
 
                if($this->Users->singleUpload($imgUpload, $destino)){
                    if(($imageAntiga !== null) AND ($imageAntiga !== $user->image)){
                        unlink($destino.$imageAntiga);
                    }
                    $this->Flash->success(__('Foto editada com sucesso'));
                    //return $this->redirect(['controller' => 'users', 'action' => 'perfil']);
                }else{
                    $user->image = $imageAntiga;
                    $this->Users->save($user);
                    $this->Flash->error(__('Erro: Foto não foi editada com sucesso. Erro ao realizar o upload'));  
                }
            }else{
                $this->Flash->error(__('Erro: Foto não foi editada com sucesso.'));  
            }
        }

        $this->set(compact('user'));
    }

    public function editPerfil()
    {
        $user_id = $this->Auth->user('id');
        $user = $this->Users->get($user_id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                if($this->Auth->user('id') === $user->id){
                    $data = $user->toArray();
                    $this->Auth->setUser($data);
                }
                $this->Flash->success(__('Perfil editado com sucesso'));

                return $this->redirect(['controller' => 'Users', 'action' => 'perfil']);
            }
            $this->Flash->danger(__('Erro: Perfil não foi editado com sucesso'));
        }

        $this->set(compact('user'));
    }

    public function cadastrar()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Cadastrado com sucesso'));

                return $this->redirect(['controller' => 'Users','action' => 'login']);
            }
            $this->Flash->danger(__('Cadastro não realizado'));
        }
        $this->set(compact('user'));
    }

}
