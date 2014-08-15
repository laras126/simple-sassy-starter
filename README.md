
#What is this?

I feel like there aren't many super stripped down resources for starting out with Sass - everything seems to jump straight into mixins and frameworks and all that. This is a super simple setup for your Sass projects that can be used anywhere (did you notice all of my alliteration in this paragraph?).

**IMPORTANT:** This is **not** a stand alone website or theme. It's an assets folder meant to be dropped into an existing theme or site.

_Disclaimer: Everyone does this differently, this is how I do it!_

#Get Started with Sass

1. [Install Sass](http://sass-lang.com/install).
2. Download or clone this in your project.
3. Rename the 'simple-sassy-starter' to 'assets' (just makes more sense)
3. In Terminal, go to the assets directory. Probably ```cd my-project/assets```
4. Run ```sass --watch scss:css```. This translates to "Hey Sass! Pay attention to my changes in the 'scss' folder and compile them to the 'css' folder.
5. Follow instructions below to use with WordPress

**Note:** When you are ready to launch, minify your code with 
```sass --watch main.scss:main.min.css --style compressed``` 
and change the ```<link>``` in your ```<head>``` to main.min.css. There are [more efficient ways](http://addyosmani.com/blog/environment-specific-builds-with-grunt-gulp-or-broccoli/) to do manage dev and production environments with a [task runner like Grunt](http://blog.cozycloud.cc/technic/2014/06/18/task-runners-comparison/), but that's another conversation!

**Another note:** I included folders for JavaScript and images - it's nice to keep all of this in the assets folder. Also add a 'fonts' folder if you have any of those. But up to you!

#Sass Compiler Commands
Here are some copy and paste lines for your the terminal. [Read more here](http://sass-lang.com/documentation/file.SASS_REFERENCE.html#output_style).

####Expanded
I like this one best for development:

```sass --watch style.scss:style.css --style expanded```

	.main {
		color: #fff;
		background-color: #000;
	}
	.main p {
		width: 10em;
	}

####Compact
This one is also nice:

```sass --watch style.scss:style.css --style compact```

	.main { color: #fff; background-color: #000; }
	.main p { width: 10em; }


####Compressed

For minifying your code in production:

```sass --watch style.scss:style.css --style compressed```

	.main{color: #fff;background-color:#000;}.main p{width:10em;}



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

##Without WordPress
You can also use this set up without WordPress. Drop the 'assets' (or just 'styles') folder into your site, and make sure to include 'main.css' in your ```<head>```.


#Sassmeister Snippets
Here are some examples of cool stuff Sass can do. Lots more at the [Sass site's Basics guide](http://sass-lang.com/guide). There is so much good stuff there!

* [A nice link](http://sassmeister.com/gist/1f63b704f89523b8120c)
* [Simple button mixin](http://sassmeister.com/gist/ad8fa52ea853d84da153) - read the notes on best practice!
* [Button mixin with extend](http://sassmeister.com/gist/9eca4dbb5ac01a5d8f60) - ahh, much better!
* [Media Query Bubbles!](http://sassmeister.com/gist/17f99ab2d74c46ca3cb9) (they seem redundant but Chris Coyier said it's okay in the talk linked below)
* [Extends don't work in media query bubbles](http://sassmeister.com/gist/98f202071af56724dd5a) :(
* [Bringing it all together](http://sassmeister.com/gist/75ac05abccc78d47171c)



#Further Reading
There are lots of links in the code, esp. in _settings.scss, but here are some others:

###Misc Sass Resources

* [Preprocessing is for Everyone](http://aneventapart.com/news/post/preprocessing-is-for-everybody-chris-coyier-an-event-apart-video-css-sass) - Chris Coyier
* [Are we getting too Sassy?](http://ashleynolan.co.uk/blog/are-we-getting-too-sassy) - Ashley Nolan
* [The Sass Way](http://thesassway.com/) - sooo much good stuff here from beginner to advanced
* [Sass vs. Less](http://css-tricks.com/sass-vs-less/) - CSS-Tricks (or is it LESS still?)
* [What is a CSS Framework Anyway?](http://vimeo.com/95734680) - Harry Roberts

###Tools and Frameworks

* [Compass](http://compassapp.com) - use this.
* [Bourbon](http://bourbon.io) (and Neat and Bitters and Refills) - library of mixins, grid, and UI framework.
* [Modular Scale](https://github.com/Team-Sass/modular-scale) - typographic scale thing that is awesome.
* [Jeet.gs](http://jeet.gs) - a nice, simple grid I use.
* [Susy](http://susy.oddbird.net) - another grid, can be simple but more extensible than Jeet.

####Starter themes
* [Underscore](https://github.com/automattic/_s) - the official Automattic starter theme now has Sass! I'm probably going to start using this.
* [Roots Sass port](https://github.com/roots/roots-sass) - my current favorite. A little more advanced and comes with Bootstrap [can remove it](http://benword.com/using-roots-theme-without-bootstrap/).
* [Bones](http://themble.com/bones) - wonderfully structured stylesheets. I learned so much from this!

###Next Level
* [Structuring a Sass Project](http://thesassway.com/beginner/how-to-structure-a-sass-project) (used this as a guide)
* [Even easier BEMing with Sass 3.3](http://www.alwaystwisted.com/post.php?s=2014-02-27-even-easier-bem-ing-with-sass-33) - Stuart Robson
* [DRY-ing out your Sass mixins](http://alistapart.com/article/dry-ing-out-your-sass-mixins) - Sam Richard