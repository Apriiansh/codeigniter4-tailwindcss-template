<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class TestConnection extends BaseController
{
    public function index()
    {
        try {
            $db = \Config\Database::connect();
            $db->query('SELECT 1');
            echo "Mantap";
        } catch (\Throwable $e) {
            echo "Kampret" . $e->getMessage();
        }
    }
}
