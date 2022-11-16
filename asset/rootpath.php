<?php
/** op-app-skeleton-2020-nep:/asset/rootpath.php
 *
 * @created   2022-10-30
 * @version   1.0
 * @package   op-app-skeleton-2020-nep
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 */
namespace OP;

//	__DIR__ is real path. Not alias.
$asset_root = __DIR__.'/';

//	app root
if( $_SERVER['SCRIPT_FILENAME'][0] === '/' ){
	//	Web
	$app_root = $_SERVER['SCRIPT_FILENAME'];
}else{
	//	CLI
	$app_root = realpath($_SERVER['SCRIPT_FILENAME']);
}
$app_root = dirname($app_root);

//	Document root
if(!$_SERVER['DOCUMENT_ROOT'] ){
	$_SERVER['DOCUMENT_ROOT'] = $app_root;
}

//	Entry each root directory.
RootPath('real'     , realpath($app_root)       );
RootPath('doc'      , $_SERVER['DOCUMENT_ROOT'] );
RootPath('app'      , $app_root                 );
RootPath('asset'    , $asset_root               );
RootPath('op'       , $asset_root.'core'        );
RootPath('core'     , $asset_root.'core'        );
RootPath('unit'     , $asset_root.'unit'        );
RootPath('layout'   , $asset_root.'layout'      );
RootPath('template' , $asset_root.'template'    );

//	...
return;

//	Check if symbolic link.
if( is_link($app_root) ){
	// Register real path.
	RootPath('link' , dirname(__DIR__));
}

//	Alias root.
$app_root   = ConvertPath('app:/');
$alias_root = realpath($app_root).'/'; // ConvertPath is automatically add slash to tail.
if( $app_root !== $alias_root ){
	RootPath('alias', $alias_root);
};
