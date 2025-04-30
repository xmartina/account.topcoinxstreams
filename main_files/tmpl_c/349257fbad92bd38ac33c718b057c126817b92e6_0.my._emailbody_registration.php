<?php /* Smarty version 3.1.27, created on 2024-02-27 17:12:43
         compiled from "my:_emailbody_registration" */ ?>
<?php
/*%%SmartyHeaderCode:181461899065de180b1e0969_42890700%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '349257fbad92bd38ac33c718b057c126817b92e6' => 
    array (
      0 => 'my:_emailbody_registration',
      1 => 1709053963,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '181461899065de180b1e0969_42890700',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65de180b1e1da6_92892760',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65de180b1e1da6_92892760')) {
function content_65de180b1e1da6_92892760 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '181461899065de180b1e0969_42890700';
?>
Hello #name#,

Thank you for registration on our site.

Your login information:

Login: #username#
Password: #password#

You can login here: #site_url#

Contact us immediately if you did not authorize this registration.

Thank you.<?php }
}
?>