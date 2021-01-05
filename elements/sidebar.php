<@~ snippet link ~@>
	<a 
	href="@{ url }" 
	class="sidebar-link d-flex justify-content-between<@ if @{ :current } @> active<@ end @>">
		@{ title }
		<@ newPagelist { type: 'children' } @>
		<@ if @{ :pagelistCount } @>
			<span>
				<@ if @{ :currentPath } and not @{ :current } @>
					<@ Automad/Bootstrap/Icon {
						icon: 'chevron-up',
						w: '0.9em',
						h: '0.9em',
						viewBox: '0 -2 16 16'
					} @>
				<@ else @>
					<@ Automad/Bootstrap/Icon {
						icon: 'chevron-right',
						w: '0.9em',
						h: '0.9em',
						viewBox: '0 -2 16 16'
					} @>
				<@ end @>
			</span>
		<@ end @>
	</a>
<@~ end ~@>
<div class="sidebar py-10">
	<div class="sidebar-menu">
		<# Breadcrumbs #>
		<@~ newPagelist {
			type: 'breadcrumbs'
		} ~@>
		<@~ if @{ :level } > 1 @>
			<@~ foreach in pagelist @>
				<@~ if not @{ :current } and @{ :level } @>
					<@~ link @>
				<@~ end @>
			<@~ end ~@>
		<@~ end @>
		<# Siblings #>
		<@~ newPagelist {
			type: 'siblings',
			excludeCurrent: false
		} @>
		<@ if @{ :level } @>
			<@ if @{ :level } > 1 @>
				<div class="sidebar-divider my-15"></div>
			<@ end @>
			<@~ foreach in pagelist @>
				<@~ link @>
			<@~ end @>
		<@ end @>
		<# Children #>
		<@~ newPagelist {
			type: 'children'
		} @>
		<@~ if @{ :pagelistCount } @>
			<@ if @{ :level } @>
				<div class="sidebar-divider my-15"></div>
			<@ end @>
			<@~ foreach in pagelist @>
				<@~ link @>
			<@~ end @>
		<@~ end @>
	</div>
</div>