<?php
$primaryColor = 'indigo';
$accentColor = 'orange';
$theme = 'dark-theme';
$pageTitle = 'Getting started';
$page = 'button.php';
$pageCat = 'Components - ';
?>
<?php include 'includes/_header.php'; ?>

    <section class="section article">
        <div class="row">
            <div class="col medium-12">
                <div class="chapter module">
                    <h1 class="chapter-title <?= $primaryColor ?>">Buttons</h1>
                    <p>Buttons communicate the action that will occur when the user touches them.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col medium-4">
                <div class="module">
                    <p>Material buttons trigger an ink reaction on press. They may display text, imagery, or both. Flat buttons and raised buttons are the most commonly used types.</p>
                    <p>Additional button types include:</p>
                    <ul>
                        <li><b>Persistent footer</b> buttons are flat buttons that may be used in screen footers or dialogs.</li>
                        <li><b>Dropdown buttons</b> display multiple selections.</li>
                        <li><b>Toggle buttons</b> group related options. Icon toggles allow a single choice to be selected or deselected.</li>
                    </ul>
                </div>
            </div>
            <div class="col medium-4">
                <div class="module">
                    <p class="bold">Flat buttons</p>
                    <p>Flat buttons are text-only buttons. They may be used in dialogs, toolbars, or inline. They do not lift, but fill with color on press.</p>
                </div>

                <div class="module">
                    <p class="bold">Raised buttons</p>
                    <p>Raised buttons are rectangular-shaped buttons. They may be used inline. They lift and display ink reactions on press.</p>
                </div>

                <div class="module">
                    <p class="bold">Elevation</p>
                    <p>Flat buttons: 0dp, Raised buttons: 2dp.</p>
                </div>
            </div>
            <div class="col medium-4">
                <img src="img/components_buttons.png">
            </div>
        </div>
    </section>

    <section class="section">
        <div class="row">
            <div class="col medium-12">
                <div class="material-toc <?= $primaryColor ?>">
                    <div class="title">Contents</div>
                    <div class="link">
                        <a href="#button-types">Button Types</a>
                    </div>
                    <div class="link">
                        <a href="#usage">Usage</a>
                    </div>
                    <div class="link">
                        <a href="#flat-buttons">Flat Buttons</a>
                    </div>
                    <div class="link">
                        <a href="#raised-buttons">Raised Buttons</a>
                    </div>
                    <div class="link">
                        <a href="#floating-buttons">Floating Buttons</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="button-types" class="section article">
        <div class="row">
            <div class="col medium-12">
                <h1 class="<?= $primaryColor ?>">Button Types</h1>
                <p>There are three standard types of buttons:</p>
                <ul>
                    <li>Floating action button: A circular material button that lifts and displays an ink reaction on press.</li>
                    <li>Raised button: A typically rectangular material button that lifts and displays ink reactions on press.</li>
                    <li>Flat button: A button made of ink that displays ink reactions on press but does not lift.</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col medium-4">
                <img src="img/components_buttons_usage1.png">
                <p>Floating action button</p>
            </div>
            <div class="col medium-4">
                <img src="img/components_buttons_usage2.png">
                <p>Raised button</p>
            </div>
            <div class="col medium-4">
                <img src="img/components_buttons_usage3.png">
                <p>Flat button</p>
            </div>
        </div>
    </section>
    <section class="section article">
        <div class="row">
            <div class="col medium-5">
                <div class="module">
                    <h3>Choosing button style</h3>
                    <p>Choosing a button style depends on the primacy of the button, the number of containers on screen, and the screen layout.</p>
                    </div>
                <div class="module">
                    <p><b>Function:</b> Is it important and ubiquitous enough to be a floating action button?</p>
                    <p><b>Dimension:</b> Choose raised or flat depending on the container it will be in and how many z-space layers you have on screen. There should not be many layers of objects on the screen.</p>
                    <p><b>Layout:</b> Use primarily one type of button per container. Only mix button types when you have a good reason to, such as emphasizing an important function.</p>
                </div>
            </div>
            <div class="col medium-7">
                <img src="img/components_buttons_usage_main.png">
                <div class="module"></div>
            </div>
        </div>
    </section>

    <div class="row">
        <div class="col medium-12">
            <div class="module"></div>
            <div class="module"></div>
            <div class="divider"></div>
        </div>
    </div>

    <section id="usage" class="section article">
        <div class="row">
            <div class="col medium-12">
                <h1 class="<?= $primaryColor ?>">Usage</h1>
            </div>
        </div>
        <div class="row">
            <div class="col medium-4">
                <h3>Button types</h3>
                <p>The type of button used should be suited to the context in which it appears.</p>
            </div>
            <div class="col medium-8">
                <table>
                    <thead>
                        <tr>
                            <th>Context</th>
                            <th>Button type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Dialogs</td>
                            <td>Use flat buttons in dialogs.</td>
                        </tr>
                        <tr>
                            <td>Inline</td>
                            <td>Depending on your layout, use raised buttons or flat buttons for inline buttons.</td>
                        </tr>
                        <tr>
                            <td>Persistent availability</td>
                            <td>If your app requires actions to be persistent and readily available to the user, consider using the floating action button or persistent footer buttons.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col medium-12">
                <div class="module"></div>
                <div class="module">
                    <h3>Recommended button placement</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col medium-6">
                <div class="module">
                    <p class="bold">Standard dialogs</p>
                    <p>Button alignment on screen: right</p>
                    <p>Place the affirmative button on the right, the dismissive button on the left.</p>
                </div>
            </div>
            <div class="col medium-6">
                <div class="module">
                    <p class="bold">Forms</p>
                    <p>Button alignment on screen: left</p>
                    <p>Place the affirmative button on the left, the dismissive button on the right.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col medium-6">
                <div class="module">
                    <p class="bold">Cards</p>
                    <p>Buttons are best placed on the left side of a card to increase their visibility. However, as cards have flexible layouts, buttons may be placed in a location suited to the content and context, while maintaining consistency within the product.</p>
                </div>
            </div>
            <div class="col medium-6">
                <div class="module">
                    <p class="bold">Non-standard dialogs and modal windows</p>
                    <p>Button placement in non-standard dialogs and modal windows depends on the complexity of the content they contain.</p>
                    <p>For dialogs with relatively simple content, it is recommended to place buttons on the right side of a dialog, with the affirmative button to the right of the dismissive button.</p>
                    <p>For lengthy or complex forms, it is recommended to place buttons on the left of the form, with the affirmative button to the left of the dismissive button.</p>
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

    <section id="flat-buttons" class="section article">
        <div class="row">
            <div class="col medium-12">
                <h1 class="<?= $primaryColor ?>">Flat Buttons</h1>
                <div class="module">
                    <h3>Usage</h3>
                    <p>Flat buttons are printed on material. They do not lift, but fill with color on press.</p>
                    <p>Use flat buttons in the following locations:</p>
                    <ul>
                        <li>On toolbars</li>
                        <li>In dialogs, to unify the button action with the dialog content</li>
                        <li>Inline, with padding, so the user can easily find them</li>
                    </ul>
                </div>

                <h3>Example</h3>
                <div class="module">
                    <h4>Regular buttons</h4>
                    <div class="btn-group">
                        <button class="btn text-primary blue">Flat Button</button>
                        <button class="btn text-primary blue" disabled>Flat Button (Disabled)</button>
                    </div>

                    <h4>Dense style buttons</h4>
                    <div class="btn-group">
                        <button class="btn text-primary dense blue">Flat Button</button>
                        <button class="btn text-primary dense blue" disabled>Flat Button (Disabled)</button>
                    </div>
<pre class="html">
<?= htmlspecialchars('
<div class="btn-group">
<button class="btn text-primary blue">Flat Button</button>
<button class="btn text-primary blue" disabled>Flat Button (Disabled)</button>
</div>

<div class="btn-group">
<button class="btn text-primary dense blue">Flat Button</button>
<button class="btn text-primary dense blue" disabled>Flat Button (Disabled)</button>
</div>

') ?>
</pre>
<p class="italic">Note: to align buttons inside <code class="hljs-string">.btn-group</code> you can add <code class="hljs-string">.btn-align-left</code> and <code class="hljs-string">.btn-align-right</code> classes</p>
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

    <section id="raised-buttons" class="section article">
        <div class="row">
            <div class="col medium-12">
                <h1 class="<?= $primaryColor ?>">Raised Buttons</h1>
                <div class="module">
                    <h3>Usage</h3>
                    <p>Raised buttons add dimension to mostly flat layouts. They emphasize functions on busy or wide spaces.</p>
                    <p>Raised buttons behave like a piece of material resting on another sheet – they lift and fill with color on press.</p>
                </div>

                <h3>Example</h3>
                <div class="module">
                    <h4>Regular buttons</h4>
                    <div class="btn-group">
                        <button class="btn text-primary raised bg-blue">Raised Button</button>
                        <button class="btn text-primary raised bg-blue" disabled>Raised Button (Disabled)</button>
                    </div>

                    <h4>Dense style buttons</h4>
                    <div class="btn-group">
                        <button class="btn text-primary dense raised bg-blue">Raised Button</button>
                        <button class="btn text-primary dense raised bg-blue" disabled>Raised Button (Disabled)</button>
                    </div>
<pre class="html">
<?= htmlspecialchars('
<div class="btn-group">
<button class="btn text-primary raised bg-blue">Raised Button</button>
<button class="btn text-primary raised bg-blue" disabled>Raised Button (Disabled)</button>
</div>

<div class="btn-group">
<button class="btn text-primary dense raised bg-blue">Raised Button</button>
<button class="btn text-primary dense raised bg-blue" disabled>Raised Button (Disabled)</button>
</div>

') ?>
</pre>
                </div>
                <div class="module">
                    <h4>Button Elevation</h4>
                    <p>Raised buttons have a default elevation of 2dp.</p>
                    <p>On desktop, raised buttons can gain this elevation on hover.</p>
                    <p>To achieve this effect add <code class="hljs-string">.elevate</code> to a raised button element.</p>
                    <div class="btn-group">
                        <button class="btn text-primary raised elevate bg-blue">Raised Button</button>
                        <button class="btn text-primary dense raised elevate bg-blue">Raised Button</button>
                    </div>
<pre class="html">
<?= htmlspecialchars('
<div class="btn-group">
<button class="btn text-primary raised elevate bg-blue">Raised Button</button>
<button class="btn text-primary dense raised elevate bg-blue">Raised Button</button>
</div>

') ?>
</pre>
<p class="italic">Note: to align buttons inside <code class="hljs-string">.btn-group</code> you can add <code class="hljs-string">.btn-align-left</code> and <code class="hljs-string">.btn-align-right</code> classes</p>
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

    <section id="floating-buttons" class="section article">
        <div class="row">
            <div class="col medium-12">
                <h1 class="<?= $primaryColor ?>">Floating Buttons</h1>
                <div class="module">
                    <h3>Usage</h3>
                    <p>Only one floating action button is recommended per screen to represent the most common action.</p>
                </div>

                <h3>Example</h3>
                <div class="module">
                    <button class="btn text-primary raised floating bg-blue">edit</button>
                    <button class="btn text-primary raised floating bg-blue" disabled="">edit</button>
                    <button class="btn text-primary raised floating mini bg-blue">edit</button>
                    <button class="btn text-primary raised floating mini bg-blue" disabled="">edit</button>
<pre class="html">
<?= htmlspecialchars('
<button class="btn text-primary raised floating bg-blue">edit</button>
<button class="btn text-primary raised floating bg-blue" disabled="">edit</button>
<button class="btn text-primary raised floating mini bg-blue">edit</button>
<button class="btn text-primary raised floating mini bg-blue" disabled="">edit</button>

') ?>
</pre>
<p class="italic">Note: floating buttons uses Material icons. to see the full list of available icons please visit <a href="https://material.io/icons/" target="_blank">Material icons website</a></p>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/_footer.php'; ?>