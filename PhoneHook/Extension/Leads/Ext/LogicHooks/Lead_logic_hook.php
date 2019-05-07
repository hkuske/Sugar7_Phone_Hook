<?php
$hook_version = 1;
$hook_array['before_save'][] = array(
	99, //order
	'Lead sample logic hook for Phone correction', //description
	'custom/modules/Leads/LeadHook.php', //file path
	'LeadHook', //class name - should match file name
	'korrPhone', // function to be called
);	
