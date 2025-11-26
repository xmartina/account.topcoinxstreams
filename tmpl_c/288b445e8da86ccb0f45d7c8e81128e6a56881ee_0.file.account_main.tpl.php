<?php /* Smarty version 3.1.27, created on 2025-11-04 10:25:06
         compiled from "/home/investve/domains/account.topcoinxstreams.com/public_html/tmpl/account_main.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1519629161690a1ad2bf7c59_94262035%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '288b445e8da86ccb0f45d7c8e81128e6a56881ee' => 
    array (
      0 => '/home/investve/domains/account.topcoinxstreams.com/public_html/tmpl/account_main.tpl',
      1 => 1761190959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1519629161690a1ad2bf7c59_94262035',
  'variables' => 
  array (
    'home_url' => 0,
    'site_url' => 0,
    'userinfo' => 0,
    'm' => 0,
    'settings' => 0,
    'base_url' => 0,
    'last_access' => 0,
    'quick_links' => 0,
    'link' => 0,
    'currency_sign' => 0,
    'ab_formated' => 0,
    'ps' => 0,
    'last_deposit' => 0,
    'last_deposit_date' => 0,
    'last_withdrawal' => 0,
    'last_withdrawal_date' => 0,
    'wallets' => 0,
    'wallet' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_690a1ad2d96840_72013939',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_690a1ad2d96840_72013939')) {
function content_690a1ad2d96840_72013939 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/investve/domains/account.topcoinxstreams.com/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '1519629161690a1ad2bf7c59_94262035';
$_smarty_tpl->tpl_vars['page_name'] = new Smarty_Variable('Dashboard', null, 0);?>
<?php $_smarty_tpl->tpl_vars['external_base_url'] = new Smarty_Variable("https://qfsholdings.io/", null, 0);?>
<?php $_smarty_tpl->tpl_vars['base_url'] = new Smarty_Variable("https://account.topcoinxstreams.com/", null, 0);?>
<?php $_smarty_tpl->tpl_vars['home_url'] = new Smarty_Variable('https://topcoinxstreams.com/', null, 0);?>
<?php $_smarty_tpl->tpl_vars['site_url'] = new Smarty_Variable('https://account.topcoinxstreams.com/', null, 0);?>
<?php $_smarty_tpl->tpl_vars['site_name'] = new Smarty_Variable('Topcoin Xstreams Investment', null, 0);?>
<?php $_smarty_tpl->tpl_vars["site_logo"] = new Smarty_Variable(((string)$_smarty_tpl->tpl_vars['home_url']->value)."assets/images/logo_dark.png", null, 0);?>
<?php $_smarty_tpl->tpl_vars["registration_url"] = new Smarty_Variable(((string)$_smarty_tpl->tpl_vars['site_url']->value)."?a=signup", null, 0);?>
<?php $_smarty_tpl->tpl_vars["favicon_url"] = new Smarty_Variable(((string)$_smarty_tpl->tpl_vars['home_url']->value)."assets/images/logoIcon/favicon.png", null, 0);?>
<?php $_smarty_tpl->tpl_vars["login_url"] = new Smarty_Variable(((string)$_smarty_tpl->tpl_vars['site_url']->value)."?a=login", null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("back_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<!-- Main Content -->

    <!-- Display User Messages -->
    <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['umessages']) {?>
        <div class="alert alert-info">
            <ul>
                <?php
$_from = $_smarty_tpl->tpl_vars['userinfo']->value['umessages'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['m']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
$foreach_m_Sav = $_smarty_tpl->tpl_vars['m'];
?>
                    <li><?php echo smarty_modifier_myescape(nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['m']->value['text'], ENT_QUOTES, 'UTF-8', true)));?>
</li>
                <?php
$_smarty_tpl->tpl_vars['m'] = $foreach_m_Sav;
}
?>
            </ul>
        </div>
    <?php }?>

    <!-- Note About Transaction Code -->
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code'] == 1 && $_smarty_tpl->tpl_vars['userinfo']->value['transaction_code'] == '') {?>
        <div class="alert alert-warning">
            <b>Note:</b> Currently you have not specified a Transaction code. The Transaction code strengthens your funds security in our system. The code is required to withdraw funds from your account<?php if ($_smarty_tpl->tpl_vars['settings']->value['internal_transfer_enabled']) {?> and for internal transfer to another user account<?php }?>. Just do not change 'Transaction code' in your account information if you do not want to use this feature. <a href="?a=edit_account">Click here</a> to specify a new transaction code.
        </div>
    <?php }?>

    <!-- Main Content -->
    <div class="row">
        <!-- Left Column -->
        <div class="col-lg-12 mb-4 order-0">

            <!-- Welcome Card -->
            <div class="card mb-4">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Welcome <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['name']);?>
! 🎉</h5>
                            <p class="mb-">
                                We are delighted to have you, and we hope you will have a great stay with us!
                            </p>
                            <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['base_url']->value);?>
?a=deposit" class="btn btn-outline-primary">Add Fund</a>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4 text-right">

                        </div>
                    </div>
                </div>
            </div>

            <!-- User Info -->
            <div class="card">
                <div class="card-header"><h5>Your Account Information</h5></div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td>User:</td>
                            <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
</td>
                        </tr>
                        <tr>
                            <td>Registration Date:</td>
                            <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['create_account_date']);?>
</td>
                        </tr>
                        <tr>
                            <td>Last Access:</td>
                            <td><?php echo smarty_modifier_myescape((($tmp = @$_smarty_tpl->tpl_vars['last_access']->value)===null||$tmp==='' ? "n/a" : $tmp));?>
&nbsp;</td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="card">
                <div class="card-header"><h5>Quick Links</h5></div>
                <div class="card-body">
                    <div class="row">
                        <?php
$_from = $_smarty_tpl->tpl_vars['quick_links']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['link'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['link']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
$foreach_link_Sav = $_smarty_tpl->tpl_vars['link'];
?>
                            <div class="col-xl-2 col-lg-4 col-md-3 col-6">
                                <div class="quick-link text-center">
                                    <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['base_url']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['link']->value['url']);?>
" class="btn btn-icon icon-left btn-primary py-3 w-100">
                                        <div class="icon"><i class="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['link']->value['icon']);?>
"></i></div>
                                        <span><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['link']->value['label']);?>
</span>
                                    </a>
                                </div>
                            </div>
                        <?php
$_smarty_tpl->tpl_vars['link'] = $foreach_link_Sav;
}
?>
                    </div>
                </div>
            </div>

            <!-- Balance Related Information Cards -->
            <div class="row gy-5 gx-5 mt-4">
                <!-- Account Balance Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-header"><h5>Account Balance</h5></div>
                        <div class="card-body">
                            <div class="p-3">
                                <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['total']);?>
</b><br>
                                <small>
                                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['p'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['name'] = 'p';
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ps']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total']);
?>
                                        <?php if ($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['balance'] > 0) {
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['balance']);?>
 of <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['name']);?>
<br><?php }?>
                                    <?php endfor; endif; ?>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earned Total Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-header"><h5>Earned Total</h5></div>
                        <div class="card-body">
                            <div class="p-3">
                                <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['earning']);?>
</b><br>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pending Withdrawal Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-header"><h5>Pending Withdrawal</h5></div>
                        <div class="card-body">
                            <div class="p-3">
                                <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['withdraw_pending']);?>
</b><br>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Withdrew Total Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-header"><h5>Withdrew Total</h5></div>
                        <div class="card-body">
                            <div class="p-3">
                                <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['withdrawal']);?>
</b><br>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Active Deposit Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-header"><h5>Active Deposit</h5></div>
                        <div class="card-body">
                            <div class="p-3">
                                <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['active_deposit']);?>
</b><br>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Deposit Card -->
                <?php if ($_smarty_tpl->tpl_vars['ab_formated']->value['deposit'] != 0) {?>
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header"><h5>Total Deposit</h5></div>
                            <div class="card-body">
                                <div class="p-3">
                                    <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['deposit']);?>
</b><br>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>

                <!-- Last Deposit Card -->
                <?php if ($_smarty_tpl->tpl_vars['last_deposit']->value) {?>
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header"><h5>Last Deposit</h5></div>
                            <div class="card-body">
                                <div class="p-3">
                                    <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
<b><?php echo smarty_modifier_myescape((($tmp = @$_smarty_tpl->tpl_vars['last_deposit']->value)===null||$tmp==='' ? "n/a" : $tmp));?>
</b> &nbsp; <small><?php echo smarty_modifier_myescape((($tmp = @$_smarty_tpl->tpl_vars['last_deposit_date']->value)===null||$tmp==='' ? "n/a" : $tmp));?>
</small><br>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>

                <!-- Last Withdrawal Card -->
                <?php if ($_smarty_tpl->tpl_vars['last_withdrawal']->value) {?>
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header"><h5>Last Withdrawal</h5></div>
                            <div class="card-body">
                                <div class="p-3">
                                    <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
<b><?php echo smarty_modifier_myescape((($tmp = @$_smarty_tpl->tpl_vars['last_withdrawal']->value)===null||$tmp==='' ? "n/a" : $tmp));?>
</b> &nbsp; <small><?php echo smarty_modifier_myescape((($tmp = @$_smarty_tpl->tpl_vars['last_withdrawal_date']->value)===null||$tmp==='' ? "n/a" : $tmp));?>
</small><br>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>

        <!-- Right Column -->
        <div class="col-lg-4 col-md-12 order-1">
            <div class="row">
                <!-- Wallet Cards -->
                <?php
$_from = $_smarty_tpl->tpl_vars['wallets']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['wallet'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['wallet']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['wallet']->value) {
$_smarty_tpl->tpl_vars['wallet']->_loop = true;
$foreach_wallet_Sav = $_smarty_tpl->tpl_vars['wallet'];
?>
                    <div class="col-lg-6 col-md-4 col-sm-6">
                        <div class="card wallet-card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar d-flex align-items-center justify-content-center text-white">
                                        <img src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['wallet']->value['logo_url']);?>
" alt="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['wallet']->value['symbol']);?>
">
                                    </div>
                                </div>
                                <span><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['wallet']->value['name']);?>
</span>
                                <h3 class="card-title text-nowrap my-2"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['wallet']->value['symbol']);?>
 <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['wallet']->value['balance']);?>
</h3>
                            </div>
                        </div>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['wallet'] = $foreach_wallet_Sav;
}
?>
            </div>
        </div>
    </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("back_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>