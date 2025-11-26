<?php /* Smarty version 3.1.27, created on 2025-11-04 10:24:52
         compiled from "/home/investve/domains/account.topcoinxstreams.com/public_html/tmpl/after_registration.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2133436440690a1ac47d5741_03083986%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc128b3f0ea838625e68ab1a717dc3f76c8cf705' => 
    array (
      0 => '/home/investve/domains/account.topcoinxstreams.com/public_html/tmpl/after_registration.tpl',
      1 => 1761190959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2133436440690a1ac47d5741_03083986',
  'variables' => 
  array (
    'home_url' => 0,
    'site_url' => 0,
    'site_logo' => 0,
    'site_name' => 0,
    'login_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_690a1ac4906ae3_37406766',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_690a1ac4906ae3_37406766')) {
function content_690a1ac4906ae3_37406766 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/investve/domains/account.topcoinxstreams.com/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '2133436440690a1ac47d5741_03083986';
$_smarty_tpl->tpl_vars['page_name'] = new Smarty_Variable('Registration Completed', null, 0);?>
<?php $_smarty_tpl->tpl_vars['home_url'] = new Smarty_Variable('https://topcoinxstreams.com/', null, 0);?>
<?php $_smarty_tpl->tpl_vars['site_url'] = new Smarty_Variable('https://account.topcoinxstreams.com/', null, 0);?>
<?php $_smarty_tpl->tpl_vars['site_name'] = new Smarty_Variable('Topcoin Xstreams Investment', null, 0);?>
<?php $_smarty_tpl->tpl_vars["site_logo"] = new Smarty_Variable(((string)$_smarty_tpl->tpl_vars['home_url']->value)."assets/images/logo_dark.png", null, 0);?>
<?php $_smarty_tpl->tpl_vars["registration_url"] = new Smarty_Variable(((string)$_smarty_tpl->tpl_vars['site_url']->value)."?a=signup", null, 0);?>
<?php $_smarty_tpl->tpl_vars["favicon_url"] = new Smarty_Variable(((string)$_smarty_tpl->tpl_vars['home_url']->value)."assets/images/logoIcon/favicon.png", null, 0);?>
<?php $_smarty_tpl->tpl_vars["login_url"] = new Smarty_Variable(((string)$_smarty_tpl->tpl_vars['site_url']->value)."?a=login", null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("auth_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<section class="account-section bg--title" style="border-bottom: 1px solid #5f5f5f">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-8 col-xxl-6">
                <div class="account__wrapper bg--body">
                    <div class="account-logo text-center mb-4">
                        <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['home_url']->value);?>
">
                            <img src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['site_logo']->value);?>
" alt="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['site_name']->value);?>
">
                        </a>
                    </div>
                    <div class="card text-center">
                        <div class="card-body">
                            <h3 class="card-title">Registration Completed</h3>
                            <p class="card-text">
                                Thank you for joining our program.<br>
                                You are now an official member of this program. You can login to your account to start investing with us and use all the services that are available for our members.
                            </p>
                            <p class="card-text">
                                <strong>Important:</strong> Do not provide your login and password to anyone!
                            </p>
                            <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['login_url']->value);?>
" class="cmn--btn w-100 justify-content-center text--white border-0">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("auth_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>