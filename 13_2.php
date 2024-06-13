<?php
$string = 'ahb acb aeb aeeb adcb axeb';
$pattern = '/a.b/';

if (preg_match_all($pattern, $string, $matches))
  echo implode(', ', $matches[0]);
else
  echo "No matches";
?>

<?php
$string = 'aba aca aea abba adca abea';
$pattern = '/a..a/';

if (preg_match_all($pattern, $string, $matches))
  echo implode(', ', $matches[0]);
else
  echo "No matches";
?>

<?php
$string = 'aba aca aea abba adca abea';
$pattern = '/ab.a/';

if (preg_match_all($pattern, $string, $matches))
  echo implode(', ', $matches[0]);
else
  echo "No matches";
?>

<?php
$string = 'aa aba abba abbba abca abea';
$pattern = '/ab+a/';

if (preg_match_all($pattern, $string, $matches))
  echo implode(', ', $matches[0]);
else
  echo "No matches";
?>

<?php
$string = 'aa aba abba abbba abca abea';
$pattern = '/ab*a/';

if (preg_match_all($pattern, $string, $matches))
  echo implode(', ', $matches[0]);
else
  echo "No matches";
?>

<?php
$string = 'aa aba abba abbba abca abea';
$pattern = '/ab?a/';

if (preg_match_all($pattern, $string, $matches))
  echo implode(', ', $matches[0]);
else
  echo "No matches";
?>

<?php
$string = 'ab abab abab abababab abea';
$pattern = '/\b(ab)+\b/';

if (preg_match_all($pattern, $string, $matches))
  echo implode(', ', $matches[0]);
else
  echo "No matches";
?>

<?php
$string = 'a.a aba aea';
$pattern = '/a\.a/';

if (preg_match_all($pattern, $string, $matches))
  echo implode(', ', $matches[0]);
else
  echo "No matches";
?>

<?php
$string = '2+3 223 2223';
$pattern = '/2\+3/';

if (preg_match_all($pattern, $string, $matches))
  echo implode(', ', $matches[0]);
else
  echo "No matches";
?>

<?php
$string = '23 2+3 2++3 2+++3 345 567';
$pattern = '/2\++3/';

if (preg_match_all($pattern, $string, $matches))
  echo implode(', ', $matches[0]);
else
  echo "No matches";
?>

<?php
$string = '23 2+3 2++3 2+++3 445 677';
$pattern = '/2\+*3/';

if (preg_match_all($pattern, $string, $matches))
  echo implode(', ', $matches[0]);
else
  echo "No matches";
?>

<?php
$string = '*+ *q+ *qq+ *qqq+ *qqq qqq+';
$pattern = '/\*q+\+/';

if (preg_match_all($pattern, $string, $matches))
  echo implode(', ', $matches[0]);
else
  echo "No matches";
?>

<?php
$string = '*+ *q+ *qq+ *qqq+ *qqq qqq+';
$pattern = '/\*q*\+/';

if (preg_match_all($pattern, $string, $matches))
  echo implode(', ', $matches[0]);
else
  echo "No matches";
?>

<?php
$string = 'aba accca azzza wwwwa';
$pattern = '/a([^a]+)a/';
preg_match_all($pattern, $string, $matches);
$res = implode(', ', $matches[0]);
echo $res . "\n";
$res = preg_replace('/a+/', '!', $res);
echo $res;
?>
