=== Plugin Name ===
Contributors: roycegracie
Donate link: http://www.zeevm.co.il
Tags: comments, comments archive, archive
Requires at least: 3.0.1
Tested up to: 3.7
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


== Description ==

This plugin creates a comments archive, presented any ware you choose by using a shortcode.
The comments are presented by date and there is a link to the comment post - so it can be viewed in its context.

-this plugin will improve your SEO by presenting good quality content from the comments.

-this plugin will help your user's receive valuable information from the comments, arranged and accessible.

-the plugin uses the "canonical" tag to prevent duplicate content problems.

== Installation ==


1. Upload `zeevmobile folder` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. add the shortcode any ware in your site (posts or pages): [comments-archive]
3. that is it ! 

== Frequently Asked Questions ==

= dose the plugin has an admin pannel ? =

no, it don't need any. just put the shortcode ([comments-archive]) and it will be presented !

= can i change functions and add filters ? =
yes, see here:
http://codex.wordpress.org/Function_Reference/get_comments

you can use the "array" functions who can add functionality to the plugin.
in the file "comments-archive.php" you will find "$args = array(" where you can add this functions.

== Screenshots ==

1. this is an example of how it will look like 


== Changelog ==

= 1.0 =
this is the first version


== A brief Markdown Example ==

Ordered list:

1. more options to the admin panel for better flexibility
2. translation PO&MO files


Here's a link to [WordPress](http://wordpress.org/ "Your favorite software") and one to [Markdown's Syntax Documentation][markdown syntax].
Titles are optional, naturally.

[markdown syntax]: http://daringfireball.net/projects/markdown/syntax
            "Markdown is what the parser uses to process much of the readme file"

Markdown uses email style notation for blockquotes and I've been told:
> Asterisks for *emphasis*. Double it up  for **strong**.

`<?php code(); // goes in backticks ?>`
