<p><a href="javascript:history.back()">back</a><br></p>
<?php
$x = true;
$y = false;
echo '$x = true; $y = false;<br>';
echo '<hr>';
echo var_dump($x && $y) . ' = $x && $y<br>';
echo var_dump($x || $y) . ' = $x || $y<br>';
echo var_dump(!$x) . ' = !$x<br>';
echo var_dump(!$y) . ' = !$y<br>';



