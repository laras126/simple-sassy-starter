#What is this?

I feel like there aren't many super stripped down resources for starting out with Sass - everything seems to jump straight into mixins and frameworks and all that. This is a super simple setup for your Sass projects that can be used anywhere.

**IMPORTANT:** This is **not** a stand alone website or theme. It's an assets folder meant to be dropped into an existing theme or site.

_Disclaimer: Everyone does this differently, this is how I do it!_

#Get Started with Sass

1. [Install Sass](http://sass-lang.com/install).
2. Download or clone this in your project.
3. Rename the 'simple-sassy-starter' to 'assets' (just makes more sense)
3. In Terminal, go to the assets directory. Probably ```cd my-project/assets```
4. Run ```sass --watch scss:css```. This translates to "Hey Sass! Pay attention to my changes in the 'scss' folder and compile them to the 'css' folder.
5. Follow instructions below to use with WordPress

**Note:** When you are ready to launch, minify your code with ```sass --watch main.scss:main.min.css --style compressed``` and change the ```<link>``` in your ```<head>``` to main.min.css. There are [more efficient ways](http://addyosmani.com/blog/environment-specific-builds-with-grunt-gulp-or-broccoli/) to do manage dev and production environments with a [task runner like Grunt](http://blog.cozycloud.cc/technic/2014/06/18/task-runners-comparison/), but that's another conversation!

**Another note:** I included folders for JavaScript and images - it's nice to keep all of this in the assets folder. Also add a 'fonts' folder if you have any of those. But up to you!

#Using this with WordPress

##In a Sass-less Starter Theme (or your own)
1. Grab the 'styles' directory and drop it into your 'assets' (or equivalent) folder in your theme.
2. Add this to functions.php to your theme's functions.php:
	```
	<?php

	// Change the stylesheet location
	function sassy_styles() {
		// Note: change this to main.min.css for launch (after you have done #4 above)
		wp_enqueue_style('sassy_styles', get_stylesheet_directory_uri() . '/assets/css/main.css');
	}
	add_action('wp_enqueue_scripts', 'sassy_styles');

	?>

This adds the main.css stylesheet to your themes ```<head>```. We don't want to compile to style.css cause it's super precious to WordPress and best not to have it be a generated file (IMHO).

(or just choose a Sass-ready starter theme like [Underscore]() (recently in Sass!), [Bones](http://themble.com/bones), or the [Roots Sass port](https://github.com/roots/roots-sass) (made with Bootstrap but you [can remove it](http://benword.com/using-roots-theme-without-bootstrap/)))

##Without WordPress
You can also use this set up without WordPress. Drop the 'assets' (or just 'styles') folder into your site, and make sure to include 'main.css' in your ```<head>```.


#Further Reading
There are lots of links in the code, esp. in _settings.scss, but here are some others:

###Goodies

* [Preprocessing is for Everyone](http://aneventapart.com/news/post/preprocessing-is-for-everybody-chris-coyier-an-event-apart-video-css-sass) - Chris Coyier
* [What is a CSS Framework Anyway?](http://vimeo.com/95734680) - Harry Roberts
* [Are we getting too Sassy?](http://ashleynolan.co.uk/blog/are-we-getting-too-sassy) - Ashley Nolan

###Sass specifics

* [The Sass Way](http://thesassway.com/) - sooo much good stuff here from beginner to advanced
* [Structuring a Sass Project](http://thesassway.com/beginner/how-to-structure-a-sass-project) (used this as a guide)

###Tools and Frameworks

* [Compass](http://compassapp.com)
* [Bourbon](http://bourbon.io) (and Neat and Bitters and Refills)
* [Modular Scale](https://github.com/Team-Sass/modular-scale)
* [Jeet.gs](http://jeet.gs) (grid)
* [Susy](http://susy.oddbird.net) (grid)

###Next Level

* [Even easier BEMing with Sass 3.3](http://www.alwaystwisted.com/post.php?s=2014-02-27-even-easier-bem-ing-with-sass-33) - Stuart Robson
* [DRY-ing out your Sass mixins](http://alistapart.com/article/dry-ing-out-your-sass-mixins) - Sam Richard