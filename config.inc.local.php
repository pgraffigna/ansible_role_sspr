<?php
$debug = false;

// parametros de la conexion a ldap
$ldap_url = "ldap://192.168.121.244";
$ldap_starttls = false;
$ldap_binddn = "cn=admin,dc=cultura,dc=lab";
$ldap_bindpw = "PASSWORD";
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

// habilitar cambio de clave via CORREO
$use_tokens = true;
$crypt_tokens = true;
$token_lifetime = "3600";
$keyphrase = "7rRy0}96#4E7#kzb%:,25X}c&66rU";

// parametros SMTP
$mail_attributes = "mail";

// remitente
$mail_from = "CORREO";
$mail_from_name = "Self Service Password administrator";
$notify_on_change = true;

$mail_sendmailpath = '/usr/sbin/sendmail';
$mail_protocol = 'smtp';
$mail_smtp_debug = 0;
$mail_debug_format = 'html';
$mail_smtp_host = 'SMTP_SERVER';
$mail_smtp_auth = true;
$mail_smtp_user = 'SMTP_USER';
$mail_smtp_pass = 'SMTP_PASS';
$mail_smtp_port = 25;
$mail_smtp_timeout = 30;
$mail_smtp_keepalive = false;
$mail_smtp_autotls = true;
$mail_contenttype = 'text/plain';
$mail_wordwrap = 0;
$mail_charset = 'utf-8';
$mail_priority = 3;
$mail_newline = PHP_EOL;
$reset_request_log = "/var/log/self-service-password";

// cambio de clave via SMS o preguntas
$use_questions = false;
$use_sms = false;

?>
