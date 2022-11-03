<?php
/**
 * app-skeleton-2020-nep:/asset/config/app.php
 *
 * @created   2019-02-20
 * @version   1.0
 * @package   app-skeleton-2020-nep
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** Return config array.
 *
 * @created   2019-12-12
 * @return    array        $config
 */
return [
	'title'     => 'onepiece-framework app skeleton 2020',
	'copyright' => 'Copyright 2009 All right reserved.',
	'app.phtml' =>  OP\Env::isAdmin() ? true: false,
];
