<?php

// Generated e107 Plugin Admin Area 

require_once('../../class2.php');
if (!getperms('P')) 
{
	e107::redirect('admin');
	exit;
}

// e107::lan('unitexe',true);


class unitexe_adminArea extends e_admin_dispatcher
{

	protected $modes = array(	
	
		'other1'	=> array(
			'controller' 	=> 'awards_exesystem_ui',
			'path' 			=> null,
			'ui' 			=> 'awards_exesystem_form_ui',
			'uipath' 		=> null
		),

		'other2'	=> array(
			'controller' 	=> 'badges_exesystem_ui',
			'path' 			=> null,
			'ui' 			=> 'badges_exesystem_form_ui',
			'uipath' 		=> null
		),

		'other3'	=> array(
			'controller' 	=> 'medals_exesystem_ui',
			'path' 			=> null,
			'ui' 			=> 'medals_exesystem_form_ui',
			'uipath' 		=> null
		),

		'other4'	=> array(
			'controller' 	=> 'patches_exesystem_ui',
			'path' 			=> null,
			'ui' 			=> 'patches_exesystem_form_ui',
			'uipath' 		=> null
		),

		'other5'	=> array(
			'controller' 	=> 'pins_exesystem_ui',
			'path' 			=> null,
			'ui' 			=> 'pins_exesystem_form_ui',
			'uipath' 		=> null
		),

		'other6'	=> array(
			'controller' 	=> 'qualifications_exesystem_ui',
			'path' 			=> null,
			'ui' 			=> 'qualifications_exesystem_form_ui',
			'uipath' 		=> null
		),

		'other7'	=> array(
			'controller' 	=> 'ranks_exesystem_ui',
			'path' 			=> null,
			'ui' 			=> 'ranks_exesystem_form_ui',
			'uipath' 		=> null
		),

		'other8'	=> array(
			'controller' 	=> 'ribbons_exesystem_ui',
			'path' 			=> null,
			'ui' 			=> 'ribbons_exesystem_form_ui',
			'uipath' 		=> null
		),

		'other9'	=> array(
			'controller' 	=> 'training_exesystem_ui',
			'path' 			=> null,
			'ui' 			=> 'training_exesystem_form_ui',
			'uipath' 		=> null
		),
		
		'other10'	=> array(
			'controller'	=> 'loa_exesystem_ui',
			'path'			=> null,
			'ui'			=> 'loa_exesystem_form_ui',
			'uipath'		=> null
		),
		
		'other11'	=> array(
			'controller'	=> 'status_exesystem_ui',
			'path'			=> null,
			'ui'			=> 'status_exesystem_form_ui',
			'uipath'		=> null
		),
		
		'main'	=> array(
			'controller' 	=> 'pref_exesystem_ui',
			'path' 			=> null,
			'ui' 			=> 'pref_exesystem_form_ui',
			'uipath' 		=> null
		),
		

	);	
	
	
	protected $adminMenu = array(
	
		'other1/create'		=> array('caption'=> 'Create Awards', 'perm' => 'P'),
		'other2/create'		=> array('caption'=> 'Create Badges', 'perm' => 'P'),
		'other3/create'		=> array('caption'=> 'Create Medals', 'perm' => 'P'),
		'other4/create'		=> array('caption'=> 'Create Patches', 'perm' => 'P'),
		'other5/create'		=> array('caption'=> 'Create Pins', 'perm' => 'P'),
		'other8/create'		=> array('caption'=> 'Create Ribbons', 'perm' => 'P'),
		'other11/create'	=> array('caption'=>'Create Status', 'perm' => 'P'),
		'opt1'              => array('divider'=> true),
		'opt2'              => array('header'=>"Manage", 'divider'=> true),
		'other1/list'			=> array('caption'=> 'Manage Awards', 'perm' => 'P'),
		'other2/list'			=> array('caption'=> 'Manage Badges', 'perm' => 'P'),
		'other3/list'			=> array('caption'=> 'Manage Medals', 'perm' => 'P'),
		'other4/list'			=> array('caption'=> 'Manage Patches', 'perm' => 'P'),
		'other5/list'			=> array('caption'=> 'Manage Pins', 'perm' => 'P'),
		'other8/list'			=> array('caption'=> 'Manage Ribbons', 'perm' => 'P'),
		'other11/list'	=> array('caption'=>'Manage Status', 'perm' => 'P'),
		'opt3'              => array('divider'=> true),
		'opt4'              => array('header'=>"Qualifications/Training", 'divider'=> true),
		'other6/list'			=> array('caption'=> 'Manage Qualifications', 'perm' => 'P'),
		'other6/create'		=> array('caption'=> 'Create Qualification', 'perm' => 'P'),
		'other9/list'			=> array('caption'=> 'Manage Trainings', 'perm' => 'P'),
		'other9/create'		=> array('caption'=> 'Create Training', 'perm' => 'P'),
		'opt5'              => array('divider'=> true),
		'opt6'              => array('header'=>"Ranks", 'divider'=> true),
		'other7/list'			=> array('caption'=> 'Manage Ranks', 'perm' => 'P'),
		'other7/create'		=> array('caption'=> 'Create Rank', 'perm' => 'P'),
		'opt7'              => array('divider'=> true),
		'opt8'				=> array('header'=>"Leave of Absences", 'divider'=> true),
		'other10/list'		=> array('caption'=> 'Manage LOA', 'perm' => 'P'),
		'other10/create'	=> array('caption'=> 'Create LOA', 'perm'=> 'P'),
		'opt9'              => array('divider'=> true),
		'opt10'              => array('header'=>"Unit System Preferences", 'divider'=> true),
		
		'main/prefs' 		=> array('caption'=> LAN_PREFS, 'perm' => 'P'),	

		// 'main/custom'		=> array('caption'=> 'Custom Page', 'perm' => 'P')
	);

	protected $adminMenuAliases = array(
		'main/edit'	=> 'main/list'				
	);	
	
	protected $menuTitle = 'Unit System';
}




				
class awards_exesystem_ui extends e_admin_ui
{
			
		protected $pluginTitle		= 'Awards System';
		protected $pluginName		= 'unitexe';
	//	protected $eventName		= 'unitexe-awards_exesystem'; // remove comment to enable event triggers in admin. 		
		protected $table			= 'awards_exesystem';
		protected $pid				= 'award_id';
		protected $perPage			= 10; 
		protected $batchDelete		= true;
	//	protected $batchCopy		= true;		
	//	protected $sortField		= 'somefield_order';
	//	protected $orderStep		= 10;
	//	protected $tabs				= array('Tabl 1','Tab 2'); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
	//	protected $listQry      	= "SELECT * FROM `#tableName` WHERE field != '' "; // Example Custom Query. LEFT JOINS allowed. Should be without any Order or Limit.
	
		protected $listOrder		= 'award_id DESC';
	
		protected $fields 		= array (  'checkboxes' =>   array ( 'title' => '', 'type' => null, 'data' => null, 'width' => '5%', 'thclass' => 'center', 'forced' => '1', 'class' => 'center', 'toggle' => 'e-multiselect',  ),
		  'award_id' =>   array ( 'title' => LAN_ID, 'data' => 'int', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'award_name' =>   array ( 'title' => LAN_TITLE, 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'award_description' =>   array ( 'title' => LAN_DESCRIPTION, 'type' => 'textarea', 'data' => 'str', 'width' => '40%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'award_image' =>   array ( 'title' => LAN_IMAGE, 'type' => 'image', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => 'thumb=80x80', 'writeParms' => 'size=xxlarge&media=featurebox&video=1', 'class' => 'left', 'thclass' => 'left',  ),
		  'options' =>   array ( 'title' => LAN_OPTIONS, 'type' => null, 'data' => null, 'width' => '10%', 'thclass' => 'center last', 'class' => 'center last', 'forced' => '1',  ),
		);		
		
		protected $fieldpref = array('award_name', 'award_image');
		
	
		public function init()
		{
			// Set drop-down values (if any). 
	
		}

		
		// ------- Customize Create --------
		
		public function beforeCreate($new_data,$old_data)
		{
			return $new_data;
		}
	
		public function afterCreate($new_data, $old_data, $id)
		{
			// do something
		}

		public function onCreateError($new_data, $old_data)
		{
			// do something		
		}		
		
		
		// ------- Customize Update --------
		
		public function beforeUpdate($new_data, $old_data, $id)
		{
			return $new_data;
		}

		public function afterUpdate($new_data, $old_data, $id)
		{
			// do something	
		}
		
		public function onUpdateError($new_data, $old_data, $id)
		{
			// do something		
		}		
			
}
				


class awards_exesystem_form_ui extends e_admin_form_ui
{

}		
		

				
class badges_exesystem_ui extends e_admin_ui
{
			
		protected $pluginTitle		= 'Badges System';
		protected $pluginName		= 'unitexe';
	//	protected $eventName		= 'unitexe-badges_exesystem'; // remove comment to enable event triggers in admin. 		
		protected $table			= 'badges_exesystem';
		protected $pid				= 'badge_id';
		protected $perPage			= 10; 
		protected $batchDelete		= true;
	//	protected $batchCopy		= true;		
	//	protected $sortField		= 'somefield_order';
	//	protected $orderStep		= 10;
	//	protected $tabs				= array('Tabl 1','Tab 2'); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
	//	protected $listQry      	= "SELECT * FROM `#tableName` WHERE field != '' "; // Example Custom Query. LEFT JOINS allowed. Should be without any Order or Limit.
	
		protected $listOrder		= 'badge_id DESC';
	
		protected $fields 		= array (  'checkboxes' =>   array ( 'title' => '', 'type' => null, 'data' => null, 'width' => '5%', 'thclass' => 'center', 'forced' => '1', 'class' => 'center', 'toggle' => 'e-multiselect',  ),
		  'badge_id' =>   array ( 'title' => LAN_ID, 'data' => 'int', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'badge_name' =>   array ( 'title' => LAN_TITLE, 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'badge_description' =>   array ( 'title' => LAN_DESCRIPTION, 'type' => 'textarea', 'data' => 'str', 'width' => '40%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'badge_image' =>   array ( 'title' => LAN_IMAGE, 'type' => 'image', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => 'thumb=80x80', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'options' =>   array ( 'title' => LAN_OPTIONS, 'type' => null, 'data' => null, 'width' => '10%', 'thclass' => 'center last', 'class' => 'center last', 'forced' => '1',  ),
		);		
		
		protected $fieldpref = array('badge_name', 'badge_image');
		
	
		public function init()
		{
			// Set drop-down values (if any). 
	
		}

		
		// ------- Customize Create --------
		
		public function beforeCreate($new_data,$old_data)
		{
			return $new_data;
		}
	
		public function afterCreate($new_data, $old_data, $id)
		{
			// do something
		}

		public function onCreateError($new_data, $old_data)
		{
			// do something		
		}		
		
		
		// ------- Customize Update --------
		
		public function beforeUpdate($new_data, $old_data, $id)
		{
			return $new_data;
		}

		public function afterUpdate($new_data, $old_data, $id)
		{
			// do something	
		}
		
		public function onUpdateError($new_data, $old_data, $id)
		{
			// do something		
		}
			
}
				


class badges_exesystem_form_ui extends e_admin_form_ui
{

}		
		

				
class medals_exesystem_ui extends e_admin_ui
{
			
		protected $pluginTitle		= 'Medals System';
		protected $pluginName		= 'unitexe';
	//	protected $eventName		= 'unitexe-medals_exesystem'; // remove comment to enable event triggers in admin. 		
		protected $table			= 'medals_exesystem';
		protected $pid				= 'medal_id';
		protected $perPage			= 10; 
		protected $batchDelete		= true;
	//	protected $batchCopy		= true;		
	//	protected $sortField		= 'somefield_order';
	//	protected $orderStep		= 10;
	//	protected $tabs				= array('Tabl 1','Tab 2'); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
	//	protected $listQry      	= "SELECT * FROM `#tableName` WHERE field != '' "; // Example Custom Query. LEFT JOINS allowed. Should be without any Order or Limit.
	
		protected $listOrder		= 'medal_id DESC';
	
		protected $fields 		= array (  'checkboxes' =>   array ( 'title' => '', 'type' => null, 'data' => null, 'width' => '5%', 'thclass' => 'center', 'forced' => '1', 'class' => 'center', 'toggle' => 'e-multiselect',  ),
		  'medal_id' =>   array ( 'title' => LAN_ID, 'data' => 'int', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'medal_name' =>   array ( 'title' => LAN_TITLE, 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'medal_description' =>   array ( 'title' => LAN_DESCRIPTION, 'type' => 'textarea', 'data' => 'str', 'width' => '40%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'medal_image' =>   array ( 'title' => LAN_IMAGE, 'type' => 'image', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => 'thumb=80x80', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'options' =>   array ( 'title' => LAN_OPTIONS, 'type' => null, 'data' => null, 'width' => '10%', 'thclass' => 'center last', 'class' => 'center last', 'forced' => '1',  ),
		);		
		
		protected $fieldpref = array('medal_name', 'medal_image');
		
	
		public function init()
		{
			// Set drop-down values (if any). 
	
		}

		
		// ------- Customize Create --------
		
		public function beforeCreate($new_data,$old_data)
		{
			return $new_data;
		}
	
		public function afterCreate($new_data, $old_data, $id)
		{
			// do something
		}

		public function onCreateError($new_data, $old_data)
		{
			// do something		
		}		
		
		
		// ------- Customize Update --------
		
		public function beforeUpdate($new_data, $old_data, $id)
		{
			return $new_data;
		}

		public function afterUpdate($new_data, $old_data, $id)
		{
			// do something	
		}
		
		public function onUpdateError($new_data, $old_data, $id)
		{
			// do something		
		}		
		
}
				


class medals_exesystem_form_ui extends e_admin_form_ui
{

}		
		

				
class patches_exesystem_ui extends e_admin_ui
{
			
		protected $pluginTitle		= 'Patches';
		protected $pluginName		= 'unitexe';
	//	protected $eventName		= 'unitexe-patches_exesystem'; // remove comment to enable event triggers in admin. 		
		protected $table			= 'patches_exesystem';
		protected $pid				= 'patch_id';
		protected $perPage			= 10; 
		protected $batchDelete		= true;
	//	protected $batchCopy		= true;		
	//	protected $sortField		= 'somefield_order';
	//	protected $orderStep		= 10;
	//	protected $tabs				= array('Tabl 1','Tab 2'); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
	//	protected $listQry      	= "SELECT * FROM `#tableName` WHERE field != '' "; // Example Custom Query. LEFT JOINS allowed. Should be without any Order or Limit.
	
		protected $listOrder		= 'patch_id DESC';
	
		protected $fields 		= array (  'checkboxes' =>   array ( 'title' => '', 'type' => null, 'data' => null, 'width' => '5%', 'thclass' => 'center', 'forced' => '1', 'class' => 'center', 'toggle' => 'e-multiselect',  ),
		  'patch_id' =>   array ( 'title' => LAN_ID, 'data' => 'int', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'patch_name' =>   array ( 'title' => LAN_TITLE, 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'patch_description' =>   array ( 'title' => LAN_DESCRIPTION, 'type' => 'textarea', 'data' => 'str', 'width' => '40%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'patch_image' =>   array ( 'title' => LAN_IMAGE, 'type' => 'image', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => 'thumb=80x80', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'options' =>   array ( 'title' => LAN_OPTIONS, 'type' => null, 'data' => null, 'width' => '10%', 'thclass' => 'center last', 'class' => 'center last', 'forced' => '1',  ),
		);		
		
		protected $fieldpref = array('patch_name', 'patch_image');
		
	
		public function init()
		{
			// Set drop-down values (if any). 
	
		}

		
		// ------- Customize Create --------
		
		public function beforeCreate($new_data,$old_data)
		{
			return $new_data;
		}
	
		public function afterCreate($new_data, $old_data, $id)
		{
			// do something
		}

		public function onCreateError($new_data, $old_data)
		{
			// do something		
		}		
		
		
		// ------- Customize Update --------
		
		public function beforeUpdate($new_data, $old_data, $id)
		{
			return $new_data;
		}

		public function afterUpdate($new_data, $old_data, $id)
		{
			// do something	
		}
		
		public function onUpdateError($new_data, $old_data, $id)
		{
			// do something		
		}	
			
}
				


class patches_exesystem_form_ui extends e_admin_form_ui
{

}		
		

				
class pins_exesystem_ui extends e_admin_ui
{
			
		protected $pluginTitle		= 'Pins System';
		protected $pluginName		= 'unitexe';
	//	protected $eventName		= 'unitexe-pins_exesystem'; // remove comment to enable event triggers in admin. 		
		protected $table			= 'pins_exesystem';
		protected $pid				= 'pin_id';
		protected $perPage			= 10; 
		protected $batchDelete		= true;
	//	protected $batchCopy		= true;		
	//	protected $sortField		= 'somefield_order';
	//	protected $orderStep		= 10;
	//	protected $tabs				= array('Tabl 1','Tab 2'); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
	//	protected $listQry      	= "SELECT * FROM `#tableName` WHERE field != '' "; // Example Custom Query. LEFT JOINS allowed. Should be without any Order or Limit.
	
		protected $listOrder		= 'pin_id DESC';
	
		protected $fields 		= array (  'checkboxes' =>   array ( 'title' => '', 'type' => null, 'data' => null, 'width' => '5%', 'thclass' => 'center', 'forced' => '1', 'class' => 'center', 'toggle' => 'e-multiselect',  ),
		  'pin_id' =>   array ( 'title' => LAN_ID, 'data' => 'int', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'pin_name' =>   array ( 'title' => LAN_TITLE, 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'pin_description' =>   array ( 'title' => LAN_DESCRIPTION, 'type' => 'textarea', 'data' => 'str', 'width' => '40%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'pin_image' =>   array ( 'title' => LAN_IMAGE, 'type' => 'image', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => 'thumb=80x80', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'options' =>   array ( 'title' => LAN_OPTIONS, 'type' => null, 'data' => null, 'width' => '10%', 'thclass' => 'center last', 'class' => 'center last', 'forced' => '1',  ),
		);		
		
		protected $fieldpref = array('pin_name', 'pin_image');
		
	
		public function init()
		{
			// Set drop-down values (if any). 
	
		}

		
		// ------- Customize Create --------
		
		public function beforeCreate($new_data,$old_data)
		{
			return $new_data;
		}
	
		public function afterCreate($new_data, $old_data, $id)
		{
			// do something
		}

		public function onCreateError($new_data, $old_data)
		{
			// do something		
		}		
		
		
		// ------- Customize Update --------
		
		public function beforeUpdate($new_data, $old_data, $id)
		{
			return $new_data;
		}

		public function afterUpdate($new_data, $old_data, $id)
		{
			// do something	
		}
		
		public function onUpdateError($new_data, $old_data, $id)
		{
			// do something		
		}		
			
}
				


class pins_exesystem_form_ui extends e_admin_form_ui
{

}		
		

				
class qualifications_exesystem_ui extends e_admin_ui
{
			
		protected $pluginTitle		= 'Qualifications System';
		protected $pluginName		= 'unitexe';
	//	protected $eventName		= 'unitexe-qualifications_exesystem'; // remove comment to enable event triggers in admin. 		
		protected $table			= 'qualifications_exesystem';
		protected $pid				= 'qual_id';
		protected $perPage			= 10; 
		protected $batchDelete		= true;
	//	protected $batchCopy		= true;		
	//	protected $sortField		= 'somefield_order';
	//	protected $orderStep		= 10;
	//	protected $tabs				= array('Tabl 1','Tab 2'); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
	//	protected $listQry      	= "SELECT * FROM `#tableName` WHERE field != '' "; // Example Custom Query. LEFT JOINS allowed. Should be without any Order or Limit.
	
		protected $listOrder		= 'qual_id DESC';
	
		protected $fields 		= array (  'checkboxes' =>   array ( 'title' => '', 'type' => null, 'data' => null, 'width' => '5%', 'thclass' => 'center', 'forced' => '1', 'class' => 'center', 'toggle' => 'e-multiselect',  ),
		  'qual_id' =>   array ( 'title' => LAN_ID, 'data' => 'int', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'qual_name' =>   array ( 'title' => LAN_TITLE, 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'qual_description' =>   array ( 'title' => LAN_DESCRIPTION, 'type' => 'textarea', 'data' => 'str', 'width' => '40%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'qual_image' =>   array ( 'title' => LAN_IMAGE, 'type' => 'image', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => 'thumb=80x80', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'options' =>   array ( 'title' => LAN_OPTIONS, 'type' => null, 'data' => null, 'width' => '10%', 'thclass' => 'center last', 'class' => 'center last', 'forced' => '1',  ),
		);		
		
		protected $fieldpref = array('qual_name', 'qual_image');
		
	
		public function init()
		{
			// Set drop-down values (if any). 
	
		}

		
		// ------- Customize Create --------
		
		public function beforeCreate($new_data,$old_data)
		{
			return $new_data;
		}
	
		public function afterCreate($new_data, $old_data, $id)
		{
			// do something
		}

		public function onCreateError($new_data, $old_data)
		{
			// do something		
		}		
		
		
		// ------- Customize Update --------
		
		public function beforeUpdate($new_data, $old_data, $id)
		{
			return $new_data;
		}

		public function afterUpdate($new_data, $old_data, $id)
		{
			// do something	
		}
		
		public function onUpdateError($new_data, $old_data, $id)
		{
			// do something		
		}		
					
}
				


class qualifications_exesystem_form_ui extends e_admin_form_ui
{

}		
		

				
class ranks_exesystem_ui extends e_admin_ui
{
			
		protected $pluginTitle		= 'Ranks System';
		protected $pluginName		= 'unitexe';
	//	protected $eventName		= 'unitexe-ranks_exesystem'; // remove comment to enable event triggers in admin. 		
		protected $table			= 'ranks_exesystem';
		protected $pid				= 'rank_id';
		protected $perPage			= 50; 
		protected $batchDelete		= true;
	//	protected $batchCopy		= true;		
		protected $sortField		= 'rank_order';
		protected $sortParent       = 'rank_parent';
		protected $orderStep		= 50;
	//	protected $tabs				= array('Tabl 1','Tab 2'); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
		protected $listQry          = "SELECT a. *, CASE WHEN a.rank_parent = 0 THEN a.rank_order ELSE b.rank_order + (( a.rank_order)/1000) END AS Sort FROM `#ranks_exesystem` AS a LEFT JOIN `#ranks_exesystem` AS b ON a.rank_parent = b.rank_id ";
	
		protected $listOrder		= 'Sort,rank_order ';
	
		protected $fields 		= array (  'checkboxes' =>   array ( 'title' => '', 'type' => null, 'data' => null, 'width' => '5%', 'thclass' => 'center', 'forced' => '1', 'class' => 'center', 'toggle' => 'e-multiselect',  ),
		  'rank_id' =>   array ( 'title' => LAN_ID, 'data' => 'int', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'rank_fullname' =>   array ( 'title' => LAN_TITLE, 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'rank_shortname' =>   array ( 'title' => LAN_TAGS, 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'rank_description' =>   array ( 'title' => LAN_DESCRIPTION, 'type' => 'textarea', 'data' => 'str', 'width' => '40%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'rank_image' =>   array ( 'title' => LAN_IMAGE, 'type' => 'image', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => 'thumb=80x80', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'rank_parent' =>   array ( 'title' => 'Parent', 'type' => 'dropdown', 'data' => 'int', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'rank_order' =>   array ( 'title' => LAN_ORDER, 'type' => 'number', 'data' => 'int', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'options' =>   array ( 'title' => LAN_OPTIONS, 'type' => null, 'data' => null, 'width' => '10%', 'thclass' => 'center last', 'class' => 'center last', 'forced' => '1', 'sort'=>1 ),
		);		
		
		protected $fieldpref = array('rank_fullname','rank_shortname', 'rank_image', 'rank_parent', 'Sort', 'rank_order');
		

	//	protected $preftabs        = array('General', 'Other' );
	//	protected $prefs = array();
		public $forumParents = array();
	
		private function checkOrder()
		{
			$sql = e107::getDb();
			$sql2 = e107::getDb('sql2');
			$count = $sql->select('ranks_exesystem', 'rank_id', 'rank_order = 0');

			if($count > 1)
			{
				$sql->gen("SELECT rank_id,rank_fullname,rank_parent,rank_order FROM `#ranks_exesystem` ORDER BY COALESCE(NULLIF(rank_parent,0), rank_id), rank_parent > 0, rank_order ");

				$c = 0;
				while($row = $sql->fetch())
				{
					//print_a($row);
					if($row['rank_parent'] == 0)
					{
						$c = $c + 100;
					}
					else
					{
						$c = $c+1;
					}

					$sql2->update('ranks_exesystem', 'rank_order = '.$c.' WHERE rank_id = '.$row['rank_id'].' LIMIT 1');
				}

			}
			
		}

		public function init()
		{
			// Set drop-down values (if any). 
			$this->checkOrder();
			if($this->getAction() == 'edit')
			{
				$this->fields['rank_order']['noedit'] = true;
			}
			$data = e107::getDb()->retrieve('ranks_exesystem', 'rank_id,rank_fullname,rank_parent', 'rank_id != 0',true);
			$this->rankParents[0] = "(New Parent)";

			foreach($data as $val)
			{
				$id = $val['rank_id'];

				if($val['rank_parent'] == 0)
				{
					$this->rankParents[$id] = $val['rank_fullname'];
				}
				else
				{
					$forumSubParents[$id] = $val['rank_fullname'];
				}

			}

			$this->fields['rank_parent']['writeParms'] = $this->rankParents;
		}

		
		// ------- Customize Create --------
		public function afterSort($result, $selected)
		{

			return;

			$sql = e107::getDb();

			$data2 = $sql->retrieve('ranks_exesystem','rank_id,rank_fullname,rank_parent,rank_order','rank_parent = 0',true);
			foreach($data2 as $val)
			{
				$id = $val['rank_id'];
				$parent[$id] = $val['rank_order'];

			}

			$previous = 0;

			$data = $sql->retrieve('ranks_exesystem','*','rank_parent != 0 ORDER BY rank_order',true);
			foreach($data as $row)
			{
				$p = $row['rank_parent'];

				if($p != $previous)
				{
					$c = $parent[$p];
				}

				$c++;
				$previous = $p;
				
				$sql->update('ranks_exesystem','rank_order = '.$c.' WHERE rank_id = '.intval($row['rank_id']).' LIMIT 1');

			}
		}
		
		public function beforeCreate($new_data,$old_data)
		{
			$sql = e107::getDb();
			$parentOrder = $sql->retrieve('ranks_exesystem','rank_order','rank_id='.$new_data['rank_parent']." LIMIT 1");

			$new_data['rank_order'] = $parentOrder + 50;
			
			return $new_data;
		}
	
		public function afterCreate($new_data, $old_data, $id)
		{
			// do something
		}

		public function onCreateError($new_data, $old_data)
		{
			// do something		
		}		
		
		
		// ------- Customize Update --------
		
		public function beforeUpdate($new_data, $old_data, $id)
		{
			return $new_data;
		}

		public function afterUpdate($new_data, $old_data, $id)
		{
			// do something	
		}
		
		public function onUpdateError($new_data, $old_data, $id)
		{
			// do something		
		}		
		
}
				


class ranks_exesystem_form_ui extends e_admin_form_ui
{
	
	function rank_fullname($curVal,$mode,$parm)
	{

			$frm = e107::getForm();

			if($mode == 'read')
			{
				$parent 	= $this->getController()->getListModel()->get('rank_parent');
				$id			= $this->getController()->getListModel()->get('rank_id');
				//$sub     = $this->getController()->getListModel()->get('forum_sub');



				$level = 1;

				//if(!empty($sub))
				//{
				//	$level = 3;
				//}

				$linkQ = e_SELF."?searchquery=&filter_options=page_chapter__".$id."&mode=page&action=list";
				$level_image = $parent ? '<img src="'.e_IMAGE_ABS.'generic/branchbottom.gif" class="icon" alt="" style="margin-left: '.($level * 20).'px" />&nbsp;' : '';



				return ($parent) ?  $level_image.$curVal : $curVal;
			}

			if($mode == 'write')
			{
				return $frm->text('rank_fullname',$curVal,255,'size=xxlarge');
			}

			if($mode == 'filter')
			{
				return;
			}
			if($mode == 'batch')
			{
				return;
			}

			if($mode == 'inline')
			{
				$parent 	= $this->getController()->getListModel()->get('rank_parent');
				if(empty($parent))
				{
					return array('inlineType'=>'text');
				}

				return false;
			}
		}


		// Custom Method/Function
		function rank_parent($curVal,$mode)
		{
			$frm = e107::getForm();

			switch($mode)
			{
				case 'read': // List Page
					return $curVal;
					break;

				case 'write': // Edit Page
					return $frm->text('rank_parent',$curVal);
					break;

				case 'filter':
				case 'batch':
				//	return  $array;
					break;
		}
	}
}		
		

				
class ribbons_exesystem_ui extends e_admin_ui
{
			
		protected $pluginTitle		= 'Ribbons System';
		protected $pluginName		= 'unitexe';
	//	protected $eventName		= 'unitexe-ribbons_exesystem'; // remove comment to enable event triggers in admin. 		
		protected $table			= 'ribbons_exesystem';
		protected $pid				= 'ribbon_id';
		protected $perPage			= 10; 
		protected $batchDelete		= true;
	//	protected $batchCopy		= true;		
	//	protected $sortField		= 'somefield_order';
	//	protected $orderStep		= 10;
	//	protected $tabs				= array('Tabl 1','Tab 2'); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
	//	protected $listQry      	= "SELECT * FROM `#tableName` WHERE field != '' "; // Example Custom Query. LEFT JOINS allowed. Should be without any Order or Limit.
	
		protected $listOrder		= 'ribbon_id DESC';
	
		protected $fields 		= array (  'checkboxes' =>   array ( 'title' => '', 'type' => null, 'data' => null, 'width' => '5%', 'thclass' => 'center', 'forced' => '1', 'class' => 'center', 'toggle' => 'e-multiselect',  ),
		  'ribbon_id' =>   array ( 'title' => LAN_ID, 'data' => 'int', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'ribbon_name' =>   array ( 'title' => LAN_TITLE, 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'ribbon_description' =>   array ( 'title' => LAN_DESCRIPTION, 'type' => 'textarea', 'data' => 'str', 'width' => '40%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'ribbon_image' =>   array ( 'title' => LAN_IMAGE, 'type' => 'image', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => 'thumb=80x80', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'options' =>   array ( 'title' => LAN_OPTIONS, 'type' => null, 'data' => null, 'width' => '10%', 'thclass' => 'center last', 'class' => 'center last', 'forced' => '1',  ),
		);		
		
		protected $fieldpref = array('ribbon_name', 'ribbon_image');
		
	
		public function init()
		{
			// Set drop-down values (if any). 
	
		}

		
		// ------- Customize Create --------
		
		public function beforeCreate($new_data,$old_data)
		{
			return $new_data;
		}
	
		public function afterCreate($new_data, $old_data, $id)
		{
			// do something
		}

		public function onCreateError($new_data, $old_data)
		{
			// do something		
		}		
		
		
		// ------- Customize Update --------
		
		public function beforeUpdate($new_data, $old_data, $id)
		{
			return $new_data;
		}

		public function afterUpdate($new_data, $old_data, $id)
		{
			// do something	
		}
		
		public function onUpdateError($new_data, $old_data, $id)
		{
			// do something		
		}			
}
				


class ribbons_exesystem_form_ui extends e_admin_form_ui
{

}

class status_exesystem_ui extends e_admin_ui
{
			
		protected $pluginTitle		= 'Status System';
		protected $pluginName		= 'unitexe';
	//	protected $eventName		= 'unitexe-badges_exesystem'; // remove comment to enable event triggers in admin. 		
		protected $table			= 'status_exesystem';
		protected $pid				= 'status_id';
		protected $perPage			= 10; 
		protected $batchDelete		= true;
	//	protected $batchCopy		= true;		
	//	protected $sortField		= 'somefield_order';
	//	protected $orderStep		= 10;
	//	protected $tabs				= array('Tabl 1','Tab 2'); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
	//	protected $listQry      	= "SELECT * FROM `#tableName` WHERE field != '' "; // Example Custom Query. LEFT JOINS allowed. Should be without any Order or Limit.
	
		protected $listOrder		= 'status_id DESC';
	
		protected $fields 		= array (  'checkboxes' =>   array ( 'title' => '', 'type' => null, 'data' => null, 'width' => '5%', 'thclass' => 'center', 'forced' => '1', 'class' => 'center', 'toggle' => 'e-multiselect',  ),
		  'status_id' =>   array ( 'title' => LAN_ID, 'data' => 'int', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'status' =>   array ( 'title' => 'Status', 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'hex_color' =>   array ( 'title' => 'Hex Color (WIP)', 'type' => 'textarea', 'data' => 'str', 'width' => '40%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'options' =>   array ( 'title' => LAN_OPTIONS, 'type' => null, 'data' => null, 'width' => '10%', 'thclass' => 'center last', 'class' => 'center last', 'forced' => '1',  ),
		);		
		
		protected $fieldpref = array('status', 'hex_color');
		
	
		public function init()
		{
			// Set drop-down values (if any). 
	
		}

		
		// ------- Customize Create --------
		
		public function beforeCreate($new_data,$old_data)
		{
			return $new_data;
		}
	
		public function afterCreate($new_data, $old_data, $id)
		{
			// do something
		}

		public function onCreateError($new_data, $old_data)
		{
			// do something		
		}		
		
		
		// ------- Customize Update --------
		
		public function beforeUpdate($new_data, $old_data, $id)
		{
			return $new_data;
		}

		public function afterUpdate($new_data, $old_data, $id)
		{
			// do something	
		}
		
		public function onUpdateError($new_data, $old_data, $id)
		{
			// do something		
		}			
}
				


class status_exesystem_form_ui extends e_admin_form_ui
{

}		
		

				
class training_exesystem_ui extends e_admin_ui
{
			
		protected $pluginTitle		= 'Training System';
		protected $pluginName		= 'unitexe';
	//	protected $eventName		= 'unitexe-training_exesystem'; // remove comment to enable event triggers in admin. 		
		protected $table			= 'training_exesystem';
		protected $pid				= 'train_id';
		protected $perPage			= 10; 
		protected $batchDelete		= true;
	//	protected $batchCopy		= true;		
	//	protected $sortField		= 'somefield_order';
	//	protected $orderStep		= 10;
	//	protected $tabs				= array('Tabl 1','Tab 2'); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
	//	protected $listQry      	= "SELECT * FROM `#tableName` WHERE field != '' "; // Example Custom Query. LEFT JOINS allowed. Should be without any Order or Limit.
	
		protected $listOrder		= 'train_id DESC';
	
		protected $fields 		= array (  'checkboxes' =>   array ( 'title' => '', 'type' => null, 'data' => null, 'width' => '5%', 'thclass' => 'center', 'forced' => '1', 'class' => 'center', 'toggle' => 'e-multiselect',  ),
		  'train_id' =>   array ( 'title' => LAN_ID, 'data' => 'int', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'train_name' =>   array ( 'title' => LAN_TITLE, 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'train_description' =>   array ( 'title' => LAN_DESCRIPTION, 'type' => 'textarea', 'data' => 'str', 'width' => '40%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'train_parent' =>   array ( 'title' => 'Parent', 'type' => 'dropdown', 'data' => 'int', 'width' => 'auto', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'train_sub' =>   array ( 'title' => 'Sub', 'type' => 'dropdown', 'data' => 'int', 'width' => 'auto', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'train_order' =>   array ( 'title' => LAN_ORDER, 'type' => 'number', 'data' => 'int', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'options' =>   array ( 'title' => LAN_OPTIONS, 'type' => null, 'data' => null, 'width' => '10%', 'thclass' => 'center last', 'class' => 'center last', 'forced' => '1',  ),
		);		
		
		protected $fieldpref = array('train_name', 'train_parent', 'train_sub', 'train_order');
		
	
		public function init()
		{
			// Set drop-down values (if any). 
			$this->fields['train_parent']['writeParms']['optArray'] = array('train_parent_0','train_parent_1', 'train_parent_2'); // Example Drop-down array. 
			$this->fields['train_sub']['writeParms']['optArray'] = array('train_sub_0','train_sub_1', 'train_sub_2'); // Example Drop-down array. 
	
		}

		
		// ------- Customize Create --------
		
		public function beforeCreate($new_data,$old_data)
		{
			return $new_data;
		}
	
		public function afterCreate($new_data, $old_data, $id)
		{
			// do something
		}

		public function onCreateError($new_data, $old_data)
		{
			// do something		
		}		
		
		
		// ------- Customize Update --------
		
		public function beforeUpdate($new_data, $old_data, $id)
		{
			return $new_data;
		}

		public function afterUpdate($new_data, $old_data, $id)
		{
			// do something	
		}
		
		public function onUpdateError($new_data, $old_data, $id)
		{
			// do something		
		}		
}
				


class training_exesystem_form_ui extends e_admin_form_ui
{

}


/***********************************
TO DO TO DO TO DO TO DO TO DO TO DO
	UPDATE ADMIN STUFF BELOW
***********************************/
class loa_exesystem_ui extends e_admin_ui
{
			
		protected $pluginTitle		= 'LOA System';
		protected $pluginName		= 'unitexe';
	//	protected $eventName		= 'unitexe-training_exesystem'; // remove comment to enable event triggers in admin. 		
		protected $table			= 'loa_exesystem';
		protected $pid				= 'loa_id';
		protected $perPage			= 10; 
		protected $batchDelete		= true;
	//	protected $batchCopy		= true;		
	//	protected $sortField		= 'somefield_order';
	//	protected $orderStep		= 10;
	//	protected $tabs				= array('Tabl 1','Tab 2'); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
	//	protected $listQry      	= "SELECT * FROM `#tableName` WHERE field != '' "; // Example Custom Query. LEFT JOINS allowed. Should be without any Order or Limit.
	
		protected $listOrder		= 'loa_id DESC';
	
		protected $fields 		= array (  'checkboxes' =>   array ( 'title' => '', 'type' => null, 'data' => null, 'width' => '5%', 'thclass' => 'center', 'forced' => '1', 'class' => 'center', 'toggle' => 'e-multiselect',  ),
		  'loa_id' =>   array ( 'title' => LAN_ID, 'data' => 'int', 'width' => '5%', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
     	  'user_id'  =>   array ( 'title' => 'User', 'type' => 'dropdown', 'data' => 'int', 'width' => '5%', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'created_date' =>   array ( 'title' => 'Creation Date', 'type' => 'datestamp', 'data' => 'int', 'width' => 'auto', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'start_date' =>   array ( 'title' => 'Start Date', 'type' => 'datestamp', 'data' => 'int', 'width' => 'auto', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'end_date' =>   array ( 'title' => 'End Date', 'type' => 'datestamp', 'data' => 'int', 'width' => 'auto', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'approved_date' =>   array ( 'title' => 'Approved Date', 'type' => 'datestamp', 'data' => 'int', 'width' => 'auto', 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'reason' =>   array ( 'title' => 'Reason', 'type' => 'number', 'data' => 'int', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'status_id' =>   array ( 'title' => 'Status', 'type' => 'dropdown', 'data' => 'int', 'width' => '5%', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'returned' =>   array ( 'title' => 'Returned', 'type' => 'text', 'data' => 'int', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'approved_user_id' =>   array ( 'title' => 'Approved By:', 'type' => 'dropdown', 'data' => 'int', 'width' => '5%', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'rocat_id' =>   array ( 'title' => 'Posistion', 'type' => 'dropdown', 'data' => 'int', 'width' => '5%', 'inline' => true, 'help' => '', 'readParms' => '', 'writeParms' => '', 'class' => 'left', 'thclass' => 'left',  ),
		  'options' =>   array ( 'title' => LAN_OPTIONS, 'type' => null, 'data' => null, 'width' => '10%', 'thclass' => 'center last', 'class' => 'center last', 'forced' => '1',  ),
		);		
		
		protected $fieldpref = array();
		
	
		public function init()
		{
			// Set drop-down values (if any). 
			$sql = e107::getDb();
			$this->user_id[0] = 'Select User';
			if($sql->select("user", "*")) { while ($row = $sql->fetch()) {
				$this->user_id[$row['user_id']] = $row['user_name']; } 	} 
        		$this->fields['user_id']['writeParms'] = $this->user_id;
		
			$sql2 = e107::getDb();
			$this->approved_user_id[0] = 'Select User';
			if($sql2->select("user", "*")) { while ($row2 = $sql2->fetch()) {
				$this->approved_user_id[$row2['user_id']] = $row2['user_name']; } 	} 
        		$this->fields['user_id']['writeParms'] = $this->approved_user_id;
			
			$sql3 = e107::getDB();
			$this->rocat_id[0] = 'Select Section';
			if($sql3->select("rostercat_exe", "*")) { while ($row3 = $sql3->fetch()) {
				$this->rocat_id[$row3['rocat_id']] = $row3['rocat_name']; }  }
				$this->fields['rocat_id']['writeParms'] = $this->rocat_id;
			
			$sql4 = e107::getDB();
			$this->status_id[0] = 'Select Status';
			if($sql3->select("status_exesystem", "*")) { while ($row4 = $sql4->fetch()) {
				$this->status_id[$row4['status_id']] = $row4['status']; }  }
				$this->fields['status_id']['writeParms'] = $this->status_id;	
	
		}

		
		// ------- Customize Create --------
		
		public function beforeCreate($new_data,$old_data)
		{
			return $new_data;
		}
	
		public function afterCreate($new_data, $old_data, $id)
		{
			// do something
		}

		public function onCreateError($new_data, $old_data)
		{
			// do something		
		}		
		
		
		// ------- Customize Update --------
		
		public function beforeUpdate($new_data, $old_data, $id)
		{
			return $new_data;
		}

		public function afterUpdate($new_data, $old_data, $id)
		{
			// do something	
		}
		
		public function onUpdateError($new_data, $old_data, $id)
		{
			// do something		
		}					
}
				


class loa_exesystem_form_ui extends e_admin_form_ui
{

}

class pref_exesystem_ui extends e_admin_ui
{
			
		protected $pluginTitle		= 'Unit System';
		protected $pluginName		= 'unitexe';
	//	protected $eventName		= 'unitexe-qualifications_exesystem'; // remove comment to enable event triggers in admin. 		
	//	protected $table			= 'qualifications_exesystem';
	//	protected $pid				= 'qual_id';
	//	protected $perPage			= 10; 
	//	protected $batchDelete		= true;
	//	protected $batchCopy		= true;		
	//	protected $sortField		= 'somefield_order';
	//	protected $orderStep		= 10;
	//	protected $tabs				= array('Tabl 1','Tab 2'); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
	//	protected $listQry      	= "SELECT * FROM `#tableName` WHERE field != '' "; // Example Custom Query. LEFT JOINS allowed. Should be without any Order or Limit.
	
	//	protected $listOrder		= '';
	
	//	protected $fields 		= array ();
		
	//	protected $fieldpref = array('qual_name', 'qual_image');
	
		protected $prefs = array(
			'Enable Awards'		=> array('title'=> 'Enable Awards', 'tab'=>0, 'type'=>'boolean', 'data' => 'str', 'help'=>''),
			'Enable Badges'		=> array('title'=> 'Enable Badges', 'tab'=>0, 'type'=>'boolean', 'data' => 'str', 'help'=>''),
			'Enable Medals'		=> array('title'=> 'Enable Medals', 'tab'=>0, 'type'=>'boolean', 'data' => 'str', 'help'=>''),
			'Enable Patches'		=> array('title'=> 'Enable Patches', 'tab'=>0, 'type'=>'boolean', 'data' => 'str', 'help'=>''),
			'Enable Pins'		=> array('title'=> 'Enable Pins', 'tab'=>0, 'type'=>'boolean', 'data' => 'str', 'help'=>''),
			'Enable Qualifications'		=> array('title'=> 'Enable Qualifications', 'tab'=>0, 'type'=>'boolean', 'data' => 'str', 'help'=>''),
			'Enable Ranks'		=> array('title'=> 'Enable Ranks', 'tab'=>0, 'type'=>'boolean', 'data' => 'str', 'help'=>''),
			'Enable Ribbons'		=> array('title'=> 'Enable Ribbons', 'tab'=>0, 'type'=>'boolean', 'data' => 'str', 'help'=>''),
			'Enable Training'		=> array('title'=> 'Enable Training', 'tab'=>0, 'type'=>'boolean', 'data' => 'str', 'help'=>''),
			'Enable LOA'			=> array('title'=> 'Enable LOA', 'tab'=>0,	'type'=>'boolean', 'data' =>'str', 'help'=>''),
			'Enable Status'			=> array('title'=> 'Enable Status', 'tab'=>0, 'type'=>'boolean', 'data' => 'str', 'help'=>'')
		);		
	
		public function init()
		{
			// Set drop-down values (if any). 
	
		}

		
		// ------- Customize Create --------
		
		public function beforeCreate($new_data,$old_data)
		{
			return $new_data;
		}
	
		public function afterCreate($new_data, $old_data, $id)
		{
			// do something
		}

		public function onCreateError($new_data, $old_data)
		{
			// do something		
		}		
		
		
		// ------- Customize Update --------
		
		public function beforeUpdate($new_data, $old_data, $id)
		{
			return $new_data;
		}

		public function afterUpdate($new_data, $old_data, $id)
		{
			// do something	
		}
		
		public function onUpdateError($new_data, $old_data, $id)
		{
			// do something		
		}		
			
}
				


class pref_exesystem_form_ui extends e_admin_form_ui
{

}				
		
		
new unitexe_adminArea();

require_once(e_ADMIN."auth.php");
e107::getAdminUI()->runPage();

require_once(e_ADMIN."footer.php");
exit;

?>