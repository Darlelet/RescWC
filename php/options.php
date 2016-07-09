<?php
include (file_exists('conf.php') ? "" : "../") . "conf.php";

foreach ($config as $current => $key)
{
  $opt[$current] = (($key == "yes") ? 1 : (($key == "no") ? 0 : $key));
}
?>
