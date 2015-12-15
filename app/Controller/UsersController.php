<?php

// App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class UsersController extends AppController {
  public $helpers = array('Html','Form');

  public function add() {
    if($this->request->is('post')) {
      $username = $this->request->data['User']['username'];
      $password = $this->request->data['User']['password'];
      // $passwordHasher = new SimplePasswordHasher(array('hashType' => 'sha256'));

      $this->User->create();
      if($this->User->save(array(
        'username'=>$username,
        // 'password'=>$passwordHasher->hash($password)))) {
        'password'=>$password))) {
        $this->Session->setFlash('保存しました。');
        return;
      }
      $this->Session->setFlash('保存に失敗しました。');
    }
  }
}