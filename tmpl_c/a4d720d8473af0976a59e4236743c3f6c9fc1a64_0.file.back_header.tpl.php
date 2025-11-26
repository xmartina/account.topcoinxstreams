<?php /* Smarty version 3.1.27, created on 2025-11-04 10:25:06
         compiled from "/home/investve/domains/account.topcoinxstreams.com/public_html/tmpl/back_header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1583916509690a1ad2ddec74_99962742%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4d720d8473af0976a59e4236743c3f6c9fc1a64' => 
    array (
      0 => '/home/investve/domains/account.topcoinxstreams.com/public_html/tmpl/back_header.tpl',
      1 => 1761190959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1583916509690a1ad2ddec74_99962742',
  'variables' => 
  array (
    'page_name' => 0,
    'site_name' => 0,
    'external_base_url' => 0,
    'favicon_url' => 0,
    'userinfo' => 0,
    'base_url' => 0,
    'site_logo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_690a1ad2e55c52_18269306',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_690a1ad2e55c52_18269306')) {
function content_690a1ad2e55c52_18269306 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/investve/domains/account.topcoinxstreams.com/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '1583916509690a1ad2ddec74_99962742';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['page_name']->value);?>
 | <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['site_name']->value);?>
 | </title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['external_base_url']->value);?>
assets/dashboard/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['external_base_url']->value);?>
assets/dashboard/modules/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['external_base_url']->value);?>
assets/dashboard/css/style.css">
    <link rel="stylesheet" href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['external_base_url']->value);?>
assets/dashboard/css/components.css">

    <link rel="stylesheet" type="text/css" href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['external_base_url']->value);?>
assets/dashboard/css/daterangepicker.css">

    <!-- site_icon -->
    <link rel="shortcut icon" href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['favicon_url']->value);?>
" type="image/x-icon">

    <!-- Additional Styles -->
    <style type="text/css">
        /* Your custom styles here */
        
        @-webkit-keyframes yt-spin {
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }
        }
        @keyframes yt-spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        #yt-widget, #yt-widget * {
            font: 14px Arial, Helvetica, sans-serif;
            background: none;
            border: none;
        }

        #yt-widget .yt-button {
            height: 34px;
            border: 1px solid #d5d5d5;
            padding: 0 8px;
            border-radius: 3px;
        }

        #yt-widget .yt-button__icon {
            width: 34px;
            height: 34px;
            /*background: url("your_image_url_here") no-repeat;*/
        }
        
        .main-sidebar .sidebar-menu li.active a {
            color: #f47c3c;
            font-weight: 600;
            background-color: #fcfcfd;
        }
    </style>
</head>

<body class="sidebar-gone">
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <!-- Top Navbar -->
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <!-- Search -->
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                </ul>
                <div class="search-element">
                    <input class="form-control global-search" type="search" placeholder="Search" aria-label="Search" data-width="250">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>

            <!-- Navbar Right -->
            <ul class="navbar-nav navbar-right">
                <!-- Notifications -->
                <li id="pushNotificationArea" class="dropdown dropdown-list-toggle">
                    <a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg">
                        <i class="far fa-bell"></i>
                    </a>
                    <div class="dropdown-menu dropdown-list dropdown-menu-right shadow">
                        <div class="dropdown-header text-center text-uppercase">Notifications</div>
                        <div class="notification-panel">
                            <!-- Notification items here -->
                        </div>
                        <div class="dropdown-footer text-center align-items-center single-border-top">
                            <a href="#" class="no-underline text-capitalize">No notification found</a>
                        </div>
                    </div>
                </li>

                <!-- User Profile Menu -->
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <img alt="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
" src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['base_url']->value);?>
user-avatar.png" class="rounded-circle mr-1">
                        <div class="d-sm-none d-lg-inline-block"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow-sm">
                        <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['base_url']->value);?>
?a=edit_account" class="dropdown-item has-icon">
                            <i class="far fa-user"></i> Profile
                        </a>
                        <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['base_url']->value);?>
?a=qr-code" class="dropdown-item has-icon">
                            <i class="fas fa-qrcode"></i> QR Code
                        </a>
                        <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['base_url']->value);?>
?a=change-password" class="dropdown-item has-icon">
                            <i class="fas fa-unlock-alt"></i> Change Password
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item has-icon text-danger" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>

        <!-- Logout Modal -->
        <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form id="logout-form" action="../v_card/functions/auth_function.php" method="POST">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-danger pb-2" id="logoutModalLabel">Confirmation!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body logout-body">
                            Are you sure you want to logout?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            <button type="submit" name="user_logout" class="btn btn-primary">Logout</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

        <!-- Sidebar -->
        <div class="main-sidebar sidebar-style-2 shadow-sm">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['base_url']->value);?>
">
                        <img src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['site_logo']->value);?>
" class="dashboard-logo" alt="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['site_name']->value);?>
">
                    </a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['base_url']->value);?>
">
                        <img src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['site_logo']->value);?>
" class="dashboard-logo-sm" alt="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['site_name']->value);?>
">
                    </a>
                </div>

                <ul class="sidebar-menu py-5">


                    <!-- Home Menu Item -->
                    <li class="nav-item" data-page="home">
                        <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['base_url']->value);?>
?a=home" class="nav-link">
                            <i class="fas fa-home text-primary"></i><span>Home</span>
                        </a>
                    </li>

                    <!-- Account Menu Item -->
                    <li class="nav-item" data-page="account">
                        <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['base_url']->value);?>
?a=account" class="nav-link">
                            <i class="fas fa-user text-info"></i><span>Account</span>
                        </a>
                    </li>

                    <!-- Make Deposit Menu Item -->
                    <li class="nav-item" data-page="deposit">
                        <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['base_url']->value);?>
?a=deposit" class="nav-link">
                            <i class="fas fa-money-bill-alt text-success"></i><span>Make Deposit</span>
                        </a>
                    </li>

                    <!-- Your Deposits Menu Item -->
                    <li class="nav-item" data-page="deposit_list">
                        <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['base_url']->value);?>
?a=deposit_list" class="nav-link">
                            <i class="fas fa-piggy-bank text-success"></i><span>Your Deposits</span>
                        </a>
                    </li>

                    <!-- Deposits History Menu Item -->
                    <li class="nav-item" data-page="deposit_history">
                        <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['base_url']->value);?>
?a=deposit_history" class="nav-link">
                            <i class="fas fa-history text-success"></i><span>Deposits History</span>
                        </a>
                    </li>

                    <!-- Earnings History Menu Item -->
                    <li class="nav-item" data-page="earnings">
                        <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['base_url']->value);?>
?a=earnings" class="nav-link">
                            <i class="fas fa-chart-line text-info"></i><span>Earnings History</span>
                        </a>
                    </li>

                    <!-- Referrals History Menu Item -->
                    <li class="nav-item" data-page="earnings_commissions">
                        <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['base_url']->value);?>
?a=earnings&type=commissions" class="nav-link">
                            <i class="fas fa-users text-info"></i><span>Referrals History</span>
                        </a>
                    </li>

                    <!-- Withdraw Menu Item -->
                    <li class="nav-item" data-page="withdraw">
                        <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['base_url']->value);?>
?a=withdraw" class="nav-link">
                            <i class="fas fa-wallet text-danger"></i><span>Withdraw</span>
                        </a>
                    </li>

                    <!-- Withdrawals History Menu Item -->
                    <li class="nav-item" data-page="withdraw_history">
                        <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['base_url']->value);?>
?a=withdraw_history" class="nav-link">
                            <i class="fas fa-history text-danger"></i><span>Withdrawals History</span>
                        </a>
                    </li>

                    <!-- Card Menu Item -->
                    <li class="nav-item" data-page="v_card">
                        <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['base_url']->value);?>
v_card/auth" class="nav-link">
                            <i class="fas fa-credit-card text-primary"></i><span>Virtual Card</span>
                        </a>
                    </li>

                    <!-- Your Referrals Menu Item -->
                    <li class="nav-item" data-page="referals">
                        <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['base_url']->value);?>
?a=referals" class="nav-link">
                            <i class="fas fa-user-friends text-info"></i><span>Your Referrals</span>
                        </a>
                    </li>

                    <!-- Referral Links Menu Item -->
                    <li class="nav-item" data-page="referallinks">
                        <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['base_url']->value);?>
?a=referallinks" class="nav-link">
                            <i class="fas fa-link text-info"></i><span>Referral Links</span>
                        </a>
                    </li>

                    <!-- Edit Account Menu Item -->
                    <li class="nav-item" data-page="edit_account">
                        <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['base_url']->value);?>
?a=edit_account" class="nav-link">
                            <i class="fas fa-edit text-warning"></i><span>Edit Account</span>
                        </a>
                    </li>

                    <!-- Security Menu Item -->
                    <li class="nav-item" data-page="security">
                        <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['base_url']->value);?>
?a=security" class="nav-link">
                            <i class="fas fa-shield-alt text-warning"></i><span>Security</span>
                        </a>
                    </li>

                    <!-- Logout Menu Item -->
                    <li class="nav-item" data-page="logout">
                        <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['base_url']->value);?>
?a=logout" class="nav-link">
                            <i class="fas fa-sign-out-alt text-danger"></i><span>Logout</span>
                        </a>
                    </li>
                </ul>

            </aside>
        </div>
        <div id="firebase-app" class="main-content" style="min-height: 556px;">
            <section class="section wallet-section">
                <div class="section-header"><h1><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['page_name']->value);?>
</h1></div>
            </section><?php }
}
?>