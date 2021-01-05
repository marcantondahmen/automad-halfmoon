<ul class="navbar-nav<@ if @{ :template | match('/sidebar/') } @> d-md-none<@ end @>">
	<li class="nav-item">
		<a 
		class="nav-link pl-5"
		onclick="halfmoon.toggleSidebar()"
		>
			<@ Automad/Bootstrap/Icon { 
				icon: 'list',
				h: '1.1em',
				w: '1.1em'
			} @>
			<span class="sr-only">Toggle sidebar</span>
		</a>
	</li>
</ul>