#What is this?

A guide for structuring your Sass projects within WordPress (also without WordPress).

It is **not** a stand alone theme that is ready to roll. It's meant to be dropped into an existing theme, or transformed into a child theme with the instructions below.

_Disclaimer: Everyone does this differently, this is how I do it!_

#Get Started with Sass

1. [Install Sass](http://sass-lang.com/install).
2. Download or clone this
3. In Terminal, ```cd``` into the 'styles' directory
4. Run ```sass --watch main.scss```
5. Follow instructions below to use with WordPress

#Using this with WordPress

##In a Sass-less Starter Theme (or your own)
1. Grab the 'styles' directory and drop it into your 'assets' (or equivalent) folder in your theme.
2. Add the wp_enqueue_scripts function in functions.php to your theme's functions.php

(or just choose a Sass-ready starter theme like [Bones](http://themble.com/bones) or the [Roots Sass port](https://github.com/roots/roots-sass) (made with Bootstrap but you [can remove it](http://benword.com/using-roots-theme-without-bootstrap/)))

##In a Child Theme
To use as a child theme, create a 'style.css' and add this (replacing twentyfourteen with your parent theme name):

	/*
	Theme Name:         Sassy Child
	Theme URI:          http://github.com/laras126/simple-sassy-starter
	Description:        A drop in Sass file structure set up.
	Version:            1.0
	Author:             Lara Schenck
	Author URI:         http://notlaura.com/

	License:            MIT License
	License URI:        http://opensource.org/licenses/MIT

	*/

	@import url('../twentyfourteen/style.css');


##Without WordPress
You can also use this set up without WordPress. Drop the 'assets' (or just 'styles') folder into your site, and make sure to include 'main.css' in your ```<head>```.


#Further Reading
There are lots of links in the code, esp. in _settings.scss, but here are some others:
* [Structuring a Sass Project](http://thesassway.com/beginner/how-to-structure-a-sass-project) (used this as a guide)
