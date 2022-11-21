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

//	...
ob_start();
passthru('sh asset/git/submodule/update.sh');
$result = ob_get_contents();
ob_end_clean();

echo '=============================='.PHP_EOL;
echo $result;
