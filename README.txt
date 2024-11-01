==== WP-Live-Chat ===
Contributors: BondageRadio
Donate Link: http://www.projectwonderful.com/advertisehere.php?id=17067
Tags: chat, mIRC, IRC, plugin, comments, post, page
Requires at least: 2.2.2
Tested up to: 2.5 and WPMU 1.3.3
Stable tag: 0.2.2

Chat Meets Blog - A Love/Chat Relationship. An IRC web client for your blog.

== Description ==

This plugin is an IRC web client for your blog. Enter a simple code to your page or post to create an instant chat room for your visitors. Now Supports Freenode chat-rooms.

The archive now contains TWO plugins, WP-Live-Chat-Adult, and WP-Live-Chat-Freenode. You may only activate ONE of these plugins at a time. Activating BOTH may cause conflicts in your wordpress. They use the same variables and function names.

The plugin *WAS* distributed as *T-Shirt Ware* but no one seemed to like the idea that you actually got something BESIDES free software for your donation. Instead a single button sized advertisement was included in the CGI, and the donate link points to our Project Wonderful location to purchase Ad Space in the chat window, starting at One Cent ($.01) a day.

== Installation ==

= Installation =

To install a chat room in your blog, simply upload the plugin you need (Adult or Freenode) to your plugins directory and activate it in the plugins menu, as is normal for all plugins.

You may only activate ONE of these plugins at a time. Activating BOTH
may crash your wordpress. They use the same variables and function names.

Enter the chat room code below in your post or page to generate the chat button.

= Chat Room Markup Code =

You must create or edit a Page or Post in your blog to add the chat button code.

Button Code String Must be in [ ] square brackets.

[livechat:*roomname*:skin:*skin*:image:*image_url*:close]

There are three author selectable options.

option livechat:*roomname*:

Can be any IRC compatible channel name without the leading '#'
for instance #Help roomname would simply be listed as [livechat:Help: or
the #SexyTeens room name would be listed as [livechat:SexyTeens:

IRC Channel Name Special Characters such as !~`^+ should not be used.

option skin:*skin*

There are a range of skins available to customize the look of the chat room to match your site, selecting a skin other than any on the below list will revert to the default skin

skin:default skin:mirc skin:dark skin:dutch skin:german skin:gothic skin:norwegian skin:romanian skin:russian

option image:*image_url*:close

The image parameter generates the actual visible button on your site. When a visitor or member of your blog clicks this image, the chat opens.

This image may be any image you wish to use as a connect button.

Enter the image location as a full url.

Do not enclose the image location in quotes.

CORRECT-> :image:http://evbid.com/images/chatnow.gif:close

WRONG-> :image:"../flower.png":close

== Frequently Asked Questions ==

= Can this plugin be used for another IRC Server/Network like Freenode =

As of this update we now support Freenode and our Adult Server at irc.bondageradio.com . We are however in negotiations with our host companies and may be able to supply additional chat servers and services in the very near future.

Test URL http://evbid.com/wordpress-irc-help/

= Concerns have been raised in the Wordpress forums about exchanging data with an 'Adult' server. In fact one member suggested twice that the plugin be taken down from the repository because of this fact. How do you respond to this? =

Actually, the more we think about this, the more upset we get. The single complaint was posted by an expatriot of his own country who raised the concern of data being "Shared with" or somehow "accessed by" our server.

This plugin is a wordpress front end for the well known CGI:IRC chat client, the only information exchanged between the server and the plugin is user name, referring page and desired channel to join.

Quite Frankly, any plugin can be used to access user information for subversive purposes, but no one here was even thinking about that, our Brains aren't that twisted. We run a WordPress based CMS on our site and we run an IRC server. Just because we cater to Adult interests (A class of users who more and more are finding themselves in the Minority) doesn't mean we're automatically evil. 

For those of you who can't admit that you are, in fact human, and think about dating and or sex, let alone connect to an Adult chat server, we have now added the capability of staying AWAY from the Adult server completely and connect to freenode.net (the same irc server Automatic uses for their chat rooms) through the Child Safe site EVBID.COM.

The Freenode CGI application does not run on our servers however you are still free to point the plugin at your own CGI:IRC installation and interface. The code for the proprietary interface is not included in the plugin package.

If you decide to utilize your own IRC:CGI please remember that MOST hosts see connecting to IRC as an additional service for which they charge extra, or as a TOS violation due to the proliferation of file sharing bots passing out warez and pr0n, so installing the CGI on your own host may result in issues.

EVbid.com and ChatHostPlus.com are organizing an arrangement for developing a custom plugin as well as a CGI host package specifically for CGI:IRC. Additional Packages may even include Unlimited bandwidth IRCd and Shoutcast Hosting all at reasonable prices. Stay Tuned or visit the named sites for more information.