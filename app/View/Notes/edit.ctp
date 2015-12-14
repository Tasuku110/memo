<h2 class="title">メモ編集</h2>

<?php 
echo $this->Form->create('Note');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows'=>3));
echo $this->Form->input('id', array('type'=>'hidden'));
echo $this->Form->end('保存');

?>
