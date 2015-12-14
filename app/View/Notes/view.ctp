<h2 class="title"><?php echo h($note['Note']['title']); ?></h2>
<nav><?php echo $this->Html->link('メモ編集', array('action'=>'edit', $note['Note']['id'])); ?></nav>

<p><small>created: <?php echo h($note['Note']['created']); ?></small></p>

<p><?php echo h($note['Note']['body']); ?></p>
