<?php
// modify this config file
$config = array(
  "enable_log" => "yes",
  // max number of lines in the log file
  "log_history" => "10000",
  // path to the log file
  "log_file" => "../.log",
  // prompt for credentials when user visits the page
  "require_connection" => "yes",
  'user' => 'user',
  'password' => 'password',
  // only if you set specific permission(s) in sudoers file
  "use_sudo" => "yes"
);
?>
