<# Reset variable to false in case there is no match. #>
<@ set { :imageTeaser: false } @>
<# Try to get image from variable. #>
<@ with @{ imageTeaser } { width: 800 } ~@>
	<@ set { :imageTeaser: @{ :fileResized } } @>
<@~ else ~@>
	<# Else try a possible working external link or get first image from content. #>
	<@ set { :imageTeaser: @{ imageTeaser | def (@{ +main | findFirstImage }) } } @>
<@~ end ~@>