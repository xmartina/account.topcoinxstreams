<?php /* Smarty version 3.1.27, created on 2025-11-04 10:24:56
         compiled from "/home/investve/domains/account.topcoinxstreams.com/public_html/tmpl/auth_header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1115433897690a1ac8da7fd2_21032858%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c90ee55bad9a567e24cb749fbc78a4c6f2dcce89' => 
    array (
      0 => '/home/investve/domains/account.topcoinxstreams.com/public_html/tmpl/auth_header.tpl',
      1 => 1761190959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1115433897690a1ac8da7fd2_21032858',
  'variables' => 
  array (
    'settings' => 0,
    'favicon_url' => 0,
    'page_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_690a1ac8db57e8_49145621',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_690a1ac8db57e8_49145621')) {
function content_690a1ac8db57e8_49145621 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/investve/domains/account.topcoinxstreams.com/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '1115433897690a1ac8da7fd2_21032858';
?>
<html class="js flexbox flexboxlegacy csstransitions" lang="en" style="--base-clr: #f47c3c; --base-bg: linear-gradient(170.04deg, #f47c3c -8.91%, #4c1430 99.52%);">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_description']);?>
">
    <link rel="shortcut icon" href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['favicon_url']->value);?>
" type="image/x-icon">
    <link rel="stylesheet" href="https://qfsholdings.io/assets/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://qfsholdings.io/assets/frontend/css/animate.css">
    <link rel="stylesheet" href="https://qfsholdings.io/assets/frontend/css/all.min.css">
    <link rel="stylesheet" href="/assets/frontend/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://qfsholdings.io/assets/frontend/css/lightbox.min.css">
    <link rel="stylesheet" href="https://qfsholdings.io/assets/frontend/css/odometer.css">
    <link rel="stylesheet" href="https://qfsholdings.io/assets/frontend/css/owl.min.css">
    <link rel="stylesheet" href="https://qfsholdings.io/assets/frontend/css/main.css">
    <?php echo '<script'; ?>
 src="https://qfsholdings.io/assets/frontend/js/modernizr.custom.js"><?php echo '</script'; ?>
>
    <title><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['page_name']->value);?>
 | <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
</title>
</head>
<body class="home">
<?php }
}
?>