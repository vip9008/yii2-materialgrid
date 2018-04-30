
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