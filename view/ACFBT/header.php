<?php
/**
 * Created by PhpStorm.
 * User: DIVYANSHU
 * Date: 07-11-2018
 * Time: 02:57
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
          crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/popper.js@1.14.5/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="../../assets/css/layout.css">
    <link rel="stylesheet" href="../../assets/css/simple-sidebar.css">
    <link rel="stylesheet" href="../../assets/css/theme-acfbt.css">
    <link rel="icon" type="image/png" href="../../assets/images/SLIET-logo-black.png"/>
    <?php
    if (empty($title)) {
        $title = $TITLE;
    }
    ?>
    <title><?= $title ?></title>
    <?php echo isset($css) ? $css : ''; ?>

</head>
<body class="bg-light">
<section id="wrapper">
    <!-- Sidebar -->

    <?php require_once TEMPLATE_PATH . '/acfbt/sidebar-navigation.php' ?>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <!-- Image and text -->
        <nav class="navbar navbar-expand-lg transparent" style="opacity: 0" id="clear-navbar">
            <button class="navbar-toggler" type="button"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
                </ul>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-dark bg-light bg-orange transparent rounded-0 fixed-top side-control">
            <button class="navbar-toggler side-nav border-0" type="button"
                    id="menu-toggle">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand mr-auto" href="/ACFBT">
                <span class="large">International Conference on “Advances in Chemical, Food and Bioprocess Technology” (ACFBT - 2020)</span>
                <span class="small"
                      title="International Conference on “Advances in Chemical, Food and Bio-process Technology” (ACFBT - 2020)">ACFBT - 2020</span>
            </a>
        </nav>
