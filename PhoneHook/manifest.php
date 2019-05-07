<?php
/*********************************************************************************
 * phone_hook 9.0.0
 ********************************************************************************/


$manifest = array (
  'acceptable_sugar_versions' => array ('6.*.*','7.*.*','8.*.*','9.*.*'),
  'acceptable_sugar_flavors' =>  array ('CE','PRO','ENT','ULT'),
  'readme' => '',
  'key' => '',
  'author' => 'kuske',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'phone_hook',
  'published_date' => '2019-05-01 00:00:00',
  'type' => 'module',
  'version' => '900',
  'remove_tables' => 'false',
);


$installdefs = array (
  'id' => 'phone_hook',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Contacts/ContactHook.php',
      'to' => 'custom/modules/Contacts/ContactHook.php',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Leads/LeadHook.php',
      'to' => 'custom/modules/Leads/LeadHook.php',
    ),
    2 => 
    array (
      'from' => '<basepath>/Extension/Contacts/Ext/LogicHooks/Contact_logic_hook.php',
      'to' => 'custom/Extension/modules/Contacts/Ext/LogicHooks/Contact_logic_hook.php',
    ),
    3 => 
    array (
      'from' => '<basepath>/Extension/Leads/Ext/LogicHooks/Lead_logic_hook.php',
      'to' => 'custom/Extension/modules/Leads/Ext/LogicHooks/Lead_logic_hook.php',
    ),
  ),
);

?>