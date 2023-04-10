<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index(){
        $cards = [
            ['id' => 0, 'ProductName' => 'Crown', 'StatusProduct' => 'SSR', 'ProductPrice' => 'Rp 5.000.000,00', 'image' => 'crown.jpg'],
            ['id' => 1, 'ProductName' => 'Necklace', 'StatusProduct' => 'SR', 'ProductPrice' => 'Rp 4.500.000', 'image' => 'necklace.jpg'],
            ['id' => 2, 'ProductName' => 'Ring', 'StatusProduct' => 'R', 'ProductPrice' => 'Rp 3.000.000,00', 'image' => 'ring.jpg'],
            ['id' => 3, 'ProductName' => 'Earring', 'StatusProduct' => 'SR', 'ProductPrice' => 'Rp 3.500.000', 'image' => 'earrings.jpg'],
            ['id' => 4, 'ProductName' => 'Ruby', 'StatusProduct' => 'SSR', 'ProductPrice' => 'Rp 10.500.000', 'image' => 'ruby.jpg']
        ];

        return view('card', ["cards" => $cards, "title" => $cards]);
    }

    public function detail($id){
        $cards = [
            ['id' => 0, 'ProductName' => 'Crown', 'StatusProduct' => 'SSR', 'ProductPrice' => 'Rp 5.000.000,00', 'image' => 'crown.jpg'],
            ['id' => 1, 'ProductName' => 'Necklace', 'StatusProduct' => 'SR', 'ProductPrice' => 'Rp 4.500.000', 'image' => 'necklace.jpg'],
            ['id' => 2, 'ProductName' => 'Ring', 'StatusProduct' => 'R', 'ProductPrice' => 'Rp 3.000.000,00', 'image' => 'ring.jpg'],
            ['id' => 3, 'ProductName' => 'Earring', 'StatusProduct' => 'SR', 'ProductPrice' => 'Rp 3.500.000', 'image' => 'earrings.jpg'],
            ['id' => 4, 'ProductName' => 'Ruby', 'StatusProduct' => 'SSR', 'ProductPrice' => 'Rp 10.500.000', 'image' => 'ruby.jpg']
        ];

        $card = [];
        foreach($cards as $c){
            if($c["id"] == $id){
                $card = $c;
            }
        }
        return view('detail', ["card" => $card, "title" => $card]);
    }

}
