<?php /* Smarty version 3.1.27, created on 2023-12-11 12:23:11
         compiled from "my:_emailbody_withdraw_user_notification" */ ?>
<?php
/*%%SmartyHeaderCode:4590521026576ff2fe30db5_69910286%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7a7404a6eceba5701abda34f51f9c5dbc4ef702' => 
    array (
      0 => 'my:_emailbody_withdraw_user_notification',
      1 => 1702297391,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '4590521026576ff2fe30db5_69910286',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6576ff2fe32965_71193867',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6576ff2fe32965_71193867')) {
function content_6576ff2fe32965_71193867 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4590521026576ff2fe30db5_69910286';
?>
Hello #name#.

$#amount# has been successfully sent to your #currency# account #account#.
Transaction batch is #batch#.

#site_name#
#site_url#<?php }
}
?>