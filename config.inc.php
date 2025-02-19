<?php
/**
 * Typecho Blog Platform
 *
 * @copyright  Copyright (c) 2008 Typecho team (http://www.typecho.org)
 * @license    GNU General Public License 2.0
 * @version    $Id$
 */
 
/** 开启https */ 
define('__TYPECHO_SECURE__',true);

/** 定义根目录 */
define('__TYPECHO_ROOT_DIR__', dirname(__FILE__));

/** 定义插件目录(相对路径) */
define('__TYPECHO_PLUGIN_DIR__', '/usr/plugins');

/** 定义模板目录(相对路径) */
define('__TYPECHO_THEME_DIR__', '/usr/themes');

/** 后台路径(相对路径) */
define('__TYPECHO_ADMIN_DIR__', '/admin/');

/** 设置包含路径 */
@set_include_path(get_include_path() . PATH_SEPARATOR .
__TYPECHO_ROOT_DIR__ . '/var' . PATH_SEPARATOR .
__TYPECHO_ROOT_DIR__ . __TYPECHO_PLUGIN_DIR__);

/** 载入API支持 */
require_once 'Typecho/Common.php';

/** 程序初始化 */
Typecho_Common::init();

/** 定义数据库参数 */
/** 不用ssl的tls就为空 vercel用ssl连接mysql默认不动 */
$db = new Typecho_Db('Pdo_Mysql', 'typecho_');
$db->addServer(array (
  'host' => 'aws.connect.psdb.cloud',
  'user' => '84priaymubm1p6i91xb2',
  'password' => 'pscale_pw_txOHbmCl2QnmBuwKRhe0ejMYJKtUQNaZENYD90hMfk0',
  'charset' => 'utf8mb4',
  'port' => '3306',
  'database' => 'typecho_on_vercel',
  'engine' => 'InnoDB',
  'tls' => '/etc/pki/tls/certs/ca-bundle.crt'
), Typecho_Db::READ | Typecho_Db::WRITE);
Typecho_Db::set($db);
