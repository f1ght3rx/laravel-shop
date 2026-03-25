<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showIndex(){
        return view('home');
    }

    public $array = [
        ['id' => 1, 'title' => 'продукт 1', 'price' => 500, 'path' => '../img/1_1.jpg'],
        ['id' => 2, 'title' => 'продукт 2', 'price' => 1500, 'path' => '../img/1_2.jpg'],
        ['id' => 3, 'title' => 'продукт 3', 'price' => 800, 'path' => '../img/1_3.jpg'],
        ['id' => 4, 'title' => 'продукт 4', 'price' => 1200, 'path' => '../img/1_4.jpg'],
        ['id' => 5, 'title' => 'продукт 5', 'price' => 2000, 'path' => '../img/1_5.jpg'],
        ['id' => 6, 'title' => 'продукт 6', 'price' => 300, 'path' => '../img/1_6.jpg'],
        ['id' => 7, 'title' => 'продукт 7', 'price' => 1800, 'path' => '../img/1_7.jpg'],
        ['id' => 8, 'title' => 'продукт 8', 'price' => 950, 'path' => '../img/1_8.jpg'],
    ];

    public function showArray()
    {
        return view('array', ['array' => $this->array]);
    }

    public function shuffleArray()
    {
        $shuffled = $this->array;
        shuffle($shuffled);
        return view('array', ['array' => $shuffled]);
    }

    public function sortArray()
    {
        $sorted = $this->array;
        usort($sorted, function ($a, $b) {
            return $a['price'] <=> $b['price'];
        });
        return view('array', ['array' => $sorted]);
    }

    public function filterArray()
    {
        $filtered = array_filter($this->array, function ($item) {
            return $item['price'] > 1000;
        });
        return view('array', ['array' => $filtered]);
    }    
}
