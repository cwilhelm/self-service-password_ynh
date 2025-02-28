<?php

// LDAP Configuration
$ldap_url = 'ldap://localhost';
$ldap_binddn = 'cn=admin,dc=yunohost,dc=org';
$ldap_bindpw = 'admin_password';
$ldap_base = 'dc=yunohost,dc=org';

// Change password settings
$pwd_min_length = 8;
$pwd_max_length = 20;
$pwd_complexity = 1; // 1 = Require uppercase, lowercase, number, special char
$pwd_special_chars = "!@#$%^&*()-_+=";

// Mail settings (optional)
$mail_from = 'noreply@domain.com';
$mail_subject = 'Self-Service Password Reset';

// Debug mode
$debug = false;

?>
