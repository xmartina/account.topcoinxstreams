<?php /* Smarty version 3.1.27, created on 2025-11-04 10:24:56
         compiled from "/home/investve/domains/account.topcoinxstreams.com/public_html/tmpl/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1210080072690a1ac8bf6a50_01685830%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8eb5cec3f4c01a12300fd1380f480a97ff31ad61' => 
    array (
      0 => '/home/investve/domains/account.topcoinxstreams.com/public_html/tmpl/login.tpl',
      1 => 1761190959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1210080072690a1ac8bf6a50_01685830',
  'variables' => 
  array (
    'home_url' => 0,
    'site_url' => 0,
    'site_name' => 0,
    'site_logo' => 0,
    'frm' => 0,
    'errors' => 0,
    'error' => 0,
    'ti' => 0,
    'registration_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_690a1ac8d9a6f2_81241333',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_690a1ac8d9a6f2_81241333')) {
function content_690a1ac8d9a6f2_81241333 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/investve/domains/account.topcoinxstreams.com/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '1210080072690a1ac8bf6a50_01685830';
$_smarty_tpl->tpl_vars['page_name'] = new Smarty_Variable('Login', null, 0);?>
<?php $_smarty_tpl->tpl_vars['home_url'] = new Smarty_Variable('https://topcoinxstreams.com/', null, 0);?>
<?php $_smarty_tpl->tpl_vars['site_url'] = new Smarty_Variable('https://account.topcoinxstreams.com/', null, 0);?>
<?php $_smarty_tpl->tpl_vars['site_name'] = new Smarty_Variable('Topcoin Xstreams Investment', null, 0);?>
<?php $_smarty_tpl->tpl_vars["site_logo"] = new Smarty_Variable(((string)$_smarty_tpl->tpl_vars['home_url']->value)."assets/images/logo_dark.png", null, 0);?>
<?php $_smarty_tpl->tpl_vars["registration_url"] = new Smarty_Variable(((string)$_smarty_tpl->tpl_vars['site_url']->value)."?a=signup", null, 0);?>
<?php $_smarty_tpl->tpl_vars["favicon_url"] = new Smarty_Variable(((string)$_smarty_tpl->tpl_vars['home_url']->value)."assets/images/logoIcon/favicon.png", null, 0);?>
<?php $_smarty_tpl->tpl_vars["login_url"] = new Smarty_Variable(((string)$_smarty_tpl->tpl_vars['site_url']->value)."?a=login", null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("auth_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <?php echo '<script'; ?>
 language=javascript>
        function checkform() {
            if (document.mainform.username.value=='') {
                alert("Please type your username!");
                document.mainform.username.focus();
                return false;
            }
            if (document.mainform.password.value=='') {
                alert("Please type your password!");
                document.mainform.password.focus();
                return false;
            }
            return true;
        }
    <?php echo '</script'; ?>
>


<section class="account-section bg--title" style="border-bottom: 1px solid #5f5f5f">
    <div class="container">
        <div class="row justify-content-center flex-wrap-reverse gy-4 align-items-center">
            <div class="col-lg-6 col-xl-5 col-xxl-4">
                <div class="section__title text--white text-center text-lg-start">
                    <span class="section__cate">Login to Get Started with <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['site_name']->value);?>
</span>
                    <h3 class="section__title">Your ease of mind is our priority</h3>
                    <p>Login into your account with your username and password</p>
                    <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['site_url']->value);?>
" class="cmn--btn btn-outline btn-sm mt-3"><i class="las la-angle-left"></i>Back to Home</a>
                </div>
            </div>
            <div class="col-lg-6 col-xxl-5">
                <div class="account__wrapper bg--body">
                    <div class="account-logo">
                        <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['home_url']->value);?>
">
                            <img src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['site_logo']->value);?>
" alt="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['site_name']->value);?>
">
                        </a>
                    </div>
                    <form class="account-form" method=post name=mainform onsubmit="return checkform()">
                        <input type=hidden name=a value='do_login'>
                        <input type=hidden name=follow value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['frm']->value['follow']);?>
'>
                        <input type=hidden name=follow_id value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['frm']->value['follow_id']);?>
'>
                        <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
                            <ul style="color:red">
                                <?php
$_from = $_smarty_tpl->tpl_vars['errors']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['error'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['error']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
$foreach_error_Sav = $_smarty_tpl->tpl_vars['error'];
?>
                                    <li><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['error']->value);?>
</li>
                                <?php
$_smarty_tpl->tpl_vars['error'] = $foreach_error_Sav;
}
?>
                            </ul>
                        <?php }?>
                        <div class="form--group">
                            <input type="text" name=username value='<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['username'], ENT_QUOTES, 'UTF-8', true));?>
' class="form-control form--control" id="username">
                            <label for="identity" class="form--label prevent-select">Username </label>
                        </div>
                        <div class="form--group">
                            <input type="password" name="password" value='' class="form-control form--control" id="password">
                            <label for="password" class="form--label prevent-select">Password</label>
                        </div>
                        <div class="form--group checkgroup d-flex flex-row justify-content-between">
                            <?php if ($_smarty_tpl->tpl_vars['ti']->value['check']['login']) {?>
                                <tr>
                                    <td class=menutxt><img src="<?php echo smarty_modifier_myescape(encurl("?a=show_validation_image&".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['name'])."=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['id'])."&rand=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['rand'])));?>
"></td>
                                    <td><input type=text name=validation_number class=inpts size=30></td>
                                </tr>
                            <?php }?>
                            <div class="form-check">
                                <input class="form-check-input form--check-input" type="checkbox" id="check1">
                                <label class="form-check-label" for="check1">Remember Me</label>
                            </div>
                            <div>
                                <a href="<?php echo smarty_modifier_myescape(encurl("?a=forgot_password"));?>
" class="text--base">Forgot Your Password?</a>
                            </div>
                        </div>
                        <div class="form--group mb-4">
                            <button type=submit value="Login" class="cmn--btn w-100 justify-content-center text--white border-0">Sign In</button>
                        </div>
                        <div class="form--group mb-0 text-center">
                            Don't have an account? <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['registration_url']->value);?>
" class="text--base">Sign Up</a>
                        </div>
                    </form>
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