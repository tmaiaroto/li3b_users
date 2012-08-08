<?php
use lithium\security\Auth;

Auth::config(array(
	'li3b_user' => array(
		'adapter' => 'Form',
		'model'  => '\li3b_users\models\User',
		'fields' => array('email', 'password'),
		'scope'  => array('active' => true),
		/*'filters' => array(
		//'password' => 'app\models\User::hashPassword'
		),*/
		'session' => array(
			'options' => array('name' => 'default')
		)
	)
));

?>