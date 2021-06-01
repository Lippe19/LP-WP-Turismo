<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'site_btoscountry' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_l]xS=L)5:<Owd XA%,7P4G{{0kcY(GlB]oM=M32-9({(Tt*h-nR#V|7t0G[%_X^' );
define( 'SECURE_AUTH_KEY',  '{q[Te8 ZX?_B=,CRex(X[4!R[TrO$ Yzdp@leBKwlBxlux+L=X O:,]@S4`$0R/$' );
define( 'LOGGED_IN_KEY',    'D=9{R.)=%(JsO!_}fs7A>qIYK}fSB+J7qSZP/hR3vzyi;mE*Gjup*P06y6n.qU?.' );
define( 'NONCE_KEY',        '>7{0I[T/6%sVAQWFgnw!12S|8.MyBOUr/rxSb^Lng^~#qA/b#*Cb+_m9=1LUJ$V!' );
define( 'AUTH_SALT',        'c]yRO+A:SiBIrZ[` hYd&o<y%|_Dz(BE<tCDVn^fxM*>?^:JEnERUo<#2Cbi~3@[' );
define( 'SECURE_AUTH_SALT', '>,gu]+QZ]Vt{^s>5.!*Z/IRI^o3(>^6)2w7H$A;%yX`hC0j?-|I~q]w#V7g5YF=8' );
define( 'LOGGED_IN_SALT',   'Y>g}flihi+{{v-76=;h&$W2JQvY1I9v~Mh*#BO<tC|%{CZ;y,PKSsR7B0$e]2?yP' );
define( 'NONCE_SALT',       'du9ITsR@/ul[[G +Ix{,ib.b9FUcT`arE 4@+c?%A_nEAvP=&**]*aL;krkfx}q}' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
