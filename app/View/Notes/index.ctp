<h2 class="title">メモ一覧</h2>
<nav>
<ul>
<li><?php echo $this->Html->link('新規メモ登録', array('action'=>'add')); ?></li>
</ul>
</nav>
<table>
	<tr>
		<th>Title</th>
	</tr>

	<?php foreach ($notes as $note): ?>
	<tr>
		<td><?php echo $this->Html->link($note['Note']['title'], array('action'=>'view', $note['Note']['id'])); ?></td>
	</tr>
	<?php endforeach; ?>
</table>