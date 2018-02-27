=== Shoreditch ===

Contributors: automattic

Requires at least: 4.5
Tested up to: 4.6.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==

Shoreditch is a functional and responsive theme perfect for your business’s online presence. Although its main purpose is business, Shoreditch looks great as a personal blog theme too.

* Responsive layout.
* Panel Page Template.
* Full-Width Page Template.
* Jetpack.me compatibility for Infinite Scroll, Social Menu and Testimonial Custom Post Type.
* The GPL v2.0 or later license. :) Use it to make something cool.

== Installation ==
	
1. In your admin panel, go to Appearance > Themes and click the Add New button.
2. Click Upload and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

== Frequently Asked Questions ==

= I don't see the Testimonial menu in my admin, where can I find it? =

To make the Testimonial menu appear in your admin, you need to install the [Jetpack plugin](http://jetpack.me) because it has the required code needed to make [custom post types](http://codex.wordpress.org/Post_Types#Custom_Post_Types) work for the theme.

Once Jetpack is active, the Testimonial menu will appear in your admin, in addition to standard blog posts. No special Jetpack module is needed and a WordPress.com connection is not required for the Testimonial feature to function. Testimonial will work on a localhost installation of WordPress if you add this line to `wp-config.php`:

`define( 'JETPACK_DEV_DEBUG', TRUE );`

= How to setup the front page like the demo site? =

The demo site URL: http://shoreditchdemo.wordpress.com/?demo

When you first activate Shoreditch, you’ll see your posts in a traditional blog format. If you’d like to use the Panel Page Template as the Front Page of your site, as the demo site does, it’s simple to configure:

1. Create or edit a page, and assign it to the Panel Page Template from the Page Attributes module.
2. Go to Settings > Reading and set “Front page displays” to “A static page”.
3. Select the page you just assigned the Panel Page Template to as “Front page” and set another page as the “Posts page” to display your blog posts.
4. Add some [subpages](https://codex.wordpress.org/Pages#To_create_a_subpage) to the page to which you just assigned the Panel Page Template.

== Quick Specs (all measurements in pixels) ==

1. The main column width is 580 except when using the Panel Page Template or Full-Width Page Template where it’s 900.
2. A widget in the sidebar and a widget in the footer when it’s a 3-column layout is 260.
3. A widget in the footer when it’s a one-column layout is 900.
4. A widget in the footer when it’s a two-column layout is 450.
5. Featured Images for posts and pages are 2000 wide by 1500 high.
6. Featured Images for testimonials are 150 wide by 150 high.

== Credits ==

* Based on Underscores http://underscores.me/, (C) 2012-2016 Automattic, Inc., licensed under [GPL2](https://www.gnu.org/licenses/gpl-2.0.html)
* normalize.css http://necolas.github.io/normalize.css/, (C) 2012-2016 Nicolas Gallagher and Jonathan Neal, licensed under [MIT](http://opensource.org/licenses/MIT)
* Genericons: font by Automattic (http://automattic.com/), licensed under [GPL2](https://www.gnu.org/licenses/gpl-2.0.html)
* Images: images by Unsplash (https://unsplash.com), licensed under [CC0](http://creativecommons.org/choose/zero/)
** https://hd.unsplash.com/photo-1438302439441-82e18f791f5e
** https://hd.unsplash.com/photo-1432888498266-38ffec3eaf0a