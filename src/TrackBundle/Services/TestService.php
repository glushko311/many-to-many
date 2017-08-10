<?php
/**
 * Created by PhpStorm.
 * User: vadim
 * Date: 10.08.17
 * Time: 12:07
 */

namespace TrackBundle\Services;



class TestService
{
    private $method = 'CPLogin11';
    private $apiUrl = 'https://admin.keywordconnects.com/webservices/KW-CP-API/CPWebServices.cfc';

    public function sendToApi(array $request){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->apiUrl . "?method=" . $this->method);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANYSAFE);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($request));# Убираем вывод данных в браузер. Пусть функция их возвращает а не выводит
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);

        $assocResult = [];

        if ($result !== false) {
            $result = wddx_deserialize($result);
            $result = json_decode($result);

            $arrLen = count($result->COLUMNS);
            for($i = 0; $i < $arrLen; $i++){
                $assocResult[ $result->COLUMNS[$i] ] = $result->DATA[0][$i];
            }
        }
        return $assocResult;
    }

    public function getApiUrl(){
        return $this->apiUrl;
    }

    public function setApiUrl($apiUrl){
        $this->apiUrl = $apiUrl;
        return 1;
    }
    public function getMethod(){
        return $this->method;
    }

    public function setMethod($method){
        $this->method = $method;
        return 1;
    }

}