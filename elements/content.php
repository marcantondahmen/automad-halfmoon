<div class="blocks">
	<@ if not @{ checkboxHideTitle } @>
		<h1>@{ title }</h1>
		<p>
			<@ date.php @>
			<@ if @{ date } and @{ tags } @>
				&mdash;
			<@ end @>
			<@ tags.php @>
		</p>	
	<@ end @>
	@{ +main | 
		replace('/\<table\>/', '<table class="table">') |
		replace('/class="am-button"/', 'class="btn"') |
		replace('/class="am-button am-button-primary"/', 'class="btn btn-primary"') |
		replace('/class="am-mail-input"/', 'class="form-control my-5"') |
		replace('/class="am-mail-button"/', 'class="btn btn-primary mt-10"') |
		replace('/\<blockquote\>/', '<blockquote class="m-0 pl-20 border-left font-italic">') |
		replace('/\<figcaption([^\>]*)\>/s', '<figcaption$1 class="text-muted m-0 pl-20 pt-10 border-left">&mdash; ')
	}
</div>