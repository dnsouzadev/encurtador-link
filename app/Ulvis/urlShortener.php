<?php

namespace App\Ulvis;

class UrlShortener {

  // metodo para encurtar uma url
  public static function short($url){
    //Parâmetros da url
    $params = [
      'url' => $url,
    ];

    // executa a request na api do ulvis
    $response = self::send($params);
  }

    // método responsável por executar a request nas apido ulvis
  private static function send($params = []) {
    // endpoint completo
    $endpoint = 'https://ulvis.net/API/write/get?'.http_build_query($params);
    echo "<pre>";
    print_r($endpoint);
    echo "</pre>"; exit;
    }

}