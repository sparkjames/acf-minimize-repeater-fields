=== ACF Minimize Repeater Fields ===
Contributors: (this should be a list of wordpress.org userid's)
Donate link: https://jpfleiderer.com
Tags: acf, repeater, collapse, utility
Requires at least: 3.0.1
Tested up to: 5.6.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Force repeater fields to use the collapse feature as long as there is more than one sub field. Required the Advanced Custom Fields plugin.

== Description ==

Normally your repeater fields will not have the collapse feature enabled unless you select a field to show when a row is collapsed. But it would be nice to be able to enable collapse by default.

This plugin will enable collapse on all repeater fields, as long as they have more than 1 sub field. It won't override the sub field you select to show on collapse.

For backwards compatibility, if this section is missing, the full length of the short description will be used, and
Markdown parsed.

== Installation ==

1. Upload the `acf-minimize-repeater-fields` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin in the 'Plugins' section on the WordPress Dashboard.

Note that you must have Advanced Custom Fields also installed and enabled.

== Screenshots ==

1. This repeater field will hold a large amount of content for each row. Note that there is no field selecte for the "Collapsed" option.
(or jpg, jpeg, gif).
2. Indeed, on the edit screen the rows in this repeater are very tall and diffult to reorder.
3. The plugin enables the collapse feature on these repeater rows by default. "Text Field 1" is left as the visible field since it is the first sub field in the row.

== Changelog ==

= 1.0 =
* First version.
