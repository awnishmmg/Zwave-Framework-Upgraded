<?php
	
$routes['admin:PartnersController'] = array('edit','view','add','create','procure-numbers','manage-numbers','change-status');
$routes['admin:UploadsController'] = array('view-logs','import','import-settings','misscall-logs');
$routes['admin:ManageMisscallController'] = array('assign-number','assign');
$routes['admin:DashboardController'] = array('main','logout');
$routes['admin:ManageUserController'] = array('add-new','add-new-bdagent','user','bds','delete','bds-delete');
$routes['admin:DepartmentController'] = array('manage','add');
$routes['admin:IntegrationController'] = array('show-api','sms-apiduplicate-removal','create');
$routes['admin:ChatBotController'] = array('add','show-record','create','edit','delete','more','update');
$routes['admin:ChangeLoginController'] = array('user','admin');
$routes['admin:SettingController'] = array('all','create','change');
$routes['admin:ContactsController'] = array('add','manage','create'); 
$routes['admin:ToolsController'] = array('xls-converter','xls-upload','column-removal','xls-process','xls-manage','xls-archive-original','column-removal-upload','columns-process',
	'column-manage','columns-archive-original','duplicate-removal','duplicate-removal-upload','duplicate-process','duplicate-manage','duplicate-archive-original','duplicates-logs-download');
$routes['admin:ToolsCompaignController'] = array('add','manage','create','all-downloads','download-logs');
$routes['admin:ProfileController'] = array('something','index');
$routes['student:LibraryController'] = array('something','jump');
$routes['student:CourseController'] = array('ravi');





