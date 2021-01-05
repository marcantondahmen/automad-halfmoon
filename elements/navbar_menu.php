<# 
Expose variable to dashboard.
@{ checkboxShowInNavbar } 
#>
<@ newPagelist {
	excludeHidden: false,
	match: '{"checkboxShowInNavbar": "/./"}'
} @>
<ul class="navbar-nav d-none d-md-flex<@ if @{ checkboxNavbarMenuRight } @> ml-auto<@ else @> mr-auto<@ end @>">
	<@ foreach in pagelist @>
		<li class="nav-item<@ if @{ :currentPath } @> active<@ end @>">
			<a href="@{ url }" class="nav-link">@{ title }</a>
		</li>
	<@ end @>
</ul>
<@ with @{ urlSearchResults } @>
	<form class="form-inline d-none d-md-flex w-250" action="@{ url }">
		<@ search.php @>
		<@ datalist.php @>
	</form>
<@ end @>
<@ with @{ urlActionButtonTargetPage } @>
	<div class="navbar-content d-none d-md-flex">
		<a href="@{ url }" class="btn @{ actionButtonClass | def ('btn-primary') }">@{ title }</a>
	</div>
<@ end @>
<ul class="navbar-nav d-none d-md-flex mr-0">
	<li class="nav-item">
		<a 
		class="nav-link pr-5"
		onclick="halfmoon.toggleDarkMode()"
		>
			<@ darkmode_toggle.php @>
		</a>
	</li>
</ul>
<div class="navbar-nav d-md-none ml-auto">
	<li class="nav-item dropdown with-arrow">
		<a
		class="nav-link pr-5" 
		data-toggle="dropdown" 
		id="navbar-dropdown"
		>
			<@ Automad/Bootstrap/Icon { icon: 'three-dots-vertical' } @>
		</a>
		<div 
		class="dropdown-menu dropdown-menu-right w-200" 
		aria-labelledby="navbar-dropdown"
		>
			<@ with @{ urlSearchResults } @>
				<div class="dropdown-content">
					<form action="@{ url }">
						<@ search.php @>
					</form>
				</div>	
			<@ end @>
			<@ foreach in pagelist @>
				<a href="@{ url }" class="dropdown-item">@{ title }</a>
			<@ end @>
			<@ with @{ urlActionButtonTargetPage } @>
				<div class="dropdown-content">
					<a href="@{ url }" class="btn @{ actionButtonClass | def ('btn-primary') } w-full">@{ title }</a>
				</div>
			<@ end @>
			<div class="dropdown-divider my-10"></div>
			<a  
			class="dropdown-item" 
			onclick="halfmoon.toggleDarkMode()"
			>
				<@ darkmode_toggle.php @>
			</a>
		</div>
	</li>
</div>
