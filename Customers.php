<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data['customers'] = [
            [
                'fullname' => 'John Castro',
                'email' => 'castro@email.com',
                'phone' => '09171234567'
            ],
            [
                'fullname' => 'Emma Bagsik',
                'email' => 'maria@email.com',
                'phone' => '09181234567'
            ],
            [
                'fullname' => 'Pedro Buko',
                'email' => 'pedro@email.com',
                'phone' => '09191234567'
            ],
            [
                'fullname' => 'Ana Moko',
                'email' => 'ana@email.com',
                'phone' => '09201234567'
            ],
            [
                'fullname' => 'Carlo Sipag',
                'email' => 'carlo@email.com',
                'phone' => '09211234567'
            ]
        ];

        return view('customers', $data);
    }
}