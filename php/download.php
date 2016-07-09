<?php
include 'options.php';
if (isset($opt['log_file']) && file_exists($opt['log_file'])) {
    header('Content-Description: File Transfer');
    header('Content-Type: text/html');
    header('Content-Disposition: attachment; filename="' . 
    basename($opt['log_file']) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($opt['log_file']));
    readfile($opt['log_file']);
    return ;
}
?>
