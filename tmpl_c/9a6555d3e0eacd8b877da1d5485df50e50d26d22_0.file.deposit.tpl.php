<?php /* Smarty version 3.1.27, created on 2025-10-25 01:48:44
         compiled from "/home/investve/domains/account.topcoinxstreams.com/public_html/tmpl/deposit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:172652554768fc64bc6ca241_21687148%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a6555d3e0eacd8b877da1d5485df50e50d26d22' => 
    array (
      0 => '/home/investve/domains/account.topcoinxstreams.com/public_html/tmpl/deposit.tpl',
      1 => 1761190959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172652554768fc64bc6ca241_21687148',
  'variables' => 
  array (
    'home_url' => 0,
    'site_url' => 0,
    'fatal' => 0,
    'qplans' => 0,
    'frm' => 0,
    'errors' => 0,
    'currency_sign' => 0,
    'ab_formated' => 0,
    'ps' => 0,
    'hold' => 0,
    'min_deposit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_68fc64bc835195_65684910',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_68fc64bc835195_65684910')) {
function content_68fc64bc835195_65684910 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/investve/domains/account.topcoinxstreams.com/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '172652554768fc64bc6ca241_21687148';
$_smarty_tpl->tpl_vars['page_name'] = new Smarty_Variable('Deposit', null, 0);?>
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



<?php if ($_smarty_tpl->tpl_vars['fatal']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['fatal']->value == 'one_per_month') {?>
        <div class="media align-items-center d-flex justify-content-between alert alert-warn mb-4">
            <div><i class="fas fa-exclamation-triangle"></i> You can deposit once a month only.
            </div>
        </div>
    <?php }?>

<?php } else { ?>


    <?php echo '<script'; ?>
 language="javascript"><!--
        function openCalculator(id) {

            w = 225;
            h = 400;
            t = (screen.height - h - 30) / 2;
            l = (screen.width - w - 30) / 2;
            window.open('?a=calendar&type=' + id, 'calculator' + id, "top=" + t + ",left=" + l + ",width=" + w + ",height=" + h + ",resizable=1,scrollbars=0");

            
            <?php if ($_smarty_tpl->tpl_vars['qplans']->value > 1) {?>
            
            for (i = 0; i < document.spendform.h_id.length; i++) {
                if (document.spendform.h_id[i].value == id) {
                    document.spendform.h_id[i].checked = true;
                }
            }
            
            <?php }?>
            

        }

        function updateCompound() {
            var id = 0;
            var tt = document.spendform.h_id.type;
            if (tt && tt.toLowerCase() == 'hidden') {
                id = document.spendform.h_id.value;
            } else {
                for (i = 0; i < document.spendform.h_id.length; i++) {
                    if (document.spendform.h_id[i].checked) {
                        id = document.spendform.h_id[i].value;
                    }
                }
            }

            var cpObj = document.getElementById('compound_percents');
            if (cpObj) {
                while (cpObj.options.length != 0) {
                    cpObj.options[0] = null;
                }
            }

            if (cps[id] && cps[id].length > 0) {
                document.getElementById('coumpond_block').style.display = '';

                for (i in cps[id]) {
                    cpObj.options[cpObj.options.length] = new Option(cps[id][i]);
                }
            } else {
                document.getElementById('coumpond_block').style.display = 'none';
            }
        }

        var cps = {};
        --><?php echo '</script'; ?>
>


    <?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == 'deposit_success') {?>
        <div class="media align-items-center d-flex justify-content-between alert alert-warn mb-4">
            <div><i class="fas fa-exclamation-triangle h3"></i>The deposit has been successfully saved.
            </div>
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == 'deposit_saved') {?>
        <div class="media align-items-center d-flex justify-content-between alert alert-warn mb-4">
            <div><i class="fas fa-exclamation-triangle h3"></i>The deposit has been saved. It will become active when
                the administrator checks statistics.
            </div>
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['errors']->value['less_min']) {?>
            <div class="media align-items-center d-flex justify-content-between alert alert-danger mb-4">
                <div><i class="fas fa-exclamation-triangle h3"></i>Sorry, you can deposit not less
                    than <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['errors']->value['less_min']);?>
 with selected processing
                </div>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['errors']->value['greater_max']) {?>
            <div class="media align-items-center d-flex justify-content-between alert alert-danger mb-4">
                <div><i class="fas fa-exclamation-triangle h3"></i>Sorry, you can deposit not greater
                    than <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['errors']->value['greater_max']);?>
 with selected processing
                </div>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['errors']->value['ec_forbidden']) {?>
            <div class="media align-items-center d-flex justify-content-between alert alert-danger mb-4">
                <div><i class="fas fa-exclamation-triangle h3"></i>Sorry, deposit with selected processing is temporary
                    forbidden.
                </div>
            </div>
            <br>
            <br>
        <?php }?>
    <?php }?>
    <form method=post name="spendform">
        <input type=hidden name=a value=deposit>
        <?php if ($_smarty_tpl->tpl_vars['qplans']->value > 1) {?> Select a plan:
            <br>
        <?php }?>

        <?php echo $_smarty_tpl->getSubTemplate ("deposit_plans.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


        <table cellspacing=0 cellpadding=2 border=0 class="w-100">
            <tr class="d-flex justify-content-start align-items-center">
                <td class="deposit_info pr-5">Your account balance (<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
):</td>
                <td align=right class="balance_info"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['total']);?>
</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td align=right>
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
 of <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['name']);
if ($_smarty_tpl->tpl_vars['hold']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['amount'] > 0) {?> / <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['hold']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['amount']);?>
 on hold<?php }?>
                                <br>
                            <?php }?>
                        <?php endfor; endif; ?>
                    </small>
                </td>
            </tr>
            <tr class="row w-100 invest_plans align-items-center justify-content-start">
                <td class="col-lg-4 head">Amount to Spend (<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
):</td>
                <td class="col-lg-6 balance_input p-3 rounded"><input type=text name=amount value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['min_deposit']->value);?>
' class='form-input text-danger rounded p-2 w-100' size=15
                                       style="text-align:right;"></td>
            </tr>
            <tr id="coumpond_block" style="display:none">
                <td>Compounding(%):</td>
                <td align=right>
                    <select name="compound" class=inpts id="compound_percents"></select>
                </td>
            </tr>
            <tr class="pt-4 my-4">
                <td colspan=2>
                    <table cellspacing=0 cellpadding=2 border=0 class="spend_from">
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
                            <?php if ($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['balance'] > 0 && $_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['status'] == 1) {?>
                                <tr class="py-4">
                                    <td><input type=radio name=type value="account_<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['id']);?>
"></td>
                                    <td>Spend funds from the Account Balance <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['name']);?>
</td>
                                </tr>
                            <?php }?>
                        <?php endfor; endif; ?>
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
                            <?php if ($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['status']) {?>
                                <tr class="py-3">
                                    <td><input type=radio name=type value="process_<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['id']);?>
"
                                               <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['p']['index'] == 0) {?>checked<?php }?>></td>
                                    <td>Spend funds from <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['name']);?>
</td>
                                </tr>
                            <?php }?>
                        <?php endfor; endif; ?>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan=2 class="py-3"><input type=submit value="Spend" class='form-input btn p-2 bg-warning text-white rounded shadow-sm w-50'></td>
            </tr>
        </table>
    </form>

    <?php echo '<script'; ?>
 language=javascript>
        for (i = 0; i < document.spendform.type.length; i++) {
            if ((document.spendform.type[i].value.match(/^process_/))) {
                document.spendform.type[i].checked = true;
                break;
            }
        }
        updateCompound();
    <?php echo '</script'; ?>
>


<?php }?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("back_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>