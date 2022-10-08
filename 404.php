<?php
/** op-app-skeleton-2020-nep:/404.php
 *
 * @created   2018-10-30
 * @version   1.0
 * @package   op-app-skeleton-2020-nep
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 * @created   2019-02-18
 */
namespace OP;

/* @var $app     UNIT\App     */
/* @var $webpack UNIT\WebPack */

//	Change http status code.
http_response_code(404);

//	...
if( date('m', Env::Time()) == '10' ){
	$path = '404_halloween.phtml';
}else{
	$path = '404_notfound.phtml';
	Unit('WebPack')->Auto( ConvertPath('app:/webpack/css/common/404.css') );
}

//	Display 404 page.
OP::Template($path);

//	404 Error notice.
if( Config::Get('notfound')['execute'] ?? null ){
	Unit('NotFound')->Auto();
}else{
	//	...
	$scheme = $_SERVER['REQUEST_SCHEME'] ?? '(empty)';
	$host   = $_SERVER['HTTP_HOST']      ?? '(empty)';
	$url    = $_SERVER['REQUEST_URI']    ?? '(empty)';
	$url    = $scheme .'://'. $host . $url;

	//	...
	throw new \Exception("404 Not Found Error - $url");
}
