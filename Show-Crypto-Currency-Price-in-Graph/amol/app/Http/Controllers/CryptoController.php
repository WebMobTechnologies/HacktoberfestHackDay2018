<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class CryptoController extends Controller
{
    public function coinIndex(){
        $client = new Client();
        $request = $client->get('https://api.nomics.com/v1/currencies/highs?key=b563950e3cdccce870db284024dbba33');
        $response = $request->getBody()->getContents();
        return view('crypto.index')->with('data', json_decode($response));
    }
}
