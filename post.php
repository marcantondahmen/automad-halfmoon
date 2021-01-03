<@ elements/header.php @>
	<div 
	class="page-wrapper with-navbar with-sidebar with-transitions" 	
	data-sidebar-type="@{ :sidebarStyle | def('overlayed-all') }"
	>
		<div class="sidebar-overlay" onclick="halfmoon.toggleSidebar()"></div>
		<@ elements/navbar.php @>
		<@ elements/sidebar.php @>
		<div class="content-wrapper">
			<div class="container">
				<div class="row">
					<@ if @{ checkboxHideTableOfContents } @>
						<div class="col py-20">
							<@ elements/content.php @>
						</div>
					<@ else @>
						<div class="col-xl-9 py-20">
							<@ elements/content.php @>
						</div>
						<div class="col-lg-3 py-5 d-none d-xl-flex">
							<@ elements/toc.php @>
						</div>
					<@ end @>
				</div>
				<@ elements/footer_menu.php @>
			</div>
		</div>
	</div>
<@ elements/footer.php @>