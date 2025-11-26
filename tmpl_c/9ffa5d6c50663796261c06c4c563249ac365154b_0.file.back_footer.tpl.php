<?php /* Smarty version 3.1.27, created on 2025-11-04 10:25:06
         compiled from "/home/investve/domains/account.topcoinxstreams.com/public_html/tmpl/back_footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:693611851690a1ad2e687b9_15102873%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ffa5d6c50663796261c06c4c563249ac365154b' => 
    array (
      0 => '/home/investve/domains/account.topcoinxstreams.com/public_html/tmpl/back_footer.tpl',
      1 => 1761190959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '693611851690a1ad2e687b9_15102873',
  'variables' => 
  array (
    'current_year' => 0,
    'site_name' => 0,
    'external_base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_690a1ad2ebd7a7_32745490',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_690a1ad2ebd7a7_32745490')) {
function content_690a1ad2ebd7a7_32745490 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/investve/domains/account.topcoinxstreams.com/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '693611851690a1ad2e687b9_15102873';
?>
<!-- Footer -->
<footer class="main-footer">
    <div class="footer-left">
        &copy; <?php echo smarty_modifier_myescape((($tmp = @$_smarty_tpl->tpl_vars['current_year']->value)===null||$tmp==='' ? 2024 : $tmp));?>

        <div class="bullet"></div>
        All rights reserved by <b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['site_name']->value);?>
</b>
    </div>
    <div class="footer-right">
        <!-- Footer right content -->
    </div>
</footer>
</div>
</div>

<!-- General JS Scripts -->
<?php echo '<script'; ?>
 src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['external_base_url']->value);?>
assets/dashboard/modules/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['external_base_url']->value);?>
assets/dashboard/modules/popper.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['external_base_url']->value);?>
assets/dashboard/modules/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['external_base_url']->value);?>
assets/dashboard/modules/nicescroll/jquery.nicescroll.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['external_base_url']->value);?>
assets/dashboard/js/stisla.js"><?php echo '</script'; ?>
>

<!-- JS Libraries -->
<?php echo '<script'; ?>
 src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['external_base_url']->value);?>
assets/dashboard/js/pusher.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['external_base_url']->value);?>
assets/dashboard/js/vue.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['external_base_url']->value);?>
assets/dashboard/js/axios.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['external_base_url']->value);?>
assets/dashboard/js/notiflix-aio-2.7.0.min.js"><?php echo '</script'; ?>
>

<!-- Template JS File -->
<?php echo '<script'; ?>
 src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['external_base_url']->value);?>
assets/dashboard/js/scripts.js"><?php echo '</script'; ?>
>

    <!-- JavaScript to set the active class on the current menu item -->
    <?php echo '<script'; ?>
>
        (function() {
            // Get the 'a' parameter from the URL
            var urlParams = new URLSearchParams(window.location.search);
            var currentPage = urlParams.get('a') || 'home'; // default to 'home' if 'a' is not set
            var typeParam = urlParams.get('type');

            // Handle special cases where 'type' parameter is used
            if (currentPage === 'earnings' && typeParam === 'commissions') {
                currentPage = 'earnings_commissions';
            }

            // Get all menu items
            var menuItems = document.querySelectorAll('.sidebar-menu .nav-item');

            // Iterate over menu items
            menuItems.forEach(function(menuItem) {
                var page = menuItem.getAttribute('data-page');
                if (page === currentPage) {
                    menuItem.classList.add('active');
                } else {
                    menuItem.classList.remove('active');
                }
            });
        })();
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        // JavaScript to set the active class on the current menu item
        (function() {
            // Get the 'a' parameter from the URL
            var urlParams = new URLSearchParams(window.location.search);
            var currentPage = urlParams.get('a') || 'dashboard'; // default to 'dashboard' if 'a' is not set

            // Get all menu items
            var menuItems = document.querySelectorAll('.sidebar-menu .nav-item');

            // Iterate over menu items
            menuItems.forEach(function(menuItem) {
                var page = menuItem.getAttribute('data-page');
                if (page === currentPage) {
                    menuItem.classList.add('active');
                } else {
                    menuItem.classList.remove('active');
                }
            });
        })();

        $(document).ready(function () {
            $(document).ajaxStart(function () {
                $('#wait').removeClass('d-none').show();
            });
            $(document).ajaxComplete(function () {
                $('#wait').hide();
            });
        });
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        'use strict';
        let pushNotificationArea = new Vue({
            el: "#pushNotificationArea",
            data: {
                items: [],
            },
            beforeMount() {
                this.getNotifications();
                this.pushNewItem();
            },
            methods: {
                getNotifications() {
                    let app = this;
                    axios.get("{$external_base_url}user/push-notification-show")
                        .then(function (res) {
                            app.items = res.data;
                        })
                },
                readAt(id, link) {
                    let app = this;
                    let url = "{$external_base_url}user/push-notification-readAt/" + id;
                    axios.get(url)
                        .then(function (res) {
                            if (res.status) {
                                app.getNotifications();
                                if (link !== '#') {
                                    window.location.href = link
                                }
                            }
                        })
                },
                readAll() {
                    let app = this;
                    let url = "{$external_base_url}user/push.notification.readAll";
                    axios.get(url)
                        .then(function (res) {
                            if (res.status) {
                                app.items = [];
                            }
                        })
                },
                pushNewItem() {
                    let app = this;
                    Pusher.logToConsole = false;
                    let pusher = new Pusher("your_app_KEY", {
                        encrypted: true,
                        cluster: "ap2"
                    });
                    let channel = pusher.subscribe('user-notification.' + "{$user.id}");
                    channel.bind('App\\Events\\UserNotification', function (data) {
                        app.items.unshift(data.message);
                    });
                    channel.bind('App\\Events\\UpdateUserNotification', function (data) {
                        app.getNotifications();
                    });
                }
            }
        });

        // Global search functionality
        $(document).on('input', '.global-search', function () {
            var search = $(this).val().toLowerCase();

            if (search.length == 0) {
                $('.search-result').find('.content').html('');
                $(this).siblings('.search-backdrop').addClass('d-none');
                $(this).siblings('.search-result').addClass('d-none');
                return false;
            }

            $('.search-result').find('.content').html('');
            $(this).siblings('.search-backdrop').removeClass('d-none');
            $(this).siblings('.search-result').removeClass('d-none');

            var match = $('.sidebar-menu li').filter(function (idx, element) {
                if (!$(element).find('a').hasClass('has-dropdown') && !$(element).hasClass('menu-header'))
                    return $(element).text().trim().toLowerCase().indexOf(search) >= 0 ? element : null;
            }).sort();

            if (match.length == 0) {
                $('.search-result').find('.content').append(`<div class="search-item"><a href="javascript:void(0)">No result found</a></div>`);
                return false;
            }

            match.each(function (index, element) {
                var item_text = $(element).text().replace(/(\d+)/g, '').trim();
                var item_url = $(element).find('a').attr('href');
                if (item_url != '#') {
                    $('.search-result').find('.content').append(`<div class="search-item"><a href="${item_url}">${item_text}</a></div>`);
                }
            });
        });
    <?php echo '</script'; ?>
>


<!-- Additional JS Libraries -->
<?php echo '<script'; ?>
 src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['external_base_url']->value);?>
assets/dashboard/js/Chart.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['external_base_url']->value);?>
assets/dashboard/js/moment.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['external_base_url']->value);?>
assets/dashboard/js/daterangepicker.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['external_base_url']->value);?>
assets/dashboard/js/qrjs2.min.js"><?php echo '</script'; ?>
>


<div style="position: fixed !important; z-index: 12000; bottom: 0;">
    <div id="ytWidget"></div>
    <?php echo '<script'; ?>
 src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&amp;pageLang=en&amp;widgetTheme=dark&amp;autoMode=false" type="text/javascript"><?php echo '</script'; ?>
>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("support_plugin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</body>
</html>
<?php }
}
?>