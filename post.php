<@ elements/header.php @>
	<div 
	class="page-wrapper with-navbar with-sidebar with-transitions" 	
	data-sidebar-type="@{ :sidebarStyle | def('overlayed-all') }"
	<@ if @{ :sidebarStyle | def('overlayed-all') } = 'overlayed-all' ~@>
		data-sidebar-hidden="hidden"
	<@~ end @>
	>
		<div class="sidebar-overlay" onclick="halfmoon.toggleSidebar()"></div>
		<@ elements/navbar.php @>
		<@ elements/sidebar.php @>
		<div class="content-wrapper overflow-x-hidden pt-10">
			<div class="row">
				<@ if @{ checkboxHideTableOfContents } @>
					<div class="col py-20">
						<div class="container">
							<@ elements/content.php @>
							<@ elements/footer_menu.php @>
						</div>
					</div>
				<@ else @>
					<div class="col-xl-9 py-20">
						<div class="container">
							<@ elements/content.php @>
							<@ elements/footer_menu.php @>
						</div>
					</div>
					<div class="col-lg-3 d-none d-xl-flex">
						<@ elements/toc.php @>
					</div>
				<@ end @>
			</div>
		</div>
	</div>
<@ elements/footer.php @>