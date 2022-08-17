<?php

//autoload do composer
require __DIR__.'/vendor/autoload.php';

use \App\Ulvis\UrlShortener;

// url longa
$url = 'https://youtube.com';
// url customizada
$custom = 'youtubedsouzadev';

$short = UrlShortener::short($url, $custom);

echo "URL LONGA -> ".$url."\n";
echo "URL ENCURTADA -> ".$short."\n";