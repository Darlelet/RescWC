<?php
  echo '<div class="fluid ui buttons"><button class="ui black button">' .
  posix_getpwuid(posix_geteuid())['name'] . '@' .
  gethostname() . '</button><div class="or" data-text="$>"></div>' .
  '<button id="time" class="ui violet button"></button></div>';
?>
