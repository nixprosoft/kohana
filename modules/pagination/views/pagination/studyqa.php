<div class="navigation-block">
<ul>
	<?php if ($first_page !== FALSE): ?>
		<li><a href="<?php echo HTML::chars($page->url($first_page)) ?>" rel="first"><?php echo __('First') ?></a></li>
	<?php else: ?>
		<li class="disabled"><a><?php echo __('First') ?></a></li>
	<?php endif ?>

	<?php if ($previous_page !== FALSE): ?>
		<li><a href="<?php echo HTML::chars($page->url($previous_page)) ?>" title="<?php echo __('Previous') ?>" rel="prev"><i class="fa fa-chevron-left"></i></a></li>
	<?php else: ?>
		<li class="disabled"><a><i class="fa fa-chevron-left"></i></a></li>
	<?php endif ?>

	<?php for ($i = 1; $i <= $total_pages; $i++): ?>

		<?php if ($i == $current_page): ?>
			<li class="active"><a><?php echo $i ?></a></li>
		<?php else: ?>
			<li><a href="<?php echo HTML::chars($page->url($i)) ?>"><?php echo $i ?></a></li>
		<?php endif ?>

	<?php endfor ?>

	<?php if ($next_page !== FALSE): ?>
		<li><a href="<?php echo HTML::chars($page->url($next_page)) ?>" title="<?php echo __('Next') ?>" rel="next"><i class="fa fa-chevron-right"></i></a></li>
	<?php else: ?>
		<li class="disabled"><a><i class="fa fa-chevron-right"></i></a></li>
	<?php endif ?>

	<?php if ($last_page !== FALSE): ?>
		<li><a href="<?php echo HTML::chars($page->url($last_page)) ?>" rel="last"><?php echo __('Last') ?></a></li>
	<?php else: ?>
		<li class="disabled"><a><?php echo __('Last') ?></a></li>
	<?php endif ?>
</ul>
</div><!-- .pagination -->