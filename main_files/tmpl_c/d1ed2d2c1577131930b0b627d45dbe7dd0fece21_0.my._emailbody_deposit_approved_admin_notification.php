<?php /* Smarty version 3.1.27, created on 2024-01-07 17:42:11
         compiled from "my:_emailbody_deposit_approved_admin_notification" */ ?>
<?php
/*%%SmartyHeaderCode:1341632214659ae273888889_12370071%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1ed2d2c1577131930b0b627d45dbe7dd0fece21' => 
    array (
      0 => 'my:_emailbody_deposit_approved_admin_notification',
      1 => 1704649331,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '1341632214659ae273888889_12370071',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_659ae273889e24_70165411',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_659ae273889e24_70165411')) {
function content_659ae273889e24_70165411 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1341632214659ae273888889_12370071';
?>
Deposit has been approved:

User: #username# (#name#)
Amount: $#amount# of #currency#
Plan: #plan#
Date: #deposit_date#
#fields#<?php }
}
?>