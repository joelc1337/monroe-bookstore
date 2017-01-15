=== Template File Name Debugger ===
Contributors: bluenestbryan
Tags: theme, template, file, debug, html, source
Requires at least: 3.0.1
Tested up to: 4.3.5
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add the name of the theme (template) files used to generate a page into the page's
source as a comment.

== Description ==

This plugin adds the name and path of the theme (template) file used to generate the html page into the page's source as a comment. It will also add the name of the header, footer and sidebar if they are included.

This is useful for debugging and seeing what template file generated a page.

To use, activate, then reload any open pages. In the HTML comments, you can search for "TEMPLATE INFO" to see the added comments with the names of the template files included.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress

Once it is installed, you can right click on a Wordpress page in your browser and select the "view source" option. With the html source open, you can search for the string "TEMPLATE INFO" which will show you the added comments.

Any pages open previous will have to be reloaded in your browser. Note that reloading on the "html source" view does not always reflect, you should reload the normal page view then reopen the "view source" page.

== Frequently Asked Questions ==


== Screenshots ==


== Changelog ==

= 0.1 =
Initial version