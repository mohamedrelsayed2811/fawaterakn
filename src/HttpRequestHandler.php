<?php

namespace tarekhammad;

class HttpRequestHandler
{
    /**
     * @var string $apiUrl
     */
    /**
     * Send the request to the API
     */
    public function getPaymentOptions( array $data )
    {
                $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fawaterkstage.com/api/v2/getPaymentmethods',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer d83a5d07aaeb8442dcbe259e6dae80a3f2e21a3a581e1a5acd'
          ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
    }
    public function initPayment( array $data )
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://fawaterkstage.com/api/v2/invoiceInitPay',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>'{
            "payment_method_id": 2,
            "cartTotal": "50",
            "currency": "EGP",
            "customer": {
                "first_name": "mohammad",
                "last_name": "hamza",
                "email": "test@fawaterk.com",
                "phone": "01xxxxxxxxx",
                "address": "test address"
            },
            "redirectionUrls": {
                 "successUrl" : "https://dev.fawaterk.com/success",
                 "failUrl": "https://dev.fawaterk.com/fail",
                 "pendingUrl": "https://dev.fawaterk.com/pending"   
            },
            "cartItems": [
                {
                    "name": "this is test oop 112252",
                    "price": "25",
                    "quantity": "1"
                },
                {
                    "name": "this is test oop 112252",
                    "price": "25",
                    "quantity": "1"
                }
            ]
        }',
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer d83a5d07aaeb8442dcbe259e6dae80a3f2e21a3a581e1a5acd'
          ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
    }
}
