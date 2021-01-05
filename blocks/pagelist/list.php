<div class="cards py-20">
	<div class="row">
		<@ foreach in pagelist @>
			<div class="col-12">
				<div class="card p-0 d-flex flex-column w-full overflow-hidden">
					<a href="@{ url }" class="text-reset">
						<h3 class="card-title px-20 mt-15 mb-15 py-0">@{ title }</h3>
					</a>
					<@ if @{ date } or @{ tags } @>
						<p class="px-20 mt-0 mb-15 py-0">
							<@ ../../elements/date.php @>
							<@ if @{ date } and @{ tags } @>
								&mdash;
							<@ end @>
							<@ ../../elements/tags.php @>
						</p>
					<@ end @>
					<p class="px-20 m-0 py-0">@{ +main | findFirstParagraph }</p>
					<div class="p-20">
						<a href="@{ url }" class="btn btn-sm">@{ labelMore | def ('More') }</a>
					</div>
				</div>
			</div>
		<@ else @>
			<@ ../../elements/card_no_results.php @>
		<@ end @>
	</div>
</div>