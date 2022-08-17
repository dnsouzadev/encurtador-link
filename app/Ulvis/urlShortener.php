<?php

namespace App\Ulvis;

class UrlShortener {

  // metodo para encurtar uma url
  public static function short($url, $custom = null){
    //Parâmetros da url
    $params = [
      'url' => $url,
      'custom' => $custom
    ];

    // executa a request na api do ulvis
    $response = self::send(array_filter($params));

    // retorna a url encurtada
    return $response['data']['url'] ?? null;
  }

    // método responsável por executar a request nas apido ulvis
  private static function send($params = []) {
    // endpoint completo
    $endpoint = 'https://ulvis.net/API/write/get?'.http_build_query($params);

    // inicia o curl
    $curl = curl_init();

    // configura o curl
    curl_setopt_array($curl, [
      CURLOPT_URL => $endpoint,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_CUSTOMREQUEST => 'GET'
    ]);

    // executa o curl
    $response = curl_exec($curl);

    //fecha a conexão com o curl
    curl_close($curl);

    // retorna o valor em array
    return strlen($response) ? json_decode($response, true): [];

    }

}