<?php /* Smarty version 3.1.27, created on 2025-11-04 10:24:50
         compiled from "my:_emailbody_registration" */ ?>
<?php
/*%%SmartyHeaderCode:78538330690a1ac2635ea9_68200425%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '349257fbad92bd38ac33c718b057c126817b92e6' => 
    array (
      0 => 'my:_emailbody_registration',
      1 => 1762269890,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '78538330690a1ac2635ea9_68200425',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_690a1ac2761d04_10599819',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_690a1ac2761d04_10599819')) {
function content_690a1ac2761d04_10599819 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '78538330690a1ac2635ea9_68200425';
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