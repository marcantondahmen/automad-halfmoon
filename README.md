# Automad Halfmoon Theme

A blog and documentation theme based on the flexible and highly customizable [Halfmoon](https://www.gethalfmoon.com) framework. Check out the demo page [here](https://halfmoon.dev.automad.org).

![](https://raw.githubusercontent.com/marcantondahmen/media-files/master/themes/halfmoon/post-light.png)

- [Templates](#templates)
- [Pagelist Blocks](#pagelist-blocks)
- [Customization](#customization)

## Templates

The Halfmoon ships with four different templates &mdash; two blog templates and two post templates.

| Name | Description |
| --- | --- |
| Blog | A full-width blog page template including a filterable grid of page cards |
| Blog Sidebar | A blog page template with a sidebar menu |
| Post | A full-width post template |
| Post Sidebar | A post template with a sidebar menu |

## Pagelist Blocks

There are three included templates for pagelist blocks.

| Name | Description |
| --- | --- |
| Cards | A typical grid of cards including a teaser image, title, date, tags and the first paragraph of a page |
| Cards Text | Basically the same as the **Cards** template just without an image |
| List | A simple list of horizontal  cards including title, date, tags and the first paragraph of a page |

![](https://raw.githubusercontent.com/marcantondahmen/media-files/master/themes/halfmoon/post-sidebar-dark.png)

## Customization

The Halfmoon framework uses custom CSS [properties](https://github.com/halfmoonui/halfmoon/blob/master/css/halfmoon-variables.css) to control all kind of styles such as colors, font properties or element dimensions. Therefore it is very easy to override things without actually modifying templates or other files. 

You can instead add your custom definitions for those properties to the `Custom Properties` field in the **Global Data and Settings** section of the dashboard. For example it is possible to quickly change the font weight of all headlines by adding the following to the `Custom Properties` field:

	--heading-font-weight: 600;

A full list of available properties can be found in the [Halfmoon repository](https://github.com/halfmoonui/halfmoon/blob/master/css/halfmoon-variables.css). Additionally there is also a [official guide](https://www.gethalfmoon.com/docs/customize/) about customization available in the Halfmoon docs.

