<?php

$Page = $Automad->Context->get();
$main = json_decode($Page->get('+main'));
$output = '';

if (!empty($main) && !empty($main->blocks)) {

	foreach($main->blocks as $block) {

		if (($block->type == 'header') && isset($block->data->level) && ($block->data->level >= 2) && ($block->data->level <= 3)) {

			$id = Automad\Core\Str::sanitize($block->data->text, true);
			$padding = strval((intval($block->data->level) * 15) - 25);
			$output .= <<< HTML
						<a href="#$id" class="sidebar-link pl-{$padding}">
							<span>{$block->data->text}</span>
						</a> 
HTML;
			
		}
		
	}

}

if ($output) { ?>

	<div class="ml-20 sidebar-menu">
		<div class="position-sticky top-0">
			<div class="font-weight-medium pb-20">
				@{ tableOfContentsTitle | def ('On this page') }
			</div>
			<div class="border-left pl-10 d-flex flex-column">
				<?php echo $output; ?>
			</div>
		</div>
	</div>

<?php } ?>