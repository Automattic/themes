=== Ponyville ===
Contributors: Automattic
Requires at least: ? 
Tested up to: ?
Requires PHP: ? 
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

An unopinionated 'Ponyfill' to fill the gaps between where Gutenberg IS and where Gutenberg is GOING.

== Description ==

The purpose of Ponyville is to provide a "ponyfill" that allows for 100% "configuration expression" of design.  Any aspect of configurable design that Gutenberg does not yet take into account is expressed in theme.json 'custom' properties.

A "ponyfill" is similar to a "polyfill" in that it provides the expected functionalty, but in a way that needs to be executed in a different way that what it is "ponyfilling".

To use this theme assign it as the parent theme and then copy from this them to the child theme the theme.json file and fill out the details.

The goal is for the ponyfill styling to reflect what Gutenberg will style, from a given configuration, once that work is complete.  But to offer that today, using simpler techniques that Gutenberg will use upon completion.