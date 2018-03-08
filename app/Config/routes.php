
<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
 
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/view/Pages/home.ctp)...
 */
	Router::connect('/', array(
		'controller' => 'tops', 
		'action'     =>'home'
	));
	Router::connect('/about-us', array(
		'controller' => 'pages', 
		'action'     => 'display', 'about-us'
	));
	Router::connect('/alcaldez', array(
		'controller' => 'pages', 
		'action'     => 'display', 'alcaldez'
	));
	Router::connect('/superadmin/galleries/add', array(
		'controller' => 'galleries', 
		'action'     => 'superadmin_add'
	));
	Router::connect('/superadmin/galleries/', array(
		'controller' => 'galleries', 
		'action'     => 'superadmin_index'
	));
	Router::connect('/superadmin/galleries/edit/*', array(
		'controller' => 'galleries', 
		'action'     => 'superadmin_edit'
	));
	Router::connect('/superadmin/galleries/delete/*', array(
		'controller' => 'galleries', 
		'action'     => 'superadmin_delete'
	));
	Router::connect('/services', array(
		'controller' => 'pages', 
		'action'     => 'display', 'services'
	));
	Router::connect('/government', array(
		'controller' => 'pages', 
		'action'     => 'display', 'government'
	));
	Router::connect('/tourism', array(
		'controller' => 'pages', 
		'action'     => 'display', 'tourism'
	));
	Router::connect('/superadmin/login', array(
		'controller' => 'users', 
		'action'     => 'superadmin_login', 
	));
	Router::connect('/superadmin/logout', array(
		'controller' => 'users', 
		'action'     => 'superadmin_logout', 
	));
	Router::connect('/superadmin/projects/add', array(
		'controller' => 'projects', 
		'action'     => 'superadmin_project_add', 
	));
	Router::connect('/superadmin/projects/list', array(
		'controller' => 'projects', 
		'action'     => 'superadmin_project_list'
	));
	Router::connect('/superadmin/projects/edit/*', array(
		'controller' => 'projects', 
		'action'     => 'superadmin_project_edit'
	));
	Router::connect('/superadmin/projects/delete/*', array(
		'controller' => 'projects', 
		'action'     => 'superadmin_project_delete'
	));
	Router::connect('/admin/about-us/add', array(
		'controller' => 'pages', 
		'action'     => 'display', 'admin_add_aboutus'
	));
	Router::connect('/admin/about-us/list', array(
		'controller' => 'pages', 
		'action'     => 'display', 'admin_list_aboutus'
	));
	Router::connect('/admin/about-us/edit', array(
		'controller' => 'pages', 
		'action'     => 'display', 'admin_edit_aboutus'
	));
	Router::connect('/admin/alcaldez/add', array(
		'controller' => 'pages', 
		'action'     => 'display', 'admin_add_alcaldez'
	));
	Router::connect('/admin/alcaldez/list', array(
		'controller' => 'pages', 
		'action'     => 'display', 'admin_list_alcaldez'
	));
	Router::connect('/admin/alcaldez/edit', array(
		'controller' => 'pages', 
		'action'     => 'display', 'admin_edit_alcaldez'
	));
	Router::connect('/superadmin/mayor/edit', array(
		'controller' => 'governments', 
		'action'     => 'superadmin_edit_mayor'
	));
		
	Router::connect('/superadmin/vicemayor/edit', array(
		'controller' => 'governments', 
		'action'     => 'superadmin_edit_vicemayor'
	));
	Router::connect('/admin/mayor/edit', array('controller' => 'pages', 'action' => 'display', 'admin_edit_mayor'));
	Router::connect('/admin/vice-mayor/edit', array('controller' => 'pages', 'action' => 'display', 'admin_edit_vicemayor'));
	Router::connect('/admin/captain/edit', array('controller' => 'pages', 'action' => 'display', 'admin_edit_captain'));
	Router::connect('/admin/councilor/add', array('controller' => 'pages', 'action' => 'display', 'admin_add_councilor'));
	Router::connect('/admin/government/list', array('controller' => 'pages', 'action' => 'display', 'admin_list_government'));
	Router::connect('/admin/councilor/edit', array('controller' => 'pages', 'action' => 'display', 'admin_edit_government'));
	Router::connect('/admin/tourism/add', array('controller' => 'pages', 'action' => 'display', 'admin_add_tourism'));
	Router::connect('/admin/tourism/list', array('controller' => 'pages', 'action' => 'display', 'admin_list_tourism'));
	Router::connect('/admin/tourism/edit', array('controller' => 'pages', 'action' => 'display', 'admin_edit_tourism'));
	Router::connect('/admin/services/add', array('controller' => 'pages', 'action' => 'display', 'admin_add_services'));
	Router::connect('/admin/services/list', array('controller' => 'pages', 'action' => 'display', 'admin_list_services'));
	Router::connect('/admin/services/edit', array('controller' => 'pages', 'action' => 'display', 'admin_edit_services'));	
	/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
