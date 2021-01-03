<@ foreach in tags ~@>
	<@~ if @{ :i } > 1 @>,<@ end @>
	<a 
	href="@{ urlSearchResults | def(@{ :parent }) }?filter=@{ :tag }" 
	class="text-reset"
	>@{ :tag }</a>
<@~ end @>