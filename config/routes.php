<?php
use lithium\net\http\Router;
use lithium\core\Environment;
use lithium\action\Dispatcher;

Router::connect("/login", array('library' => 'li3b_users', 'controller' => 'users', 'action' => 'login'));
Router::connect("/logout", array('library' => 'li3b_users', 'controller' => 'users', 'action' => 'logout'));
Router::connect("/register", array('library' => 'li3b_users', 'controller' => 'users', 'action' => 'register'));
?>