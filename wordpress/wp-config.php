<?php
/**
 * WordPress基础配置文件。
 *
 * 本文件包含以下配置选项：MySQL设置、数据库表名前缀、密钥、
 * WordPress语言设定以及ABSPATH。如需更多信息，请访问
 * {@link http://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 * 编辑wp-config.php}Codex页面。MySQL设置具体信息请咨询您的空间提供商。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以手动复制这个文件，并重命名为“wp-config.php”，然后填入相关信息。
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'jiexingrui');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', '');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=lsasQho#<Q9!,AU&;%H]3FCF4c7BBtnu%X1elqQ9qm+*l=ZCvuv9h|uIIjZ6-p~');
define('SECURE_AUTH_KEY',  'kA+$e^]nRm5>2q!|;4Ah`2N |,%(n 0sqw(<Mgib.%s~2$I,=[Wh6So6vz>eTP0c');
define('LOGGED_IN_KEY',    'p3xh[_~+Du+o:=zSN-x%_6V4fSuo`6Z4VB+D^0LJj0>;cyz_cvbD[<_o+:{^4+r@');
define('NONCE_KEY',        'nbb!jdt6(4,tpB1q41V#^DU?b3 _slx6e5<+MxD-cXNo01*)]Z#P/:@=Wku,8$Xj');
define('AUTH_SALT',        'v@V:a_9W]NH0L7|x2&o,Y&E1}RIa+jFkpGz=I&&|97z!8FC;g&XyJ|w}Aa|T+Y+5');
define('SECURE_AUTH_SALT', 'O==+*qxU|| a1)5F]Y3eSh&{pvq^Z8HmhQTv%o^KvU~2TPw%;%]8/+5.?g5L_!Dl');
define('LOGGED_IN_SALT',   'IWK-_Sf_g?$%c` noo&:q@fGA$mO&V<XD#/o|:;[W9-#-1|3=~@VpNBnuX+rcYfp');
define('NONCE_SALT',       'L}6:Lf|?]9KnWx1Z2p9.F-DJ)a:bS8<lRFiY[We}GTB#+-:o-2xM#i!Q)|cAQ0+1');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
