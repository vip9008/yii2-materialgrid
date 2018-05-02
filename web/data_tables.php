<?php
$primaryColor = 'indigo';
$accentColor = 'orange';
$theme = 'dark-theme';
$pageTitle = 'Data tables';
$page = 'data_tables.php';
$pageCat = 'Components - ';
?>
<?php include 'includes/_header.php'; ?>

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

<?php include 'includes/_footer.php'; ?>