<?php

//autoload do composer
require __DIR__.'/vendor/autoload.php';

use \App\Ulvis\UrlShortener;

$url = 'https://youtube.com';

$short = UrlShortener::short($url);

echo $url."\n";
echo $short."\n";