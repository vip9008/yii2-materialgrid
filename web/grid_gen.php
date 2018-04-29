<?php

$values = [
    '8.33333333%',
    '16.66666667%',
    '25%',
    '33.33333333%',
    '41.66666667%',
    '50%',
    '58.33333333%',
    '66.66666667%',
    '75%',
    '83.33333333%',
    '91.66666667%',
    '100%',
];

$column = '.col.xlarge';

$css_content = "";
foreach ($values as $i => $val) {
    $n = $i + 1;
    $css_content .= "$column-$n {\n";
    $css_content .= "    width: $val;\n}\n";
    $css_content .= "$column-offset-$n,\n";
    $css_content .= "html[dir=\"ltr\"] .row $column-offset-$n, html[dir] .row[dir=\"ltr\"] $column-offset-$n {\n";
    $css_content .= "    margin-left: $val;\n}\n";
    $css_content .= "$column-push-$n ,\n";
    $css_content .= "html[dir=\"ltr\"] .row $column-push-$n, html[dir] .row[dir=\"ltr\"] $column-push-$n {\n";
    $css_content .= "    left: $val;\n}\n";
    $css_content .= "$column-pull-$n ,\n";
    $css_content .= "html[dir=\"ltr\"] .row $column-pull-$n, html[dir] .row[dir=\"ltr\"] $column-pull-$n {\n";
    $css_content .= "    right: $val;\n}\n\n";

    $css_content .= "html[dir=\"rtl\"] .row $column-offset-$n, html[dir] .row[dir=\"rtl\"] $column-offset-$n {\n";
    $css_content .= "    margin-left: 0;\n";
    $css_content .= "    margin-right: $val;\n}\n";
    $css_content .= "html[dir=\"rtl\"] .row $column-push-$n, html[dir] .row[dir=\"rtl\"] $column-push-$n {\n";
    $css_content .= "    left: auto;\n";
    $css_content .= "    right: $val;\n}\n";
    $css_content .= "html[dir=\"rtl\"] .row $column-pull-$n, html[dir] .row[dir=\"rtl\"] $column-pull-$n {\n";
    $css_content .= "    right: auto;\n";
    $css_content .= "    left: $val;\n}\n\n";
}

echo "<pre>".$css_content."</pre>";

$css_file = fopen("colors_pallette.css", "w") or die("Unable to open file!");
fwrite($css_file, $css_content);
fclose($css_file);
