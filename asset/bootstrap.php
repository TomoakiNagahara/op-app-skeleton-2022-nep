<?php
/** op-app-skeleton-2020-nep:/asset/bootstrap.php
 *
 * @created   2018-03-27
 * @version   1.0
 * @package   op-app-skeleton-2020-nep
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 * @created   2019-02-23
 */
namespace OP;

//	...
call_user_func(function(){
	try{
		//	Bootstrap the onepiece-framework's core.
		$path = __DIR__.'/core/Bootstrap.php';
		if(!file_exists($path) ){
			require(__DIR__.'/bootstrap/app/gitsubmodule.phtml');
		}
		require($path);

		/** Asset root would including application asset.
		 *  core, unit, template, layout, config
		 *
		 * @updated   2019-12-16   Correspond link.
		 */
		/*
		//	Check if the asset directory is under the app root.
		if( strpos(__DIR__, realpath($app_root)) === 0 ){
			//	The asset directory is under the app root.
			$asset_root = $app_root . '/' . basename(__DIR__);
		}else{
			//	The asset directory is not under the app root.
			$asset_root = __DIR__;
		}
		RootPath('asset', $asset_root);
		*/
		RootPath('asset', __DIR__);

		//	Check if symbolic link.
		if( is_link(rtrim(ConvertPath('app:/'),'/')) ){
			// Register real path.
			RootPath('link' , dirname(__DIR__));
		}

		//	Check mbstring installed.
		if(!function_exists('mb_language') ){
			define('_OP_APP_BOOTSTRAP_', 'mbstring');
			require(__DIR__.'/bootstrap/php/module.phtml');
		}

		//	Check openssl installed.
		if(!defined('OPENSSL_VERSION_NUMBER') ){
			define('_OP_APP_BOOTSTRAP_', 'openssl');
			require(__DIR__.'/bootstrap/php/module.phtml');
		};

		//	Checking rewrite setting.
		if( 'app.php' !== basename($_SERVER['SCRIPT_FILENAME']) ){
			//	Has not been setting rewrite.
			require(__DIR__.'/bootstrap/op/rewrite.php');
		}

	} catch ( \Throwable $e ){
		$file    = $e->getFile();
		$line    = $e->getLine();
		$message = $e->getMessage();
		exit("$file #$line, $message");
	};
});
