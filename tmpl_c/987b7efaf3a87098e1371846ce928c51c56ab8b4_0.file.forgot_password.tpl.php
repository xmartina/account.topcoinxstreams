<?php /* Smarty version 3.1.27, created on 2025-11-04 10:22:40
         compiled from "/home/investve/domains/account.topcoinxstreams.com/public_html/tmpl/forgot_password.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1897359614690a1a40b45c65_66525335%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '987b7efaf3a87098e1371846ce928c51c56ab8b4' => 
    array (
      0 => '/home/investve/domains/account.topcoinxstreams.com/public_html/tmpl/forgot_password.tpl',
      1 => 1761190959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1897359614690a1a40b45c65_66525335',
  'variables' => 
  array (
    'errors' => 0,
    'found_records' => 0,
    'frm' => 0,
    'ti' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_690a1a40b8f756_89278279',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_690a1a40b8f756_89278279')) {
function content_690a1a40b8f756_89278279 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/investve/domains/account.topcoinxstreams.com/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '1897359614690a1a40b45c65_66525335';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<?php echo '<script'; ?>
 language=javascript>
function checkform() {
  if (document.forgotform.email.value == '') {
    alert("Please type your username or email!");
    document.forgotform.email.focus();
    return false;
  }
  return true;
}
<?php echo '</script'; ?>
>

<h3>Forgot your password:</h3><br>

<?php if ($_smarty_tpl->tpl_vars['errors']->value['turing_image']) {?>
Invalid turing image<br><br>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['found_records']->value == 2) {?>
Your accound was found. Please check your e-mail address and follow confirm URL to reset your password.
<br><br>
<?php } else { ?>

<?php if ($_smarty_tpl->tpl_vars['found_records']->value == 0) {?>
No accounts found for provided info.
<br><br>
<?php } elseif ($_smarty_tpl->tpl_vars['found_records']->value == 1) {?>
Request was confirmed. Login and password was sent to your email address.
<br><br>
<?php }?>

<form method=post name=forgotform onsubmit="return checkform();">
<input type=hidden name=a value="forgot_password">
<input type=hidden name=action value="forgot_password">
<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Type your username or e-mail:</td>
 <td><input type=text name='email' value="<?php echo smarty_modifier_myescape(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['email'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" class=inpts size=30></td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['ti']->value['check']['forgot_password']) {?>
<tr>
 <td class=menutxt align=right><img src="<?php echo smarty_modifier_myescape(encurl("?a=show_validation_image&".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['name'])."=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['id'])."&rand=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['rand'])));?>
"></td>
 <td><input type=text name=validation_number class=inpts size=15></td>
</tr>
<?php }?>
<tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Forgot" class=sbmt></td>
</tr>
</table>
</form><br><br>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>