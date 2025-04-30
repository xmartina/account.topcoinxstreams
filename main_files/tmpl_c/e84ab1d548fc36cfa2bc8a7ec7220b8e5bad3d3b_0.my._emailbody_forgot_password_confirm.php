<?php /* Smarty version 3.1.27, created on 2024-02-01 07:26:32
         compiled from "my:_emailbody_forgot_password_confirm" */ ?>
<?php
/*%%SmartyHeaderCode:133598683365bb47a8b16779_99037593%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e84ab1d548fc36cfa2bc8a7ec7220b8e5bad3d3b' => 
    array (
      0 => 'my:_emailbody_forgot_password_confirm',
      1 => 1706772392,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '133598683365bb47a8b16779_99037593',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65bb47a8b293a6_54132686',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65bb47a8b293a6_54132686')) {
function content_65bb47a8b293a6_54132686 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '133598683365bb47a8b16779_99037593';
?>
Hello #name#,

Please confirm your reqest for password reset.

Copy and paste this link to your browser:
#site_url#/?a=forgot_password&action=confirm&c=#confirm_string#

Thank you.
#site_name#<?php }
}
?>