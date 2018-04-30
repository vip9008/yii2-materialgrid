<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Material Grid - <?= $pageTitle ?></title>

    <!-- Material Grid -->
    <link href="css/material.font.css" rel="stylesheet">
    <link href="css/material.grid.css" rel="stylesheet">
    <link href="css/material.components.css" rel="stylesheet">
    <link href="css/material.colors.css" rel="stylesheet">
    <link href="css/material.theme.css" rel="stylesheet">
    <link href="css/highlight.theme.css" rel="stylesheet">
</head>

<body class="<?= $theme ?>">
    <div id="side-nav" class="layout-app-bar">
        <div class="side-nav-container">
            <div class="logo">
                <a href="https://github.com/vip9008/material-grid" target="_blank" class="<?= $primaryColor ?>">Material Grid</a>
            </div>
            <div class="list <?= $primaryColor ?>">
                <?php include('menu.html'); ?>
            </div>
            <div class="copyright">
                <div>vip9008 &copy;</div>
                <div>Code licensed <a href="https://github.com/vip9008/material-grid/blob/master/LICENSE" target="_blank">MIT</a></div>
            </div>
        </div>
    </div>
    <div id="page-content-overlay"></div>
    <div id="page-content" class="layout-background">
        <div class="layout-app-bar top-bar bg-<?= $primaryColor ?>">
            <button class="side-nav-toggle" onclick="side_nav_open();"><i class="material-icons">menu</i></button>
            <div class="section-title persistent"><span class="hidden-xsmallext hidden-xsmall"><?= $pageCat ?></span><?= $pageTitle ?></div>
        </div>
        <div class="page-header bg-<?= $primaryColor ?> hidden">
            <div class="container">
                <div class="row">
                    <div class="col medium-12">
                        <div class="page-title"><?= $pageTitle ?></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">