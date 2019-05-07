<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


class ContactHook {

   function korrPhone(& $focus, $event, $arguments){

      if($event=="before_save"){

	     if (($focus->phone_work != "") && (substr($focus->phone_work,0,1) != "+") )
		 $focus->phone_work = "+49 ".$focus->phone_work;
		 
	     if (($focus->phone_fax != "") && (substr($focus->phone_fax,0,1) != "+") )
		 $focus->phone_fax = "+49 ".$focus->phone_fax;
		 
	     if (($focus->phone_mobile != "") && (substr($focus->phone_mobile,0,1) != "+") )
		 $focus->phone_mobile = "+49 ".$focus->phone_mobile;
		 
	     if (($focus->phone_home != "") && (substr($focus->phone_home,0,1) != "+") )
		 $focus->phone_home = "+49 ".$focus->phone_home;
		 
	     if (($focus->phone_other != "") && (substr($focus->phone_other,0,1) != "+") )
		 $focus->phone_other = "+49 ".$focus->phone_other;
		 
	     if (($focus->assistant_phone != "") && (substr($focus->assistant_phone,0,1) != "+") )
		 $focus->assistant_phone = "+49 ".$focus->assistant_phone;
	    }
		
    }

} //end class ContactHook
