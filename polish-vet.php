<?php

require 'includes.php';

$pageDataArray = [
    'header' => file_get_contents('templates/header.html'),
    'footer' => file_get_contents('templates/footer.html'),
    'title' => 'Polish VET',
    'main' => file_get_contents('templates/dropdown/polish-vet/index.html'),
];

$content = parseTemplate('templates/base.html', $pageDataArray);
echo $content;
