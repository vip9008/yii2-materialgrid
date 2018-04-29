<?php
$primaryColor = 'indigo';
$accentColor = 'orange';
$theme = 'dark-theme';
$pageTitle = 'Getting started';
?>
<?php include 'includes/_header.php'; ?>

    <section class="section article">
        <div class="row">
            <div class="col medium-12">
                <div class="chapter module">
                    <h1 class="chapter-title <?= $primaryColor ?>">Cards</h1>
                    <p>A card is a sheet of material that serves as an entry point to more detailed information.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col medium-4">
                <div class="module">
                    <p>Cards may contain a photo, text, and a link about a single subject. They may display content containing elements of varying size, such as photos with captions of variable length.</p>
                    <p>A card collection is a layout of cards on the same plane.</p>
                </div>
            </div>
            <div class="col medium-4">
                <div class="module">
                    <p class="bold">Usage</p>
                    <p>Cards display content composed of different elements whose size or supported actions vary.</p>
                </div>
                <div class="module">
                    <p class="bold">Related components</p>
                    <p>Grid lists</p>
                </div>
            </div>
            <div class="col medium-4">
                <img src="img/components_cards.png">
            </div>
        </div>
    </section>

    <section class="section">
        <div class="row">
            <div class="col medium-12">
                <div class="material-toc <?= $primaryColor ?>">
                    <div class="card-title">Contents</div>
                    <div class="link">
                        <a href="#usage">Usage</a>
                    </div>
                    <div class="link">
                        <a href="#content">Content</a>
                    </div>
                    <div class="link">
                        <a href="#card-structure">Card Structure</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="usage" class="section article">
        <div class="row">
            <div class="col medium-5">
                <div class="module">
                    <h1 class="<?= $primaryColor ?>">Usage</h1>
                    <p>Cards are a convenient means of displaying content composed of different elements. They’re also well-suited for showcasing elements whose size or supported actions vary, like photos with captions of variable length.</p>
                </div>
                <div class="module">
                    <h3>When to use</h3>
                    <p>Use a card layout when displaying content that:</p>
                    <ul>
                        <li>As a collection, comprises multiple data types, such as images, movies, and text</li>
                        <li>Does not require direct comparison (a user is not directly comparing images or text)</li>
                        <li>Supports content of highly variable length, such as comments</li>
                        <li>Contains interactive content, such as +1 buttons or comments</li>
                        <li>Would otherwise be in a grid list but needs to display more content to supplement the image</li>
                    </ul>
                </div>
            </div>
            <div class="col medium-7">
                <img src="img/components_cards1.png">
                <p>Example of a card</p>
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

    <section id="content" class="section article">
        <div class="row">
            <div class="col medium-12">
                <h1 class="<?= $primaryColor ?>">Content</h1>
                <div class="module">
                    <p>Cards provide context and an entry point to more robust information and views, and their content and quantity can vary greatly. Cards within a card collection can each contain a unique data set, such as a checklist with an action, a note with an action, and a note with a photo.</p>
                    <p>Don't overload cards with extraneous information or actions.</p>
                </div>
                <div class="module">
                    <h3>Content hierarchy</h3>
                    <p>Use hierarchy within the card to direct users’ attention to the most important information. For example, place primary content at the top of the card, or use typography to emphasize primary content.</p>
                    <p>Images can reinforce other content in a card. However, their size and placement within the card depends on whether images are the primary content or are being used to supplement other content on the card.</p>
                </div>
                <div class="module">
                    <h3>Background images</h3>
                    <p>Text is most legible when placed on a solid color background with a sufficient contrast ratio to the text. Text placed on image backgrounds should preserve text legibility.</p>
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

    <section id="card-structure" class="section article">
        <div class="row">
            <div class="col medium-12">
                <h1 class="<?= $primaryColor ?>">Card Structure</h1>
                <div class="module">
                    <h3>Content block types</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col medium-4">
                <div class="card" style="margin-bottom: 6px;">
                    <div class="rich-media ratio-16by9" style="background-image: url('img/bg1.jpg');"></div>
                </div>
                <p>Rick media 16:9 aspect ratio</p>

                <div class="card" style="margin-bottom: 6px;">
                    <div class="rich-media ratio-1by1" style="background-image: url('img/bg2.jpg');"></div>
                </div>
                <p>Rick media 1:1 aspect ratio</p>
            </div>
            <div class="col medium-4">
                <div class="card">
                    <div class="actions">
                        <button class="btn text-primary">Action 1</button>
                        <button class="btn text-primary">Action 2</button>
                    </div>
                </div>
                <div class="card">
                    <div class="actions vertical">
                        <button class="btn text-primary">Action 1</button>
                        <button class="btn text-primary">Action 2</button>
                    </div>
                </div>
                <div class="card" style="margin-bottom: 6px;">
                    <div class="actions">
                        <div class="icons-group right">
                            <button class="material-icon">favorite</button>
                            <button class="material-icon">bookmark</button>
                            <button class="material-icon">share</button>
                        </div>
                    </div>
                </div>
                <p>Actions</p>

                <div class="card" style="margin-bottom: 6px;">
                    <div class="card-title">
                        <div class="avatar"><img src="img/user.jpg"></div>
                        <h3>Title</h3>
                        <div class="subtext">Subhead</div>
                    </div>
                </div>
                <p>Primary text with avatar</p>

                <div class="card" style="margin-bottom: 6px;">
                    <div class="card-title">
                        <h2>Primary title</h2>
                        <div class="subtext">Subtext goes here</div>
                    </div>
                </div>
                <p>Primary title</p>

                <div class="card" style="margin-bottom: 6px;">
                    <div class="card-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a lacinia arcu, vitae pharetra purus. Donec quis tempor libero, id laoreet ex. Fusce porta aliquet lectus, id venenatis risus placerat efficitur. Pellentesque molestie lacus id lacus posuere, non tincidunt augue congue. Integer at nunc eu eros volutpat vehicula.</p>
                    </div>
                </div>
                <p>Supporting text</p>
            </div>
        </div>
        <div class="row">
            <div class="col medium-12">
                <h3>Examples</h3>

                <div class="module">
                    <div class="card" style="max-width: 400px;">
                        <div class="rich-media ratio-1by1" style="background-image: url('img/bg2.jpg');"></div>

                        <div class="card-title">
                            <div class="avatar"><img src="img/user.jpg"></div>
                            <h3>Primary title</h3>
                            <div class="subtext">Subtext goes here</div>
                        </div>

                        <div class="actions">
                            <button class="btn text-primary">Action 1</button>
                            <button class="btn text-primary">Action 2</button>
                            <div class="icons-group right">
                                <button class="material-icon">share</button>
                            </div>
                        </div>
                    </div>
                    
<pre class="html">
<?= htmlspecialchars('
<div class="card">
<div class="rich-media ratio-1by1" style="background-image: url(\'img/bg2.jpg\');"></div>

<div class="card-title">
    <div class="avatar"><img src="img/user.jpg"></div>
    <h3>Primary title</h3>
    <div class="subtext">Subtext goes here</div>
</div>

<div class="actions">
    <button class="btn text-primary">Action 1</button>
    <button class="btn text-primary">Action 2</button>
    <div class="icons-group right">
        <button class="material-icon">share</button>
    </div>
</div>
</div>

') ?>
</pre>
                </div>

                <div class="module">
                    <div class="card" style="max-width: 400px;">
                        <div class="bg-<?= $accentColor ?>">
                            <div class="rich-media" style="background-image: url('img/bg1.jpg');"></div>

                            <div class="card-title">
                                <h2>Primary title</h2>
                                <div class="subtext">Subtext goes here</div>
                            </div>

                            <div class="card-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a lacinia arcu, vitae pharetra purus. Donec quis tempor libero, id laoreet ex. Fusce porta aliquet lectus, id venenatis risus placerat efficitur. Pellentesque molestie lacus id lacus posuere, non tincidunt augue congue. Integer at nunc eu eros volutpat vehicula.</p>
                            </div>

                            <div class="actions vertical">
                                <button class="btn text-primary">Action 1</button>
                                <button class="btn text-primary">Action 2</button>
                            </div>
                        </div>
                    </div>
                    
<pre class="html">
<?= htmlspecialchars('
<div class="card">
<div class="bg-blue">
    <div class="rich-media" style="background-image: url(\'img/bg1.jpg\');"></div>

    <div class="card-title">
        <h2>Primary title</h2>
        <div class="subtext">Subtext goes here</div>
    </div>

    <div class="card-text">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a lacinia arcu, vitae pharetra purus. Donec quis tempor libero, id laoreet ex. Fusce porta aliquet lectus, id venenatis risus placerat efficitur. Pellentesque molestie lacus id lacus posuere, non tincidunt augue congue. Integer at nunc eu eros volutpat vehicula.</p>
    </div>

    <div class="actions vertical">
        <button class="btn text-primary">Action 1</button>
        <button class="btn text-primary">Action 2</button>
    </div>
</div>
</div>

') ?>
</pre>
                </div>

                <div class="module">
                    <div class="card" style="max-width: 400px;">
                        <div class="rich-media ratio-1by1" style="background-image: url('img/bg2.jpg');">
                            <div class="content dark-theme">
                                <div class="card-title">
                                    <h2>Primary title</h2>
                                    <div class="subtext">Subtext goes here</div>
                                </div>

                                <div class="actions">
                                    <button class="btn text-primary">Action 1</button>
                                    <button class="btn text-primary">Action 2</button>
                                    <div class="icons-group right">
                                        <button class="material-icon">share</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
<pre class="html">
<?= htmlspecialchars('
<div class="card">
<div class="rich-media ratio-1by1" style="background-image: url(\'img/bg2.jpg\');">
    <div class="content dark-theme">
        <div class="card-title">
            <h2>Primary title</h2>
            <div class="subtext">Subtext goes here</div>
        </div>

        <div class="actions">
            <button class="btn text-primary">Action 1</button>
            <button class="btn text-primary">Action 2</button>
            <div class="icons-group right">
                <button class="material-icon">share</button>
            </div>
        </div>
    </div>
</div>
</div>

') ?>
</pre>
                </div>

                <div class="clearfix">
                    <div class="module" style="display: inline-block;">
                        <div class="card" style="max-width: 400px;">
                            <div class="card-title">
                                <div class="media size-1"><img src="img/user.jpg"></div>
                                <h2>Primary title</h2>
                                <div class="subtext">Subtext goes here</div>
                            </div>

                            <div class="actions">
                                <button class="btn text-primary">Action 1</button>
                                <button class="btn text-primary">Action 2</button>
                            </div>
                        </div>
                    </div>
                    <div class="module" style="display: inline-block;">
                        <div class="card" style="max-width: 400px;">
                            <div class="card-title">
                                <div class="media size-2"><img src="img/user.jpg"></div>
                                <h2>Primary title</h2>
                                <div class="subtext">Subtext goes here</div>
                            </div>

                            <div class="actions">
                                <button class="btn text-primary">Action 1</button>
                                <button class="btn text-primary">Action 2</button>
                            </div>
                        </div>
                    </div>
                    <div class="module" style="display: inline-block;">
                        <div class="card" style="max-width: 400px;">
                            <div class="card-title">
                                <div class="media size-3"><img src="img/user.jpg"></div>
                                <h2>Primary title</h2>
                                <div class="subtext">Subtext goes here</div>
                            </div>

                            <div class="actions">
                                <button class="btn text-primary">Action 1</button>
                                <button class="btn text-primary">Action 2</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="module">
                    
<pre class="html">
<?= htmlspecialchars('
<div class="card">
<div class="card-title">
    <div class="media size-1"><img src="img/user.jpg"></div>
    <h2>Primary title</h2>
    <div class="subtext">Subtext goes here</div>
</div>

<div class="actions">
    <button class="btn text-primary">Action 1</button>
    <button class="btn text-primary">Action 2</button>
</div>
</div>

') ?>
</pre>
<p>Note: media element inside the title may may have one of three different sizes, you can use <code class="hljs-string">.size-1</code>, <code class="hljs-string">.size-2</code> or <code class="hljs-string">.size-3</code></p>
                </div>

                <div class="module">
                    <h4>Cards Elevation</h4>
                    <p>Cards have a default elevation of 2dp.</p>
                    <p>On desktop, cards can have a resting elevation of 0dp and gain an elevation of 8dp on hover.</p>
                    <p>To achieve this effect add <code class="hljs-string">.elevate</code> to a card element.</p>


                    <div class="card elevate" style="max-width: 400px;">
                        <div class="rich-media ratio-16by9" style="background-image: url('img/bg1.jpg');"></div>

                        <div class="card-title">
                            <div class="avatar"><img src="img/user.jpg"></div>
                            <h3>Primary title</h3>
                            <div class="subtext">Subtext goes here</div>
                        </div>

                        <div class="actions">
                            <button class="btn text-primary">Action 1</button>
                            <button class="btn text-primary">Action 2</button>
                            <div class="icons-group right">
                                <button class="material-icon">share</button>
                            </div>
                        </div>
                    </div>
<pre class="html">
<?= htmlspecialchars('
<div class="card elevate">
<div class="rich-media ratio-1by1" style="background-image: url(\'img/bg2.jpg\');"></div>

<div class="card-title">
    <div class="avatar"><img src="img/user.jpg"></div>
    <h3>Primary title</h3>
    <div class="subtext">Subtext goes here</div>
</div>

<div class="actions">
    <button class="btn text-primary">Action 1</button>
    <button class="btn text-primary">Action 2</button>
    <div class="icons-group right">
        <button class="material-icon">share</button>
    </div>
</div>
</div>

') ?>
</pre>

<?php include 'includes/_footer.php'; ?>