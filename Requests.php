<?php 

namespace Requests;

class Requests {

    public $url;
    
    public function token($url) {
        $this->url = $url;
        $curl = curl_init($this->url);
        $response = curl_exec($curl);
        $response = json_decode($response, true);
        echo $token = $response['response'];
    }

    public function listar($url) {
        $curl = curl_init($this->url);
        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response, true);
        return $response;
    }
}