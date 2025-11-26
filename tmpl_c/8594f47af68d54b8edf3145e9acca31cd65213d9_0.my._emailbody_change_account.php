<?php /* Smarty version 3.1.27, created on 2025-10-25 01:53:20
         compiled from "my:_emailbody_change_account" */ ?>
<?php
/*%%SmartyHeaderCode:21591741868fc65d0cf1d35_85668420%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8594f47af68d54b8edf3145e9acca31cd65213d9' => 
    array (
      0 => 'my:_emailbody_change_account',
      1 => 1761371600,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '21591741868fc65d0cf1d35_85668420',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_68fc65d0d04fd1_89402754',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_68fc65d0d04fd1_89402754')) {
function content_68fc65d0d04fd1_89402754 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21591741868fc65d0cf1d35_85668420';
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