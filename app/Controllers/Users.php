<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            ['username' => 'admin01', 'full_name' => 'Maryclaire Jashley Dela Cruz', 'role' => 'Administrator'],
            ['username' => 'manager01', 'full_name' => 'Trina Marielle Villora', 'role' => 'Store Manager'],
            ['username' => 'cashier01', 'full_name' => 'Andrew De Jesus', 'role' => 'Cashier'],
            ['username' => 'cashier02', 'full_name' => 'Mark Benedict Castro', 'role' => 'Cashier'],
            ['username' => 'inventory01', 'full_name' => 'Jen Raina Teodoro', 'role' => 'Inventory Staff'],
        ];

        return view('users/index', [
            'title'      => 'User Accounts',
            'activePage' => 'users',
            'users'      => $users,
        ]);
    }
}
