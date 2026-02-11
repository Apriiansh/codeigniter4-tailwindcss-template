<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function demoForm()
    {
        return view('demo_form');
    }

    public function processDemoForm()
    {
        $rules = [
            'name' => 'required|min_length[2]|max_length[50]',
            'email' => 'required|valid_email',
            'message' => 'required|min_length[10]|max_length[500]'
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Process the form data (here we'll just show a success message)
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'message' => $this->request->getPost('message')
        ];

        // In a real application, you would save to database or send email
        session()->setFlashdata('success', 'Thank you ' . esc($data['name']) . '! Your message has been received.');
        
        return redirect()->to('demo/form');
    }
}
