<?php
use li3b_users\models\Asset;
use lithium\net\http\Router;
use lithium\core\Environment;
use lithium\action\Dispatcher;
use \lithium\action\Response;

Router::connect("/login", array('library' => 'li3b_users', 'controller' => 'users', 'action' => 'login', 'admin' => null));
Router::connect("/logout", array('library' => 'li3b_users', 'controller' => 'users', 'action' => 'logout', 'admin' => null));
Router::connect("/register", array('library' => 'li3b_users', 'controller' => 'users', 'action' => 'register', 'admin' => null));
Router::connect("/settings", array('library' => 'li3b_users', 'controller' => 'users', 'action' => 'update', 'admin' => null));
Router::connect("/profile/{:args}", array('library' => 'li3b_users', 'controller' => 'users', 'action' => 'read', 'args' => array(), 'admin' => null));

// Route for images stored in GridFS.
Router::connect('/profilepic/{:args}.(jpe?g|png|gif)', array(), function($request) {
	$possibleErrors = array('TOO_LARGE', 'INVALID_FILE_TYPE');
	if(!in_array($request->params['args'][0], $possibleErrors)) {
		$image = Asset::find('first', array('conditions' => array('_id' => $request->params['args'][0])));

		if(!$image || !$image->file){
			header("Status: 404 Not Found");
			header("HTTP/1.0 404 Not Found");
			die;
		}

		return new Response(array(
			'headers' => array('Content-type' => $image->contentType),
			'body' => $image->file->getBytes()
		));
	}

	return new Response(array(
		'location' => '/li3b_users/img/default-profile-picture.png'
	));
});

?>