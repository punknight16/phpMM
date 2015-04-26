<?php
echo "hello there, So I hear you're learning to be a PHP programmer!\n";
echo "why don't you type in your name for me?\n";
$name = trim(fgets(STDIN));

echo "\nThanks, " . $name . ", it's really nice to meet you.\n";

?>