<?php /* Smarty version 3.1.27, created on 2023-12-11 12:23:12
         compiled from "my:_emailbody_withdraw_admin_notification" */ ?>
<?php
/*%%SmartyHeaderCode:269179016576ff30035926_25078634%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce68560a47afc22233eb2c1078a7db9d7c45a618' => 
    array (
      0 => 'my:_emailbody_withdraw_admin_notification',
      1 => 1702297392,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '269179016576ff30035926_25078634',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6576ff300373d4_59203223',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6576ff300373d4_59203223')) {
function content_6576ff300373d4_59203223 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '269179016576ff30035926_25078634';
?>
User #username# received $#amount# to #currency# account #account#. Batch is #batch#.<?php }
}
?>