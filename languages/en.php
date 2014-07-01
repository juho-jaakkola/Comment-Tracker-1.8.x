<?php
/**
 * comment_tracker language extender
 * 
 * @package ElggCommentTracker
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @copyright Copyright (c) 2007-2011 Cubet Technologies. (http://cubettechnologies.com)
 * @version 1.0
 * @author Akhilesh @ Cubet Technologies
 */

	$english = array(
		'comments' => "Comments",
		'comment:notification:settings' => 'Comment notifications',
		'comment:notification:settings:description' => 'Notify when comments are posted to items you have subscribed to.',
		'comment:notification:settings:how' => 'Select your method of notification',
		'comment:notification:settings:linktext' => 'View all items to which you are subscribed',
		'comment:subscriptions' => 'Subscriptions',
		'comment:subscriptions:none' => 'No current subscriptions',
		'comment:subscribe:tooltip' => 'Subscribe to receive notifications when comments are made on this content',
		'allow:comment:notification' => 'Do you want to enable notification? ',
		'email:content:type' => 'Do you want to support HTML Email? ',
		'text:email' => 'No',
		'html:email' => 'Yes',
		'comment:subscribe' => 'Subscribe',
		'comment:unsubscribe' => 'Unsubscribe',
        'comment:subscribe:long' => 'Subscribe to comment notifications',
		'comment:unsubscribe:long' => 'Unsubscribe from comment notifications',
        'comment_tracker:setting:autosubscribe' => "Auto-subscribe to content you comment on?",
		'show:subscribers' => 'Show Subscribers',
		'comment:subscribe:success' => 'You have successfully subscribed to this post or topic.',
		'comment:subscribe:failed' => "Sorry! You couldn't subscribe this post or topic.",
		'comment:subscribe:entity:not:access' => "Sorry! we couldn't find the post or topic for some reason.",
		'comment:unsubscribe:success' => 'You have successfully unsubscribed from this post or topic.',
		'comment:unsubscribe:failed' => "Sorry! You couldn't unsubscribe from this post or topic.",
		'comment:unsubscribe:not:valid:url' => 'Sorry! This is not a valid url to unsubscribe from this post or topic.',
		'comment:unsubscribe:entity:not:access' => "Sorry! we couldn't find the post or topic.",
        'comment_tracker:setting:show_button' => "Show subscribe/unsubscribe button above comments view? ",
        'comment_tracker:item' => "item",
		'comment_tracker:setting:notify_owner' => "Let comment tracker handle owner notifications?",
        
        'comment:notify:subject:groupforumtopic' => '%s added to the discussion %s in the group %s',
        'comment:notify:subject:comment' => '%s commented on the %s "%s"',
        'comment:notify:subject:comment:group' => '%s commented on the %s "%s" in the group %s',

		'comment:notify:subject:blog' => '%s commented on the blog "%s"',
		'comment:notify:subject:blog:group' => '%s commented on the blog "%s" in the group %s',
		'comment:notify:subject:bookmarks' => '%s commented on the bookmark "%s"',
		'comment:notify:subject:bookmarks:group' => '%s commented on the bookmark "%s" in the group %s',
		'comment:notify:subject:file' => '%s commented on the file "%s"',
		'comment:notify:subject:file:group' => '%s commented on the file "%s" in the group %s',
		'comment:notify:subject:event' => '%s commented on the event "%s"',
		'comment:notify:subject:event:group' => '%s commented on the event "%s" in the group %s',
		'comment:notify:subject:page' => '%s commented on the page "%s"',
		'comment:notify:subject:page:group' => '%s commented on the page "%s" in the group %s',
		'comment:notify:subject:page_top' => '%s commented on the page "%s"',
		'comment:notify:subject:page_top:group' => '%s commented on the page "%s" in the group %s',
		'comment:notify:subject:poll' => '%s commented on the poll "%s"',
		'comment:notify:subject:poll:group' => '%s commented on the poll "%s" in the group %s',
		'comment:notify:subject:album' => '%s commented on the album "%s"',
		'comment:notify:subject:album:group' => '%s commented on the album "%s" in the group %s',
		'comment:notify:subject:image' => '%s commented on the image "%s"',
		'comment:notify:subject:image:group' => '%s commented on the image "%s" in the group %s',
		'comment:notify:subject:sharemaps' => '%s commented on the map "%s"',
		'comment:notify:subject:sharemaps:group' => '%s commented on the map "%s in the group %s"',
	);
					
add_translation("en",$english);