<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasta;

class ProductController extends Controller
{
    public function index() {
        // $pasta = config("pasta");
        // $pasta = Pasta::all();
        // dd($pasta);

        // $lunghe = [];
        // $corte = [];
        // $cortissime = [];

        // foreach($pasta as $item) {
        //     switch($item["tipo"]) {
        //         case 'corta':
        //             $corte[] = $item;
        //             break;
        //         case 'lunga':
        //             $lunghe[] = $item;
        //             break;
        //         case 'cortissima':
        //             $cortissime[] = $item;
        //             break;

        //     }
        // }

        // foreach($pasta as $item) {
        //     switch($item->tipo) {
        //         case 'corta':
        //             $corte[] = $item;
        //             break;
        //         case 'lunga':
        //             $lunghe[] = $item;
        //             break;
        //         case 'cortissima':
        //             $cortissime[] = $item;
        //             break;

        //     }
        // }

        // dump($lunghe, $corte, $cortissime);

        // return view('prodotti',
        //     [
        //         "lunghe" => $lunghe,
        //         "corte" => $corte,
        //         "cortissime" => $cortissime
        //     ]
        // );

        $lunghe = Pasta::where('tipo', 'lunga')->get();
        $corte = Pasta::where('tipo', 'corta')->get();
        $cortissime = Pasta::where('tipo', 'cortissima')->get();

        return view('prodotti', compact('lunghe', 'corte', 'cortissime'));
    }
}
