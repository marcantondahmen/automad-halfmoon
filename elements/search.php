<div class="input-group">
	<input 
	type="search" 
	class="form-control" 
	placeholder="@{ placeholderSearch | def ('Search') }"
	name="search"
	list=""
	>
	<div class="input-group-append">
		<button class="btn btn-square" type="submit">
			<@ Automad/Bootstrap/Icon {
				icon: 'search',
				w: '0.9em',
				h: '0.9em'
			} @>
		</button>
	</div>
</div>
