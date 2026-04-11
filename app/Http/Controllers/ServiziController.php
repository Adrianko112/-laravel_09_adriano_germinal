<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiziController extends Controller
{

   public  $servizi = [
        [
            'id' => 1,
            'img' => '/media/personal-trainer.jpg',
            'name' => 'Personal Training',
            'description' => 'Allenamenti personalizzati con un trainer dedicato.',
        ],
        [
            'id' => 2,
            'img' => '/media/nutrizionista.jpg',
            'name' => 'Nutrizione',
            'description' => 'Piani alimentari su misura per raggiungere i tuoi obiettivi.',
        ],
        [
            'id' => 3,
            'img' => '/media/gruppo.jpg',
            'name' => 'Corsi di Gruppo',
            'description' => 'Lezioni di fitness di gruppo per motivarti e divertirti.',
        ],
    ];
   public function servizi () {
   
    return view('servizi.services', ['servizi' => $this->servizi]);
}

public function serviziDetail ($id) {
   
    foreach ($this->servizi as $servizio) {
        if ($servizio['id'] == $id) {
            return view('servizi.services-detail', ['servizio' => $servizio]);
        }
    }
    
}
}
