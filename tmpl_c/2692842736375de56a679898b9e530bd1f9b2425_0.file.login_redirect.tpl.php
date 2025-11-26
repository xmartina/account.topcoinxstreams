<?php /* Smarty version 3.1.27, created on 2025-11-04 10:25:04
         compiled from "/home/investve/domains/account.topcoinxstreams.com/public_html/tmpl/login_redirect.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1077502505690a1ad00ac239_39127804%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2692842736375de56a679898b9e530bd1f9b2425' => 
    array (
      0 => '/home/investve/domains/account.topcoinxstreams.com/public_html/tmpl/login_redirect.tpl',
      1 => 1761190959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1077502505690a1ad00ac239_39127804',
  'variables' => 
  array (
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_690a1ad0115963_85259907',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_690a1ad0115963_85259907')) {
function content_690a1ad0115963_85259907 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/investve/domains/account.topcoinxstreams.com/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '1077502505690a1ad00ac239_39127804';
?>
<html>
<head>
<META HTTP-EQUIV=Refresh CONTENT="0; URL=<?php echo smarty_modifier_myescape(encurl("?a=account"));?>
">
</head>
<body>
<center>
Hello <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
. You are redirecting to your 
<a href=?a=account>account</a> now.
<body>
</html><?php }
}
?>