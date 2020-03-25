<?php
$system_name = $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;
$system_title = $this->db->get_where('settings', array('type' => 'system_title'))->row()->description;
?>
<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from optico.designerbyte.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Feb 2020 07:23:20 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>RS TYPING</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('optimum/web/'); ?>images/favicon.ico">

    <!-- CSS
        ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('optimum/web/'); ?>css/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="<?php echo base_url('optimum/web/'); ?>css/fontawesome.css">
    <!-- Flaticon -->
    <link rel="stylesheet" href="<?php echo base_url('optimum/web/'); ?>css/flaticon.css">
    <!-- optico Icons -->
    <link rel="stylesheet" href="<?php echo base_url('optimum/web/'); ?>css/optico-icons.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="<?php echo base_url('optimum/web/'); ?>css/themify-icons.css">
    <!-- Slick -->
    <link rel="stylesheet" href="<?php echo base_url('optimum/web/'); ?>css/slick.css">
    <!-- Slick Theme -->
    <link rel="stylesheet" href="<?php echo base_url('optimum/web/'); ?>css/slick-theme.css">
    <!-- Pretty Photo -->
    <link rel="stylesheet" href="<?php echo base_url('optimum/web/'); ?>css/prettyPhoto.css">
    <!-- Twentytwenty -->
    <link rel="stylesheet" href="<?php echo base_url('optimum/web/'); ?>css/twentytwenty.css">
    <!-- Shortcode CSS -->
    <link rel="stylesheet" href="<?php echo base_url('optimum/web/'); ?>css/shortcode.css">
    <!-- Base CSS -->
    <link rel="stylesheet" href="<?php echo base_url('optimum/web/'); ?>css/base.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url('optimum/web/'); ?>css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo base_url('optimum/web/'); ?>css/responsive.css">
    <!-- sweetalert CSS -->
    <link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />
</head>

<body>
