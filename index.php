<?php
set_include_path(get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'].'/App/Src/phpseclib/');

spl_autoload_extensions(".php");
spl_autoload_register();

require 'app.php';