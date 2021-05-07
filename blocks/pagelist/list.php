<div class="cards py-10">
	<div class="row">
		<@ foreach in pagelist @>
			<div class="col-12">
				<div class="card p-0 d-flex flex-column w-full overflow-hidden">
					<article class="p-20">
						<a href="@{ url }" class="card-title mb-0 text-reset">
							@{ title }
						</a>
						<@ if @{ date } or @{ tags } @>
							<p class="mt-5 mb-0 font-size-12">
								<@ ../../elements/date.php @>
								<@ if @{ date } and @{ tags } @>
									&mdash;
								<@ end @>
								<@ ../../elements/tags.php @>
							</p>
						<@ end @>
						@{ +main | 
							findFirstParagraph | 
							replace ('/^(.+)$/', '<p class="mt-5 mb-0 font-size-12 flex-grow-1">$1</p>') 
						}
					</article>
				</div>
			</div>
		<@ else @>
			<@ ../../elements/card_no_results.php @>
		<@ end @>
	</div>
</div>