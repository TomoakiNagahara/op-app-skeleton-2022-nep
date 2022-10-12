<?php
/** op-app-skeleton-2020-nep:/asset/ci.php
 *
 * @created   2022-10-09
 * @version   1.0
 * @package   op-app-skeleton-2020-nep
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 */
namespace OP;

//	...
try {
	//	...
	include_once(__DIR__.'/core/Bootstrap.php');

	//	...
	OP::MetaRoot('asset', __DIR__);

	//	...
	chdir(OP::MetaRoot('op'));

	//	...
	foreach( glob('*.class.php') as $file ){
		//	...
		if( $file[0] === '_' ){
			continue;
		}

		//	...
		$class = 'OP\\'.basename($file, '.class.php');

		//	...
		$obj = new $class();
		$obj->CI();
	}

} catch ( \Throwable $e ){
	$file    = $e->getFile();
	$line    = $e->getLine();
	$message = $e->getMessage();
	$file    = OP::MetaFromPath($file);
	D("{$file} #{$line} : {$message}");
	return false;
}

//	...
return true;
