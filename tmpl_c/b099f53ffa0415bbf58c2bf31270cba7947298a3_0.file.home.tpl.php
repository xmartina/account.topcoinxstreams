<?php /* Smarty version 3.1.27, created on 2025-11-04 13:24:11
         compiled from "/home/investve/domains/account.topcoinxstreams.com/public_html/tmpl/home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1821565243690a44cb279651_51808788%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b099f53ffa0415bbf58c2bf31270cba7947298a3' => 
    array (
      0 => '/home/investve/domains/account.topcoinxstreams.com/public_html/tmpl/home.tpl',
      1 => 1761190959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1821565243690a44cb279651_51808788',
  'variables' => 
  array (
    'home_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_690a44cb344793_60935601',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_690a44cb344793_60935601')) {
function content_690a44cb344793_60935601 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/investve/domains/account.topcoinxstreams.com/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '1821565243690a44cb279651_51808788';
$_smarty_tpl->tpl_vars['home_url'] = new Smarty_Variable('https://topcoinxstreams.com/', null, 0);?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Redirecting to Home</title>
    <?php echo '<script'; ?>
>
        window.location.href = "<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['home_url']->value);?>
";
    <?php echo '</script'; ?>
>
</head>
<body>

</body>
</html><?php }
}
?>