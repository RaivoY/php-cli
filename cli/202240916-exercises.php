<?php
echo strrev("Hello world!"); // outputs "!dlrow olleH"
?>

<?php
echo preg_replace_callback('~-([a-z])~', function ($match) {
    return strtoupper($match[1]);
}, 'job done');
?>

<?php
function oneParametr() {
  echo "Hello world!";
}
?>

<?php
function threeParameters() {
  echo "Hello world!";
}
?>

