<?php

$numMain = 4;
$numSub = 5;
$html_list = "<ul>";

for ($i = 1; $i <= $numMain; $i++) {
  $html_list .= "<li> ${i}\n";
  $html_list .= "<ul>";
  for ($j = 1; $j <= $numSub; $j++) {
    $html_list .= "<li> ${j} </li>\n";
  }
  $html_list .= "</ul>\n";
}
$html_list .= "</ul>\n";

echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>'; 
echo '<title>Exercise 1</title>';
echo '</head>';
echo '<body>';
echo $html_list;
echo '</body>';
echo '</html>';

?>