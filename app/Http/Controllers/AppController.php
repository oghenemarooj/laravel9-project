<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function pay_callback()
    {
        $response =json_decode($this->verify_payment(request('reference')));
        if( $response){

            if( $response->status){
                $data = $response->data;
                return view('callback_page')->with(compact(['data']));
            }
            else{
                return back()->withError($response->message);
            }

        }
        else{
            return back()->withError("Something Went wrong");
        }

    }

    public function make_payment()
    {
        $formData = [
            'email' => request('email'),
            'amount' => request('amount')*100,
            'currency' => 'NGN',
            'callback_url' => route('callback')
        ];

        $pay = json_decode($this->initiate_payment($formData));
        if($pay){

            if($pay->status){
                return redirect($pay->data->authorization_url);
            }
            else{
                return back()->withError($pay->message);
            }

        }
        else{
            return back()->withError("Something Went wrong");
        }

    }
    public function initiate_payment($formData)
    {
        $url = "https://api.paystack.co/transaction/initialize";

        $fields_string = http_build_query($formData);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Authorization: Bearer sk_test_51eb60d9ec1b5149d04c18df96e92d0f2174bfff",
            "Cache-Control: no-cache"
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);

        curl_close($ch);
        return $result;
    }
    public function verify_payment($reference)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.paystack.co/transaction/verify/$reference",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer sk_test_51eb60d9ec1b5149d04c18df96e92d0f2174bfff",
            "Cache-Control: no-cache",
          ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;


    }
}
