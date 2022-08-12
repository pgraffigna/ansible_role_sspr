<?php
$debug = false;

// parametros de la conexion a ldap
$ldap_url = "ldap://192.168.121.244";
$ldap_starttls = false;
$ldap_binddn = "cn=admin,dc=cultura,dc=lab";
$ldap_bindpw = "eteZZisn";
$ldap_base = "dc=cultura,dc=lab";
$ldap_login_attribute = "uid";
$ldap_fullname_attribute = "cn";
$ldap_filter = "(&(objectClass=person)($ldap_login_attribute={login}))";

// politica de credenciales
$pwd_min_length = 12;
$pwd_max_length = 15;
$pwd_min_lower = 1;
$pwd_min_upper = 1;
$pwd_min_digit = 1;
$pwd_min_special = 1;
$pwd_special_chars = "^a-zA-Z0-9";
$pwd_no_reuse = true;
$pwd_diff_login = true;
$pwd_complexity = 1;
$use_pwnedpasswords = false;
$pwd_show_policy = "always";
$pwd_show_policy_pos = "above";

// opciones de cambio de password 
$default_action = "change";
$use_change = true;
$who_change_password = "user";

// misc
$show_help = true;
$lang = "es";
$allowed_lang = array();
$show_menu = true;
$logo = "images/logo.png";
$background_image = "images/unsplash-clouds.jpeg";

// blacklist de caracteres
$login_forbidden_chars = "*()&|";

// mensajes al cambiar contraseña
$messages['passwordchangedextramessage'] = "Tu clave cambio satisfactoriamente!!!!";

// smart debug para la interfaz web
$smarty_debug = true;

// limite de intentos por usuario/ip 
$ratelimit_dbdir = '/tmp';
$max_attempts_per_user = 2;
$max_attempts_per_ip = 2;
$max_attempts_block_seconds = "60";
$client_ip_header = 'REMOTE_ADDR';

// cambio de clave via correo
$use_tokens = true;
$crypt_tokens = true;
$token_lifetime = "3600";
$keyphrase = "7rRy0}96#4E7#kzb%:,25X}c&66rU";

// cambio de clave via SMS o preguntas
$use_questions = false;
$use_sms = false;

?>
