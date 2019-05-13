<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $Title; ?></title>
    <link href="<?php echo base_url() ?>/css/admin/main.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/css/admin/orders.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/css/admin/products.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/css/admin/opinion.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/css/admin/graph.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/css/admin/add.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/css/admin/login.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/css/fonts/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


    <script src="<?php echo base_url() ?>/js/admin/admin.js"></script>
    <?php $this->load->view('account/Editor'); ?>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="35x35" href="<?php echo base_url() ?>/css/admin/images/admin-black.png">
</head>
<body>
