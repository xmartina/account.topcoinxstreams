<?php /* Smarty version 3.1.27, created on 2024-01-08 10:32:30
         compiled from "my:_emailbody_referral_commision_notification" */ ?>
<?php
/*%%SmartyHeaderCode:719687376659bcf3eba11c6_90376402%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b22dae1eb645238796be578d1b985550bbf18781' => 
    array (
      0 => 'my:_emailbody_referral_commision_notification',
      1 => 1704709950,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '719687376659bcf3eba11c6_90376402',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_659bcf3ebb1c91_26840494',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_659bcf3ebb1c91_26840494')) {
function content_659bcf3ebb1c91_26840494 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '719687376659bcf3eba11c6_90376402';
?>
Dear #name# (#username#)

You have received a referral comission of $#amount# #currency# from the #ref_name# (#ref_username#) deposit.

Thank you.<?php }
}
?>