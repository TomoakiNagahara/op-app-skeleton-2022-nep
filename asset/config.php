<?php
/** op-app-skeleton-2020-nep:/config.php
 *
 * @created   2019-04-09   asset:/config/app.php
 * @moved     2019-11-20   asset:/config/app.php --> asset:/config/env.php
 * @moved     2019-12-12   asset:/config/env.php --> asset:/config.php
 * @moved     2019-12-12   asset:/config.php     --> app:/config.php
 * @version   1.0
 * @package   op-app-skeleton-2020-nep
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

 /** namespace
 *
 * @created   2019-04-09
 */
namespace OP;

/*
//	Seed
$seed = __FILE__;

//	Calc App ID.
$app_id = substr(md5($seed), 0, 8);

//	Set App ID.
Env::AppID($app_id);
*/

//	Get admin config.
$config = Config::Get('admin');

//	Set Admin IP-Address and Admin E-Mail Address.
foreach( [Env::_ADMIN_IP_, Env::_ADMIN_MAIL_] as $key ){
	//	...
	if(!$config[$key] ?? null ){
		include(__DIR__.'/bootstrap/app/config-admin.phtml');
		exit;
	}
}
