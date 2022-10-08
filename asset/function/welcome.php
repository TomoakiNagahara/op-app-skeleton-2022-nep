<?php
/**
 * op-app-skeleton-2020-nep:/asset/function/welcome.php
 *
 * @created   2019-12-09
 * @version   1.0
 * @package   op-app-skeleton-2020-nep
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 */
namespace OP\APP\FUNC;

/** use
 *
 */
use function OP\ConvertPath;
use function OP\CompressPath;

/** Get link list.
 *
 * @deprecated 2022-10-08 develop only
 * @return    array
 */
function GetLinkList(){
	//	...
	$list   = ['testcase'=>false,'reference'=>false,'develop'=>false];

	//	Get app root.
	$app_root = ConvertPath('app:/');

	//	Save original directory.
	$save_dir = getcwd();

	//	Change app root directory.
	chdir($app_root);

	//	Scan app root.
	foreach( scandir($app_root) as $file ){
		//	Check if link.
		if(!is_link($file)){
			//	Is link.
			continue;
		}

		//	Get real file path.
		$name = realpath($file);

		//	Get real file name.
		$name = basename($name);

		//	Loop at $list keys.
		foreach( array_keys($list) as $key ){
			//	Check if match a part real file name at key. ex: module-testcase-2020
			if( strpos($name, $key) !== false ){
				//	$file is alias file name.
				$list[$key] = $file;
				break;
			}
		};
	}

	//	Change back to original directory.
	chdir($save_dir);

	//	...
	return $list;
}
