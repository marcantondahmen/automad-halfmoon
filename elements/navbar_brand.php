<a href="/" class="navbar-brand ml-5">
	<@ with @{ imageLogo } { height: 120 } @>
		<img src="@{ :fileResized }">
	<@ else @>
		@{ brand | def(@{ sitename }) }
	<@ end @>
</a>

