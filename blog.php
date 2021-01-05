<@ elements/header.php @>
	<div 
	class="page-wrapper with-navbar with-sidebar with-transitions" 	
	data-sidebar-type="@{ :sidebarStyle | def('overlayed-all') }"
	>
		<div class="sidebar-overlay" onclick="halfmoon.toggleSidebar()"></div>
		<@ elements/navbar.php @>
		<@ elements/sidebar.php @>
		<div class="content-wrapper">
			<div class="container pt-10 pb-20">
				<@ elements/content.php @>
				<# Paglist config #>
				<@~ newPagelist { 
					type: 'children', 
					context: @{ urlContextForPagelist },
					excludeCurrent: true,
					filter: @{ ?filter },
					match: '{"url": "#@{ filterPagelistByUrl }#"}',
					sort: @{ ?sort | def (@{ sortPagelist }) | def('date desc') },
					limit: @{ itemsPerPage | def(12) },
					page: @{ ?page | def(1) }
				} ~@>
				<@ if @{ checkboxShowAllPagesInPagelist } @>
					<@~ pagelist { type: false } ~@>
				<@ end @>
				<# Search results config #>
				<@~ if @{ ?search } ~@>
					<@ pagelist { 
						type: false,
						match: false, 
						search: @{ ?search }
					} @>
				<@~ end ~@>
				<div id="filters" class="blocks pt-10">
					<# Filters #>
					<section>
						<div class="dropdown">
							<button 
							class="btn" 
							data-toggle="dropdown" 
							type="button" 
							id="dropdown-filter" 
							aria-haspopup="true" 
							aria-expanded="false"
							>
								<@~ if @{ ?filter } ~@>
									@{ ?filter }
								<@~ else ~@>
									@{ labelShowAll | def ('Show All') }
								<@~ end ~@>
								&nbsp;
								<@ Automad/Bootstrap/Icon { 
									icon: 'filter',
									w: '1.0em',
									h: '1.0em',
									viewBox: '0 -2 14 16'
								} @>
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdown-filter">
								<a 
								href="?<@ queryStringMerge { filter: false, page: 1 } @>#filters" 
								class="dropdown-item<@ if not @{ ?filter } @> bg-primary text-light<@ end @>"
								>
									@{ labelShowAll | def ('Show All') }
								</a>
								<@ foreach in filters @>
									<a 
									href="?<@ queryStringMerge { filter: @{ :filter }, page: 1 } @>#filters" 
									class="dropdown-item<@ if @{ :filter } = @{ ?filter } @> bg-primary text-light<@ end @>"
									>
										@{ :filter }
									</a>
								<@ end @>
							</div>
						</div>
						<@ if @{ ?search } @>
							<a 
							href="?<@ queryStringMerge { search: false } @>#filters" 
							class="btn"
							>
								"@{ ?search }"&nbsp;&nbsp;✗
							</a>
						<@ end @>
					</section>
					<# Pagelist #>
					<@ if @{ checkboxHideThumbnails } @>
						<@ blocks/pagelist/cards_text.php @>
					<@ else @>
						<@ blocks/pagelist/cards.php @>
					<@ end @>
					<# Pagination #>
					<@ if @{ :paginationCount } > 1 @>
						<nav class="my-20">
							<ul class="pagination">
								<@ if @{ ?page } > 1 @>
									<li class="page-item">
										<a href="?<@ queryStringMerge { page: @{ ?page | -1 } } @>" class="page-link">
											<@ Automad/Bootstrap/Icon { icon: 'chevron-left' } @>
										</a>
									</li>
								<@ end @>
								<@ for @{ ?page | -4 } to @{ ?page | +4 } @>
									<@ if @{ :i } > 0 and @{ :i } <= @{ :paginationCount } @>
										<li class="page-item<@ if @{ ?page | def(1) } = @{ :i } @> active<@ end @>">
											<a 
											href="?<@ queryStringMerge { page: @{ :i } } @>" 
											class="page-link"
											>@{:i}</a>
										</li>
									<@ end @>
								<@ end @>
								<@ if @{ ?page } < @{ :paginationCount } @>
									<li class="page-item">
										<a href="?<@ queryStringMerge { page: @{ ?page | +1 } } @>" class="page-link">
											<@ Automad/Bootstrap/Icon { icon: 'chevron-right' } @>
										</a>
									</li>
								<@ end @>
							</ul>
						</nav>
					<@ end @>
				</div>
				<@ elements/footer_menu.php @>
			</div>
		</div>
	</div>
<@ elements/footer.php @>