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
$page = 'selection_controls.php';
$primaryColor = "indigo";
$accentColor = "orange";
?>

<body class="dark-theme">
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
            <div class="section-title persistent"><span class="hidden-xsmallext hidden-xsmall">Components - </span>Selection controls</div>
        </div>
        <div class="page-header bg-<?= $primaryColor ?> hidden">
            <div class="container">
                <div class="row">
                    <div class="col medium-12">
                        <div class="page-title">Selection controls</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <section class="section article">
                <div class="row">
                    <div class="col medium-12">
                        <div class="chapter module">
                            <h1 class="chapter-title <?= $primaryColor ?>">Selection controls</h1>
                            <p>Selection controls allow the user to select options.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col medium-4">
                        <div class="module">
                            <p>Three types of selection controls are covered in this guidance:</p>
                            <ul>
                                <li><b>Checkboxes</b> allow the selection of multiple options from a set.</li>
                                <li><b>Radio buttons</b> allow the selection of a single option from a set.</li>
                                <li><b>Switches</b> allow a selection to be turned on or off.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col medium-4">
                        <div class="module">
                            <p class="bold">Color</p>
                            <p>Selection controls use an app’s accent color.</p>
                        </div>
                    </div>
                    <div class="col medium-4">
                        <img src="img/patterns_selection_controls.png">
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="row">
                    <div class="col medium-12">
                        <div class="material-toc <?= $primaryColor ?>">
                            <div class="title">Contents</div>
                            <div class="link">
                                <a href="#checkboxes">Checkbox</a>
                            </div>
                            <div class="link">
                                <a href="#radio-buttons">Radio button</a>
                            </div>
                            <div class="link">
                                <a href="#switches">Switch</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="checkboxes" class="section article">
                <div class="row">
                    <div class="col medium-12">
                        <h1 class="<?= $primaryColor ?>">Checkbox</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col medium-4">
                        <p>Checkboxes allow the user to select multiple options from a set.</p>
                        <p>If you have multiple options appearing in a list, you can preserve space by using checkboxes instead of on/off switches.</p>
                        <p>If you have a single option, avoid using a checkbox and use an on/off switch instead.</p>
                    </div>
                    <div class="col medium-7 medium-push-1">
                        <div class="checkbox-input <?= $accentColor ?>" tabindex="0">
                            <div class="checkbox">
                                <input type="hidden" name="checkbox_1" value="0">
                            </div>
                            <span class="label">Checkbox</span>
                        </div>

                        <div class="checkbox-input <?= $accentColor ?>" tabindex="0">
                            <div class="checkbox">
                                <input type="hidden" name="checkbox_2" value="1">
                            </div>
                            <span class="label">Checkbox (selected)</span>
                        </div>

                        <div></div>

                        <div class="checkbox-input <?= $accentColor ?> disabled" tabindex="0">
                            <div class="checkbox">
                                <input type="hidden" name="checkbox_3" value="0">
                            </div>
                            <span class="label">Checkbox (disabled)</span>
                        </div>

                        <div class="checkbox-input <?= $accentColor ?> disabled" tabindex="0">
                            <div class="checkbox">
                                <input type="hidden" name="checkbox_4" value="1">
                            </div>
                            <span class="label">Checkbox (selected, disabled)</span>
                        </div>
                    </div>
                    <div class="col medium-12">
<pre class="html">
<?= htmlspecialchars('
    <div class="checkbox-input '.$accentColor.'" tabindex="0">
        <div class="checkbox">
            <input type="hidden" name="checkbox_1" value="0">
        </div>
        <span class="label">Checkbox</span>
    </div>

    <div class="checkbox-input '.$accentColor.'" tabindex="0">
        <div class="checkbox">
            <input type="hidden" name="checkbox_2" value="1">
        </div>
        <span class="label">Checkbox (selected)</span>
    </div>

    <div class="checkbox-input '.$accentColor.' disabled" tabindex="0">
        <div class="checkbox">
            <input type="hidden" name="checkbox_3" value="0">
        </div>
        <span class="label">Checkbox (disabled)</span>
    </div>

    <div class="checkbox-input '.$accentColor.' disabled" tabindex="0">
        <div class="checkbox">
            <input type="hidden" name="checkbox_4" value="1">
        </div>
        <span class="label">Checkbox (disabled)</span>
    </div>

') ?>
</pre>
                    </div>
                </div>
            </section>

            <section id="radio-buttons" class="section article">
                <div class="row">
                    <div class="col medium-12">
                        <h1 class="<?= $primaryColor ?>">Radio button</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col medium-4">
                        <p>Radio buttons allow the user to select one option from a set. Use radio buttons for exclusive selection if you think that the user needs to see all available options side-by-side.</p>
                        <p>Otherwise, consider a dropdown, which uses less space than displaying all options.</p>
                    </div>
                    <div class="col medium-7 medium-push-1">
                        <div class="radiobutton-group">
                            <div class="radiobutton-input <?= $accentColor ?>" tabindex="0">
                                <div class="radio">
                                    <input type="radio" name="radiobutton_1" value="1">
                                </div>
                                <span class="label">Radio button</span>
                            </div>

                            <div class="radiobutton-input <?= $accentColor ?>" tabindex="0">
                                <div class="radio">
                                    <input type="radio" name="radiobutton_1" value="2" checked>
                                </div>
                                <span class="label">Radio button (selected)</span>
                            </div>
                        </div>

                        <div class="radiobutton-group">
                            <div class="radiobutton-input <?= $accentColor ?> disabled" tabindex="0">
                                <div class="radio">
                                    <input type="radio" name="radiobutton_2" value="1">
                                </div>
                                <span class="label">Radio button (disabled)</span>
                            </div>

                            <div class="radiobutton-input <?= $accentColor ?> disabled" tabindex="0">
                                <div class="radio">
                                    <input type="radio" name="radiobutton_2" value="2" checked>
                                </div>
                                <span class="label">Radio button (selected, disabled)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col medium-12">
<pre class="html">
<?= htmlspecialchars('
    <div class="radiobutton-group">
        <div class="radiobutton-input '.$accentColor.'" tabindex="0">
            <div class="radio">
                <input type="radio" name="radiobutton" value="1">
            </div>
            <span class="label">Radio button</span>
        </div>

        <div class="radiobutton-input '.$accentColor.'" tabindex="0">
            <div class="radio">
                <input type="radio" name="radiobutton" value="2" checked>
            </div>
            <span class="label">Radio button (selected)</span>
        </div>
    </div>
    
    <div class="radiobutton-group">
        <div class="radiobutton-input '.$accentColor.' disabled" tabindex="0">
            <div class="radio">
                <input type="radio" name="radiobutton_2" value="1">
            </div>
            <span class="label">Radio button (disabled)</span>
        </div>

        <div class="radiobutton-input '.$accentColor.' disabled" tabindex="0" checked>
            <div class="radio">
                <input type="radio" name="radiobutton_2" value="2">
            </div>
            <span class="label">Radio button (disabled)</span>
        </div>
    </div>

') ?>
</pre>
                    </div>
                </div>
            </section>

            <section id="switches" class="section article">
                <div class="row">
                    <div class="col medium-12">
                        <h1 class="<?= $primaryColor ?>">Switch</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col medium-4">
                        <p>On/off switches toggle the state of a single settings option. The option that the switch controls, as well as the state it’s in, should be made clear from the corresponding inline label. Switches take on the same visual properties of the radio button.</p>
                        <p>The on/off slide toggle with the text “on” and “off” included within the asset is deprecated. Use the switch shown here instead.</p>
                    </div>
                    <div class="col medium-7 medium-push-1">
                        <div class="checkbox-input switch <?= $accentColor ?>" tabindex="0">
                            <div class="checkbox">
                                <input type="hidden" name="checkbox_1" value="0">
                            </div>
                            <span class="label">Switch</span>
                        </div>

                        <div class="checkbox-input switch <?= $accentColor ?>" tabindex="0">
                            <div class="checkbox">
                                <input type="hidden" name="checkbox_2" value="1">
                            </div>
                            <span class="label">Switch (selected)</span>
                        </div>

                        <div></div>

                        <div class="checkbox-input switch <?= $accentColor ?> disabled" tabindex="0">
                            <div class="checkbox">
                                <input type="hidden" name="checkbox_3" value="0">
                            </div>
                            <span class="label">Switch (disabled)</span>
                        </div>

                        <div class="checkbox-input switch <?= $accentColor ?> disabled" tabindex="0">
                            <div class="checkbox">
                                <input type="hidden" name="checkbox_4" value="1">
                            </div>
                            <span class="label">Switch (selected, disabled)</span>
                        </div>
                    </div>
                    <div class="col medium-12">
<pre class="html">
<?= htmlspecialchars('
    <div class="checkbox-input switch '.$accentColor.'" tabindex="0">
        <div class="checkbox">
            <input type="hidden" name="checkbox_1" value="0">
        </div>
        <span class="label">Switch</span>
    </div>

    <div class="checkbox-input switch '.$accentColor.'" tabindex="0">
        <div class="checkbox">
            <input type="hidden" name="checkbox_2" value="1">
        </div>
        <span class="label">Switch (selected)</span>
    </div>

    <div class="checkbox-input switch '.$accentColor.' disabled" tabindex="0">
        <div class="checkbox">
            <input type="hidden" name="checkbox_3" value="0">
        </div>
        <span class="label">Switch (disabled)</span>
    </div>

    <div class="checkbox-input switch '.$accentColor.' disabled" tabindex="0">
        <div class="checkbox">
            <input type="hidden" name="checkbox_4" value="1">
        </div>
        <span class="label">Switch (disabled)</span>
    </div>

') ?>
</pre>
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