<h3><?php echo h($note['Note']['title']); ?></h3>
<nav>
<ul>
  <li><?php echo $this->Html->link('メモ編集', array('action'=>'edit', $note['Note']['id'])); ?></li>
  <li><?php echo $this->Form->postLink('メモ削除',array('action'=>'delete', $note['Note']['id']) ,array('confirm' => '削除します。よろしいですか？')); ?></li>
</ul>
</nav>

<p><small>created: <?php echo h($note['Note']['created']); ?></small></p>

<p><?php echo h($note['Note']['body']); ?></p>
