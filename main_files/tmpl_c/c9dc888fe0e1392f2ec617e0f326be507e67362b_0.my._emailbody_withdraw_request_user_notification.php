<?php /* Smarty version 3.1.27, created on 2024-01-14 17:09:16
         compiled from "my:_emailbody_withdraw_request_user_notification" */ ?>
<?php
/*%%SmartyHeaderCode:61724321965a4153c96b885_78714289%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9dc888fe0e1392f2ec617e0f326be507e67362b' => 
    array (
      0 => 'my:_emailbody_withdraw_request_user_notification',
      1 => 1705252156,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '61724321965a4153c96b885_78714289',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65a4153c979761_59518311',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65a4153c979761_59518311')) {
function content_65a4153c979761_59518311 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '61724321965a4153c96b885_78714289';
?>
Hello #name#,


You have requested to withdraw $#amount#.
Request IP address is #ip#.


Thank you.
#site_name#
#site_url#<?php }
}
?>