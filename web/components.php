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
</head>
<body class="dark-theme">
    <div id="side-nav" class="layout-app-bar">
        <div class="side-nav-container">
            <div class="logo">
                <a href="https://github.com/vip9008/material-grid" target="_blank" class="teal">Material Grid</a>
            </div>
            <div class="list teal">
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
        <div class="layout-app-bar top-bar bg-teal">
            <button class="side-nav-toggle" onclick="side_nav_open();"><i class="material-icons">menu</i></button>
            <div class="section-title"></div>
        </div>
        <div class="page-header bg-teal">
            <div class="container">
                <div class="row">
                    <div class="col medium-12">
                        <div class="page-title">Getting started</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col medium-12">
                    <section class="chapter">
                        <div class="material-toc teal">
                            <div class="title">Contents</div>
                            <div class="link">
                                <a href="#table_of_content">Table of content</a>
                            </div>
                            <div class="link">
                                <a href="#text_input">Text input</a>
                            </div>
                            <div class="link">
                                <a href="#checkbox">Checkbox</a>
                            </div>
                        </div>
                    </section>

                    <section id="table_of_content" class="chapter">
                        <h1 class="chapter-title teal">Table of content</h1>
                        <p class="chapter-intro">
                            The package is available as a Github repository. you can download it from.
                        </p>

                        <div class="material-toc blue">
                            <div class="title">TITLE</div>
                            <div class="link">
                                <a href="#SECTION_ID_1">SECTION_TITLE_1</a>
                            </div>
                            <div class="link">
                                <a href="#SECTION_ID_2">SECTION_TITLE_2</a>
                            </div>
                                .
                                .
                                .
                        </div>

                        <pre>
<?= htmlspecialchars("
    <div class=\"material-toc\">
        <div class=\"title\">TITLE</div>
        <div class=\"link\">
            <a href=\"#SECTION_ID_1\">SECTION_TITLE_1</a>
        </div>
        <div class=\"link\">
            <a href=\"#SECTION_ID_2\">SECTION_TITLE_2</a>
        </div>
            .
            .
            .
    </div>
") ?>
                        </pre>
                    </section>

                    <section id="text_input" class="chapter">
                        <h1 class="chapter-title teal">Text input</h1>
                        <p class="chapter-intro">
                            The package is available as a Github repository. you can download it from.
                        </p>

                        <div class="form-input text-secondary blue">
                            <input type="text" name="text_input_1" class="text-input">
                            <div class="label">INPUT LABEL</div>
                        </div>

                        <div class="form-input text-secondary blue">
                            <input type="text" name="text_input_2" class="text-input" value="SOME CONTENT">
                            <div class="label">INPUT LABEL (filled)</div>
                        </div>

                        <div class="form-input text-secondary blue">
                            <input type="text" name="text_input_3" class="text-input" value="SOME CONTENT" disabled>
                            <div class="label">INPUT LABEL (disabled)</div>
                        </div>

                        <pre>
<?= htmlspecialchars("
    <div class=\"form-input btext-secondary lue\">
        <input type=\"text\" name=\"text_input_1\" class=\"text-input\">
        <div class=\"label\">INPUT LABEL</div>
    </div>

    <div class=\"form-input text-secondary blue\">
        <input type=\"text\" name=\"text_input_2\" class=\"text-input\" value=\"SOME CONTENT\">
        <div class=\"label\">INPUT LABEL (filled)</div>
    </div>

    <div class=\"form-input text-secondary blue\">
        <input type=\"text\" name=\"text_input_3\" class=\"text-input\" value=\"SOME CONTENT\" disabled>
        <div class=\"label\">INPUT LABEL (disabled)</div>
    </div>
") ?>
                        </pre>
                    </section>

                    <section class="chapter">
                        <h1 class="chapter-title teal">Text input</h1>
                        <p class="chapter-intro">
                            The package is available as a Github repository. you can download it from.
                        </p>

                        <div class="form-input box-style text-secondary blue">
                            <input type="text" name="text_input_1" class="text-input">
                            <div class="label">INPUT LABEL</div>
                        </div>

                        <div class="form-input box-style text-secondary blue">
                            <input type="text" name="text_input_2" class="text-input" value="SOME CONTENT">
                            <div class="label">INPUT LABEL (filled)</div>
                        </div>

                        <div class="form-input box-style text-secondary blue">
                            <input type="text" name="text_input_3" class="text-input" value="SOME CONTENT" disabled>
                            <div class="label">INPUT LABEL (disabled)</div>
                        </div>

                        <pre>
<?= htmlspecialchars("
    <div class=\"form-input box-style btext-secondary lue\">
        <input type=\"text\" name=\"text_input_1\" class=\"text-input\">
        <div class=\"label\">INPUT LABEL</div>
    </div>

    <div class=\"form-input box-style text-secondary blue\">
        <input type=\"text\" name=\"text_input_2\" class=\"text-input\" value=\"SOME CONTENT\">
        <div class=\"label\">INPUT LABEL (filled)</div>
    </div>

    <div class=\"form-input box-style text-secondary blue\">
        <input type=\"text\" name=\"text_input_3\" class=\"text-input\" value=\"SOME CONTENT\" disabled>
        <div class=\"label\">INPUT LABEL (disabled)</div>
    </div>
") ?>
                        </pre>
                    </section>

                    <section id="textarea" class="chapter">
                        <h1 class="chapter-title teal">Textarea</h1>
                        <p class="chapter-intro">
                            The package is available as a Github repository. you can download it from.
                        </p>

                        <div class="form-input text-secondary blue">
                            <textarea name="textarea_1" class="text-input"></textarea>
                            <div class="label">TEXTAREA LABEL</div>
                        </div>

                        <div class="form-input text-secondary blue">
                            <textarea name="textarea_2" class="text-input">SOME CONTENT</textarea>
                            <div class="label">TEXTAREA LABEL (filled)</div>
                        </div>

                        <div class="form-input text-secondary blue">
                            <textarea name="textarea_3" class="text-input" disabled>SOME CONTENT</textarea>
                            <div class="label">TEXTAREA LABEL (disabled)</div>
                        </div>

                        <pre>
<?= htmlspecialchars("
    <div class=\"form-input text-secondary blue\">
        <textarea name=\"textarea_1\" class=\"text-input\"></textarea>
        <div class=\"label\">TEXTAREA LABEL</div>
    </div>

    <div class=\"form-input text-secondary blue\">
        <textarea name=\"textarea_2\" class=\"text-input\">SOME CONTENT</textarea>
        <div class=\"label\">TEXTAREA LABEL (filled)</div>
    </div>

    <div class=\"form-input text-secondary blue\">
        <textarea name=\"textarea_3\" class=\"text-input\" disabled>SOME CONTENT</textarea>
        <div class=\"label\">TEXTAREA LABEL (disabled)</div>
    </div>
") ?>
                        </pre>
                    </section>

                    <section class="chapter">
                        <h1 class="chapter-title teal">Textarea</h1>
                        <p class="chapter-intro">
                            The package is available as a Github repository. you can download it from.
                        </p>

                        <div class="form-input box-style text-secondary blue">
                            <textarea name="textarea_1" class="text-input"></textarea>
                            <div class="label">TEXTAREA LABEL</div>
                        </div>

                        <div class="form-input box-style text-secondary blue">
                            <textarea name="textarea_2" class="text-input">SOME CONTENT</textarea>
                            <div class="label">TEXTAREA LABEL (filled)</div>
                        </div>

                        <div class="form-input box-style text-secondary blue">
                            <textarea name="textarea_3" class="text-input" disabled>SOME CONTENT</textarea>
                            <div class="label">TEXTAREA LABEL (disabled)</div>
                        </div>

                        <pre>
<?= htmlspecialchars("
    <div class=\"form-input box-style text-secondary blue\">
        <textarea name=\"textarea_1\" class=\"text-input\"></textarea>
        <div class=\"label\">TEXTAREA LABEL</div>
    </div>

    <div class=\"form-input box-style text-secondary blue\">
        <textarea name=\"textarea_2\" class=\"text-input\">SOME CONTENT</textarea>
        <div class=\"label\">TEXTAREA LABEL (filled)</div>
    </div>

    <div class=\"form-input box-style text-secondary blue\">
        <textarea name=\"textarea_3\" class=\"text-input\" disabled>SOME CONTENT</textarea>
        <div class=\"label\">TEXTAREA LABEL (disabled)</div>
    </div>
") ?>
                        </pre>
                    </section>

                    <section id="checkbox" class="chapter">
                        <h1 class="chapter-title teal">Checkbox</h1>
                        <p class="chapter-intro">
                            The package is available as a Github repository. you can download it from.
                        </p>

                        <div>
                            <div class="checkbox-input blue" tabindex="0">
                                <div class="checkbox">
                                    <input type="hidden" name="checkbox_1" value="0">
                                </div>
                                <span class="label">CHECKBOX</span>
                            </div>

                            <div class="checkbox-input blue" tabindex="0">
                                <div class="checkbox">
                                    <input type="hidden" name="checkbox_2" value="1">
                                </div>
                                <span class="label">CHECKBOX (selected)</span>
                            </div>

                            <div class="checkbox-input blue disabled" tabindex="0">
                                <div class="checkbox">
                                    <input type="hidden" name="checkbox_3" value="0">
                                </div>
                                <span class="label">CHECKBOX (disabled)</span>
                            </div>

                            <div class="checkbox-input blue disabled" tabindex="0">
                                <div class="checkbox">
                                    <input type="hidden" name="checkbox_4" value="1">
                                </div>
                                <span class="label">CHECKBOX (disabled)</span>
                            </div>
                        </div>
                        <div>
                            <div class="checkbox-input switch blue" tabindex="0">
                                <div class="checkbox">
                                    <input type="hidden" name="switch_1" value="0">
                                </div>
                                <span class="label">SWITCH (OFF)</span>
                            </div>

                            <div class="checkbox-input switch blue" tabindex="0">
                                <div class="checkbox">
                                    <input type="hidden" name="switch_2" value="1">
                                </div>
                                <span class="label">SWITCH (ON)</span>
                            </div>

                            <div class="checkbox-input switch blue disabled" tabindex="0">
                                <div class="checkbox">
                                    <input type="hidden" name="switch_1" value="0">
                                </div>
                                <span class="label">SWITCH (OFF, disabled)</span>
                            </div>

                            <div class="checkbox-input switch blue disabled" tabindex="0">
                                <div class="checkbox">
                                    <input type="hidden" name="switch_2" value="1">
                                </div>
                                <span class="label">SWITCH (ON, disabled)</span>
                            </div>
                        </div>

                        <pre>
<?= htmlspecialchars("
    <div class=\"checkbox-input blue\">
        <div class=\"checkbox\">
            <input type=\"hidden\" name=\"checkbox_1\" value=\"0\">
        </div>
        <span class=\"label\">CHECKBOX</span>
    </div>

    <div class=\"checkbox-input blue\">
        <div class=\"checkbox\">
            <input type=\"hidden\" name=\"checkbox_2\" value=\"1\">
        </div>
        <span class=\"label\">CHECKBOX (selected)</span>
    </div>

    <div class=\"checkbox-input blue disabled\">
        <div class=\"checkbox\">
            <input type=\"hidden\" name=\"checkbox_3\" value=\"0\">
        </div>
        <span class=\"label\">CHECKBOX (disabled)</span>
    </div>

    <div class=\"checkbox-input blue disabled\">
        <div class=\"checkbox\">
            <input type=\"hidden\" name=\"checkbox_4\" value=\"1\">
        </div>
        <span class=\"label\">CHECKBOX (disabled)</span>
    </div>
") ?>
                        </pre>
                    </section>

                    <section id="radiobutton" class="chapter">
                        <h1 class="chapter-title teal">Radio button</h1>
                        <p class="chapter-intro">
                            The package is available as a Github repository. you can download it from.
                        </p>

                        <div class="radiobutton-group">
                            <div class="radiobutton-input blue" tabindex="0">
                                <div class="radio">
                                    <input type="radio" name="radiobutton" value="1">
                                </div>
                                <span class="label">RADIO 1</span>
                            </div>

                            <div class="radiobutton-input blue" tabindex="0">
                                <div class="radio">
                                    <input type="radio" name="radiobutton" value="2" checked>
                                </div>
                                <span class="label">RADIO 2 (selected)</span>
                            </div>

                            <div class="radiobutton-input blue disabled" tabindex="0">
                                <div class="radio">
                                    <input type="radio" name="radiobutton" value="3">
                                </div>
                                <span class="label">RADIO 3 (disabled)</span>
                            </div>
                        </div>

                        <pre>
<?= htmlspecialchars("
    <div class=\"radiobutton-group\">
        <div class=\"radiobutton-input blue\">
            <div class=\"radio\">
                <input type=\"radio\" name=\"radiobutton\" value=\"1\">
            </div>
            <span class=\"label\">RADIO 1</span>
        </div>

        <div class=\"radiobutton-input blue\">
            <div class=\"radio\">
                <input type=\"radio\" name=\"radiobutton\" value=\"2\" checked>
            </div>
            <span class=\"label\">RADIO 2 (selected)</span>
        </div>

        <div class=\"radiobutton-input blue disabled\">
            <div class=\"radio\">
                <input type=\"radio\" name=\"radiobutton\" value=\"3\">
            </div>
            <span class=\"label\">RADIO 3 (disabled)</span>
        </div>
    </div>
") ?>
                        </pre>
                    </section>

                    <section id="lists" class="chapter">
                        <h1 class="chapter-title teal">Lists</h1>
                        <p class="chapter-intro">
                            The package is available as a Github repository. you can download it from.
                        </p>

                        <div class="clearfix">
                            <div class="col medium-3">
                                <div class="list list-card">
                                    <div class="list-group">
                                        <div class="subheader left-indent">Group 1</div>
                                        <div class="list-item">
                                            <div class="avatar">
                                                <img src="img/bg2.jpg">
                                            </div>
                                            <div class="text">
                                                <div class="title">Title 1</div>
                                                <div class="subtitle">subitle</div>
                                            </div>
                                            <div class="divider left-indent"></div>
                                        </div>
                                        <div class="list-item">
                                            <div class="avatar">
                                                <img src="img/bg2.jpg">
                                            </div>
                                            <div class="text">
                                                <div class="title">Title 1</div>
                                                <div class="subtitle">subitle</div>
                                            </div>
                                            <div class="divider left-indent"></div>
                                        </div>
                                        <div class="list-item">
                                            <div class="avatar">
                                                <img src="img/bg2.jpg">
                                            </div>
                                            <div class="text">
                                                <div class="title">Title 1</div>
                                                <div class="subtitle">subitle</div>
                                            </div>
                                            <div class="divider left-indent"></div>
                                        </div>
                                        <div class="list-item one-line">
                                            <div class="avatar">
                                                <img src="img/bg2.jpg">
                                            </div>
                                            <div class="text">
                                                <div class="title">Title 2</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col medium-3">
                                <div class="list list-card">
                                    <div class="list-group">
                                        <div class="subheader left-indent">Group 1</div>
                                        <div class="list-item">
                                            <div class="avatar">
                                                <img src="img/bg2.jpg">
                                            </div>
                                            <div class="side-action icon">
                                                <div class="material-icon">share</div>
                                            </div>
                                            <div class="text">
                                                <div class="title">Title 1</div>
                                                <div class="subtitle">subitle</div>
                                            </div>
                                        </div>
                                        <div class="list-item one-line">
                                            <div class="avatar">
                                                <img src="img/bg2.jpg">
                                            </div>
                                            <div class="side-action icon">
                                                <div class="material-icon">share</div>
                                            </div>
                                            <div class="text">
                                                <div class="title">Title 2</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group">
                                        <div class="subheader">Group 2</div>
                                        <div class="list-item">
                                            <div class="side-action avatar">
                                                <img src="img/bg2.jpg">
                                            </div>
                                            <div class="icon">
                                                <div class="material-icon">share</div>
                                            </div>
                                            <div class="text">
                                                <div class="title">Title 1</div>
                                                <div class="subtitle">subitle</div>
                                            </div>
                                        </div>
                                        <div class="list-item one-line">
                                            <div class="side-action avatar">
                                                <img src="img/bg2.jpg">
                                            </div>
                                            <div class="icon">
                                                <div class="material-icon">share</div>
                                            </div>
                                            <div class="text">
                                                <div class="title">Title 2</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col medium-3">
                                <div class="list list-card">
                                    <div class="list-group">
                                        <div class="subheader left-indent">Group 1</div>
                                        <div class="list-item">
                                            <div class="icon">
                                                <div class="material-icon">share</div>
                                            </div>
                                            <div class="text">
                                                <div class="title">Title 1</div>
                                                <div class="subtitle">subitle</div>
                                            </div>
                                        </div>
                                        <div class="list-item one-line">
                                            <div class="icon">
                                                <div class="material-icon">share</div>
                                            </div>
                                            <div class="text">
                                                <div class="title">Title 2</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col medium-3">
                                <div class="list list-card">
                                    <div class="list-group">
                                        <div class="subheader">Group 1</div>
                                        <div class="list-item">
                                            <div class="text">
                                                <div class="title">Title 1</div>
                                                <div class="subtitle">subitle</div>
                                            </div>
                                        </div>
                                        <div class="list-item one-line">
                                            <div class="text">
                                                <div class="title">Title 2</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group">
                                        <div class="subheader">Group 2</div>
                                        <div class="list-item one-line">
                                            <div class="text">
                                                <div class="title">Title 1</div>
                                            </div>
                                        </div>
                                        <div class="list-item one-line">
                                            <div class="text">
                                                <div class="title">Title 2</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <section></section>

                        <div class="clearfix">
                            <div class="col medium-3">
                                <div class="list dense list-card">
                                    <div class="list-group">
                                        <div class="subheader left-indent">Group 1</div>
                                        <div class="list-item">
                                            <div class="avatar">
                                                <img src="img/bg2.jpg">
                                            </div>
                                            <div class="text">
                                                <div class="title">Title 1</div>
                                                <div class="subtitle">subitle</div>
                                            </div>
                                            <div class="divider left-indent"></div>
                                        </div>
                                        <div class="list-item">
                                            <div class="avatar">
                                                <img src="img/bg2.jpg">
                                            </div>
                                            <div class="text">
                                                <div class="title">Title 1</div>
                                                <div class="subtitle">subitle</div>
                                            </div>
                                            <div class="divider left-indent"></div>
                                        </div>
                                        <div class="list-item">
                                            <div class="avatar">
                                                <img src="img/bg2.jpg">
                                            </div>
                                            <div class="text">
                                                <div class="title">Title 1</div>
                                                <div class="subtitle">subitle</div>
                                            </div>
                                            <div class="divider left-indent"></div>
                                        </div>
                                        <div class="list-item one-line">
                                            <div class="avatar">
                                                <img src="img/bg2.jpg">
                                            </div>
                                            <div class="text">
                                                <div class="title">Title 2</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col medium-3">
                                <div class="list dense list-card">
                                    <div class="list-group">
                                        <div class="subheader left-indent">Group 1</div>
                                        <div class="list-item">
                                            <div class="avatar">
                                                <img src="img/bg2.jpg">
                                            </div>
                                            <div class="side-action icon">
                                                <div class="material-icon">share</div>
                                            </div>
                                            <div class="text">
                                                <div class="title">Title 1</div>
                                                <div class="subtitle">subitle</div>
                                            </div>
                                        </div>
                                        <div class="list-item one-line">
                                            <div class="avatar">
                                                <img src="img/bg2.jpg">
                                            </div>
                                            <div class="side-action icon">
                                                <div class="material-icon">share</div>
                                            </div>
                                            <div class="text">
                                                <div class="title">Title 2</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group">
                                        <div class="subheader left-indent">Group 2</div>
                                        <div class="list-item">
                                            <div class="side-action avatar">
                                                <img src="img/bg2.jpg">
                                            </div>
                                            <div class="icon">
                                                <div class="material-icon">share</div>
                                            </div>
                                            <div class="text">
                                                <div class="title">Title 1</div>
                                                <div class="subtitle">subitle</div>
                                            </div>
                                        </div>
                                        <div class="list-item one-line">
                                            <div class="side-action avatar">
                                                <img src="img/bg2.jpg">
                                            </div>
                                            <div class="icon">
                                                <div class="material-icon">share</div>
                                            </div>
                                            <div class="text">
                                                <div class="title">Title 2</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col medium-3">
                                <div class="list dense list-card">
                                    <div class="list-group">
                                        <div class="subheader left-indent">Group 1</div>
                                        <div class="list-item">
                                            <div class="icon">
                                                <div class="material-icon">share</div>
                                            </div>
                                            <div class="text">
                                                <div class="title">Title 1</div>
                                                <div class="subtitle">subitle</div>
                                            </div>
                                        </div>
                                        <div class="list-item one-line">
                                            <div class="icon">
                                                <div class="material-icon">share</div>
                                            </div>
                                            <div class="text">
                                                <div class="title">Title 2</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col medium-3">
                                <div class="list dense list-card">
                                    <div class="list-group">
                                        <div class="subheader">Group 1</div>
                                        <div class="list-item">
                                            <div class="text">
                                                <div class="title">Title 1</div>
                                                <div class="subtitle">subitle</div>
                                            </div>
                                        </div>
                                        <div class="list-item one-line">
                                            <div class="text">
                                                <div class="title">Title 2</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group">
                                        <div class="subheader">Group 2</div>
                                        <div class="list-item one-line">
                                            <div class="text">
                                                <div class="title">Title 1</div>
                                            </div>
                                        </div>
                                        <div class="list-item one-line">
                                            <div class="text">
                                                <div class="title">Title 2</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix">
                            <div class="col medium-3">
                                <div class="list">
                                    <div class="list-group">
                                        <div class="list-item checkbox-input blue" tabindex="0">
                                            <div class="icon checkbox">
                                                <input type="hidden" name="checkbox_1" value="0">
                                            </div>
                                            <div class="text">
                                                <div class="title">Title 1</div>
                                                <div class="subtitle">subtitle</div>
                                            </div>
                                        </div>
                                        <div class="list-item one-line checkbox-input blue" tabindex="0">
                                            <div class="icon checkbox">
                                                <input type="hidden" name="checkbox_2" value="0">
                                            </div>
                                            <div class="text">
                                                <div class="title">Title 2</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group radiobutton-group">
                                        <div class="list-item radiobutton-input red" tabindex="0">
                                            <div class="icon radio">
                                                <input type="radio" name="radiolist" value="1">
                                            </div>
                                            <div class="text">
                                                <div class="title">Title 3</div>
                                                <div class="subtitle">subitle</div>
                                            </div>
                                        </div>
                                        <div class="list-item one-line radiobutton-input red" tabindex="0">
                                            <div class="icon radio">
                                                <input type="radio" name="radiolist" value="2">
                                            </div>
                                            <div class="text">
                                                <div class="title">Title 4</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <pre>
<?= htmlspecialchars("
") ?>
                        </pre>
                    </section>

                    <section id="select_menu" class="chapter">
                        <h1 class="chapter-title teal">Select Menu</h1>
                        <p class="chapter-intro">
                            The package is available as a Github repository. you can download it from.
                        </p>

                        <div class="form-input select-control text-secondary blue">
                            <div class="material-icon side-action text-secondary">arrow_drop_down</div>
                            <input type="text" class="text-input" disabled>
                            <div class="label">Select item</div>
                            <div class="select-menu">
                                <div class="items-container list">
                                    <div class="list-group">
                                        <button class="list-item one-line" data-value="value_1">
                                            <div class="text">
                                                <div class="title">Menu option</div>
                                            </div>
                                        </button>
                                        <button class="list-item one-line" data-value="value_2">
                                            <div class="text">
                                                <div class="title">Yet another menu option here</div>
                                            </div>
                                        </button>
                                        <button class="list-item one-line" data-value="value_3">
                                            <div class="text">
                                                <div class="title">And last option</div>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="select_input_1" class="select-value">
                        </div>

                        <div class="form-input select-control box-style text-secondary blue">
                            <div class="material-icon side-action text-secondary">arrow_drop_down</div>
                            <input type="text" class="text-input" disabled>
                            <div class="label">Select item</div>
                            <div class="select-menu">
                                <div class="items-container list">
                                    <div class="list-group">
                                        <button class="list-item one-line" data-value="value_1">
                                            <div class="text">
                                                <div class="title">Menu option</div>
                                            </div>
                                        </button>
                                        <button class="list-item one-line" data-value="value_2">
                                            <div class="text">
                                                <div class="title">Yet another menu option here</div>
                                            </div>
                                        </button>
                                        <button class="list-item one-line" data-value="value_3">
                                            <div class="text">
                                                <div class="title">And last option</div>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="select_input_2" class="select-value">
                        </div>

                        <div class="form-input select-control bar-menu text-secondary blue">
                            <div class="material-icon side-action text-secondary">arrow_drop_down</div>
                            <input type="text" class="text-input">
                            <div class="label">Select item</div>
                            <div class="select-menu">
                                <div class="items-container list">
                                    <div class="list-group">
                                        <button class="list-item one-line" data-value="value_1">
                                            <div class="text">
                                                <div class="title">Menu option</div>
                                            </div>
                                        </button>
                                        <button class="list-item one-line" data-value="value_2">
                                            <div class="text">
                                                <div class="title">Yet another menu option here</div>
                                            </div>
                                        </button>
                                        <button class="list-item one-line" data-value="value_3">
                                            <div class="text">
                                                <div class="title">And last option</div>
                                            </div>
                                        </button>
                                        <div class="list-item one-line error-message hidden">
                                            <div class="text text-secondary">
                                                <div class="title">Can't find any match!</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="select_input_1" class="select-value">
                        </div>

                        <div class="form-input select-control bar-menu box-style text-secondary blue">
                            <div class="material-icon side-action text-secondary">arrow_drop_down</div>
                            <input type="text" class="text-input">
                            <div class="label">Select item</div>
                            <div class="select-menu">
                                <div class="items-container list">
                                    <div class="list-group">
                                        <button class="list-item one-line" data-value="value_1">
                                            <div class="text">
                                                <div class="title">Menu option</div>
                                            </div>
                                        </button>
                                        <button class="list-item one-line" data-value="value_2">
                                            <div class="text">
                                                <div class="title">Yet another menu option here</div>
                                            </div>
                                        </button>
                                        <button class="list-item one-line" data-value="value_3">
                                            <div class="text">
                                                <div class="title">And last option</div>
                                            </div>
                                        </button>
                                        <div class="list-item one-line error-message hidden">
                                            <div class="text text-secondary">
                                                <div class="title">Can't find any match!</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="select_input_1" class="select-value">
                        </div>

                        <div class="form-input box-style text-secondary blue">
                            <button class="material-icon side-action text-secondary" data-action="change_visibility">visibility_off</button>
                            <input type="password" class="text-input">
                            <div class="label">Password</div>
                        </div>

                        <pre>
<?= htmlspecialchars("
    
") ?>
                        </pre>
                    </section>

                    <section id="expansion_panels" class="chapter">
                        <h1 class="chapter-title teal">Expansion panels</h1>
                        <p class="chapter-intro">
                            The package is available as a Github repository. you can download it from.
                        </p>

                        <div class="expansion-panel">
                        <div class="panel">
                            <button class="icon"></button>
                            <div class="label">LABEL TEXT</div>
                            <div class="content">LABEL TEXT</div>
                            <div class="expansion-content">
                                <p>Some content here</p>
                                <p>it can be more than one line</p>
                                <p>with some controls also</p>
                            </div>
                            <div class="expansion-controls">
                                <button class="btn red">Cancel</button>
                                <button class="btn blue">Save</button>
                            </div>
                        </div>
                        <div class="panel">
                            <button class="icon"></button>
                            <div class="label">LABEL TEXT</div>
                            <div class="content">LABEL TEXT</div>
                            <div class="expansion-content">
                                <p>Some content here</p>
                                <p>it can be more than one line</p>
                                <p>with some controls also</p>
                            </div>
                            <div class="expansion-controls">
                                <button class="btn red">Cancel</button>
                                <button class="btn blue">Save</button>
                            </div>
                        </div>
                        <div class="panel">
                            <button class="icon"></button>
                            <div class="label">LABEL TEXT</div>
                            <div class="content">LABEL TEXT</div>
                            <div class="expansion-content">
                                <p>Some content here</p>
                                <p>it can be more than one line</p>
                                <p>with some controls also</p>
                            </div>
                            <div class="expansion-controls">
                                <button class="btn red">Cancel</button>
                                <button class="btn blue">Save</button>
                            </div>
                        </div>
                    </div>
                    </section>

                    <section id="data_table" class="chapter">
                        <h1 class="chapter-title teal">Data Tables</h1>
                        <p class="chapter-intro">
                            The package is available as a Github repository. you can download it from.
                        </p>

                        <div class="data-table">
                            <div class="table-header">
                                Nutritions
                                <div class="controls">
                                    <div class="btn-group">
                                        <button class="control-btn material-icon">share</button>
                                        <div class="control-btn form-input select-control context-menu">
                                            <button class="material-icon select-btn">more_vert</button>
                                            <div class="select-menu right">
                                                <div class="items-container list">
                                                    <div class="list-group">
                                                        <button class="list-item one-line">
                                                            <div class="text"><div class="title">Option 1</div></div>
                                                        </button>
                                                        <button class="list-item one-line">
                                                            <div class="text"><div class="title">Option 2</div></div>
                                                        </button>
                                                    </div>
                                                    <div class="list-group">
                                                        <button class="list-item one-line">
                                                            <div class="text"><div class="title">Option 3</div></div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-container">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="control">
                                                <div class="checkbox-input blue" tabindex="0">
                                                    <div class="checkbox">
                                                        <input type="hidden" name="checkbox_1" value="0">
                                                    </div>
                                                </div>
                                            </th>
                                            <th class="text">Dessert (100g serving)</th>
                                            <th class="number"><a href="javascript: void();">Calories</a></th>
                                            <th class="number"><a href="javascript: void();" class="asc">Fat (g)</a></th>
                                            <th class="number"><a href="javascript: void();" class="desc">Carbs (g)</a></th>
                                            <th class="number">Protein (g)</th>
                                            <th class="number">Sodium (mg)</th>
                                            <th class="number">Calcium (%)</th>
                                            <th class="number">Iron (%)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="control">
                                                <div class="checkbox-input blue" tabindex="0">
                                                    <div class="checkbox">
                                                        <input type="hidden" name="checkbox_1" value="0">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text">Frozen yogurt</td>
                                            <td class="number">159</td>
                                            <td class="number">6.0</td>
                                            <td class="number">24</td>
                                            <td class="number">4.0</td>
                                            <td class="number">87</td>
                                            <td class="number">14%</td>
                                            <td class="number">1%</td>
                                        </tr>
                                        <tr>
                                            <td class="control">
                                                <div class="checkbox-input blue" tabindex="0">
                                                    <div class="checkbox">
                                                        <input type="hidden" name="checkbox_1" value="0">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text">Ice cream sandwich</td>
                                            <td class="number">237</td>
                                            <td class="number">9.0</td>
                                            <td class="number">37</td>
                                            <td class="number">4.3</td>
                                            <td class="number">129</td>
                                            <td class="number">8%</td>
                                            <td class="number">1%</td>
                                        </tr>
                                        <tr>
                                            <td class="control">
                                                <div class="checkbox-input blue" tabindex="0">
                                                    <div class="checkbox">
                                                        <input type="hidden" name="checkbox_1" value="0">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text">Eclair</td>
                                            <td class="number">262</td>
                                            <td class="number">16.0</td>
                                            <td class="number">24</td>
                                            <td class="number">6.0</td>
                                            <td class="number">337</td>
                                            <td class="number">6%</td>
                                            <td class="number">7%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="summary">
                                <div class="summary-right">
                                    Rows per page:
                                    <div class="form-input select-control text-secondary" style="width: 258px;">
                                        <div class="material-icon side-action text-secondary">arrow_drop_down</div>
                                        <input type="text" class="text-input" disabled="">
                                        <div class="label">Rows</div>
                                        <div class="select-menu">
                                            <div class="items-container list">
                                                <div class="list-group">
                                                    <button class="list-item one-line" data-value="10">
                                                        <div class="text"><div class="title">10</div></div>
                                                    </button>
                                                    <button class="list-item one-line" data-value="20">
                                                        <div class="text"><div class="title">20</div></div>
                                                    </button>
                                                    <button class="list-item one-line" data-value="30">
                                                        <div class="text"><div class="title">30</div></div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="select_input_1" class="select-value">
                                    </div>
                                    1-10 of 100
                                    <div class="controls">
                                        <a class="material-icons" href="javascript: viod();">navigate_before</a>
                                        <a class="material-icons" href="javascript: viod();">navigate_next</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <pre>
<?= htmlspecialchars("
    <div class=\"form-input blue\">
        <textarea name=\"textarea_1\" class=\"text-input\"></textarea>
        <div class=\"label\">TEXTAREA LABEL</div>
    </div>

    <div class=\"form-input blue\">
        <textarea name=\"textarea_2\" class=\"text-input\">SOME CONTENT</textarea>
        <div class=\"label\">TEXTAREA LABEL (filled)</div>
    </div>

    <div class=\"form-input blue\">
        <textarea name=\"textarea_3\" class=\"text-input\" disabled>SOME CONTENT</textarea>
        <div class=\"label\">TEXTAREA LABEL (disabled)</div>
    </div>
") ?>
                        </pre>
                    </section>

                    <section id="dialogs" class="chapter">
                        <h1 class="chapter-title teal">Dialogs</h1>
                        <p class="chapter-intro">
                            The package is available as a Github repository. you can download it from.
                        </p>

                        <div class="btn-group">
                            <button class="btn bg-blue" onclick="open_dialog('#dialog_1');">Regular dialog</button>
                            <button class="btn bg-blue" onclick="open_dialog('#dialog_2');">Dialog with radio buttons list</button>
                            <button class="btn bg-blue" onclick="open_dialog('#dialog_3');">Dialog accounts list</button>
                        </div>

                        <div id="dialog_1" class="dialog-background">
                            <div class="dialog-container">
                                <div class="dialog">
                                    <div class="title">Use device GPS</div>
                                    <div class="content">Let the application use GPS on your device. This means sending anonymous location data to help determine your location while using the application.</div>
                                    <div class="actions">
                                        <div class="btn-group">
                                            <button class="btn blue" onclick="close_dialog('#dialog_1');">Disagree</button>
                                            <button class="btn blue" onclick="close_dialog('#dialog_1');">Agree</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div id="dialog_2" class="dialog-background">
                            <div class="dialog-container">
                                <div class="dialog width-6x">
                                    <div class="title">Choose a ringtone</div>
                                    <div class="content list">
                                        <div class="radiobutton-group">
                                            <div class="list-item one-line radiobutton-input red" tabindex="0">
                                                <div class="icon radio">
                                                    <input type="radio" name="dialogradio" value="1">
                                                </div>
                                                <div class="text">
                                                    <div class="title">Option 1</div>
                                                </div>
                                            </div>
                                            <div class="list-item one-line radiobutton-input red" tabindex="0">
                                                <div class="icon radio">
                                                    <input type="radio" name="dialogradio" value="2">
                                                </div>
                                                <div class="text">
                                                    <div class="title">Option 2</div>
                                                </div>
                                            </div>
                                            <div class="list-item one-line radiobutton-input red" tabindex="0">
                                                <div class="icon radio">
                                                    <input type="radio" name="dialogradio" value="3">
                                                </div>
                                                <div class="text">
                                                    <div class="title">Option 3</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        <div class="btn-group">
                                            <button class="btn blue" onclick="close_dialog('#dialog_2');">Cancel</button>
                                            <button class="btn blue" onclick="close_dialog('#dialog_2');">Ok</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="dialog_3" class="dialog-background">
                            <div class="dialog-container">
                                <div class="dialog width-6x">
                                    <div class="title">Choose an account</div>
                                    <div class="content list">
                                        <button class="list-item one-line" onclick="close_dialog('#dialog_3');">
                                            <div class="avatar">
                                                <img src="img/bg2.jpg">
                                            </div>
                                            <div class="text">
                                                <div class="title">user1@gmail.com</div>
                                            </div>
                                        </button>
                                        <button class="list-item one-line" onclick="close_dialog('#dialog_3');">
                                            <div class="avatar">
                                                <img src="img/bg2.jpg">
                                            </div>.
                                            <div class="text">
                                                <div class="title">anotheruser@gmail.com</div>
                                            </div>
                                        </button>
                                        <button class="list-item one-line" onclick="close_dialog('#dialog_3');">
                                            <div class="avatar">
                                                <div class="material-icon bg-blue">add</div>
                                            </div>
                                            <div class="text">
                                                <div class="title">add account</div>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-input date-picker text-secondary blue" data-target="#date-picker">
                            <input type="text" name="date_input_2" class="text-input" disabled>
                            <div class="label">Select date</div>
                        </div>

                        <div class="form-input box-style date-picker text-secondary blue" data-target="#date-picker">
                            <input type="text" name="date_input_2" class="text-input" disabled>
                            <div class="label">Select date</div>
                        </div>

                        <div class="form-input date-picker text-secondary blue" data-target="#date-picker">
                            <button class="material-icon side-action">date_range</button>
                            <input type="text" name="date_input_2" class="text-input" disabled>
                            <div class="label">Select date</div>
                        </div>

                        <div class="form-input box-style date-picker text-secondary blue" data-target="#date-picker">
                            <button class="material-icon side-action">date_range</button>
                            <input type="text" name="date_input_2" class="text-input" disabled>
                            <div class="label">Select date</div>
                        </div>

                        <div id="date-picker" class="dialog-background date-picker-container" data-selected-date data-current-date>
                            <div class="dialog-container">
                                <div class="dialog date-picker">
                                    <div class="header bg-indigo">
                                        <div class="year"></div>
                                        <div class="day"></div>
                                    </div>
                                    <div class="calendar">
                                        <div class="month-control text-primary">
                                            <a href="javascript: ;" class="material-icon prev">keyboard_arrow_left</a>
                                            <span class="month-text"></span>
                                            <a href="javascript: ;" class="material-icon next">keyboard_arrow_right</a>
                                        </div>
                                        <div class="full-month">
                                        </div>
                                    </div>
                                    <div class="years layout-cards indigo">
                                    </div>
                                    <div class="actions">
                                        <div class="btn-group">
                                            <button class="btn text-secondary abort">Cancel</button>
                                            <button class="btn text-secondary confirm">Ok</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="stepper">
                            <div class="step-container state-complete">
                                <a href="javascript: ;" class="step">
                                    <div class="icon bg-indigo">1</div>
                                    <div class="title text-primary bold">Step one here</div>
                                </a>
                                <div class="step-content">
                                    1 content here
                                    <div class="actions btn-group">
                                        <button class="btn bg-indigo">Continue</button>
                                        <button class="btn">Cancel</button>
                                    </div>
                                </div>
                            </div>
                            <div class="step-container state-error">
                                <button class="step">
                                    <div class="icon bg-indigo">2</div>
                                    <div class="title text-primary bold">Step two here</div>
                                    <div class="subtitle text-secondary">optional</div>
                                </button>
                                <div class="step-content">
                                    2 content here
                                    <div class="actions btn-group">
                                        <button class="btn bg-indigo">Continue</button>
                                        <button class="btn">Cancel</button>
                                    </div>
                                </div>
                            </div>
                            <div class="step-container state-active">
                                <button class="step">
                                    <div class="icon bg-indigo">2</div>
                                    <div class="title text-primary bold">Step two here</div>
                                    <div class="subtitle text-secondary">optional</div>
                                </button>
                                <div class="step-content">
                                    2 content here
                                    <div class="actions btn-group">
                                        <button class="btn bg-indigo">Continue</button>
                                        <button class="btn">Cancel</button>
                                    </div>
                                </div>
                            </div>
                            <div class="step-container state-edit">
                                <button class="step">
                                    <div class="icon bg-indigo">3</div>
                                    <div class="title text-primary bold">Step two here</div>
                                    <div class="subtitle text-secondary">optional</div>
                                </button>
                                <div class="step-content">
                                    3 content here
                                    <div class="actions btn-group">
                                        <button class="btn bg-indigo">Save</button>
                                        <button class="btn">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <pre>
<?= htmlspecialchars("
") ?>
                        </pre>
                    </section>

                    <section id="progress" class="chapter">
                        <h1 class="chapter-title teal">Progress &amp; activity</h1>
                        <p class="chapter-intro">
                            The package is available as a Github repository. you can download it from.
                        </p>

                        <div style="max-width: 960px">
                            <p>Determinate</p>
                            <div class="progress bg-red">
                                <div class="bar determinate" style="width: 70%;"></div>
                            </div>
                            <div style="padding: 15px;"></div>

                            <p>Indeterminate</p>
                            <div class="progress bg-red">
                                <div class="bar indeterminate"></div>
                            </div>
                            <div style="padding: 15px;"></div>

                            <p>Buffer</p>
                            <div id="buffer-progress" class="progress buffer bg-red">
                                <div class="buffered" style="width: 70%;"></div>
                                <div class="buffer-bar" style="width: 30%;"></div>
                                <div class="bar" style="width: 50%;"></div>
                            </div>
                            <div style="padding: 15px;"></div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!-- <script src="js/jquery.mobile.custom.min.js"></script> -->
    <script src="js/material.grid.js"></script>
    <script src="js/material.theme.js"></script>
</body>
</html>