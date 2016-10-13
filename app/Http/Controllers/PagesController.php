<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{

    

    public function __construct(){
        $this->middleware('auth');
    }

    public function home(){

        $hometitle = "Home";
        
       
        // $client = new Client();
        // $res = $client->request('GET', 'https://api.magicthegathering.io/v1/cards',['verify' => false]);
        // $res->getStatusCode();
        // // "200"
        // $res->getHeader('content-type');
        // // 'application/json; charset=utf8'
        // $apiCards = $res->getBody();
        // // {"type":"User"...'

        $return = view('home',compact('hometitle','response'));
        return $return;
    }
}
