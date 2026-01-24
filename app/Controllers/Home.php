<?php

namespace App\Controllers;

use CodeIgniter\Shield\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        // Jika user sudah login, redirect ke dashboard
        if (auth()->loggedIn()) {
            return redirect()->to('/dashboard');
        }

        return view('welcome_message');
    }
}
