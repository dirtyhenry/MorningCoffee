---
layout: post
status: publish
published: true
title: !binary |-
  VW4gbm91dmVsIMOpbMOpbWVudCBIVE1MNSBwb3VyIGfDqXJlciBsZXMgZmxl
  eGlibGUgaW1hZ2Vz
author: mick
author_login: mick
author_email: mickael@flochlay.com
wordpress_id: 1329
wordpress_url: http://morningcoffee.mickaelflochlay.com/?p=1329
date: 2012-02-08 13:29:33.000000000 +01:00
categories:
- Geek
tags:
- html5
- Responsive web design
- Flexible images
comments: []
---
A List Apart soulève le problème de la taille des images pour un mobile si on souhaite faire du responsive web design et a la bonne idée de suggérer une simple extension copiée/collée de l'élément video :
<blockquote>From there, it doesn’t take much imagination to see how we could use a pattern like this.
<code>
&lt;picture&gt;
&lt;source src="high-res.jpg" media="min-width: 800px" /&gt;
&lt;source src="mobile.jpg" /&gt;
&lt;!-- Fallback content: --&gt;
&lt;img src="mobile.jpg" /&gt;
&lt;/picture&gt;
</code></blockquote>
via <a href="http://www.alistapart.com/articles/responsive-images-how-they-almost-worked-and-what-we-need/">A List Apart: Articles: Responsive Images: How they Almost Worked and What We Need</a>.
