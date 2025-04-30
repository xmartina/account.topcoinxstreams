<?php /* Smarty version 3.1.27, created on 2023-12-01 15:49:48
         compiled from "my:test_email_template" */ ?>
<?php
/*%%SmartyHeaderCode:1118888572656a009cca2b38_49986102%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd2a6cc1a898a42396acaa93258916f68f8c9731' => 
    array (
      0 => 'my:test_email_template',
      1 => 1701445788,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '1118888572656a009cca2b38_49986102',
  'variables' => 
  array (
    'result' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_656a009ccbf7e6_99178816',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_656a009ccbf7e6_99178816')) {
function content_656a009ccbf7e6_99178816 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1118888572656a009cca2b38_49986102';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header_popup", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php if ($_smarty_tpl->tpl_vars['result']->value['status'] == "success") {?> <div class="alert alert-success">Test Mail has been sent.</div> <?php }?> <?php if ($_smarty_tpl->tpl_vars['result']->value['errors']['text']) {?> <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['result']->value['errors']['text'];?>
</div> <?php }?> <?php if ($_smarty_tpl->tpl_vars['result']->value['errors']['html']) {?> <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['result']->value['errors']['html'];?>
</div> <?php }?> <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer_popup", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>