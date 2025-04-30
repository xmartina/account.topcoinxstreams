<?php /* Smarty version 3.1.27, created on 2024-01-07 17:42:11
         compiled from "my:_emailbody_deposit_approved_user_notification" */ ?>
<?php
/*%%SmartyHeaderCode:318105057659ae2730fcdc2_14911613%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35983f7b6c759107d5fafdc523b2d38f02ca1ac0' => 
    array (
      0 => 'my:_emailbody_deposit_approved_user_notification',
      1 => 1704649331,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '318105057659ae2730fcdc2_14911613',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_659ae2731074d8_99099233',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_659ae2731074d8_99099233')) {
function content_659ae2731074d8_99099233 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '318105057659ae2730fcdc2_14911613';
?>
Dear #name#

Your deposit has been approved:

Amount: $#amount# of #currency#
Plan: #plan#
#fields#<?php }
}
?>