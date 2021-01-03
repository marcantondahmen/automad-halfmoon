<@ if @{ :pagelistDisplayCount } > 2 @>
	<@ if not @{ :template | match ('/post.sidebar/') } or @{ checkboxHideTableOfContents } @>
		<@ set {
			:classContainer: 'am-stretched cards',
			:classCard: 'col-12 col-sm-6 col-lg-4'
		} @>
	<@ else @>
		<@ set {
			:classContainer: 'am-stretched cards',
			:classCard: 'col-12 col-sm-6'
		} @>
	<@ end @>
<@ else @>
	<@ set {
		:classContainer: 'cards py-20',
		:classCard: 'col-12 col-sm-6'
	} @>
<@ end @>