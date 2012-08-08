<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2011, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace li3b_users\controllers;

/**
 * This extends Lithium Bootstrap's PagesController so that the route for
 * .../plugin/li3_users doesn't end up not found. Create a `home.html.php`
 * template under this library's /views/pages or better yet, under the
 * main app's `/views/_libraries/li3b_users/pages/home.html.php` to customize
 * how the static landing page, so to speak, for the entire library will look.
 */
class PagesController extends \li3b_core\controllers\PagesController {
	
}
?>