<?php
/** op-app-skeleton-2020-nep:/ci.php
 *
 * @created   2022-10-09 | op-app-skeleton-2020-nep:/asset/ci.php
 * @moved     2022-10-31 | op-module-develop:/selfcheck/action.php
 * @moved     2022-10-31 | op-app-skeleton-2020-nep:/ci.php
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

/**	Execute time.
 *
 * @created
 * @moved     2019-12-12   asset:/app.php --> app:/app.php
 * @changed   2019-01-03   $st --> _OP_APP_START_
 */
define('_OP_APP_START_', microtime(true));

//	...
$exit = 0;

//	...
try {
	//	...
	include('asset/app.php');

	//	...
	Env::AppID('self-check');

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
		if(!method_exists($obj,'CI') ){
			throw new \Exception("{$class} not use OP_CI.");
		}
		$obj->CI();
	}

} catch ( \Throwable $e ){
	//	...
	$file    = $e->getFile();
	$message = $e->getMessage();
	$file    = OP()->MetaPath()->Encode($file);

	//	...
	echo "\n";
	echo $message."\n\n";
	echo $e->getTraceAsString()."\n\n";
	$exit = __LINE__;
} // catch

//	If display is on.
if( OP()->Request('display') ?? 1 ){
	//	...
	OP()->Sandbox('template:/app.phtml');
} // Execute time, Usage memory

//	exit
exit($exit);
