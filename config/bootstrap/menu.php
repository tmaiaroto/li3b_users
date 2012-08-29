<?php
use li3b_core\models\BootstrapMenu as Menu;

Menu::applyFilter('staticMenu',  function($self, $params, $chain) {
	if($params['name'] == 'admin') {
		$self::$staticMenus['admin']['users'] = array(
			'title' => 'Users <b class="caret"></b>',
			'url' => '#',
			'activeIf' => array('library' => 'li3b_users', 'controller' => 'users'),
			'options' => array('escape' => false),
			'subItems' => array(
				array(
					'title' => 'List All',
					'url' => array('library' => 'li3b_users', 'admin' => true, 'controller' => 'users', 'action' => 'index')
				),
				array(
					'title' => 'Create New',
					'url' => array('library' => 'li3b_users', 'admin' => true, 'controller' => 'users', 'action' => 'create')
				)
			)
		);
	}
	
	return $chain->next($self, $params, $chain);
});
?>