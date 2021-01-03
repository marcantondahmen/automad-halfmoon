<!DOCTYPE html>
<html lang="en">
<head>
	<# 
	Make block variables show up in Dashboard:
	@{ cardImageRelativeHeight }
	#>
	<@ set {
		:tagTitle: @{ metaTitle | def("@{ sitename } / @{ title | def('404') }") },
		:tagDescription: @{ metaDescription | def(@{ +main }) | stripTags }
	} @>
	<title>@{ :tagTitle }</title>
	<@ Automad/MetaTags {
		description: @{ :tagDescription },
		ogTitle: @{ :tagTitle },
		ogDescription: @{ :tagDescription },
		ogImage: @{ ogImage },
		twitterCard: 'summary_large_image'
	} @>
	<@ favicons.php @>
	<link href="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/css/halfmoon-variables.min.css" rel="stylesheet" />
	<link href="/packages/@{ theme }/css/custom.css" rel="stylesheet" />
	<link href="/packages/@{ theme }/css/highlightjs.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.5.0/highlight.min.js"></script>
	<script>hljs.initHighlightingOnLoad();</script>

	@{ itemsHeader }

</head>
<body class="with-custom-webkit-scrollbars with-custom-css-scrollbars" data-set-preferred-mode-onload="true">
