<article class="p-20">
	<a href="@{ url }" class="card-title mb-0 text-reset">
		@{ title }
	</a>
	<@ if @{ date } or @{ tags } @>
		<p class="p-0 mt-10 mb-0 font-size-12">
			<@ date.php @>
			<@ if @{ date } and @{ tags } @>
				<br>
			<@ end @>
			<@ foreach in tags ~@>
				<@~ if @{ :i } > 1 @>,<@ end @>
				<a 
				href="?filter=@{ :tag }" 
				class="text-reset"
				>@{ :tag }</a>
			<@~ end @>
		</p>
	<@ end @>
	@{ +main | 
		findFirstParagraph | 
		150 | 
		replace ('/^(.+)$/', '<p class="mt-10 mb-0 font-size-12 flex-grow-1">$1</p>') 
	}
</article>
