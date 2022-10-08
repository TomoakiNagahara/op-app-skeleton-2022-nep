<?php
/** op-app-skeleton-2020-nep:/index.php
 *
 * @created   2019-02-18
 * @version   1.0
 * @package   op-app-skeleton-2020-nep
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
/* @var $app \OP\UNIT\App */

/** namespace
 *
 */
namespace OP;

 /************************************************/
//	.htaccess file has not been initialized.	//
if( defined('_OP_NAME_SPACE_') === false ){
	include('app.php');
	exit(__FILE__.' #'.__LINE__);
}
//	You should leave this logic. It's for you.	//
/***********************************************/

//	Get SmartURL arguments.
$args = OP::Router()->Args();

//	Does if has arguments?
if( empty($args) ){

	/** Welcome page file is in "asset/template" directory.
	 *
	 */
	OP::Template('welcome.phtml');

}else{

	/** 404.php file is in current directory.
	 *
	 */
	OP::Template('404.php');

}
