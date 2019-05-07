<?php
$hook_version = 1;
$hook_array['before_save'][] = array(
	99, //order
	'Contact sample logic hook for Phone correction', //description
	'custom/modules/Contacts/ContactHook.php', //file path
	'ContactHook', //class name - should match file name
	'korrPhone', // function to be called
);
