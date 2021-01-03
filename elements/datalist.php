<datalist id="pages">
	<@~ newPagelist {} @>
	<@~ foreach in pagelist @>
		<# Make sure no duplicate is added to the list #>
		<@~ if not @{ :list | match ('/@{ title | sanitize }/') } ~@>
			<option value="@{ title }">	
			<@~ set { :list: '@{ :list } @{ title | sanitize }'} ~@>
		<@ end ~@>		
	<@ end ~@>
</datalist>