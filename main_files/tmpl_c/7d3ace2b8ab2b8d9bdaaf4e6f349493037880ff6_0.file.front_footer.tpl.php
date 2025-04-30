<?php /* Smarty version 3.1.27, created on 2024-05-13 14:05:04
         compiled from "/home/multistream6/domains/capitalcoin.online/public_html/tmpl/front_footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17884499366421e10c34af0_72577592%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d3ace2b8ab2b8d9bdaaf4e6f349493037880ff6' => 
    array (
      0 => '/home/multistream6/domains/capitalcoin.online/public_html/tmpl/front_footer.tpl',
      1 => 1707989033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17884499366421e10c34af0_72577592',
  'variables' => 
  array (
    'siteLogo' => 0,
    'SiteName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_66421e10c3cf18_40445815',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_66421e10c3cf18_40445815')) {
function content_66421e10c3cf18_40445815 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/multistream6/domains/capitalcoin.online/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '17884499366421e10c34af0_72577592';
?>


<footer class="footer bg-dark is-dark section section-sm" id="footer">
    <div class="container">
        <div class="row g-3 align-items-center">
            <div class="col-md-3">
                <div class="footer-logo">
                    <a href="/" class="logo-link">
                        <img class="logo-light logo-img" src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['siteLogo']->value);?>
" srcset="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['siteLogo']->value);?>
 2x" alt="logo">
                        <img class="logo-dark logo-img" src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['siteLogo']->value);?>
" srcset="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['siteLogo']->value);?>
 2x" alt="logo-dark">
                    </a>
                </div><!-- .footer-logo -->
            </div><!-- .col -->
            <div class="col-md-9 d-flex justify-content-md-end">
                <ul class="link-inline gx-4">
                    <li><a href="#">All Preview</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Doc</a></li>
                    <li><a href="#">Need Help?</a></li>
                </ul><!-- .footer-nav -->
            </div><!-- .col -->
        </div>
        <div class="row g-3 align-items-center pt-4">
            <div class="col-md-8">
                <div class="text-base">&copy; 2023 <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['SiteName']->value);?>
. </div>
            </div><!-- .col -->
            <div class="col-md-4 d-flex justify-content-md-end">
                <ul class="social">
                    <li><a href="#"><em class="icon ni ni-facebook-f"></em></a></li>
                    <li><a href="#"><em class="icon ni ni-instagram"></em></a></li>
                    <li><a href="#"><em class="icon ni ni-twitter"></em></a></li>
                </ul><!-- .footer-icon -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</footer><!-- .footer -->
</div>
<!-- main @e -->
</div>
<!-- app-root @e -->
<!-- JavaScript -->

<?php echo '<script'; ?>
 src="/front_assets/js/bundle.js?ver=3.2.0"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/front_assets/js/scripts.js?ver=3.2.0"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- Tidio -->
<?php echo '<script'; ?>
 src="//code.tidio.co/9lxlzhzkr0fm3os6eejgk86y0dbfmwhs.js" async><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            autoDisplay: 'true',
            layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
        }, 'google_translate_element');
    }
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit'><?php echo '</script'; ?>
>
</body>

</html><?php }
}
?>