<?php /* Smarty version 3.1.27, created on 2025-11-04 10:23:19
         compiled from "/home/investve/domains/account.topcoinxstreams.com/public_html/tmpl/signup.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1666191392690a1a679480c7_77331309%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a348e7d611dbf4d0c00e1aa7d0534862ef5443df' => 
    array (
      0 => '/home/investve/domains/account.topcoinxstreams.com/public_html/tmpl/signup.tpl',
      1 => 1761190959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1666191392690a1a679480c7_77331309',
  'variables' => 
  array (
    'home_url' => 0,
    'site_url' => 0,
    'settings' => 0,
    'site_name' => 0,
    'site_logo' => 0,
    'deny_registration' => 0,
    'referer' => 0,
    'errors' => 0,
    'error' => 0,
    'frm' => 0,
    'countries' => 0,
    'pay_accounts' => 0,
    'ps' => 0,
    'mpay_accounts' => 0,
    'p' => 0,
    'ti' => 0,
    'login_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_690a1a67a183b3_84520027',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_690a1a67a183b3_84520027')) {
function content_690a1a67a183b3_84520027 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/investve/domains/account.topcoinxstreams.com/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '1666191392690a1a679480c7_77331309';
$_smarty_tpl->tpl_vars['page_name'] = new Smarty_Variable('Register', null, 0);?>
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
 language="javascript">
    function checkform() {
        if (document.regform.fullname.value == '') {
            alert("Please enter your full name!");
            document.regform.fullname.focus();
            return false;
        }
        
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_user_location'] == 1) {?>
        
        if (document.regform.address.value == '') {
            alert("Please enter your address!");
            document.regform.address.focus();
            return false;
        }
        if (document.regform.city.value == '') {
            alert("Please enter your city!");
            document.regform.city.focus();
            return false;
        }
        if (document.regform.state.value == '') {
            alert("Please enter your state!");
            document.regform.state.focus();
            return false;
        }
        if (document.regform.zip.value == '') {
            alert("Please enter your ZIP!");
            document.regform.zip.focus();
            return false;
        }
        if (document.regform.country.options[document.regform.country.selectedIndex].text == '--SELECT--') {
            alert("Please choose your country!");
            document.regform.country.focus();
            return false;
        }
        
        <?php }?>
        
        if (document.regform.username.value == '') {
            alert("Please enter your username!");
            document.regform.username.focus();
            return false;
        }
        if (!document.regform.username.value.match(/^[A-Za-z0-9_\-]+$/)) {
            alert("For username you should use English letters and digits only!");
            document.regform.username.focus();
            return false;
        }
        if (document.regform.password.value == '') {
            alert("Please enter your password!");
            document.regform.password.focus();
            return false;
        }
        if (document.regform.password.value != document.regform.password2.value) {
            alert("Please check your password!");
            document.regform.password2.focus();
            return false;
        }
        
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code']) {?>
        
        if (document.regform.transaction_code.value == '') {
            alert("Please enter your transaction code!");
            document.regform.transaction_code.focus();
            return false;
        }
        if (document.regform.transaction_code.value != document.regform.transaction_code2.value) {
            alert("Please check your transaction code!");
            document.regform.transaction_code2.focus();
            return false;
        }
        
        <?php }?>
        
        if (document.regform.email.value == '') {
            alert("Please enter your e-mail address!");
            document.regform.email.focus();
            return false;
        }
        if (document.regform.email.value != document.regform.email1.value) {
            alert("Please retype your e-mail!");
            document.regform.email.focus();
            return false;
        }

        if (document.regform.agree.checked == false) {
            alert("You have to agree with the Terms and Conditions!");
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
                    <span class="section__cate">Register to Get Started with <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['site_name']->value);?>
</span>
                    <h3 class="section__title">Your ease of mind is our priority</h3>
                    <p>Create your account to start using our services</p>
                    <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['site_url']->value);?>
" class="cmn--btn btn-outline btn-sm mt-3">
                        <i class="las la-angle-left"></i> Back to Home
                    </a>
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
                    <?php if ($_smarty_tpl->tpl_vars['deny_registration']->value) {?>
                        <p>We are closed for new registrations now.</p>
                    <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['use_referal_program'] && $_smarty_tpl->tpl_vars['settings']->value['force_upline'] && !$_smarty_tpl->tpl_vars['referer']->value && !$_smarty_tpl->tpl_vars['settings']->value['get_rand_ref']) {?>
                        <p>You do not have an upline. Our system requires an upline for each user.</p>
                    <?php } else { ?>
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
                        <form class="account-form" method="post" name="regform" onsubmit="return checkform()">
                            <input type="hidden" name="a" value="signup">
                            <input type="hidden" name="action" value="signup">

                            <div class="form--group">
                                <input type="text" name="fullname" value="<?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['frm']->value['fullname']));?>
" class="form-control form--control" id="fullname">
                                <label for="fullname" class="form--label prevent-select">Your Full Name</label>
                            </div>

                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_user_location']) {?>
                                <div class="form--group">
                                    <input type="text" name="address" value="<?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['frm']->value['address']));?>
" class="form-control form--control" id="address">
                                    <label for="address" class="form--label prevent-select">Your Address</label>
                                </div>
                                <div class="form--group">
                                    <input type="text" name="city" value="<?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['frm']->value['city']));?>
" class="form-control form--control" id="city">
                                    <label for="city" class="form--label prevent-select">Your City</label>
                                </div>
                                <div class="form--group">
                                    <input type="text" name="state" value="<?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['frm']->value['state']));?>
" class="form-control form--control" id="state">
                                    <label for="state" class="form--label prevent-select">Your State</label>
                                </div>
                                <div class="form--group">
                                    <input type="text" name="zip" value="<?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['frm']->value['zip']));?>
" class="form-control form--control" id="zip">
                                    <label for="zip" class="form--label prevent-select">Your Zip</label>
                                </div>
                                <div class="form--group">
                                    <select name="country" class="form-control form--control">
                                        <option value="">--SELECT--</option>
                                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['c'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['c']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['name'] = 'c';
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['countries']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total']);
?>
                                            <option value="<?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['countries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['name']));?>
" <?php if ($_smarty_tpl->tpl_vars['countries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['name'] == $_smarty_tpl->tpl_vars['frm']->value['country']) {?>selected<?php }?>><?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['countries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['name']));?>
</option>
                                        <?php endfor; endif; ?>
                                    </select>
                                    <label for="country" class="form--label prevent-select">Your Country</label>
                                </div>
                            <?php }?>

                            <div class="form--group">
                                <input type="text" name="username" value="<?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['frm']->value['username']));?>
" class="form-control form--control" id="username">
                                <label for="username" class="form--label prevent-select">Your Username</label>
                            </div>

                            <div class="form--group">
                                <input type="password" name="password" value="" class="form-control form--control" id="password">
                                <label for="password" class="form--label prevent-select">Define Password</label>
                            </div>

                            <div class="form--group">
                                <input type="password" name="password2" value="" class="form-control form--control" id="password2">
                                <label for="password2" class="form--label prevent-select">Retype Password</label>
                            </div>

                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code']) {?>
                                <div class="form--group">
                                    <input type="password" name="transaction_code" value="" class="form-control form--control" id="transaction_code">
                                    <label for="transaction_code" class="form--label prevent-select">Define Transaction Code</label>
                                </div>

                                <div class="form--group">
                                    <input type="password" name="transaction_code2" value="" class="form-control form--control" id="transaction_code2">
                                    <label for="transaction_code2" class="form--label prevent-select">Retype Transaction Code</label>
                                </div>
                            <?php }?>

                            <?php
$_from = $_smarty_tpl->tpl_vars['pay_accounts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ps'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ps']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ps']->value) {
$_smarty_tpl->tpl_vars['ps']->_loop = true;
$foreach_ps_Sav = $_smarty_tpl->tpl_vars['ps'];
?>
                                <div class="form--group">
                                    <input type="text" name="pay_account[<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['id']);?>
]" value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['account'], ENT_QUOTES, 'UTF-8', true));?>
" class="form-control form--control" data-validate="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['validate']['func']);?>
" data-validate-<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['validate']['func']);?>
="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['validate'][$_smarty_tpl->tpl_vars['ps']->value['validate']['func']]);?>
" data-validate-notice="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['validate']['notification'], ENT_QUOTES, 'UTF-8', true));?>
">
                                    <label for="pay_account[<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['id']);?>
]" class="form--label prevent-select">Your <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['name']);?>
 Account</label>
                                </div>
                            <?php
$_smarty_tpl->tpl_vars['ps'] = $foreach_ps_Sav;
}
?>

                            <?php
$_from = $_smarty_tpl->tpl_vars['mpay_accounts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
                                <?php
$_from = $_smarty_tpl->tpl_vars['p']->value['accounts'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ps'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ps']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ps']->value) {
$_smarty_tpl->tpl_vars['ps']->_loop = true;
$foreach_ps_Sav = $_smarty_tpl->tpl_vars['ps'];
?>
                                    <div class="form--group">
                                        <input type="text" name="pay_account[<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['id']);?>
][<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
]" value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['value'], ENT_QUOTES, 'UTF-8', true));?>
" class="form-control form--control">
                                        <label for="pay_account[<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['id']);?>
][<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
]" class="form--label prevent-select">Your <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['name']);?>
 <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['name']);?>
</label>
                                    </div>
                                <?php
$_smarty_tpl->tpl_vars['ps'] = $foreach_ps_Sav;
}
?>
                            <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>

                            <div class="form--group">
                                <input type="text" name="email" value="<?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['frm']->value['email']));?>
" class="form-control form--control" id="email">
                                <label for="email" class="form--label prevent-select">Your E-mail Address</label>
                            </div>

                            <div class="form--group">
                                <input type="text" name="email1" value="<?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['frm']->value['email1']));?>
" class="form-control form--control" id="email1">
                                <label for="email1" class="form--label prevent-select">Retype Your E-mail</label>
                            </div>

                            <div class="form--group">
                                <input type="text" name="sq" value="<?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['frm']->value['sq']));?>
" class="form-control form--control" id="sq">
                                <label for="sq" class="form--label prevent-select">Secret Question</label>
                            </div>

                            <div class="form--group">
                                <input type="text" name="sa" value="<?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['frm']->value['sa']));?>
" class="form-control form--control" id="sa">
                                <label for="sa" class="form--label prevent-select">Secret Answer</label>
                            </div>

                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_referal_program']) {?>
                                <?php if ($_smarty_tpl->tpl_vars['referer']->value) {?>
                                    <div class="form--group">
                                        <p>Your Upline: <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['referer']->value['name']);?>
 (<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['referer']->value['username']);?>
)</p>
                                    </div>
                                <?php } else { ?>
                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['force_upline']) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['get_rand_ref']) {?>
                                            <div class="form--group">
                                                <p>You do not have an upline. Our system requires an upline for each user. You'll have to agree to get a random one or find a referral link on the net.</p>
                                                <input type="checkbox" name="rand_ref" value="1"> Agree to random upline
                                            </div>
                                        <?php } else { ?>
                                            <div class="form--group">
                                                <p>You do not have an upline. Our system requires an upline for each user.</p>
                                            </div>
                                        <?php }?>
                                    <?php }?>
                                <?php }?>
                            <?php }?>

                            <div class="form--group checkgroup">
                                <div class="form-check">
                                    <input type="checkbox" name="agree" value="1" <?php if ($_smarty_tpl->tpl_vars['frm']->value['agree']) {?>checked<?php }?> class="form-check-input" id="agree">
                                    <label class="form-check-label" for="agree">I agree with <a href="<?php echo smarty_modifier_myescape(encurl("?a=rules"));?>
">Terms and Conditions</a></label>
                                </div>
                            </div>

                            <?php if ($_smarty_tpl->tpl_vars['ti']->value['check']['signup']) {?>
                                <div class="form--group">
                                    <img src="<?php echo smarty_modifier_myescape(encurl("?a=show_validation_image&".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['name'])."=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['id'])."&rand=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['rand'])));?>
">
                                    <input type="text" name="validation_number" class="form-control form--control">
                                </div>
                            <?php }?>

                            <div class="form--group mb-4">
                                <button type="submit" class="cmn--btn w-100 justify-content-center text--white border-0">Register</button>
                            </div>
                            <div class="form--group mb-0 text-center">
                                Already have an account? <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['login_url']->value);?>
" class="text--base">Sign In</a>
                            </div>
                        </form>
                    <?php }?>
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