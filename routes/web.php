<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/chi-siamo', function () {
    $users = [
        [
            'name' => 'Adriano',
            'surname' => 'Germinal',
            'role' => 'CEO',
        ],
        [
            'name' => 'Luigi',
            'surname' => 'Bianchi',
            'role' => 'Personal Trainer',
        ],
        [
            'name' => 'Giulia',
            'surname' => 'Verdi',
            'role' => 'CFO',
        ],
    ];
    return view('about-us', ['users' => $users]);
})->name('aboutUs');

Route::get('/chi-siamo/detail/{name}', function ($name) {
    $users = [
        [
            'name' => 'Adriano',
            'surname' => 'Germinal',
            'role' => 'CEO',
        ],
        [
            'name' => 'Luigi',
            'surname' => 'Bianchi',
            'role' => 'Personal Trainer',
        ],
        [
            'name' => 'Giulia',
            'surname' => 'Verdi',
            'role' => 'CFO',
        ],
    ];
    foreach ($users as $user) {
        if ($user['name'] == $name) {
            return view('about-us-detail', ['user' => $user]);
        }
    }
    
})->name('aboutUsDetail');

Route::get('/contatti', function () {
    return view('contacts');
})->name('contacts');

Route::get('/servizi', function () {
    $servizi = [
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
    return view('servizi.services', ['servizi' => $servizi]);
})->name('services');


Route::get('/servizi/detail/{id}', function ($id) {
    $servizi = [
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
    foreach ($servizi as $servizio) {
        if ($servizio['id'] == $id) {
            return view('servizi.services-detail', ['servizio' => $servizio]);
        }
    }
    
})->name('servicesDetail');