<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Requests;


class ServiziController extends Controller
{

//    public  $servizi = [
//         [
//             'id' => 1,
//             'img' => '/media/personal-trainer.jpg',
//             'name' => 'Personal Training',
//             'description' => 'Allenamenti personalizzati con un trainer dedicato.',
//         ],
//         [
//             'id' => 2,
//             'img' => '/media/nutrizionista.jpg',
//             'name' => 'Nutrizione',
//             'description' => 'Piani alimentari su misura per raggiungere i tuoi obiettivi.',
//         ],
//         [
//             'id' => 3,
//             'img' => '/media/gruppo.jpg',
//             'name' => 'Corsi di Gruppo',
//             'description' => 'Lezioni di fitness di gruppo per motivarti e divertirti.',
//         ],
//     ];
   public function servizi () {
   $servizi = Service::all();
    return view('servizi.services', ['servizi' => $servizi]);
}

// public function serviziDetail ($id) {
   
//     foreach ($this->servizi as $servizio) {
//         if ($servizio['id'] == $id) {
//             return view('servizi.services-detail', ['servizio' => $servizio]);
//         }
//     }
    
// }


public function create() {
   return view('servizi.create');
}

    public function store(ServiceRequest $request) {
        $servizio = new Service();
        $servizio->name = $request->name;
        $servizio->description = $request->description;
        $servizio->price = $request->price;
        $servizio->img = $request->file('img')->store('images', 'public');
       $servizio->save();

       return redirect()->route('home')->with('successMessage','Servizio creato con successo!');
    }
}
