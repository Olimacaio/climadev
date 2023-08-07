<?php
/**
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link https://wordpress.org/support/article/editing-wp-config-php/ Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro contém as seguintes configurações:
 *
 * * Configurações de  MySQL
 * * Chaves secretas
 * * Prefixo das tabelas da base de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define( 'DB_NAME', 'tesadev_db' );

/** O nome do utilizador de MySQL */
define( 'DB_USER', 'tesadev_user' );

/** A password do utilizador de MySQL  */
define( 'DB_PASSWORD', '$]EA2%$lH,$=' );

/** O nome do serviddor de  MySQL  */
define( 'DB_HOST', 'localhost' );

/** O "Database Charset" a usar na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O "Database Collate type". Se tem dúvidas não mude. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', '}.i3dFf80*#B?uKe`AhO!3OW0#9tC-~LF-V.)W]Cwh0DKk9u`}2<^oIu?_((]$^B' );
define( 'SECURE_AUTH_KEY', 'V0A%iT|up7Z~-x:y[^){ngBL#TN{t+#Fj3L+Q7)^zDi{6Mt%-1]3eeHNCo6|~3<%' );
define( 'LOGGED_IN_KEY', 'GR% AQx_ow_q?lQnT5[ee)@4|cx^xb2ST&6WW`RmEG<uQ},s/`ICZUo3R7[P`hcE' );
define( 'NONCE_KEY', 'WxI`<l~|udz0S-QgzgRQxo30f))yW)s3@b2sD|J]>S(D*e<Z`F9vCdN3]X*1L+dF' );
define( 'AUTH_SALT', '^Mk;T@*a-[3DVzV(|2@Ig576brIc6*?;dLJ7Cx^SX$r-S{MT]RXEmM)2_.wFAJz?' );
define( 'SECURE_AUTH_SALT', 'kW;4_s2ZfmX=J|.1xJchU)`l+q{gK1$?6YN$FFsP_MH|c$cjZh`caEus{|`X}=:]' );
define( 'LOGGED_IN_SALT', 'iIx{PvZ4]EKFU{xD?<q:rpY}1Ro rBYRCj+-_6 ,k-5VSXT|p}F+b$)KG*4/23e%' );
define( 'NONCE_SALT', 'cOT8#B~8NK:gf?~BOkzBv>I<3E6QN/Wk+:76KiySV1YKn%QfmG@Yx68-(#X:[{x<' );

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix = 'dbgit_';

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 *
 * Para mais informações sobre outras constantes que pode usar para debugging,
 * visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once ABSPATH . 'wp-settings.php';
