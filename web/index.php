<?php
$primaryColor = 'red';
$accentColor = 'red';
$theme = 'light-theme';
$pageTitle = 'Getting started';
?>
<?php include 'includes/_header.php'; ?>

    <div class="row">
        <div class="col medium-12">
            <section class="chapter">
                <div class="material-toc <?= $primaryColor ?>">
                    <div class="title">Contents</div>
                    <div class="link">
                        <a href="#download">Download</a>
                    </div>
                    <div class="link">
                        <a href="#whats_included">What's included</a>
                    </div>
                    <div class="link">
                        <a href="#basic_template">Basic template</a>
                    </div>
                    <div class="link">
                        <a href="#community">Community</a>
                    </div>
                    <div class="link">
                        <a href="#browser_zooming">Browser zooming</a>
                    </div>
                    <div class="link">
                        <a href="#sticky_on_mobile">Sticky on mobile!</a>
                    </div>
                    <div class="link">
                        <a href="#third_party_support">Third party support</a>
                    </div>
                </div>
            </section>

            <section id="download" class="chapter">
                <h1 class="chapter-title <?= $primaryColor ?>">Download</h1>
                <p class="chapter-intro">
                    The package is available as a Github repository. you can download it from
                    <a href="https://github.com/vip9008/material-grid/releases" target="_blank">here</a>.
                </p>
            </section>

            <section id="whats_included" class="chapter">
                <h1 class="chapter-title <?= $primaryColor ?>">What's included</h1>
                <p class="chapter-intro">
                    Material Grid repository contains two forms, within which you'll find the following directories and files, logically grouping common resources.
                </p>
                <div class="note bg-<?= $primaryColor ?>">
                    <span class="material-icons">info</span>
                    Please note that all JavaScript plugins require <b>jQuery</b> to be included.
                </div>
                <div class="row row-nested">
                    <div class="col medium-6">
                        <p>The first form in the package (divided) contains the following structure:</p>
                        <pre>
divided/
├── css/
│   ├── material.grid.css
│   ├── material.components.css
│   ├── material.colors.css
│   └── material.theme.css
├── js/
│   ├── material.grid.js
│   └── material.theme.js
├── fonts/
│   ├── icons/
│   │   ├── codepoints
│   │   ├── material-icons.css
│   │   ├── MaterialIcons-Regular.eot
│   │   ├── MaterialIcons-Regular.ijmap
│   │   ├── MaterialIcons-Regular.svg
│   │   ├── MaterialIcons-Regular.ttf
│   │   ├── MaterialIcons-Regular.woff
│   │   ├── MaterialIcons-Regular.woff2
│   │   └── README.md
│   ├── roboto-bold-webfont.eot
│   ├── roboto-bold-webfont.svg
│   ├── roboto-bold-webfont.ttf
│   ├── roboto-bold-webfont.woff
│   ├── roboto-bold-webfont.woff2
│   ├── roboto-italic-webfont.eot
│   ├── roboto-italic-webfont.svg
│   ├── roboto-italic-webfont.ttf
│   ├── roboto-italic-webfont.woff
│   ├── roboto-italic-webfont.woff2
│   ├── roboto-regular-webfont.eot
│   ├── roboto-regular-webfont.svg
│   ├── roboto-regular-webfont.ttf
│   ├── roboto-regular-webfont.woff
│   └── roboto-regular-webfont.woff2
├── template.html
├── LIECENSE
└── README.md
                        </pre>
                    </div>
                    <div class="col medium-6">
                        <p>The second form in the package (compiled) contains the following structure:</p>
                        <pre>
compiled/
├── css/
│   ├── material.grid.css
│   └── material.theme.css
├── js/
│   ├── material.grid.js
│   └── material.theme.js
├── fonts/
│   ├── icons/
│   │   ├── codepoints
│   │   ├── material-icons.css
│   │   ├── MaterialIcons-Regular.eot
│   │   ├── MaterialIcons-Regular.ijmap
│   │   ├── MaterialIcons-Regular.svg
│   │   ├── MaterialIcons-Regular.ttf
│   │   ├── MaterialIcons-Regular.woff
│   │   ├── MaterialIcons-Regular.woff2
│   │   └── README.md
│   ├── roboto-bold-webfont.eot
│   ├── roboto-bold-webfont.svg
│   ├── roboto-bold-webfont.ttf
│   ├── roboto-bold-webfont.woff
│   ├── roboto-bold-webfont.woff2
│   ├── roboto-italic-webfont.eot
│   ├── roboto-italic-webfont.svg
│   ├── roboto-italic-webfont.ttf
│   ├── roboto-italic-webfont.woff
│   ├── roboto-italic-webfont.woff2
│   ├── roboto-regular-webfont.eot
│   ├── roboto-regular-webfont.svg
│   ├── roboto-regular-webfont.ttf
│   ├── roboto-regular-webfont.woff
│   └── roboto-regular-webfont.woff2
├── template.html
├── LIECENSE
└── README.md
                        </pre>
                    </div>
                </div>
            </section>

            <section id="basic_template" class="chapter">
                <h1 class="chapter-title <?= $primaryColor ?>">Basic template</h1>
                <p class="chapter-intro">
                    Start with this basic HTML template. We hope you'll customize our template, adapting it to suit your needs.
                </p>
                <div class="note bg-<?= $primaryColor ?>">
                    <span class="material-icons">info</span>
                    This template is already included in the package <b>(template.html)</b>.
                </div>
                <pre>
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
&lt;meta charset="utf-8"&gt;
&lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;
&lt;meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"&gt;
&lt;!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags --&gt;
&lt;title&gt;Material Template&lt;/title&gt;

&lt;!-- Material Icons --&gt;
&lt;link href="fonts/icons/material-icons.css" rel="stylesheet"&gt;
&lt;!-- Material Grid --&gt;
&lt;link href="css/material.grid.css" rel="stylesheet"&gt;
&lt;link href="css/material.components.css" rel="stylesheet"&gt;
&lt;link href="css/material.colors.css" rel="stylesheet"&gt;
&lt;link href="css/material.theme.css" rel="stylesheet"&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;div id="side-nav"&gt;
    &lt;div class="side-nav-container"&gt;
        &lt;div class="logo"&gt;
            &lt;a href="javascript: ;" class="indigo"&gt;Material Grid&lt;/a&gt;
        &lt;/div&gt;
        &lt;div class="nav indigo"&gt;
            &lt;div class="nav-block active"&gt;
                &lt;a href="javascript: ;" class="dropdown"&gt;Menu item&lt;/a&gt;
                &lt;div class="sub-menu"&gt;
                    &lt;a href="javascript: ;"&gt;Sub menu item&lt;/a&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="copyright"&gt;
            &lt;div&gt;Copyright &amp;copy;&lt;/div&gt;
            &lt;div&gt;&lt;a href="javascript: ;"&gt;Material Grid&lt;/a&gt; template&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div id="page-content-overlay"&gt;&lt;/div&gt;
&lt;div id="page-content"&gt;
    &lt;div class="top-bar bg-indigo"&gt;
        &lt;button class="side-nav-toggle" onclick="side_nav_open();"&gt;&lt;i class="material-icons"&gt;menu&lt;/i&gt;&lt;/button&gt;
        &lt;div class="section-title"&gt;Getting started&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="page-header bg-indigo"&gt;
        &lt;div class="container"&gt;
            &lt;div class="row"&gt;
                &lt;div class="col medium-12"&gt;
                    &lt;div class="page-title"&gt;Getting started&lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="container"&gt;
        &lt;div class="row"&gt;
            &lt;div class="col medium-12"&gt;
                &lt;h1 class="indigo"&gt;// PAGE CONTENT&lt;/h1&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"&gt;&lt;/script&gt;
&lt;script src="js/material.grid.js"&gt;&lt;/script&gt;
&lt;script src="js/material.theme.js"&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
                </pre>
            </section>

            <section id="community" class="chapter">
                <h1 class="chapter-title <?= $primaryColor ?>">Community</h1>
                <p class="chapter-intro">
                    Stay up to date on the development of Material Grid and reach out to the community with these helpful resources.
                </p>
                <ul>
                    <li>Subscribe to <a href="javascript: ;">The Github Repository</a>.</li>
                    <li>For help, ask on <a href="javascript: ;">StackOverflow using the tag <code>material-grid-framework</code></a>.</li>
                    <li>Developers should use the keyword <code>material-grid</code> on packages which modify or add to the functionality of Material Grid when distributing through any delivery mechanisms for maximum discoverability.</li>
                </ul>
            </section>

            <section id="browser_zooming" class="chapter">
                <h1 class="chapter-title <?= $primaryColor ?>">Browser zooming</h1>
                <p class="chapter-intro">
                    Page zooming inevitably presents rendering artifacts in some components, both in Material Grid and the rest of the web. Depending on the issue, we may be able to fix it (search first and then open an issue if need be). However, we tend to ignore these as they often have no direct solution other than hacky workarounds.
                </p>
            </section>

            <section id="sticky_on_mobile" class="chapter">
                <h1 class="chapter-title <?= $primaryColor ?>">Sticky <code>:hover/:focus</code> on mobile</h1>
                <p class="chapter-intro">
                    Even though real hovering isn't possible on most touchscreens, most mobile browsers emulate hovering support and make <code>:hover</code> "sticky". In other words, <code>:hover</code> styles start applying after tapping an element and only stop applying after the user taps some other element. This can cause Material Grid's <code>:hover</code> states to become unwantedly "stuck" on such browsers. Some mobile browsers also make <code>:focus</code> similarly sticky. There is currently no simple workaround for these issues other than removing such styles entirely.
                </p>
            </section>

            <section id="third_party_support" class="chapter">
                <h1 class="chapter-title <?= $primaryColor ?>">Third party support</h1>
                <p class="chapter-intro">
                    While we don't officially support any third party plugins or add-ons, we do offer some useful advice to help avoid potential issues in your projects.
                </p>
                <h2>Box-sizing</h2>
                <p>
                    Some third party software, including Google Maps and Google Custom Search Engine, conflict with Material Grid due to <code>* { box-sizing: border-box; }</code>, a rule which makes it so <code>padding</code> does not affect the final computed width of an element. Learn more about <a href="https://css-tricks.com/box-sizing/" target="_blank">box model and sizing at CSS Tricks</a>.
                </p>
                <p>
                    Depending on the context, you may override as-needed (Option 1) or reset the box-sizing for entire regions (Option 2).
                </p>
                <pre>
/* Box-sizing resets
*
* Reset individual elements or override regions to avoid conflicts due to
* global box model settings of Bootstrap. Two options, individual overrides and
* region resets, are available as plain CSS and uncompiled Less formats.
*/

/* Option 1: Override a single element's box model via CSS */
.element {
-webkit-box-sizing: content-box;
 -moz-box-sizing: content-box;
      box-sizing: content-box;
}

/* Option 2: Reset an entire region via CSS */
.reset-box-sizing,
.reset-box-sizing *,
.reset-box-sizing *:before,
.reset-box-sizing *:after {
-webkit-box-sizing: content-box;
 -moz-box-sizing: content-box;
      box-sizing: content-box;
}
                </pre>
            </section>
        </div>
    </div>

<?php include 'includes/_footer.php'; ?>