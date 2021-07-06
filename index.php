<?php

require "./vendor/autoload.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// $unoconv = Unoconv\Unoconv::create();

$unoconv = Unoconv\Unoconv::create(array(
    'timeout'          => 42,
    'unoconv.binaries' => '/usr/bin/unoconv',
));

$result = $unoconv->transcode('./SURAT_PESTA_MOD-L.rtf', 'pdf', './document.pdf');

if($result) {
    echo "oke";
} else {
    echo "not oke";
}
