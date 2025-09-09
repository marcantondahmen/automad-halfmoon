<@ if @{ :pagelistDisplayCount } > 2 @>
	<@ if not @{ :template | def(@{ template }) | match ('/post.sidebar/') } or @{ checkboxHideTableOfContents } @>
		<@ set {
			:classContainer: 'cards py-10',
			:classCard: 'col-12 col-sm-6 col-lg-4'
		} @>
	<@ else @>
		<@ set {
			:classContainer: 'cards py-10',
			:classCard: 'col-12 col-sm-6'
		} @>
	<@ end @>
<@ else @>
	<@ set {
		:classContainer: 'am-block cards py-10',
		:classCard: 'col-12 col-sm-6'
	} @>
<@ end @>
