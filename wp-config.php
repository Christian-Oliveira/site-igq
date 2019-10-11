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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'bd_igq' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'KD1w<OoHn=5{(xp/4a8Z0lzR<,{1]Za>o+[NUV]])ffw/%py.4xIO=QF7QEqAyIk' );
define( 'SECURE_AUTH_KEY',  '=.r~cmS). *Uf_mv!5f*?u_0lNlR%IRsP{Rai}4=ww|:@JSR%I}YvbX/DHsSvBx/' );
define( 'LOGGED_IN_KEY',    'wi)>+2<%P5:n[Qcc5@^XRJ&&YDXLgeqih7KY;a!:pnxt]|3+~,z0i}e#J)=4.xKb' );
define( 'NONCE_KEY',        's~2 $jxhB0b!AU]Qc>~`GSXpEC~eG{KG`$Fib(=ls>}eh=igSof<!6]j/8GF Bt>' );
define( 'AUTH_SALT',        'PHRyPsgX`[@QP#wR.:{NUD&HSj/W?Rh@](OVIMg}seI z  _Nx7[e]y|B}]I3I,6' );
define( 'SECURE_AUTH_SALT', '52oIL#v:,TAdr7E :8@tQc<O3SUzw3h8KLf<fA~g6LPv5-)KB$7Mtjf9wKRz8WX$' );
define( 'LOGGED_IN_SALT',   'M$2c.>B=6gKa==n]%KdKb*p$E!%#)Baok>_3/`2DcROWN&_J.Ezt&2.~qfe,?W+P' );
define( 'NONCE_SALT',       '12mQMjn?wE-f%H$^l]4uYbn3]>JQTX2j=|En`kDOW]SE1:f0#M|v?]P2_g-~xD.?' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
