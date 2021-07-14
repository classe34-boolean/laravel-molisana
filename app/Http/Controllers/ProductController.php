<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $pasta = config("pasta");

        $lunghe = [];
        $corte = [];
        $cortissime = [];

        foreach($pasta as $item) {
            switch($item["tipo"]) {
                case 'corta':
                    $corte[] = $item;
                    break;
                case 'lunga':
                    $lunghe[] = $item;
                    break;
                case 'cortissima':
                    $cortissime[] = $item;
                    break;

            }
        }

        // dump($lunghe, $corte, $cortissime);

        // return view('prodotti',
        //     [
        //         "lunghe" => $lunghe,
        //         "corte" => $corte,
        //         "cortissime" => $cortissime
        //     ]
        // );

        return view('prodotti', compact('lunghe', 'corte', 'cortissime'));
    }
}
