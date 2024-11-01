<?php
/*
Plugin Name: WP-Live-Chat-Freenode
Plugin URI: http://evbid.com/forums/wordpress-live-chat/livechat-readme-faq/page-1/post-5/#p5
Description: <strong>Live Chat</strong> adds a <em>Live Chat</em> button to your articles and pages which enable your visitors to directly connect to a Live IRC server. FREENODE PLUGIN
Version: 0.2.2
Author: Bondage Radio
Author URI: http://EVBid.com/
*/

/*  Copyright 2006  Bondage-Radio  (email: webdev@bondage-radio.com)
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

// Avoid being called directly

if (eregi(basename(__FILE__),$_SERVER['PHP_SELF'])) {
	echo '<html><body>';
	echo 'Direct module access forbidden. <br />';
	echo 'Live Chat extension v', WP-Live-Chat::_version(), ' for WordPress by <a href="http://www.bondageradio.com">Bondage Radio</a> <br />';
	echo '</body></html>';
    exit;
}

// Header Funtion of the plugin //

function livechat_header() {
echo '<SCRIPT type="text/javascript">';
echo 'function wpLiveChat(wpchat_title,wpchat_skin)';
echo '{';
global $user_identity;
if( !is_user_logged_in() ) {
echo 'var str1 = prompt("You are about to enter the Live Chat.\nYou must enter a nick';
echo 'name to continue.\n[Letters and numbers only]", "Guest");';
}else {
echo 'var str1 = \'' . sanitize_user( $user_identity, $strict = true ) . '\';';
} ;
echo 'if (str1 != null)';
echo '{';
echo 'if ((str1 == "Guest")||(str1 == "admin")) { str1 += "\?\?\?\?" };';
	echo 'document.getElementById(\'wpchatbox\').innerHTML = \'';
		echo '<iframe scrolling="no" frameborder=0 height=400 width=100% src="';
		echo 'http://evbid.com/livechat0.2.1.php';
		echo '?t=1';
		echo '&c=\' + wpchat_title + \'';
		echo '&n=\' + str1 + \'';
		echo '&r=\' + document.URL + \'';
		echo '&x=\' + wpchat_skin + \'"><iframe>\';';
echo ' }; };';
echo ' </SCRIPT>';
}

// Main Function of the plugin //

function livechat_the_content($content)
{
    $chats = str_replace('[livechat:',
    
    '<!----- Start LiveChat button Code----->
<span style=" width: 0; height: 0; display: block; visibility: hidden; overflow: hidden;">
	<a href="http://evbid.com/forums/wordpress-live-chat/livechat-readme-faq/page-1/">EVBid.com Live Chat Wordpress Plugin</a>
</span>
<p id="wpchatbox">
	<a href="javascript:wpLiveChat(\'',
    
    $content);
    
    $chats = str_replace(':skin:',
    
    '\',\'',
    
    $chats);

    $chats = str_replace(':image:',
    
    '\')" title="This topic is available in the Live Chat. To join in, click here." >
	<img src="',
    
    $chats);
    
    $chats = str_replace(':close]',
    
    '" />
	</a>
</p>
<!------End LiveChat button Code------>',
    
    $chats);
    
    
    return $chats;
}

   
// output to the <head> section of the page //

add_action('wp_head', 'livechat_header');

// Add the function into the loop so it is called when needed //

add_filter('the_content', 'livechat_the_content', 0 );
?>