<?php
$primaryColor = 'indigo';
$accentColor = 'orange';
$theme = 'dark-theme';
$pageTitle = 'Selection Controls';
$page = 'selection_controls.php';
$pageCat = 'Components - ';
?>
<?php include 'includes/_header.php'; ?>

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

<?php include 'includes/_footer.php'; ?>