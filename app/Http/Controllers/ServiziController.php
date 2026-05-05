<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Requests;


class ServiziController extends Controller
{


   public function servizi () {
   $servizi = Service::all();
    return view('servizi.services', ['servizi' => $servizi]);
}


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

    public function show(Service $servizio) {
        
        return view('servizi.show', ['servizio' => $servizio]);
    }

    public function edit(Service $servizio) {
        return view('servizi.edit', compact('servizio'));
    }

    public function update(ServiceRequest $request, Service $servizio) {
      $servizio->update([
         'name' => $request->name,
         'description' => $request->description,
         'price' => $request->price,
        ]);
        if($request->hasFile('img')) {
            $servizio->img = $request->file('img')->store('images', 'public');
        }
       $servizio->save();


       return redirect()->route('home')->with('successMessage','Servizio modificato con successo!');    }

       public function destroy(Service $servizio) {
        $servizio->delete();
        return redirect()->route('home')->with('successMessage','Servizio eliminato con successo!');    }
}

