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
$page = 'dialogs.php';
$primaryColor = "indigo";
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
            <div class="section-title persistent"><span class="hidden-xsmallext hidden-xsmall">Components - </span>Dialogs</div>
        </div>
        <div class="page-header bg-<?= $primaryColor ?> hidden">
            <div class="container">
                <div class="row">
                    <div class="col medium-12">
                        <div class="page-title">Dialogs</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <section class="section article">
                <div class="row">
                    <div class="col medium-12">
                        <div class="chapter module">
                            <h1 class="chapter-title <?= $primaryColor ?>">Dialogs</h1>
                            <p>Dialogs inform users about a specific task and may contain critical information, require decisions, or involve multiple tasks.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col medium-4">
                        <div class="module">
                            <p>Dialogs contain text and UI controls. They retain focus until dismissed or a required action has been taken. Use dialogs sparingly because they are interruptive.</p>
                            <p>Some dialog types include:</p>
                            <ul>
                                <li><b>Alerts</b> are urgent interruptions that inform about a situation and require acknowledgement.</li>
                                <li><b>Simple menus</b> display options for list items, whereas <b>simple dialogs</b> can provide details or actions about a list item.</li>
                                <li><b>Confirmation dialogs</b> require users to explicitly confirm a choice.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col medium-4">
                        <div class="module">
                            <p class="bold">Behavior</p>
                            <p>Dialogs should never be obscured, either by other elements or the screen edge. Dialogs always retain focus until dismissed or a required action has been taken.</p>
                        </div>

                        <div class="module">
                            <p class="bold">Full-screen dialogs (Mobile only)</p>
                            <p>Full-screen dialogs are best suited to complex tasks, or require an input method editor, as they group a series of tasks together before they can be saved.</p>
                        </div>
                    </div>
                    <div class="col medium-4">
                        <img src="img/components_dialogs.png">
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="row">
                    <div class="col medium-12">
                        <div class="material-toc <?= $primaryColor ?>">
                            <div class="title">Contents</div>
                            <div class="link">
                                <a href="#behavior">Behavior</a>
                            </div>
                            <div class="link">
                                <a href="#alerts">Alerts</a>
                            </div>
                            <div class="link">
                                <a href="#simple-menus">Simple Menus</a>
                            </div>
                            <div class="link">
                                <a href="#simple-dialogs">Simple Dialogs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="behavior" class="section article">
                <div class="row">
                    <div class="col medium-12">
                        <h1 class="<?= $primaryColor ?>">Behavior</h1>
                        <div class="module">
                            <h3>Beyond standard dialogs</h3>
                            <p>Dialogs are a sub-type of modal windows, and the examples covered here are for standard material system dialogs. (Other modal window constructions aren’t covered here because they have too much variation, such as branded buttons for purchasing flows, non-standard UI form elements, or unique layouts.)</p>
                        </div>
                        <div class="module">
                            <h3>Reduce interruption</h3>
                            <p>Use dialogs sparingly because they are interruptive. Their sudden appearance forces users to stop their current task and focus on the dialog content. Not every choice, setting, or detail warrants interruption. Alternatives to dialogs include menus or inline expansion, both of which maintain the current context.</p>
                        </div>
                        <div class="module">
                            <h3>Dialog prominence</h3>
                            <p>Dialogs should never be obscured by other elements or appear partially on screen. Dialogs always retain focus until dismissed or a required action has been taken, such as choosing a setting.</p>
                            <p>Dialogs should avoid:</p>
                            <ul>
                                <li>Opening dialogs from within a dialog</li>
                                <li>Containing scrolling content</li>
                            </ul>
                        </div>
                        <div class="module">
                            <h3>Full-screen dialog exception</h3>
                            <p>Full-screen dialogs may open additional dialogs, such as pickers, because their design accommodates additional layers of material without significantly increasing the app’s perceived z-depth or visual noise.</p>
                        </div>
                        <div class="module">
                            <h3>Scrollable content exception</h3>
                            <p>Some dialog content requires scrolling, such as lists of ringtones.</p>
                            <ul>
                                <li>For scrollable lists of options, the dialog title remains pinned to the top. This ensures that a selected item remains visible with the title, regardless of the item’s position in the list.</li>
                                <li>Otherwise, the title scrolls off with the content. Actions always remain in place when content scrolls.</li>
                            </ul>
                            <p>Dialogs are separate from the underlying parent material and do not scroll with it.</p>
                        </div>
                        <div class="module">
                            <h3>Displaying additional content</h3>
                            <p>To disclose additional content in a dialog, do so using inline expansion within the content area. Or consider alternative components that are optimized for large amounts of content.</p>
                        </div>
                        <div class="module">
                            <h3>Dismissing dialogs</h3>
                            <p>Dialogs can be dismissed by touching/clicking outside of a dialog or by using the system back button (Android). Alternatively, dialog behavior can be overridden so that users must explicitly choose one of the actions.</p>
                        </div>
                    </div>
                </div>
            </section>

            <div class="row">
                <div class="col medium-12">
                    <div class="module"></div>
                    <div class="divider"></div>
                </div>
            </div>

            <section id="alerts" class="section article">
                <div class="row">
                    <div class="col medium-12">
                        <h1 class="<?= $primaryColor ?>">Alerts</h1>
                        <div class="module">
                            <p>Alerts are urgent interruptions, requiring acknowledgement, that inform the user about a situation.</p>
                            <p><b>Disambiguation from Snackbars:</b> Snackbars present optional information after an action, such as confirming the discarding of a draft. They often allow a user to undo an action just taken.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col medium-4">
                        <div class="module">
                            <h3>Alerts without title bars</h3>
                            <p>Most alerts don't need titles.</p>
                            <p>They summarize a decision in a sentence or two by either:</p>
                            <ul>
                                <li>Asking a question (e.g. "Delete this conversation?")</li>
                                <li>Making a statement related to the action buttons</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col medium-4">
                        <img src="img/components_alerts_1.png">
                        <div class="bg-green" style="height: 16px; margin: 8px 0 16px;"></div>
                        <div class="module">
                            <h3 class="green">Do</h3>
                            <p>The affirmative action text “Discard” clearly indicates the outcome of the decision.</p>
                        </div>
                    </div>
                    <div class="col medium-4">
                        <img src="img/components_alerts_2.png">
                        <div class="bg-red" style="height: 16px; margin: 8px 0 16px;"></div>
                        <div class="module">
                            <h3 class="red">Don't</h3>
                            <p>The dismissive action text “No” answers the question, but does not suggest what will happen afterwards. A better action pair would be an explicit “Cancel” and “Delete.”</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col medium-4">
                        <div class="module">
                            <h3>Alerts with title bars</h3>
                            <p>Use title bar alerts only for high-risk situations, such as the potential loss of connectivity. Users should be able to understand the choices based on the title and button text alone.</p>
                            <p>If a title is required:</p>
                            <ul>
                                <li>Use a clear question or statement with an explanation in the content area, such as "Erase USB storage?".</li>
                                <li>Avoid apologies, ambiguity, or questions, such as “Warning!” or “Are you sure?”</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col medium-4">
                        <img src="img/components_dialogs_usage1.png">
                        <div class="bg-green" style="height: 16px; margin: 8px 0 16px;"></div>
                        <div class="module">
                            <h3 class="green">Do</h3>
                            <p>This dialog poses a specific question, concisely elaborates on its impact, and provides clear actions.</p>
                        </div>
                    </div>
                    <div class="col medium-4">
                        <img src="img/components_dialogs_alerts4.png">
                        <div class="bg-red" style="height: 16px; margin: 8px 0 16px;"></div>
                        <div class="module">
                            <h3 class="red">Don't</h3>
                            <p>This dialog poses an ambiguous question and its scope of impact is unclear.</p>
                        </div>
                    </div>
                </div>
            </section>

            <div class="row">
                <div class="col medium-12">
                    <div class="module"></div>
                    <div class="divider"></div>
                </div>
            </div>

            <section id="simple-menus" class="section article">
                <div class="row">
                    <div class="col medium-12">
                        <h1 class="<?= $primaryColor ?>">Simple menus</h1>
                        <h3>Mobile and tablet only</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col medium-4">
                        <div class="module">
                            <p>Simple menus display options for list items, and they immediately commit choices upon selection. See Simple Menus for more details.</p>
                            <p><b>Disambiguation:</b> <a href="#simple-dialogs">Simple dialogs</a> display detailed options for list items or provide related actions. Simple dialogs can display the same content as simple menus. However, simple menus are preferred because they are less disruptive to the user’s current context.</p>
                        </div>
                    </div>
                    <div class="col medium-4">
                        <img src="img/components_dialogs_simplemenu1.png">
                    </div>
                    <div class="col medium-4">
                        <img src="img/components_dialogs_simplemenu2.png">
                    </div>
                </div>
                <div class="row">
                    <div class="col medium-4 medium-push-4">
                        <div class="module">
                            <p>Examples of a simple menu</p>
                        </div>
                    </div>
                </div>
            </section>

            <div class="row">
                <div class="col medium-12">
                    <div class="module"></div>
                    <div class="divider"></div>
                </div>
            </div>

            <section id="simple-dialogs" class="section article">
                <div class="row">
                    <div class="col medium-12">
                        <h1 class="<?= $primaryColor ?>">Simple dialogs</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col medium-4">
                        <div class="module">
                            <p>Simple dialogs can provide additional details or actions about a list item. For example, they can display avatars, icons, clarifying subtext, or orthogonal actions (such as adding an account).</p>
                            <p>Touch mechanics:</p>
                            <ul>
                                <li>Choosing an option immediately commits the option and closes the menu</li>
                                <li>Touching outside of the dialog, or pressing Back, cancels the action and closes the dialog</li>
                            </ul>
                        </div>
                        <div class="module">
                            <h3>Reduce interruption</h3>
                            <p>Simple dialogs are more interruptive than simple menus and should be used sparingly.</p>
                        </div>
                    </div>
                    <div class="col medium-4">
                        <img src="img/components_dialogs_simple1.png">
                        <div class="module">
                            <p>Example of a simple dialog</p>
                        </div>
                    </div>
                    <div class="col medium-4">
                        <img src="img/components_dialogs_simple2.png">
                        <div class="module">
                            <p>The width of a dialog on mobile is defined as a multiple of a unit.</p>
                            <ul style="padding: 0; list-style-type: none;">
                                <li>Each unit is 56dp wide</li>
                                <li>Minimum width on mobile = 56dp * 5 = 280dp</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col medium-4">
                        <div class="module">
                            <h3>No explicit cancel button</h3>
                            <p>Simple dialogs do not have explicit buttons that accept or cancel an operation.</p>
                        </div>
                    </div>
                    <div class="col medium-4">
                        <img src="img/components_dialogs_simple3.png">
                        <div class="bg-red" style="height: 16px; margin: 8px 0 16px;"></div>
                        <div class="module">
                            <h3 class="red">Don't</h3>
                            <p>This simple dialog has an explicit “Cancel” button.</p>
                        </div>
                    </div>
                    <div class="col medium-4">
                        <img src="img/components_dialogs_simple4.png">
                        <div class="bg-red" style="height: 16px; margin: 8px 0 16px;"></div>
                        <div class="module">
                            <h3 class="red">Don't</h3>
                            <p>This simple dialog has an explicit “Cancel” button.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col medium-4">
                        <div class="module">
                            <h3>Specifications</h3>
                            <ul>
                                <li>Row heights can vary in simple dialogs.</li>
                                <li>Simple dialogs are displayed centered vertically and horizontally on the screen.</li>
                                <li>The dialog's distance from the screen edge is at least 40dp on the left and right, and at least 24dp on the top and bottom.</li>
                                <li>The dialog's content is 24dp from the dialog edge.</li>
                            </ul>
                        </div>
                        <div class="module">
                            <h3>Avoid text wrapping</h3>
                            <p>If any text in a <a href="#simple-menus">simple menu</a> wraps to another line, use a simple dialog instead.</p>
                        </div>
                    </div>
                    <div class="col medium-8">
                        <img src="img/components_dialogs_simple5.png">
                        <div class="bg-green" style="height: 16px; margin: 8px 0 16px;"></div>
                        <div class="module">
                            <h3 class="green">Do</h3>
                            <p>This simple dialog has varying row heights.</p>
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