<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Material Template</title>

    <!-- Material Grid -->
    <link href="css/material.font.css" rel="stylesheet">
    <link href="css/material.grid.css" rel="stylesheet">
    <link href="css/material.components.css" rel="stylesheet">
    <link href="css/material.colors.css" rel="stylesheet">
    <link href="css/material.theme.css" rel="stylesheet">
    <link href="css/highlight.theme.css" rel="stylesheet">
</head>

<?php
$page = 'data_tables.php';
$primaryColor = "indigo";
?>

<body class="dark-theme">
    <div id="side-nav"  class="layout-app-bar">
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
            <div class="section-title persistent"><span class="hidden-xsmallext hidden-xsmall">Components - </span>Data tables</div>
        </div>
        <div class="page-header bg-<?= $primaryColor ?> hidden">
            <div class="container">
                <div class="row">
                    <div class="col medium-12">
                        <div class="page-title">Data tables</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <section class="section article">
                <div class="row">
                    <div class="col medium-12">
                        <div class="chapter module">
                            <h1 class="chapter-title <?= $primaryColor ?>">Data tables</h1>
                            <p>Data tables display sets of raw data. They usually appear in desktop enterprise products.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col medium-4">
                        <div class="module">
                            <p>Data tables may be embedded on a surface, such as a card. They can include:</p>
                            <ul>
                                <li>A corresponding visualization</li>
                                <li>The ability to query and manipulate data</li>
                            </ul>
                            <p>Data tables on cards may display navigation and data manipulation tools at the top and bottom.</p>
                        </div>
                    </div>
                    <div class="col medium-4">
                        <div class="module">
                            <p class="bold">Supported interactions</p>
                            <ul style="list-style-type: none; margin: 0; padding: 0;">
                                <li>Row hover (desktop)</li>
                                <li>Row selection</li>
                                <li>Column sorting</li>
                                <li>Column hover (desktop)</li>
                                <li>Long header titles</li>
                                <li>Text editing</li>
                                <li>Menus</li>
                            </ul>
                        </div>

                        <div class="module">
                            <p class="bold">Related components</p>
                            <p><a href="cards.php">Cards</a></p>
                        </div>
                    </div>
                    <div class="col medium-4">
                        <img src="img/components_data_tables.png">
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="row">
                    <div class="col medium-12">
                        <div class="material-toc <?= $primaryColor ?>">
                            <div class="title">Contents</div>
                            <div class="link">
                                <a href="#structure">Structure</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="js/material.grid.js"></script>
    <script src="js/material.theme.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/highlight.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $("#side-nav > .side-nav-container > .nav > .nav-block > .sub-menu > a[href='<?= $page ?>']").addClass('active').parent('.sub-menu').parent('.nav-block').addClass('current');

        $('pre.html').each(function(i, block) {
            hljs.highlightBlock(block);
        });
    });
    </script>
</body>
</html>