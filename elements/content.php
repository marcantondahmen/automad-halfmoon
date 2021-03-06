<@ if not @{ checkboxHideTitle } @>
	<h1 class="am-block">@{ title }</h1>
	<p class="am-block">
		<@ date.php @>
		<@ if @{ date } and @{ tags } @>
			&mdash;
		<@ end @>
		<@ tags.php @>
	</p>	
<@ end @>
@{ +main | 
	replace('/<table>/', '<table class="table table-no-outer-padding">') |
	replace('/class="am-button"/', 'class="btn"') |
	replace('/textarea class="am-input"/', 'textarea class="form-control mt-5 mb-10"') |
	replace('/class="am-input"/', 'class="form-control my-5"') |
	replace('/<blockquote>/', '<blockquote class="m-0 pl-20 border-left font-italic">') |
	replace('/<figcaption([^>]*)>/s', '<figcaption$1 class="text-muted m-0 pl-20 pt-10 border-left">&mdash; ')
}