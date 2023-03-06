<?php

$rows = 15;
$cols = 5;
$html_table = "<table border='1'>";

for ($i = 1; $i <= $rows; $i++) {
    $html_table .= "<tr>\n";
    for ($j = 1; $j <= $cols; $j++) {
        $html_table .= "<td>Row ${i} Cell ${j} </td>";
    }
    $html_table .= "</tr>\n";
}
$html_table .= "</table>\n";

echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>';
echo '<title>Exercise 3</title>';
echo '</head>';
echo '<body>';
echo $html_table;
echo '</body>';
echo '</html>';



?>