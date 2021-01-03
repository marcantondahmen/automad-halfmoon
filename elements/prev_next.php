<@ newPagelist { type: 'siblings' } @>
<@ if @{ :pagelistCount } @>
	<nav class="py-20 d-flex justify-content-between">
		<@ with prev @>
			<a href="@{ url }" class="btn">
				<@ Automad/Bootstrap/Icon { 
					icon: 'chevron-left',
					viewBox: '4 -2 16 16'
				} @>
				@{ title }
			</a>
		<@ end @>
		<@ if @{ :pagelistCount } > 1 @>
			<@ with next @>
				<a href="@{ url }" class="btn">
					@{ title }
					<@ Automad/Bootstrap/Icon { 
						icon: 'chevron-right',
						viewBox: '-4 -2 16 16'
					} @>
				</a>
			<@ end @>
		<@ end @>
	</nav>
<@ end @>