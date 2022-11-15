<?php
/** op-app-skeleton-2020-nep:/asset/app.php
 *
 * @created   2018-03-27
 * @version   1.0
 * @package   op-app-skeleton-2020-nep
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 * @created   2019-02-20
 */
namespace OP;

//	...
try {
	/** Include Application environment config.
	 *
	 * @created   2016-11-22   Creation config.php at app-skeleton.
	 * @updated   2017-??-??   Generate _config.php at app-skeleton2.
	 * @updated   2019-12-16   Rebirth by app-skeleton-2020-nep.
	 * @moved     2019-12-27   app-skeleton-2020-nep:/app.php --> asset/app.php
	 * @moved     2022-10-30   bootstrap.php - Initialize onepiece-framework application.
	 * @added     2022-10-30   rootpath.php
	 */
	foreach([
		'config/php',
		'config/op',
		'bootstrap',
		'rootpath',
		'config',
		'_config',
	] as $file){
		//	Build full path.
		$file = __DIR__.'/'.$file.'.php';

		//	Include file into closure.
		if( file_exists($file) ){
			call_user_func(function($file){
				require_once($file);
			}, $file);
		}
	}

} catch ( \Throwable $e ){
	Notice::Set($e);
	require('bootstrap/op/failed.phtml');
}
