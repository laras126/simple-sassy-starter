#Simple Sassy Starter

##What is this?

I feel like there aren't many super stripped down resources for starting out with Sass* - everything seems to jump straight into mixins and frameworks and all that. Here's a ready to roll setup for your Sass projects that can be used anywhere!

Jump to a certain section if you like:

* [Installing Sass and Compass](#installing-sass-and-compass)
* [Getting Started](#getting-started)
* [About these Files](#about-these-files) **
* [Sassy Snippets](#sassy-snippets)
* [Further Reading](#further-reading)

<p>* &nbsp;Sass, not SASS (<a href="http://sassnotsass.com">proof</a>).<br>
** Everyone does this differently, this is how I do it!</p>

##Installing Sass and Compass

Very Mac-centric instructions follow. Windows users can find [instructions here](http://sass-lang.com/install).

###Install Sass

1. Open Terminal (Command + Spacebar, then type "ter", select Terminal).
2. Type `sudo gem install sass`, press Enter, type your password, hit enter again.
3. Type `sudo gem install compass` and same as above.
4. Go get a snack.

Seriously, that's it! Except these things rarely work the first time...

If you are having trouble, copy and paste your error into our good friend Google. You might also take a read through these installation instructions.

Note that you can totally use an app like [Codekit](http://incident57.com/codekit/) or [Hammer](http://hammerformac.com/), but I think this is a good opportunity to get make things hard for yourself in the command line (it will pay off in the long run, I promise!).


##Getting Started

###Compiling

1. `cd` into the 'simple-sassy-starter' directory. If you are storing the folder on your desktop, copy and paste this line instead: `cd ~/Desktop/simple-sassy-starter` and press Enter. Exciting, right?
2. Type `compass watch` and press Enter.
3. More exciting! You should see something like this `>>> Compass is watching for changes. Press Ctrl-C to Stop.`

###About These Files

Omg there are so many! WTF?! Why can't I just write everything in style.css like I used to?

Take it from me, the power of Sass lies in _partials_. A partial is a baby Sass file that starts with an underscore and is included in the main stylesheet. You know how your stylesheets before got to be, like, 1,500 lines long? Partials are a way to separate out that code into sections, and encourage you to write more reusable and ["modular"](http://en.wikipedia.org/wiki/Modular_design) (hello, buzzword) code.

Hopefully that makes a little bit of sense. I've separated everything out like this:

1. `main.scss` - this is where we include all of the partials. Don't write any styles in here.
2. `vendor/` - this is third party code, you probably won't edit anything in here. I've included [normalize](necolas.github.io/normalize.css/) for our CSS reset, as well as [animate.css](daneden.github.io/animate.css/) (.scss in our case) for fun.
3. `utility/` - this code won't compile to anything, rather, these are the variables and functions you'll use throughout.
4. `partials/` - this is where your styles go, hopefully the file names make sense. Change them to whatever you like!
5. `_shame.scss` - put all styles you know you shouldn't be writing here (coined by Harry Roberts, [read more here](csswizardry.com/2013/04/shame-css/)).

Note that order these are included in `main.scss` is very important. Read more in the code comments.

##Write Some Styles

Time to experience the magic. I recommend following along with the [Sass Basics guide](http://sass-lang.com/guide) to get the feel for Sass, then read up on some more stuff in the Further Reading section below before starting on a real project. There are a few examples in the code, too.

###Sassy Snippets

If you want to play around a bit before diving into your real code, or if you had a problem installing Sass and don't feel like figuring it out (I totes sympathize), check out these snippets on the lovely Sassmeister:

* [A nice link](http://sassmeister.com/gist/1f63b704f89523b8120c)
* [Simple button mixin](http://sassmeister.com/gist/ad8fa52ea853d84da153) - read the notes on best practice!
* [Button mixin with extend](http://sassmeister.com/gist/9eca4dbb5ac01a5d8f60) - ahh, much better!
* [Media Query Bubbles!](http://sassmeister.com/gist/17f99ab2d74c46ca3cb9) (they seem redundant but Chris Coyier said it's okay in the talk linked below)
* [Extends don't work in media query bubbles](http://sassmeister.com/gist/98f202071af56724dd5a) :(
* [Bringing it all together](http://sassmeister.com/gist/75ac05abccc78d47171c)


##Further Reading

Sass itself is awesome, but the real reason it's awesome is because of the community. Here's a big dump of links and articles I think are helpful.

###Sass Learning

* [Sass Basics](http://sass-lang.com/guide) - fantastic overview of Sass's primary features. A must read for starters.
* [Preprocessing is for Everyone](http://aneventapart.com/news/post/preprocessing-is-for-everybody-chris-coyier-an-event-apart-video-css-sass) - Chris Coyier talks about preprocessors.
* [The Sass Way](http://thesassway.com/) - Lots and lots of articles from beginner to advanced.
* [Sass for Web Designers](http://www.abookapart.com/products/sass-for-web-designers) - Dan Cederholm, A Book Apart
* [Structuring a Sass Project](http://thesassway.com/beginner/how-to-structure-a-sass-project) - John W. Long
* [Another Sassy Starter](https://github.com/minamarkham/sassy-starter/) by Mina Markham. This one is a little more robust, and great!

###Articles
* [Sass for Designers](http://laurakalbag.com/sass-for-designers/) - Laura Kalbag gives a nice overview of Sass stuff that's particularly useful for designers.
* [Are we getting too Sassy?](http://ashleynolan.co.uk/blog/are-we-getting-too-sassy) - Ashley Nolan.
* [Sass vs. Less](http://css-tricks.com/sass-vs-less/) - CSS-Tricks (or is it LESS still?)
* [What is a CSS Framework Anyway?](http://vimeo.com/95734680) - Harry Roberts

###Reference
* [CSS Guidelines](https://github.com/csswizardry/CSS-Guidelines#ids) - (yummy) by CSS Wizardry (Harry Roberts)


###Tools and Frameworks

* [Compass](http://compassapp.com) - This project is set up with Compass. While you don't have to use Compass functions per se, I like the compiler and think it's easier to configure.
* [Bourbon](http://bourbon.io) (and Neat and Bitters and Refills) - library of mixins, grid, and UI framework.
* [Modular Scale](https://github.com/Team-Sass/modular-scale) - typographic scale thing that is awesome. By Scott Kellum.
* [Susy](http://susy.oddbird.net) - A fantastic, semantic grid. It can be very robust or simple.
* [Jeet.gs](http://jeet.gs) - a cute grid toolkit. Yes, grids can be cute! Note that the documentation isn't fantastic.

###Next Level

* [Modular CSS Naming Conventions](http://thesassway.com/advanced/modular-css-naming-conventions) - (because naming things is the hardest part), John W. Long
* [Even easier BEMing with Sass 3.3](http://www.alwaystwisted.com/post.php?s=2014-02-27-even-easier-bem-ing-with-sass-33) - Stuart Robson
* [DRY-ing out your Sass mixins](http://alistapart.com/article/dry-ing-out-your-sass-mixins) - Sam Richard
* [Shop Talk Show](http://shoptalkshow.com) - Podcast with Chris Coyier and Dave Rupert, all things front-end. This can get a little advanced, lots of Sass talk though.

###Other Great Things

* [Sip](http://theolabrothers.com/sip/) - Mac color picker app by the Ola Brothers. Might be my favorite thing in the world. Well, besides an expertly made Negroni.
* [Sidebar.io](http://sidebar.io) - this is how to stay up to date with the ever-changing web landscape.
* [Eye Bleach](http://www.eyebleach.me/) - lolz
* [.ish](http://bradfrostweb.com/demo/ish/) - Responsive site testing, Brad Frost (and everything he writes, ever)

