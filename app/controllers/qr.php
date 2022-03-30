<?php

require __DIR__ . '/../../phpqrcode/qrlib.php';

QRcode::png($_GET['code']);
