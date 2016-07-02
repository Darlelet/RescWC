<?php
  echo '<button class="fluid ui inverted red button">' .
  posix_getpwuid(posix_geteuid())['name'] . '@' .
  gethostname() . "_-_" . '<span id="time" style="position: fixed;"></span></button>';
?>
