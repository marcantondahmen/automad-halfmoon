<@ snippet link @>
	<a 
	href="@{ url }" 
	class="sidebar-link<@ if @{ :currentPath } @><@ if @{ :current } or @{ :level } = 1 @> active<@ end @><@ end @>">
		@{ title } @{ :icon }
	</a>
<@ end @>
<div class="sidebar py-5">
	<div class="sidebar-menu">
		<@ newPagelist {
			type: 'children',
			context: '/'
		} @>
		<@ foreach in pagelist @>
			<@ link @>
		<@ end @>
		<@ newPagelist {
			type: 'breadcrumbs'
		} @>
		<@ if @{ :pagelistCount } > 2 and @{ :level } @>
			<div class="sidebar-divider my-15"></div>
			<@ foreach in pagelist @>
				<@ if @{ :level } > 1 @>
					<@ newPagelist { type: 'children' } @>
					<@ if @{ :pagelistCount } @>
						<@ set { :icon: '/' } @>
					<@ else @>
						<@ set { :icon: ' ' } @>
					<@ end @>
					<@ link @>
				<@ end @>
			<@ end @>
		<@ end @>
		<@ set { :icon: ' ' } @>
		<@ newPagelist {
			type: 'children'
		} @>
		<@ if @{ :pagelistCount } and @{ :level } @>
			<div class="sidebar-divider my-15"></div>
			<@ foreach in pagelist @>
				<@ link @>
			<@ end @>
		<@ end @>
	</div>
</div>