<h2>メモ一覧</h2>

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