<?php
use lithium\net\http\Router;
use lithium\core\Environment;
use lithium\action\Dispatcher;

Router::connect("/login", array('library' => 'li3b_users', 'controller' => 'users', 'action' => 'login', 'admin' => null));
Router::connect("/logout", array('library' => 'li3b_users', 'controller' => 'users', 'action' => 'logout', 'admin' => null));
Router::connect("/register", array('library' => 'li3b_users', 'controller' => 'users', 'action' => 'register', 'admin' => null));
Router::connect("/settings", array('library' => 'li3b_users', 'controller' => 'users', 'action' => 'update', 'admin' => null));
Router::connect("/profile/{:args}", array('library' => 'li3b_users', 'controller' => 'users', 'action' => 'read', 'args' => array(), 'admin' => null));
?>