<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>مدیریت سامانه صرافی آپادانا</title>
<link type="text/css" rel="stylesheet" href="<?php echo assets_url(); ?>css/admin/style.css">
<script type="text/javascript" src="<?php echo assets_url(); ?>js/admin/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo assets_url(); ?>js/admin/jquery.flot.js"></script>
<script type="text/javascript" src="<?php echo assets_url(); ?>js/admin/doc.js"></script>
<script type="text/javascript" src="<?php echo assets_url(); ?>js/admin/admin.js"></script>
</head>
<body>

<div class="body_style">
    <div class="menu">
    <a href="<?php echo site_url(); ?>/admin" class="logo"></a>
    </div>
    <div class="nav">
        <ul>
            <li class="active" onclick="changeUrl('<?php echo site_url(); ?>/admin');">
                <div class="fix">
                    <span class="ico"><img src="<?php echo assets_url(); ?>images/ico1.png"></span>
                    <span class="value">مدیریت</span>
                </div>
             </li>
            <li onclick="currencyList();">
            <div class="fix">
                <span class="ico"><img src="<?php echo assets_url(); ?>images/ico3.png"></span>
                <span class="value">نرخ ارزها</span>
            </div>
            </li>
            <li onclick="coinsList();">
                <div class="fix">
                    <span class="ico"><img src="<?php echo assets_url(); ?>images/ico6.png"></span>
                    <span class="value">نرخ سکه ها</span>
                </div>
            </li>

            <li onclick="setting();">
            <div class="fix">
                <span class="ico"><img src="<?php echo assets_url(); ?>images/ico7.png"></span>
                <span class="value">تنظیمات</span>
            </div>
            </li>
        </ul>
    </div>
    
    <div class="content">
    
    
    <ul data-collapse="collapse" class="quick">
        <li>
            <a href="#" onclick="changeUrl('<?php echo site_url(); ?>/admin');">
                <img alt="" src="<?php echo assets_url(); ?>images/order-149.png">
                <span class="nazanin" style="font-size: 14px; line-height: 20px; direction: rtl;">صفحه اصلی مدیریت</span>
            </a>
        </li>
        <li>
            <a href="#" onclick="setting();">
                <img alt="" src="<?php echo assets_url(); ?>images/my-account.png">
                <span class="nazanin" style="font-size: 14px; line-height: 20px; direction: rtl;">تنظیمات</span>
            </a>
        </li>
        <li>
            <a href="#">
                <img alt="" src="<?php echo assets_url(); ?>images/full-time.png">
                <span class="nazanin" style="font-size: 14px; line-height: 20px; direction: rtl;"><?php echo pdate('H:i a'); ?></span>
            </a>
        </li>
        <li>
            <a href="#">
                <img alt="" src="<?php echo assets_url(); ?>images/date.png">
                <span class="nazanin" style="font-size: 14px; line-height: 20px; direction: rtl;"><?php echo pdate('l، d M Y'); ?></span>
            </a>
        </li>
        <li>
            <a href="#" onclick="changeUrl('<?php echo site_url(); ?>/admin/log_out');">
                <img alt="" src="<?php echo assets_url(); ?>images/lock.png">
                <span>خروج</span>
            </a>
        </li>
    </ul>