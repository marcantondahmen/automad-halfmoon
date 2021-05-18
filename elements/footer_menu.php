<div class="am-block">
	<@ prev_next.php @>
	<footer class="my-20 py-10">
		<hr class="my-20">
		<@ if @{ :level } @>
			<@ newPagelist { type: 'breadcrumbs' } @>
			<nav class="my-20 pt-20">
				<ul class="breadcrumb">
					<@ foreach in pagelist @>
						<li class="breadcrumb-item"><a href="@{ url }">@{ title }</a></li>	
					<@ end @>
				</ul>
			</nav>
		<@ end @>
		<# 
		Expose variable to dashboard
		@{ checkboxShowInFooter } 
		#>
		<@ newPagelist { 
			excludeHidden: false,
			match: '{ "checkboxShowInFooter": "/[^0]+/" }'
		} ~@>
		<@ if @{ :pagelistCount } @>
			<div class="sidebar-menu mx-0 px-0 my-20 pt-20">
				<@ foreach in pagelist ~@>
					<a href="@{ url }" class="sidebar-link px-0">@{ title }</a>
				<@~ end @>
			</div>
		<@ end @>
		<div class="py-20 text-muted">
			&copy @{ :now | dateFormat ('Y') } &mdash; 
			<a href="/" class="text-muted">@{ sitename }</a>
		</div>

		@{ itemsFooter }
		
	</footer>
</div>