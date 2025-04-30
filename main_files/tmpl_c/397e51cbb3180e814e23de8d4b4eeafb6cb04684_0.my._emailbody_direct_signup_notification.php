<?php /* Smarty version 3.1.27, created on 2024-02-27 17:12:42
         compiled from "my:_emailbody_direct_signup_notification" */ ?>
<?php
/*%%SmartyHeaderCode:147695210165de180ac61232_15912591%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '397e51cbb3180e814e23de8d4b4eeafb6cb04684' => 
    array (
      0 => 'my:_emailbody_direct_signup_notification',
      1 => 1709053962,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '147695210165de180ac61232_15912591',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65de180ac6dd47_31990070',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65de180ac6dd47_31990070')) {
function content_65de180ac6dd47_31990070 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '147695210165de180ac61232_15912591';
?>
Dear #name# (#username#)

You have a new direct signup on #site_name#
User: #ref_username#
Name: #ref_name#
E-mail: #ref_email#

Thank you.<?php }
}
?>