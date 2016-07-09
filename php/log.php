<?php
include 'options.php';

if (!$opt['enable_log']) return ;
if (!isset($opt['log_history']) || $opt['log_history'] < 0 || $opt['log_history'] > 1000000) {
  echo 'log_history variable must be positive and smaller or equal to 1 000 000';
  echo $opt['general']['log_history'];
  return ;
}
else if (!($file = fopen($opt['log_file'], 'a+'))) {
  echo 'Unable to open the file: ' . '(' . $opt['log_file'] . ')' .
  '. File must be readable and writable by the user ' .
  posix_getpwuid(posix_geteuid())['name'] . '.';
  return ;
}
$lines = 0;
while (!feof($file)) {
  $lines += (fgets($file)) ? 1 : 0;
}
$lines += $_POST['lines'];
$lines += ($_POST['type'] != 1) ? 2 : 0;
if ($_POST['type'] == 2 || $lines > $opt['log_history']) {
  ftruncate($file, 0);
  echo "0";
  return ;
}
echo $lines;
if ($_POST['type'] == 1) {
  return ;
}
fprintf($file, "[%s] $>\n%s\n", date('d/m-H:i'), $_POST['output']);
fclose($file);
?>
