<?php /* Smarty version 3.1.27, created on 2025-10-24 16:24:54
         compiled from "my:_emailbody_referral_commision_notification" */ ?>
<?php
/*%%SmartyHeaderCode:87036307768fbe0965501b6_23794301%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b22dae1eb645238796be578d1b985550bbf18781' => 
    array (
      0 => 'my:_emailbody_referral_commision_notification',
      1 => 1761337494,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '87036307768fbe0965501b6_23794301',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_68fbe0965612a9_97692669',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_68fbe0965612a9_97692669')) {
function content_68fbe0965612a9_97692669 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '87036307768fbe0965501b6_23794301';
?>
Dear #name# (#username#)

You have received a referral comission of $#amount# #currency# from the #ref_name# (#ref_username#) deposit.

Thank you.<?php }
}
?>