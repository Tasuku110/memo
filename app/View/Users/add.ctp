<h3>ユーザー新規登録</h3>

<?php

echo $this->Form->create('User', array('novalidate'=>true));
echo $this->Form->input('username',array('label'=>'ユーザー名'));
echo $this->Form->input('password',array('label'=>'パスワード'));
echo $this->Form->input('password_confirm',array('label'=>'パスワード(確認)','type'=>'password'));
echo $this->Form->end('保存');