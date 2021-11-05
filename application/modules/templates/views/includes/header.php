<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url()?>assets/favicon/apple-icon-57x57.">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url()?>assets/favicon/apple-icon-60x60.">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url()?>assets/favicon/apple-icon-72x72.">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>assets/favicon/apple-icon-76x76.">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url()?>assets/favicon/apple-icon-114x114.">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url()?>assets/favicon/apple-icon-120x120.">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url()?>assets/favicon/apple-icon-144x144.">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url()?>assets/favicon/apple-icon-152x152.">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url()?>assets/favicon/apple-icon-180x180.">
    <link rel="icon" type="image/" sizes="192x192"  href="<?php echo base_url()?>assets/favicon/android-icon-192x192.">
    <link rel="icon" type="image/" sizes="32x32" href="<?php echo base_url()?>assets/favicon/favicon-32x32.">
    <link rel="icon" type="image/" sizes="96x96" href="<?php echo base_url()?>assets/favicon/favicon-96x96.">
    <link rel="icon" type="image/" sizes="16x16" href="<?php echo base_url()?>assets/favicon/favicon-16x16.">
    <link rel="manifest" href="<?php echo base_url()?>assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>iHRIS Update<?php echo " ".$title; ?></title>
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/app.css">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
    <script>(function(w,d,u){w.readyQ=[];w.bindReadyQ=[];function p(x,y){if(x=="ready"){w.bindReadyQ.push(y);}else{w.readyQ.push(x);}};var a={ready:p,bind:p};w.$=w.jQuery=function(f){if(f===d||f===u){return a}else{p(f)}}})(window,document)</script>
</head>
<body class="light sidebar-mini sidebar-collapse sidebar-expanded-on-hover">
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>
        </div>
    </div>
</div>
<div id="app">