<@ newPagelist { type: 'siblings' } @>
<@ if @{ :pagelistCount } @>
	<nav class="pt-20 d-flex <@ if @{ :pagelistCount } > 2 @>justify-content-between<@ else @>justify-content-end<@ end @>">
		<@ with prev @>
			<a href="@{ url }" class="btn">
				<@ Automad/Bootstrap/Icon { 
					icon: 'chevron-left',
					viewBox: '4 -2 16 16'
				} @>
				@{ title }
			</a>
		<@ end @>
		<@ with next @>
			<a href="@{ url }" class="btn">
				@{ title }
				<@ Automad/Bootstrap/Icon { 
					icon: 'chevron-right',
					viewBox: '-4 -2 16 16'
				} @>
			</a>
		<@ end @>
	</nav>
<@ end @>