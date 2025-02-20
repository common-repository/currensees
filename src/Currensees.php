<?php

namespace Currensees;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class Currensees
{
    public function login($username, $password)
    {
        $client = new Client();
        $headers = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ];
        $body = json_encode([
            "username" => $username,
            "password" => $password
        ]);
        $request = new Request('POST', 'https://currensees.com/v1/login', $headers, $body);
        $res = $client->send($request);

        if ($res->getStatusCode() == 200) {
            return json_decode($res->getBody(), true);
        } else {
            return false;
        }
    }

    public function convert($date, $base_currency, $target_currency, $amount)
    {
        $client = new Client();
        $headers = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ];
        $body = json_encode([
            "date" => $date,
            "base_currency" => $base_currency,
            "target_currency" => $target_currency,
            "amount" => $amount
        ]);
        $request = new Request('POST', 'https://currensees.com/v1/convert', $headers, $body);
        $res = $client->send($request);

        if ($res->getStatusCode() == 200) {
            return json_decode($res->getBody(), true);
        } else {
            return false;
        }
    }

    public function convertAll($base_currency, $amount, $date)
    {
        $client = new Client();
        $headers = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ];
        $body = json_encode([
            "base_currency" => $base_currency,
            "amount" => $amount,
            "date" => $date
        ]);
        $request = new Request('POST', 'https://currensees.com/v1/convert_all', $headers, $body);
        $res = $client->send($request);

        if ($res->getStatusCode() == 200) {
            return json_decode($res->getBody(), true);
        } else {
            return false;
        }
    }
}
