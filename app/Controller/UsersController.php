<?php

// App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class UsersController extends AppController {
  public $helpers = array('Html','Form');

  public function add() {
    if($this->request->is('post')) {

      $this->log($this->request->data,'debug');

      $username = $this->request->data['User']['username'];
      $password = $this->request->data['User']['password'];
      // $passwordHasher = new SimplePasswordHasher(array('hashType' => 'sha256'));

      $this->User->create();
      // if($this->User->save(array('created'=>$this->request->data['User']['created'],
      //                           'password'=>$password))){}
      if($this->User->save($this->request->data)){}
      //if($this->User->save($this->request->data) {}
      // if($this->User->save(array('cretated'=>$this->request->data['User']['created'])){}
        // 'username'=>$username,
        // 'password'=>$passwordHasher->hash($password)))) {
        // 'password'=>$password))) {
        // 'created'=>$this->request->data['User']['created'])){
        // $this->Session->setFlash('保存しました。');
        // return;
      // }
      $this->Session->setFlash('保存に失敗しました。');
    }
  }


}