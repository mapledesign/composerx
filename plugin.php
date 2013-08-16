<?php
$file = $modx->getOption('core_path', null, MODX_CORE_PATH) . 'components/composerx/vendor/autoload.php';
if (file_exists($file)) {
    require_once $file;
}
