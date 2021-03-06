<?php
/*
 * Created on Nov 15, 2009
 *
 * @Copyright Fellicht.nl
 * @Author Mathieu de Ruiter
 */
?>
<h1>News</h1>
<table class="summary">
<tr>
<th class="center small"><?php echo $paginator->sort('#', 'News.id'); ?></th>
<th><?php echo $paginator->sort('Title', 'News.title'); ?></th>
<th class="medium"><?php echo $paginator->sort('Created', 'News.created'); ?></th>
<th class="options"><?php __('Options'); ?></th>
</tr>
<?php
foreach($news as $item) {
	echo "<tr>";
	echo "<td class=\"center small\">". $html->link($item['News']['id'], '/admin/news/edit/'. $item['News']['id']) ."</td>";
	echo "<td>". $html->link($item['News']['title'], '/admin/news/edit/'. $item['News']['id']) ."</td>";
	echo "<td>". $item['News']['created'] ."</td>";
	echo "<td>".
	$html->link($html->image('/img/admin/icons/small/minus-button.png', array('alt' => 'delete', 'title' => 'Delete news', 'onclick' => 'return confirm(\'Delete news?\')')), '/admin/news/delete/'. $item['News']['id'], array('escape' => false))
	."</td>";
	echo "</tr>";
}
?>
<tfoot>
<tr><td colspan="7">
<?php echo $html->link($html->image('/img/admin/icons/small/plus-button.png', array('alt' => 'add', 'class' => 'icon')). ' '. __('Add news', true), '/admin/news/add', array('escape' => false)); ?>
<div class="summary_pages"><?php echo $paginator->counter(array('format' => 'Displaying %start% to %end% of %count% items')); ?></div>
<div class="pages"><?php echo $paginator->numbers(); ?></div>
</td></tr>
</tfoot>
</table>