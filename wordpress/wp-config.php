<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
if ( isset($_SERVER["CLEARDB_DATABASE_URL"]) ) {

  $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

  /** WordPress のためのデータベース名 */
  define('DB_NAME', substr($url["path"], 1));

  /** MySQL データベースのユーザー名 */
  define('DB_USER', $url["user"]);

  /** MySQL データベースのパスワード */
  define('DB_PASSWORD', $url["pass"]);

  /** MySQL のホスト名 */
  define('DB_HOST', $url["host"]);

} else {

  /** WordPress のためのデータベース名 */
  define('DB_NAME', 'wordpress');

  /** MySQL データベースのユーザー名 */
  define('DB_USER', 'wordpress');

  /** MySQL データベースのパスワード */
  define('DB_PASSWORD', 'secret');

  /** MySQL のホスト名 */
  define('DB_HOST', 'localhost');
}

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         'WA=DIWq7;a$l.ls|kq+Iu;;f2Lihg1`inp.]x^uVZ:wzpoD$VCbPP`f3d4A=ejgb');
define('SECURE_AUTH_KEY',  'q_YG$[x~cm`i;xE1sLz5wG!s|gIhb|HKDu7(=22WI:(=pF$A;.x8Lt`4MNYMps#7');
define('LOGGED_IN_KEY',    ')!fOR%@K!+tAT-BtH^>c[4s8Y|ZexXueF][ %.C_Uh|vay- F~SX$UDb_k`prH8d');
define('NONCE_KEY',        '9@CKp6&yPZu{_{E!6SDC)GsSiIQ-X/z4gk/;qNhnf*n8C_(vTAD. x<NojuD=3~|');
define('AUTH_SALT',        ' p4?j<KwtG.qP~Mg<apIizP 5M/>.JK[`Ld2,ElJ#1|<r::O iR*+G@/n=ScQL79');
define('SECURE_AUTH_SALT', '/U0LQS0s2U}Sde*mX3fSko*#%[MN oAuX;(T+LiZls?.Lb{J>a}GIhXLxk56d-)>');
define('LOGGED_IN_SALT',   'Z:3I<|MQ)*JF$Ve~ tAE( _L>2]tc:Fq0K/g>`|C(V4Mn2#h{/%s1N|-znoornot');
define('NONCE_SALT',       'iX^4uC_Ty[$M>IHT&oonK9Wy-K:-X`:dXi%0KAB#(39ZACR}=G/M;Khza>bk_}C|');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。たとえば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定すると、ドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
