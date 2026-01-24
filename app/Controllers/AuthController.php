<?php

namespace App\Controllers;

use CodeIgniter\Shield\Controllers\LoginController as ShieldLoginController;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\Shield\Authentication\Authenticators\Session;

class AuthController extends ShieldLoginController
{
    public function loginView()
    {
        return parent::loginView();
    }

    public function login(): RedirectResponse
    {
        // Validate here first, since some things,
        // like the password, can only be validated properly here.
        $rules = $this->getValidationRules();

        if (! $this->validateData($this->request->getPost(), $rules, [], config('Auth')->DBGroup)) {
            return redirect()->route('login')->withInput()->with('errors', $this->validator->getErrors());
        }

        $login = $this->request->getPost('login');
        $credentials = [];
        if (filter_var($login, FILTER_VALIDATE_EMAIL)) {
            $credentials['email'] = $login;
        } else {
            $credentials['username'] = $login;
        }
        $credentials['password'] = $this->request->getPost('password');
        $remember = (bool) $this->request->getPost('remember');

        /** @var Session $authenticator */
        $authenticator = auth('session')->getAuthenticator();

        // Attempt to login
        $result = $authenticator->remember($remember)->attempt($credentials);
        if (! $result->isOK()) {
            return redirect()->route('login')->withInput()->with('error', $result->reason());
        }

        // If an action has been defined for login, start it up.
        if ($authenticator->hasAction()) {
            return redirect()->route('auth-action-show')->withCookies();
        }

        $response = redirect()->to(config('Auth')->loginRedirect())->withCookies();

        // Add success message
        session()->setFlashdata('success', 'Login berhasil! Selamat datang kembali.');

        return $response;
    }

    protected function getValidationRules(): array
    {
        return setting('Validation.login') ?? [
            'login' => [
                'label' => 'Username or Email',
                'rules' => 'required',
            ],
            'password' => [
                'label' => 'Auth.password',
                'rules' => 'required',
            ],
        ];
    }

    public function logout(): RedirectResponse
    {
        return parent::logoutAction();
    }
}