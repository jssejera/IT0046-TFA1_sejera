<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            [
                'username' => 'JP',
                'fullname' => 'John paul',
                'role' => 'Administrator'
            ],
            [
                'username' => 'mary12',
                'fullname' => 'Mary tallmen',
                'role' => 'Cashier'
            ],
            [
                'username' => 'peter67',
                'fullname' => 'Peter montana',
                'role' => 'Cashier'
            ],
            [
                'username' => 'annaa55',
                'fullname' => 'Anna coolman',
                'role' => 'Manager'
            ],
            [
                'username' => 'marky43',
                'fullname' => 'Mark jack',
                'role' => 'Staff'
            ]
        ];

        return view('users', $data);
    }
}