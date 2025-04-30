<?php /* Smarty version 3.1.27, created on 2024-01-17 18:37:22
         compiled from "my:_emailbody_bonus" */ ?>
<?php
/*%%SmartyHeaderCode:59365572365a81e62435549_37905886%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9facfb8e5558ba6af2671420f60cc1513da744b' => 
    array (
      0 => 'my:_emailbody_bonus',
      1 => 1705516642,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '59365572365a81e62435549_37905886',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65a81e62443316_63044127',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65a81e62443316_63044127')) {
function content_65a81e62443316_63044127 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '59365572365a81e62435549_37905886';
?>
Hello #name#,

You received a bonus: $#amount#
You can check your statistics here:
#site_url#

Good luck.<?php }
}
?>