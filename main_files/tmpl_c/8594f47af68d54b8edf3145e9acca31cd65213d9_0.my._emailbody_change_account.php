<?php /* Smarty version 3.1.27, created on 2024-01-26 07:26:47
         compiled from "my:_emailbody_change_account" */ ?>
<?php
/*%%SmartyHeaderCode:200941878965b35eb7845364_18759030%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8594f47af68d54b8edf3145e9acca31cd65213d9' => 
    array (
      0 => 'my:_emailbody_change_account',
      1 => 1706254007,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '200941878965b35eb7845364_18759030',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65b35eb78a7d89_53050728',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65b35eb78a7d89_53050728')) {
function content_65b35eb78a7d89_53050728 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '200941878965b35eb7845364_18759030';
?>
Hello #name#,

Your account data has been changed from ip #ip#


New information:

Password: #password#
E-mail address: #email#

Contact us immediately if you did not authorize this change.

Thank you.<?php }
}
?>