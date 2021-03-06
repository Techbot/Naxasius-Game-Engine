<?php
/*
 * Created on Nov 28, 2009
 *
 * @Copyright Fellicht.nl
 * @Author Mathieu de Ruiter
 */
?>
<h1>Classes</h1>

<table class="summary">
<tr>
<th class="center small"><?php echo $paginator->sort('#', 'Type.id'); ?></th>
<th><?php echo $paginator->sort('Name', 'Type.name'); ?></th>
<th class="options">Options</th>
</tr>
<?php
foreach($types as $type) {
	echo '<tr>';
	echo '<td class="center">'. $html->link($type['Type']['id'], '/admin/types/edit/'. $type['Type']['id']) .'</td>';
	echo '<td>'. $html->link($type['Type']['name'], '/admin/types/edit/'. $type['Type']['id']) .'</td>';
	echo '<td>'. $html->link($html->image('/img/admin/icons/small/minus-button.png', array('alt' => 'delete', 'onclick' => 'return confirm(\'Delete?\')')), '/admin/types/delete/'. $type['Type']['id'], array('escape' => false)) .'</td>';
	echo '</tr>';
}
?>
<tfoot>
<tr><td colspan="3">
<?php echo $html->link($html->image('/img/admin/icons/small/plus-button.png', array('alt' => 'add', 'class' => 'icon')). ' '. __('Add', true), '/admin/types/add', array('escape' => false)); ?>
<div class="summary_pages"><?php echo $paginator->counter(array('format' => 'Displaying %start% to %end% of %count% items')); ?></div>
<div class="pages"><?php echo $paginator->numbers(); ?></div>
</td></tr>
</tfoot>
</table>