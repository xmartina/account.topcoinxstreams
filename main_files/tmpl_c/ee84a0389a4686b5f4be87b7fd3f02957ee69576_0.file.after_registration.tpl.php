<?php /* Smarty version 3.1.27, created on 2024-02-27 17:12:43
         compiled from "/home/multistream6/domains/capitalcoin.online/public_html/tmpl/after_registration.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:129039851565de180ba31695_64987896%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee84a0389a4686b5f4be87b7fd3f02957ee69576' => 
    array (
      0 => '/home/multistream6/domains/capitalcoin.online/public_html/tmpl/after_registration.tpl',
      1 => 1697208790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129039851565de180ba31695_64987896',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65de180ba40208_85786968',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65de180ba40208_85786968')) {
function content_65de180ba40208_85786968 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '129039851565de180ba31695_64987896';
$_smarty_tpl->tpl_vars['pageName'] = new Smarty_Variable("Registration Completed", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<h3>Registration completed:</h3><br>

Thank you for joining our program.<br>
You are now an official member of this program. You can login to your account to start investing with us and use all the services that are available for our members.
<br>
<br>

<b>Important:</b> Do not provide your login and password to anyone!
<div class="btn py-1 px-4 bg-info text-white">
    <a href="?a=login" class="text-white">
        login
    </a>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>