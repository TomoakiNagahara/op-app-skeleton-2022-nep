<?php
/** op-app-skeleton-2020-nep:/asset/ci.php
 *
 * @created   2022-10-09
 * @version   1.0
 * @package   op-app-skeleton-2020-nep
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

 /** Declare strict
 *
 */
declare(strict_types=1);

/** namespace
 *
 */
namespace OP;

//	...
try {
	//	...
	include_once(__DIR__.'/app.php');

	//	Set AppID
	Env::AppID('self-check');

	//	Set asset root.
	RootPath('asset', __DIR__);

	//	...
	chdir( RootPath('op') );

	//	Target can be specified.
	if( $target = OP()->Request('target') ){
		$list = [$target];
	}else{
		$list = glob('*.class.php');
	}

	//	Do each target file.
	foreach( $list as $file ){
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
	//	...
	$file    = $e->getFile();
	$message = $e->getMessage();
	$file    = OP()->MetaPath()->Encode($file);

	//	...
	echo "\n\n";
	echo $message."\n\n";
	echo $e->getTraceAsString()."\n\n";
	return false;
}

//	...
return true;
