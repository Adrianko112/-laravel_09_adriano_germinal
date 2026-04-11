<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public  $users = [
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

    public function index()
    {
        return view('welcome');
    }

    public function aboutUs()
    {
       
    return view('about-us', ['users' => $this->users]);
    }

   public function aboutUsDetail ($name) {
  
    foreach ($this->users as $user) {
        if ($user['name'] == $name) {
            return view('about-us-detail', ['user' => $user]);
        }
    }
    }

    public function contacts() {
    return view('contacts');
    }
    
}

