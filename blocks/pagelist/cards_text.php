<@ ../../elements/card_size_cache.php @>
<@ ../../elements/card_size.php @>
<div class="@{ :classContainer }">
	<div class="row">
		<@ foreach in pagelist @>
			<div class="@{ :classCard } d-flex align-items-stretch">
				<div class="card p-0 d-flex flex-column w-full overflow-hidden">
					<@ ../../elements/card_body.php @>
				</div>
			</div>
		<@ else @>
			<@ ../../elements/card_no_results.php @>
		<@ end @>
	</div>
</div>
<@ ../../elements/card_size_reset.php @>