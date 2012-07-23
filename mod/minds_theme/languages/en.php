<?php


$english = array(
	
	/* Minds renamings and overrides
	 */
	'more' => 'Elements',
	
	//login
	'login' => 'Enter',
	'logout' => 'Exit',
	'register' => 'Request Access',
	
	//change friends to channels
	'access:friends:label' => "Channels",
	
	'friends' => "Channels",
	'friends:yours' => "Channels you have subscribed to",
	'friends:owned' => "Channels %s's subscribed to",
	'friend:add' => "Add friend",
	'friend:remove' => "Un-subscribe from channel",

	'friends:add:successful' => "You have successfully subscribed to %s.",
	'friends:add:failure' => "We couldn't subscribe to %s.",

	'friends:remove:successful' => "You have successfully removed %s from your subscriptions.",
	'friends:remove:failure' => "We couldn't remove %s from your subscriptions.",

	'friends:none' => "No channels yet.",
	'friends:none:you' => "You are not subscribed to any channels yet.",

	'friends:none:found' => "No channels were found.",

	'friends:of:none' => "Nobody has subscribed to this channel yet.",
	'friends:of:none:you' => "Nobody has subscribed to you yet. Start adding content and fill in your profile to let people find you!",

	'friends:of:owned' => "People who have subscribed to %s",

	'friends:of' => "Subscribers",
	'friends:collections' => "Channel collections",
	'collections:add' => "New collection",
	'friends:collections:add' => "New channel collection",
	'friends:addfriends' => "Select channels",
	'friends:collectionname' => "Collection name",
	'friends:collectionfriends' => "Channels in collection",
	'friends:collectionedit' => "Edit this collection",
	'friends:nocollections' => "You do not have any collections yet.",
	'friends:collectiondeleted' => "Your collection has been deleted.",
	'friends:collectiondeletefailed' => "We were unable to delete the collection. Either you don't have permission, or some other problem has occurred.",
	'friends:collectionadded' => "Your collection was successfully created",
	'friends:nocollectionname' => "You need to give your collection a name before it can be created.",
	'friends:collections:members' => "Collection members",
	'friends:collections:edit' => "Edit collection",
	'friends:collections:edited' => "Saved collection",
	'friends:collection:edit_failed' => 'Could not save collection.',

);
		
add_translation("en", $english);