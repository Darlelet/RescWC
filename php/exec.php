<?php
include 'options.php';

ob_start();
if ($opt["use_sudo"])
  $sudo = exec('timeout 1 sudo ' . $_POST["command_input"] . ' && echo 1 || echo 0');
system((($opt["use_sudo"] && $sudo) ? 'sudo ' : '') .
$_POST["command_input"] . " 2>&1", $retval);
$output = ob_get_contents();
ob_end_clean();
echo (empty($output)) ?
'No output for the following command: "' . $_POST["command_input"] . '"' : $output;
?>
