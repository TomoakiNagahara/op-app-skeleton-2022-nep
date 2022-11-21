<?php
/** op-app-skeleton-2020-nep:/cd.php
 *
 * @created   2022-11-21
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
 */
if(!$_SERVER['REQUEST_TIME_FLOAT'] ?? null ){
	$_SERVER['REQUEST_TIME_FLOAT'] = microtime(true);
}

//	MIME
header('Content-Type: text/plain; charset=UTF-8');

//	...
require_once('asset/core/include/json.php');

//	...
if( $account = $_POST['repository']['owner']['login'] ?? $_GET['account'] ?? null ){
	//	...
	if(!apcu_store('account', $account) ){
		echo "Store account is fail. ({$account})\n";
		exit(__LINE__);
	}
}else{
	//	...
	if(!$account = apcu_fetch('account') ){
		echo "Fetch account is fail.\n";
		exit(__LINE__);
	}
}

//	...
echo $account;
