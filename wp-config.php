<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'mamangava');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'IGQw%NpPU;f?31BFlo&|vCqBZ5BMziGTR.FOnX2J!co05RF84A,zBzmL2UF2|1i,');
define('SECURE_AUTH_KEY',  'yH%-n~,p|%J[^!BW-brmBX0y~{;7*pNTv4JjY{8.O/d:m}W2g:6;F,+4rZueqU/C');
define('LOGGED_IN_KEY',    'RO$[s{/@BL>Fn^U?z_E;>A87U9BINVvI d;KuLUj+I1=F|k?a2l.uLy]T}1BbvAK');
define('NONCE_KEY',        '[nE6kr-QI&(unY*%YK,8`X<!~Sxi!<&o]I/o3~iC(LKlh*`T>Lps@,= 5Z5%j3.X');
define('AUTH_SALT',        'e,+@R=Xx)U?7B~F=yCs#FM#^jl3!}fdR`J8kd^Gro.]!>:o7E%{EzEL_? ]?#M4#');
define('SECURE_AUTH_SALT', '}08$E1B8`~ 0t~S23w(s_0NJ7w!&V!sps^V^>T<E ~$H(^Cd_uC%Oh(;A7IaJ|# ');
define('LOGGED_IN_SALT',   '65Hm%3LA%+h%*(q?)Jq1OCu9p$_OjHOC9l/RID+GX5`+&Lcm_fdxrQL7`_i|.+?n');
define('NONCE_SALT',       'N]T(S {a0!tG#?q$O;lh0khJ-3Ht6+3`Uza@V!0!`fy>g_TG0!BcW9oc&q6=&mK0');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'mmgv_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
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
