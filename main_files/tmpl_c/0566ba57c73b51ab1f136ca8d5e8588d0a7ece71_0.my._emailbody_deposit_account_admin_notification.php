<?php /* Smarty version 3.1.27, created on 2024-01-08 10:32:31
         compiled from "my:_emailbody_deposit_account_admin_notification" */ ?>
<?php
/*%%SmartyHeaderCode:359625519659bcf3f23df10_36438262%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0566ba57c73b51ab1f136ca8d5e8588d0a7ece71' => 
    array (
      0 => 'my:_emailbody_deposit_account_admin_notification',
      1 => 1704709951,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '359625519659bcf3f23df10_36438262',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_659bcf3f23fc71_45047163',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_659bcf3f23fc71_45047163')) {
function content_659bcf3f23fc71_45047163 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '359625519659bcf3f23df10_36438262';
?>
User #username# deposit $#amount# #currency# from account balance to #plan#.

Account: #account#
Batch: #batch#
Compound: #compound#%.
Referrers fee: $#ref_sum#<?php }
}
?>