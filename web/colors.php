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
<body>
    <div id="side-nav">
        <div class="side-nav-container">
            <div class="logo">
                <a href="javascript: ;" class="blue">Material Grid</a>
            </div>
            <div class="list blue">
                <?php include('menu.html'); ?>
            </div>
            <div class="copyright">
                <div>vip9008 &copy;</div>
                <div>Code licensed <a href="javascript: ;">MIT</a></div>
            </div>
        </div>
    </div>
    <div id="page-content-overlay"></div>
    <div id="page-content">
        <div class="top-bar bg-blue">
            <button class="side-nav-toggle" onclick="side_nav_open();"><i class="material-icons">menu</i></button>
            <div class="section-title"></div>
        </div>
        <div class="page-header bg-blue">
            <div class="container">
                <div class="row">
                    <div class="col large-12">
                        <div class="page-title">Style Colors</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <?php
            $palettes = [
                'Red' => [
                    '50' => ['#FFEBEE', true],
                    '100' => ['#FFCDD2', true],
                    '200' => ['#EF9A9A', true],
                    '300' => ['#E57373', true],
                    '400' => ['#EF5350', false],
                    '500' => ['#F44336', false],
                    '600' => ['#E53935', false],
                    '700' => ['#D32F2F', false],
                    '800' => ['#C62828', false],
                    '900' => ['#B71C1C', false],
                    'A100' => ['#FF8A80', true],
                    'A200' => ['#FF5252', false],
                    'A400' => ['#FF1744', false],
                    'A700' => ['#D50000', false],
                ],
                'Pink' => [
                    '50' => ['#FCE4EC', true],
                    '100' => ['#F8BBD0', true],
                    '200' => ['#F48FB1', true],
                    '300' => ['#F06292', false],
                    '400' => ['#EC407A', false],
                    '500' => ['#E91E63', false],
                    '600' => ['#D81B60', false],
                    '700' => ['#C2185B', false],
                    '800' => ['#AD1457', false],
                    '900' => ['#880E4F', false],
                    'A100' => ['#FF80AB', true],
                    'A200' => ['#FF4081', false],
                    'A400' => ['#F50057', false],
                    'A700' => ['#C51162', false],
                ],
                'Purple' => [
                    '50' => ['#F3E5F5', true],
                    '100' => ['#E1BEE7', true],
                    '200' => ['#CE93D8', true],
                    '300' => ['#BA68C8', false],
                    '400' => ['#AB47BC', false],
                    '500' => ['#9C27B0', false],
                    '600' => ['#8E24AA', false],
                    '700' => ['#7B1FA2', false],
                    '800' => ['#6A1B9A', false],
                    '900' => ['#4A148C', false],
                    'A100' => ['#EA80FC', true],
                    'A200' => ['#E040FB', false],
                    'A400' => ['#D500F9', false],
                    'A700' => ['#AA00FF', false],
                ],
                'Deep Purple' => [
					'50' => ['#EDE7F6', true],
					'100' => ['#D1C4E9', true],
					'200' => ['#B39DDB', true],
					'300' => ['#9575CD', false],
					'400' => ['#7E57C2', false],
					'500' => ['#673AB7', false],
					'600' => ['#5E35B1', false],
					'700' => ['#512DA8', false],
					'800' => ['#4527A0', false],
					'900' => ['#311B92', false],
					'A100' => ['#B388FF', true],
					'A200' => ['#7C4DFF', false],
					'A400' => ['#651FFF', false],
					'A700' => ['#6200EA', false],
                ],
                'Indigo' => [
					'50' => ['#E8EAF6', true],
					'100' => ['#C5CAE9', true],
					'200' => ['#9FA8DA', true],
					'300' => ['#7986CB', false],
					'400' => ['#5C6BC0', false],
					'500' => ['#3F51B5', false],
					'600' => ['#3949AB', false],
					'700' => ['#303F9F', false],
					'800' => ['#283593', false],
					'900' => ['#1A237E', false],
					'A100' => ['#8C9EFF', true],
					'A200' => ['#536DFE', false],
					'A400' => ['#3D5AFE', false],
					'A700' => ['#304FFE', false],
                ],
                'Blue' => [
					'50' => ['#E3F2FD', true],
					'100' => ['#BBDEFB', true],
					'200' => ['#90CAF9', true],
					'300' => ['#64B5F6', true],
					'400' => ['#42A5F5', true],
					'500' => ['#2196F3', false],
					'600' => ['#1E88E5', false],
					'700' => ['#1976D2', false],
					'800' => ['#1565C0', false],
					'900' => ['#0D47A1', false],
					'A100' => ['#82B1FF', true],
					'A200' => ['#448AFF', false],
					'A400' => ['#2979FF', false],
					'A700' => ['#2962FF', false],
                ],
                'Light Blue' => [
					'50' => ['#E1F5FE', true],
					'100' => ['#B3E5FC', true],
					'200' => ['#81D4FA', true],
					'300' => ['#4FC3F7', true],
					'400' => ['#29B6F6', true],
					'500' => ['#03A9F4', true],
					'600' => ['#039BE5', false],
					'700' => ['#0288D1', false],
					'800' => ['#0277BD', false],
					'900' => ['#01579B', false],
					'A100' => ['#80D8FF', true],
					'A200' => ['#40C4FF', true],
					'A400' => ['#00B0FF', true],
					'A700' => ['#0091EA', false],
                ],
                'Cyan' => [
					'50' => ['#E0F7FA', true],
					'100' => ['#B2EBF2', true],
					'200' => ['#80DEEA', true],
					'300' => ['#4DD0E1', true],
					'400' => ['#26C6DA', true],
					'500' => ['#00BCD4', true],
					'600' => ['#00ACC1', true],
					'700' => ['#0097A7', false],
					'800' => ['#00838F', false],
					'900' => ['#006064', false],
					'A100' => ['#84FFFF', true],
					'A200' => ['#18FFFF', true],
					'A400' => ['#00E5FF', true],
					'A700' => ['#00B8D4', true],
                ],
                'Teal' => [
					'50' => ['#E0F2F1', true],
					'100' => ['#B2DFDB', true],
					'200' => ['#80CBC4', true],
					'300' => ['#4DB6AC', true],
					'400' => ['#26A69A', true],
					'500' => ['#009688', false],
					'600' => ['#00897B', false],
					'700' => ['#00796B', false],
					'800' => ['#00695C', false],
					'900' => ['#004D40', false],
					'A100' => ['#A7FFEB', true],
					'A200' => ['#64FFDA', true],
					'A400' => ['#1DE9B6', true],
					'A700' => ['#00BFA5', true],
                ],
                'Green' => [
					'50' => ['#E8F5E9', true],
					'100' => ['#C8E6C9', true],
					'200' => ['#A5D6A7', true],
					'300' => ['#81C784', true],
					'400' => ['#66BB6A', true],
					'500' => ['#4CAF50', true],
					'600' => ['#43A047', false],
					'700' => ['#388E3C', false],
					'800' => ['#2E7D32', false],
					'900' => ['#1B5E20', false],
					'A100' => ['#B9F6CA', true],
					'A200' => ['#69F0AE', true],
					'A400' => ['#00E676', true],
					'A700' => ['#00C853', true],
                ],
                'Light Green' => [
					'50' => ['#F1F8E9', true],
					'100' => ['#DCEDC8', true],
					'200' => ['#C5E1A5', true],
					'300' => ['#AED581', true],
					'400' => ['#9CCC65', true],
					'500' => ['#8BC34A', true],
					'600' => ['#7CB342', true],
					'700' => ['#689F38', false],
					'800' => ['#558B2F', false],
					'900' => ['#33691E', false],
					'A100' => ['#CCFF90', true],
					'A200' => ['#B2FF59', true],
					'A400' => ['#76FF03', true],
					'A700' => ['#64DD17', true],
                ],
                'Lime' => [
					'50' => ['#F9FBE7', true],
					'100' => ['#F0F4C3', true],
					'200' => ['#E6EE9C', true],
					'300' => ['#DCE775', true],
					'400' => ['#D4E157', true],
					'500' => ['#CDDC39', true],
					'600' => ['#C0CA33', true],
					'700' => ['#AFB42B', true],
					'800' => ['#9E9D24', true],
					'900' => ['#827717', false],
					'A100' => ['#F4FF81', true],
					'A200' => ['#EEFF41', true],
					'A400' => ['#C6FF00', true],
					'A700' => ['#AEEA00', true],
                ],
                'Yellow' => [
					'50' => ['#FFFDE7', true],
					'100' => ['#FFF9C4', true],
					'200' => ['#FFF59D', true],
					'300' => ['#FFF176', true],
					'400' => ['#FFEE58', true],
					'500' => ['#FFEB3B', true],
					'600' => ['#FDD835', true],
					'700' => ['#FBC02D', true],
					'800' => ['#F9A825', true],
					'900' => ['#F57F17', true],
					'A100' => ['#FFFF8D', true],
					'A200' => ['#FFFF00', true],
					'A400' => ['#FFEA00', true],
					'A700' => ['#FFD600', true],
                ],
                'Amber' => [
					'50' => ['#FFF8E1', true],
					'100' => ['#FFECB3', true],
					'200' => ['#FFE082', true],
					'300' => ['#FFD54F', true],
					'400' => ['#FFCA28', true],
					'500' => ['#FFC107', true],
					'600' => ['#FFB300', true],
					'700' => ['#FFA000', true],
					'800' => ['#FF8F00', true],
					'900' => ['#FF6F00', true],
					'A100' => ['#FFE57F', true],
					'A200' => ['#FFD740', true],
					'A400' => ['#FFC400', true],
					'A700' => ['#FFAB00', true],
                ],
                'Orange' => [
					'50' => ['#FFF3E0', true],
					'100' => ['#FFE0B2', true],
					'200' => ['#FFCC80', true],
					'300' => ['#FFB74D', true],
					'400' => ['#FFA726', true],
					'500' => ['#FF9800', true],
					'600' => ['#FB8C00', true],
					'700' => ['#F57C00', true],
					'800' => ['#EF6C00', false],
					'900' => ['#E65100', false],
					'A100' => ['#FFD180', true],
					'A200' => ['#FFAB40', true],
					'A400' => ['#FF9100', true],
					'A700' => ['#FF6D00', true],
                ],
                'Deep Orange' => [
					'50' => ['#FBE9E7', true],
					'100' => ['#FFCCBC', true],
					'200' => ['#FFAB91', true],
					'300' => ['#FF8A65', true],
					'400' => ['#FF7043', true],
					'500' => ['#FF5722', false],
					'600' => ['#F4511E', false],
					'700' => ['#E64A19', false],
					'800' => ['#D84315', false],
					'900' => ['#BF360C', false],
					'A100' => ['#FF9E80', true],
					'A200' => ['#FF6E40', true],
					'A400' => ['#FF3D00', false],
					'A700' => ['#DD2C00', false],
                ],
                'Brown' => [
					'50' => ['#EFEBE9', true],
					'100' => ['#D7CCC8', true],
					'200' => ['#BCAAA4', true],
					'300' => ['#A1887F', false],
					'400' => ['#8D6E63', false],
					'500' => ['#795548', false],
					'600' => ['#6D4C41', false],
					'700' => ['#5D4037', false],
					'800' => ['#4E342E', false],
					'900' => ['#3E2723', false],
                ],
                'Grey' => [
					'50' => ['#FAFAFA', true],
					'100' => ['#F5F5F5', true],
					'200' => ['#EEEEEE', true],
					'300' => ['#E0E0E0', true],
					'400' => ['#BDBDBD', true],
					'500' => ['#9E9E9E', true],
					'600' => ['#757575', false],
					'700' => ['#616161', false],
					'800' => ['#424242', false],
					'900' => ['#212121', false],
                ],
                'Blue Grey' => [
					'50' => ['#ECEFF1', true],
					'100' => ['#CFD8DC', true],
					'200' => ['#B0BEC5', true],
					'300' => ['#90A4AE', true],
					'400' => ['#78909C', false],
					'500' => ['#607D8B', false],
					'600' => ['#546E7A', false],
					'700' => ['#455A64', false],
					'800' => ['#37474F', false],
					'900' => ['#263238', false],
                ],
                // 'Black' => [
                //     '500' => ['#000000', false]
                // ],
                // 'White' => [
                //     '500' => ['#FFFFFF', true]
                // ],
            ];
            ?>
            
            <div class="row">
                <div class="col large-12">
                    <h1 class="blue">Colors</h1>
                    <p>Material takes cues from contemporary architecture, road signs, pavement marking tape, and athletic courts. Color should be unexpected and vibrant.</p>
                    <p>This color palette comprises primary and accent colors that can be used for illustration or to develop your brand colors. They’ve been designed to work harmoniously with each other. The color palette starts with primary colors and fills in the spectrum to create a complete and usable palette for Android, Web, and iOS. Google suggests using the 500 colors as the primary colors in your app and the other colors as accents colors. </p>
                    <p>Themes enable consistent app styling through surface shades, shadow depth, and ink opacity.</p>

                    <h1 class="blue">List of all colors</h1>
                    <ul class="colors-list clearfix">
                        <?php foreach ($palettes as $color_name => $colors) {
                            echo "<li>$color_name</li>";
                        } ?>
                        <li>Black</li>
                        <li>White</li>
                    </ul>
<pre>
<?php
function hex_to_rgb($hexa) {
    $red = hexdec(substr($hexa, 1, 2));
    $green = hexdec(substr($hexa, 3, 2));
    $blue = hexdec(substr($hexa, 5, 2));

    return "$red, $green, $blue";
}
?>
</pre>
                </div>
            </div>

            <div class="row">
                <?php
                $count = 0;
                foreach($palettes as $color_name => $colors) {
                    if ($count % 3 == 0) {
                        echo '<div class="clearfix hidden-small hidden-xsamllext hidden-xsmall"></div>';
                    }
                    if ($count % 2 == 0) {
                        echo '<div class="clearfix visible-small visible-xsamllext visible-xsmall"></div>';
                    }
                    $count++;
                ?>
                <div class="col smallext-4 small-4">
                    <ul class="pallete z-depth-1">
                        <li class="bg-<?= strtolower(str_replace(' ', '-', $color_name)) ?>">
                            <div class="title"><?= $color_name ?></div>
                            <span class="left">500</span>
                            <span class="right"><?= $colors['500'][0] ?></span>
                        </li>
                        <li class="space"></li>
                        <?php foreach ($colors as $sat => $hex) { ?>
                            <?php if ($sat == 'A100') { ?>
                                <li class="space"></li>
                            <?php } ?>
                            <li class="bg-<?= strtolower(str_replace(' ', '-', $color_name))."-".$sat ?>">
                                <span class="left"><?= $sat ?></span>
                                <span class="right"><?= $hex[0] ?></span>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <?php } ?>
                <div class="col smallext-4 small-4">
                    <ul class="pallete z-depth-1">
                        <li class="bg-black">
                            <span class="left">Black</span>
                            <span class="right">#000000</span>
                        </li>
                        <li class="bg-white">
                            <span class="left">White</span>
                            <span class="right">#FFFFFF</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <style type="text/css">
        ul.colors-list > li {
            width: 33.333333%;
            float: left;
            min-width: 200px;
        }

        ul.pallete {
            margin: 15px 0;
            padding: 0;
            list-style-type: none;
        }

        ul.pallete li {
            padding: 10px 15px 11px;
            margin: 0;
            font-size: 14px;
            font-weight: 500;
        }

        ul.pallete li:after {
            content: '';
            display: block;
            width: 100%;
            height: 0;
            clear: both;
        }

        ul.pallete li.space {
            padding: 2px 0;
            background-color: white;
        }

        ul.pallete .title {
            font-size: inherit;
            font-weight: inherit;
            margin-bottom: 53px;
        }

        ul.pallete .left {
            font-size: inherit;
            font-weight: inherit;
            float: left;
        }

        ul.pallete .right {
            font-size: inherit;
            font-weight: inherit;
            float: right;
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="js/material.grid.js"></script>
    <script src="js/material.theme.js"></script>
</body>
</html>