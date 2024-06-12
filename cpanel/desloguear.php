<?php
SESSION_START();
SESSION_DESTROY();
echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";
echo'<html><head><meta http-equiv="REFRESH" content="0;url=../index.php"></head></html>';
?>