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
            ['id' => 0,
            'ProductName' => 'Crown',
            'StatusProduct' => 'SSR',
            'ProductPrice' => 'Rp 5.000.000,00',
            'image' => 'crown.jpg',
            'ProductDesc' => 'A crown is a circular ornament, usually made of gold and jewels, which a king or queen wears on their head at official ceremonies.'],

            ['id' => 1,
            'ProductName' => 'Necklace',
            'StatusProduct' => 'SR',
            'ProductPrice' => 'Rp 4.500.000',
            'image' => 'necklace.jpg',
            'ProductDesc' => 'A necklace is an article of jewellery that is worn around the neck. Necklaces may have been one of the earliest types of adornment worn by humans.'],

            ['id' => 2,
            'ProductName' => 'Ring',
            'StatusProduct' => 'R',
            'ProductPrice' => 'Rp 3.000.000,00',
            'image' => 'ring.jpg',
            'ProductDesc' => 'A ring is a round band, usually made of metal, worn as ornamental jewelry. The term "ring" by itself always denotes jewellery worn on the finger.'],

            ['id' => 3,
            'ProductName' => 'Earring',
            'StatusProduct' => 'SR',
            'ProductPrice' => 'Rp 3.500.000',
            'image' => 'earrings.jpg',
            'ProductDesc' => 'An earring is a piece of jewelry attached to the ear via a piercing in the earlobe or another external part of the ear.'],

            ['id' => 4,
            'ProductName' => 'Ruby',
            'StatusProduct' => 'SSR',
            'ProductPrice' => 'Rp 10.500.000',
            'image' => 'ruby.jpg',
            'ProductDesc' => 'Ruby is an interpreted, high-level, general-purpose programming language which supports multiple programming paradigms.']
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
