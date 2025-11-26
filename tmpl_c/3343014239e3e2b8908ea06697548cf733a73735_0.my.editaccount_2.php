<?php /* Smarty version 3.1.27, created on 2025-10-23 11:56:24
         compiled from "my:editaccount_2" */ ?>
<?php
/*%%SmartyHeaderCode:33086396668fa50289985a4_16555665%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3343014239e3e2b8908ea06697548cf733a73735' => 
    array (
      0 => 'my:editaccount_2',
      1 => 1761234984,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '33086396668fa50289985a4_16555665',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_68fa502899d596_08671477',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_68fa502899d596_08671477')) {
function content_68fa502899d596_08671477 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '33086396668fa50289985a4_16555665';
?>
 <tr> <td>E-mail address:</td> <td><input type=text name=email value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td> </tr><?php }
}
?>