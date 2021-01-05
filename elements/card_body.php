<a href="@{ url }" class="text-reset">
	<h3 class="card-title px-20 mt-15 mb-15 py-0">@{ title }</h3>
</a>
<@ if @{ date } or @{ tags } @>
	<p class="px-20 mt-0 mb-15 py-0">
		<@ date.php @>
		<@ if @{ date } and @{ tags } @>
			<br>
		<@ end @>
		<@ tags.php @>
	</p>
<@ end @>
<p class="px-20 m-0 py-0 flex-grow-1">@{ +main | findFirstParagraph | 160 }</p>
<div class="p-20">
	<a href="@{ url }" class="btn btn-sm">@{ labelMore | def ('More') }</a>
</div>