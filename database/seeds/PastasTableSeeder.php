<?php

use Illuminate\Database\Seeder;
use App\Pasta;

class PastasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayPasta = config('pasta');

        foreach ($arrayPasta as $item) {
            // creo nuovo oggetto, istanza della classe Pasta
            $pasta = new Pasta();
            // valorizzo le proprietà dell'oggetto
            $pasta->src = $item["src"];
            $pasta->{'src-p'} = $item["src-p"];
            $pasta->titolo = $item["titolo"];
            $pasta->tipo = $item["tipo"];
            $pasta->cottura = $item["cottura"];
            $pasta->peso = $item["peso"];
            $pasta->descrizione = $item["descrizione"];
            // salvo l'oggetto
            $pasta->save();
        }
        
    }
}
