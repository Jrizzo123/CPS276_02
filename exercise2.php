<?php

$titleStr = "Exercise 2";
$heading1 = "My Web Page";
$paragraph = " ";
$paragraphStarter = "\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus feugiat mollis dolor at bibendum. In congue maximus ligula, ut faucibus mi accumsan at. Vestibulum sagittis tortor eget dui ultricies, a vulputate lacus faucibus. Fusce aliquet bibendum erat, sed bibendum eros cursus eu. Nulla at neque rhoncus, ultricies odio at, accumsan elit. Proin in turpis eu leo dapibus pulvinar. Vivamus viverra massa ut enim fringilla ultricies. Donec in enim blandit, iaculis nulla quis, egestas elit. Nullam ut enim id erat bibendum finibus nec ac eros. Nulla malesuada ex facilisis ultrices rhoncus. Nullam in euismod nisl. Donec pulvinar ex sit amet aliquet egestas.\n";
$footer = "My Web Page @2018";

$paragraphLength = 3;

for ($i = 0; $i < $paragraphLength; $i++) {
    $paragraph .= $paragraphStarter;
    $paragraph .= "<br> <br>";
}


echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head>';
	echo '<meta charset="UTF-8">';
	echo '<title>';
    echo $titleStr;
    echo '</title>';
	echo '<style>';
		echo '* {margin: 0; padding: 0;}';
		echo 'body {font: 120%/1.5 sans-serif;}';
		echo 'wrapper {width: 1000px; margin: 0 auto; border: 1px solid black;}';
		echo 'header {background: green; height: 150px; padding: 20px;}';
		echo 'header h1 {color: white;}';
		echo 'main {padding: 10px;}';
		echo 'main h2 {margin: 15px 0;}';
		echo 'main p {margin-bottom: 15px;}';
		echo 'footer {background: #eee; padding: 10px 0; text-align: center}';
		echo 'footer p {font-size: .8em;}';
    echo '</style>';
echo '</head>';
    echo '<body>';
	    echo '<div id="wrapper">';
		echo '<header>';
          echo '<h1>';
          echo $heading1;
          echo '</h1>';
          echo '</header>';
        echo '<main>';
          echo '<h2>My name is Jacob Rizzo</h2>';
          echo '<p>';
          echo $paragraph;
          echo '</p>';
			
       echo '</main>';
       echo '<footer>';
          echo '<p>';
          echo $footer;
          echo '</p>';
          echo '</footer>';
      echo '</div>';
	
  echo '</body>';
echo '</html>';



?>