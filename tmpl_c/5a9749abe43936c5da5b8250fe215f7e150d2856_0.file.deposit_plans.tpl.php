<?php /* Smarty version 3.1.27, created on 2025-10-25 01:48:44
         compiled from "/home/investve/domains/account.topcoinxstreams.com/public_html/tmpl/deposit_plans.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:142591746268fc64bc8afc96_98423252%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a9749abe43936c5da5b8250fe215f7e150d2856' => 
    array (
      0 => '/home/investve/domains/account.topcoinxstreams.com/public_html/tmpl/deposit_plans.tpl',
      1 => 1761190959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142591746268fc64bc8afc96_98423252',
  'variables' => 
  array (
    'plans' => 0,
    'qplans' => 0,
    'frm' => 0,
    'compounding_available' => 0,
    'currency_sign' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_68fc64bc935250_69587976',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_68fc64bc935250_69587976')) {
function content_68fc64bc935250_69587976 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/investve/domains/account.topcoinxstreams.com/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '142591746268fc64bc8afc96_98423252';
if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['plans'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['plans']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['name'] = 'plans';
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['plans']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['total']);
?>
    <table cellspacing="1" cellpadding='2' border='0' width='100%'>
        <div class="row mb-3">
            <div class="container-fluid" id="container-wrapper">
                <div class="row justify-content-md-center">
                    <div class="col-md-12">
                        <div class="card mb-4 card-primary shadow">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">
                                    <?php if ($_smarty_tpl->tpl_vars['qplans']->value > 1) {?>
                                        <input type=radio name=h_id
                                               value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['id']);?>
' <?php if ((($_smarty_tpl->getVariable('smarty')->value['section']['plans']['first'] == 1) && ($_smarty_tpl->tpl_vars['frm']->value['h_id'] == '')) || ($_smarty_tpl->tpl_vars['frm']->value['h_id'] == $_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['id'])) {?> checked <?php }?>
                                               onclick="updateCompound()">
                                        <!--	<input type=radio name=h_id value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['id']);?>
' <?php if ((($_smarty_tpl->getVariable('smarty')->value['section']['plans']['first'] == 1) && ($_smarty_tpl->tpl_vars['frm']->value['h_id'] == '')) || ($_smarty_tpl->tpl_vars['frm']->value['h_id'] == $_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['id'])) {?> checked <?php }?> <?php if ($_smarty_tpl->tpl_vars['compounding_available']->value > 0) {?>onclick="document.spendform.compound.disabled=<?php if ($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['use_compound'] == 1) {?>false<?php } else { ?>true<?php }?>;"<?php }?>> -->
                                    <?php } else { ?>
                                        <input type=hidden name=h_id value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['id']);?>
'>
                                    <?php }?> <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['name']);?>

                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>














        <style>
            :root{
                --primary_color:#f47c3c !important;
                --font-size_big:21px !important;
                --font_size_small:15px !important;
                --font_color:#6c757d !important;
            }
            .invest_plans{
                background-color: #fff;
                max-height: 250px;
            }
            .invest_plans .head{
                font-weight: 500;
                font-size: var(--font-size_big);
                color: #f47c3c ;
            }
            hr.pl_line{
                background-color:  ;
                border: 1px solid #f47c3c ;
            }
            .invest_plans .pl_body{
                color: var(--font_color);
                font-size:var(--font_size_small);
            }
            .deposit_info{
                font-size: var(--font-size_big);
                color: var(--primary_color);
            }
            .balance_info{
                font-size: var(--font_size_small);
                color: var(--font_color);
            }
            .balance_input{
                border:1px solid var(--font-color);
            }
            .spend_from td{
                color: var(--primary_color);
                font-size: var(--font_size_small);
            }
            .spend_from input[type='submit']{
                font-size: var(--font_size_small);
                width: 200px;
            }
        </style>
        <div class="row">
            <div class="col-lg-4">
                <div class="invest_plans p-3 rounded shadow-sm">
                    <div class="head mb-2">
                        Plan
                    </div>
                    <hr class="pl_line">
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['options'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['options']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['name'] = 'options';
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['plans']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['options']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['options']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['options']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['options']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['options']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['options']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['total']);
?>
                    <div class="pl_body">
                        <?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['plans'][$_smarty_tpl->getVariable('smarty')->value['section']['options']['index']]['name'], ENT_QUOTES, 'UTF-8', true));?>

                    </div>
                    <?php endfor; endif; ?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="invest_plans p-3 rounded shadow-sm">
                    <div class="head mb-2">
                        Spent Amount (<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
)
                    </div>
                    <hr class="pl_line">
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['options'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['options']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['name'] = 'options';
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['plans']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['options']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['options']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['options']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['options']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['options']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['options']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['total']);
?>
                        <div class="pl_body">
                            <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['plans'][$_smarty_tpl->getVariable('smarty')->value['section']['options']['index']]['deposit']);?>

                        </div>
                    <?php endfor; endif; ?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="invest_plans p-3 rounded shadow-sm">
                    <div class="head mb-2">
                        <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['period']);?>
 Profit (%)
                    </div>
                    <hr class="pl_line">
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['options'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['options']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['name'] = 'options';
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['plans']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['options']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['options']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['options']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['options']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['options']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['options']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['total']);
?>
                        <div class="pl_body">
                            <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['plans'][$_smarty_tpl->getVariable('smarty')->value['section']['options']['index']]['percent']);?>

                        </div>
                    <?php endfor; endif; ?>
                </div>
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_calculator']) {?>
            <tr>
                <td colspan=3 align=right><a href="javascript:openCalculator('<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['id']);?>
')">Calculate
                        your profit &gt;&gt;</a></td>
            </tr>
        <?php }?>
    </table>
    <br>
    <br>
    <?php echo '<script'; ?>
>
        cps[<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['id']);?>
] = <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['compound_percents_json']);?>
;
    <?php echo '</script'; ?>
>
<?php endfor; endif;
}
}
?>