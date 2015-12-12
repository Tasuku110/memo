<h2>メモ一覧</h2>

<table>
	<tr>
		<th>Id</th>
		<th>Title</th>
		<th>Created</th>
	</tr>

	<?php foreach ($notes as $note): ?>
	<tr>
		<td><?php echo h($note['Note']['id']); ?></td>
		<td><?php echo $this->Html->link($note['Note']['title'], array('action'=>'view', $note['Note']['id'])); ?></td>
		<td><?php echo h($note['Note']['created']); ?></td>
	</tr>
	<?php endforeach; ?>
</table>